<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelocalidadRequest;
use App\Http\Requests\UpdatelocalidadRequest;
use App\Repositories\localidadRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use DB;

use Response;

class localidadController extends AppBaseController
{
    /** @var  localidadRepository */
    private $localidadRepository;

    public function __construct(localidadRepository $localidadRepo)
    {
        $this->localidadRepository = $localidadRepo;
    }

    /**
     * Display a listing of the localidad.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $localidads = $this->localidadRepository->all();

        return view('localidads.index')
            ->with('localidads', $localidads);
    }

    /**
     * Show the form for creating a new localidad.
     *
     * @return Response
     */
    public function create()
    {
        return view('localidads.create');
    }

    /**
     * Store a newly created localidad in storage.
     *
     * @param CreatelocalidadRequest $request
     *
     * @return Response
     */
    public function store(CreatelocalidadRequest $request)
    {
        $input = $request->all();

        $localidad = $this->localidadRepository->create($input);

        //Flash::success('Localidad saved successfully.');

        return redirect(route('localidads.index'));
    }

    /**
     * Display the specified localidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $localidad = $this->localidadRepository->find($id);

        if (empty($localidad)) {
            Flash::error('Localidad not found');

            return redirect(route('localidads.index'));
        }

        return view('localidads.show')->with('localidad', $localidad);
    }

    /**
     * Show the form for editing the specified localidad.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $localidad = $this->localidadRepository->find($id);

        if (empty($localidad)) {
            Flash::error('Localidad not found');

            return redirect(route('localidads.index'));
        }

        return view('localidads.edit')->with('localidad', $localidad);
    }

    /**
     * Update the specified localidad in storage.
     *
     * @param int $id
     * @param UpdatelocalidadRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatelocalidadRequest $request)
    {
        $localidad = $this->localidadRepository->find($id);

        if (empty($localidad)) {
            Flash::error('Localidad not found');

            return redirect(route('localidads.index'));
        }

        $localidad = $this->localidadRepository->update($request->all(), $id);

      //  Flash::success('Localidad updated successfully.');

        return redirect(route('localidads.index'));
    }

    /**
     * Remove the specified localidad from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Request $request)
    {

        $input = $request->all();
        $id=$input['id'];
        //$this->empresasRepository->delete($id);
        DB::table('localidads')->delete($id);

       // Flash::success('Empresas deleted successfully.');


        return redirect(route('localidads.index'));
    }
}
