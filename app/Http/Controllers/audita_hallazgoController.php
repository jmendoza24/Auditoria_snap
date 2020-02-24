<?php

namespace App\Http\Controllers;
use App\Models\hallazgos;
use App\Models\info_comentarios;

use App\Http\Requests\Createaudita_hallazgoRequest;
use App\Http\Requests\Updateaudita_hallazgoRequest;
use App\Repositories\audita_hallazgoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class audita_hallazgoController extends AppBaseController
{
    /** @var  audita_hallazgoRepository */
    private $auditaHallazgoRepository;

    public function __construct(audita_hallazgoRepository $auditaHallazgoRepo)
    {
        $this->auditaHallazgoRepository = $auditaHallazgoRepo;
    }

    /**
     * Display a listing of the audita_hallazgo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $auditaHallazgos = $this->auditaHallazgoRepository->all();



        return view('audita_hallazgos.index')->with('auditaHallazgos', $auditaHallazgos);
    }

    /**
     * Show the form for creating a new audita_hallazgo.
     *
     * @return Response
     */
    public function create()
    {
        return view('audita_hallazgos.create');
    }

    /**
     * Store a newly created audita_hallazgo in storage.
     *
     * @param Createaudita_hallazgoRequest $request
     *
     * @return Response
     */
    public function store(Createaudita_hallazgoRequest $request)
    {
        $input = $request->all();

        $auditaHallazgo = $this->auditaHallazgoRepository->create($input);

        Flash::success('Audita Hallazgo saved successfully.');

        return redirect(route('auditaHallazgos.index'));
    }

    /**
     * Display the specified audita_hallazgo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $auditaHallazgo = $this->auditaHallazgoRepository->find($id);
        
        $id_hallazgo=$auditaHallazgo->id;
        $infoComentarios_mod = new info_comentarios;
        $infoComentarios=$infoComentarios_mod->carga_comentarios($id_hallazgo);

        return view('audita_hallazgos.show',compact('auditaHallazgo','infoComentarios'));
    }

     public function show2(Request $request)
    {
        
        $input = $request->all();
        $id=$input['id'];

        $auditaHallazgo = $this->auditaHallazgoRepository->find($id);
        $id_hallazgo=$auditaHallazgo->id;
        $infoComentarios_mod = new info_comentarios;
        $infoComentarios=$infoComentarios_mod->carga_comentarios($id_hallazgo);

        return view('audita_hallazgos.show',compact('auditaHallazgo','infoComentarios','id'));
    }

    /**
     * Show the form for editing the specified audita_hallazgo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $filtro = new hallazgos;

        $auditaHallazgo = hallazgos::find($id);
        $responsables = $filtro->tipo_persona(1);
        $auditores = $filtro->tipo_persona(2);
        $gerentes = $filtro->tipo_persona(3);

        return view('audita_hallazgos.edit',compact('auditaHallazgo','responsables','auditores','gerentes'));
    }

    /**
     * Update the specified audita_hallazgo in storage.
     *
     * @param int $id
     * @param Updateaudita_hallazgoRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {   
        $input = $request->all();
       // dd($input);

        $auditaHallazgo = $this->auditaHallazgoRepository->find($request['id']);

        $auditaHallazgo = $this->auditaHallazgoRepository->update($input, $request['id']);


        return redirect()->back();
    }

    /**
     * Remove the specified audita_hallazgo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $auditaHallazgo = $this->auditaHallazgoRepository->find($id);

        if (empty($auditaHallazgo)) {
            Flash::error('Audita Hallazgo not found');

            return redirect(route('auditaHallazgos.index'));
        }

        $this->auditaHallazgoRepository->delete($id);

        Flash::success('Audita Hallazgo deleted successfully.');

        return redirect(route('auditaHallazgos.index'));
    }
}
