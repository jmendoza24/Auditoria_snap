<?php

namespace App\Http\Controllers;

use App\Models\Temporal_informe;
use App\Http\Requests\CreatehallazgosRequest;
use App\Http\Requests\UpdatehallazgosRequest;
use App\Repositories\hallazgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class hallazgosController extends AppBaseController
{
    /** @var  hallazgosRepository */
    private $hallazgosRepository;

    public function __construct(hallazgosRepository $hallazgosRepo)
    {
        $this->hallazgosRepository = $hallazgosRepo;
    }

    /**
     * Display a listing of the hallazgos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $hallazgos = $this->hallazgosRepository->all();

        return view('hallazgos.index')
            ->with('hallazgos', $hallazgos);
    }

    /**
     * Show the form for creating a new hallazgos.
     *
     * @return Response
     */
    public function create(){
        $object = new Temporal_informe();

        $hallazgos = $object->informe_temporal();
        return view('hallazgos.create',compact('hallazgos'));
    }

    /**
     * Store a newly created hallazgos in storage.
     *
     * @param CreatehallazgosRequest $request
     *
     * @return Response
     */
    public function store(CreatehallazgosRequest $request)
    {
        $input = $request->all();

        $hallazgos = $this->hallazgosRepository->create($input);

        Flash::success('Hallazgos saved successfully.');

        return redirect(route('hallazgos.index'));
    }

    /**
     * Display the specified hallazgos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $hallazgos = $this->hallazgosRepository->find($id);

        if (empty($hallazgos)) {
            Flash::error('Hallazgos not found');

            return redirect(route('hallazgos.index'));
        }

        return view('hallazgos.show')->with('hallazgos', $hallazgos);
    }

    /**
     * Show the form for editing the specified hallazgos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $hallazgos = $this->hallazgosRepository->find($id);

        if (empty($hallazgos)) {
            Flash::error('Hallazgos not found');

            return redirect(route('hallazgos.index'));
        }

        return view('hallazgos.edit')->with('hallazgos', $hallazgos);
    }

    /**
     * Update the specified hallazgos in storage.
     *
     * @param int $id
     * @param UpdatehallazgosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatehallazgosRequest $request)
    {
        $hallazgos = $this->hallazgosRepository->find($id);

        if (empty($hallazgos)) {
            Flash::error('Hallazgos not found');

            return redirect(route('hallazgos.index'));
        }

        $hallazgos = $this->hallazgosRepository->update($request->all(), $id);

        Flash::success('Hallazgos updated successfully.');

        return redirect(route('hallazgos.index'));
    }

    /**
     * Remove the specified hallazgos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $hallazgos = $this->hallazgosRepository->find($id);

        if (empty($hallazgos)) {
            Flash::error('Hallazgos not found');

            return redirect(route('hallazgos.index'));
        }

        $this->hallazgosRepository->delete($id);

        Flash::success('Hallazgos deleted successfully.');

        return redirect(route('hallazgos.index'));
    }

    function upload_informe(Request $request){
        $file_img = $request->file('archivo');
        $hallazgo = new Temporal_informe();

        Temporal_informe::truncate();

        $csvFile = fopen($_FILES['archivo']['tmp_name'], 'r');
            fgetcsv($csvFile);
            while(($line = fgetcsv($csvFile)) !== FALSE){  
                $hallazgo->hallazgo = utf8_encode($line[0]);
                $hallazgo->tipo = utf8_encode($line[1]);
                $hallazgo->recomendacion = utf8_encode($line[2]);
                $hallazgo->riesgo = utf8_encode($line[3]);
                $hallazgo->responsable = utf8_encode($line[4]);
                $hallazgo->causa_raiz = utf8_encode($line[5]);
                $hallazgo->accion = utf8_encode($line[6]);
                $hallazgo->compromiso = utf8_encode($line[7]);
                $hallazgo->calificacion = utf8_encode($line[8]);
                $hallazgo->calif_numerico = utf8_encode($line[9]);
                $hallazgo->save();
            }
        return redirect()->back();
    }
}
