<?php

namespace App\Http\Controllers;
use App\Models\info_comentarios;

use App\Http\Requests\Createinfo_comentariosRequest;
use App\Http\Requests\Updateinfo_comentariosRequest;
use App\Repositories\info_comentariosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Support\Facades\Storage;

use Response;
use DB;


class info_comentariosController extends AppBaseController
{
    /** @var  info_comentariosRepository */
    private $infoComentariosRepository;

    public function __construct(info_comentariosRepository $infoComentariosRepo)
    {
        $this->infoComentariosRepository = $infoComentariosRepo;
    }

    /**
     * Display a listing of the info_comentarios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $infoComentarios = $this->infoComentariosRepository->all();

        return view('info_comentarios.index')
            ->with('infoComentarios', $infoComentarios);
    }

    /**
     * Show the form for creating a new info_comentarios.
     *
     * @return Response
     */
    public function create()
    {
        return view('info_comentarios.create');
    }

    /**
     * Store a newly created info_comentarios in storage.
     *
     * @param Createinfo_comentariosRequest $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $id_usuario=auth()->user()->id;
        $input['id_usuario']=$id_usuario;


         if(empty($input['archivo'])){
            
            unset($input['archivo']);
        }else{
           
           $nom_doc=$request->file('archivo')->getClientOriginalName();
           $file_img = $request->file('archivo');
           $img = Storage::url($file_img->store('comentarios_hallazgo', 'public'));
           $imgp = strpos($img,'/storage/');
           $img = substr($img, $imgp, strlen($img));
           $input['archivo']=$img;
           $input['nom_doc']=$nom_doc;

        } 

         $input['comentarios']=$input['cometarios'];

        $infoComentarios = $this->infoComentariosRepository->create($input);

        return redirect()->back();
    }

    /**
     * Display the specified info_comentarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $infoComentarios = $this->infoComentariosRepository->find($id);

        return view('info_comentarios.show')->with('infoComentarios', $infoComentarios);
    }

    /**
     * Show the form for editing the specified info_comentarios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $infoComentarios = $this->infoComentariosRepository->find($id);

        return view('info_comentarios.edit')->with('infoComentarios', $infoComentarios);
    }

    /**
     * Update the specified info_comentarios in storage.
     *
     * @param int $id
     * @param Updateinfo_comentariosRequest $request
     *
     * @return Response
     */
    public function update(Request $request)
    {
       

        $input = $request->all();
        $id=$input['dato'];

         if(empty($input['archivo'])){
            
            unset($input['archivo']);
        }else{
           
           $nom_doc=$request->file('archivo')->getClientOriginalName();
           $file_img = $request->file('archivo');
           $img = Storage::url($file_img->store('comentarios_hallazgo', 'public'));
           $imgp = strpos($img,'/storage/');
           $img = substr($img, $imgp, strlen($img));
           $input['archivo']=$img;
           $input['nom_doc']=$nom_doc;

        } 

         $input['comentarios']=$input['cometarios'];

         $infoComentarios = $this->infoComentariosRepository->find($id);

         $infoComentarios = $this->infoComentariosRepository->update($input, $id);

        return redirect()->back();
    }

    /**
     * Remove the specified info_comentarios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy(Request $request)
    {
       
        $infoComentarios = $this->infoComentariosRepository->find($request['id']);
        DB::table('info_comentarios')->delete($request['id']);

    }

    public function edita_comen(Request $request){
        
  
        $infoComentarios_ver = new info_comentarios;
        $infoComentarios=$infoComentarios_ver->carga_com($request->all());
        $infoComentarios=$infoComentarios[0];
        $edita=1;
        return view('info_comentarios.fields2',compact('infoComentarios','edita'));

    }
}
