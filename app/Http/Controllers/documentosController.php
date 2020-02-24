<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatedocumentosRequest;
use App\Http\Requests\UpdatedocumentosRequest;
use App\Repositories\documentosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use DB;

class documentosController extends AppBaseController
{
    /** @var  documentosRepository */
    private $documentosRepository;

    public function __construct(documentosRepository $documentosRepo)
    {
        $this->documentosRepository = $documentosRepo;
    }

    /**
     * Display a listing of the documentos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $documentos = $this->documentosRepository->all();

        return view('documentos.index')
            ->with('documentos', $documentos);
    }

    /**
     * Show the form for creating a new documentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('documentos.create');
    }

    /**
     * Store a newly created documentos in storage.
     *
     * @param CreatedocumentosRequest $request
     *
     * @return Response
     */
    public function store(CreatedocumentosRequest $request)
    {
        $input = $request->all();

        $documentos = $this->documentosRepository->create($input);


        return redirect(route('documentos.index'));
    }

    /**
     * Display the specified documentos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $documentos = $this->documentosRepository->find($id);

        if (empty($documentos)) {
            Flash::error('Documentos not found');

            return redirect(route('documentos.index'));
        }

        return view('documentos.show')->with('documentos', $documentos);
    }

    /**
     * Show the form for editing the specified documentos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $documentos = $this->documentosRepository->find($id);

        if (empty($documentos)) {
            Flash::error('Documentos not found');

            return redirect(route('documentos.index'));
        }

        return view('documentos.edit')->with('documentos', $documentos);
    }

    /**
     * Update the specified documentos in storage.
     *
     * @param int $id
     * @param UpdatedocumentosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatedocumentosRequest $request)
    {
        $documentos = $this->documentosRepository->find($id);

        if (empty($documentos)) {
            Flash::error('Documentos not found');

            return redirect(route('documentos.index'));
        }

        $documentos = $this->documentosRepository->update($request->all(), $id);


        return redirect(route('documentos.index'));
    }

    /**
     * Remove the specified documentos from storage.
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
     //   $id=$input['id'];
       //  $documentos = $this->documentosRepository->find($id);
dd($input);
        

       // $this->documentosRepository->delete($id);
        DB::table('documentos')->delete($id);


        return redirect(route('documentos.index'));
    }

    public function destroy2(Request $request)
    {

      $input = $request->all();
      $id=$input['id'];

      DB::table('documentos')->delete($id);

      $documentos = $this->documentosRepository->all();

//  return view('documentos.index')->with('documentos', $documentos);
    return redirect(route('documentos.index'));

      

    }
}
