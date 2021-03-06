<?php

namespace App\Http\Controllers;
use App\Models\hallazgos;
use App\User;
use App\Models\info_comentarios;
use App\Models\documentos;
use App\Models\empresas;
use App\Models\localidad;



use App\Models\Temporal_informe;
use App\Http\Requests\CreatehallazgosRequest;
use App\Http\Requests\UpdatehallazgosRequest;
use App\Repositories\hallazgosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Flash;
use Response;
use DB;
use Auth;
use View;

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
        $hallazgos = hallazgos::where('responsable',auth()->id())
                    ->orwhere('auditor',auth()->id())
                    ->orwhere('auditor2',auth()->id())
                    ->orwhere('gerencia',auth()->id())
                    ->get();

        return view('hallazgos.index',compact('hallazgos'));
    }

    /**
     * Show the form for creating a new hallazgos.
     *
     * @return Response
     */
    public function create(){
        $object = new Temporal_informe();
        $valido = 1;
        $hallazgos = $object->informe_temporal();
        $gerentes=User::where('tipo',3)->get();
        $auditor=User::where('tipo',2)->get();
        $empresas=empresas::all();
        $documentos=documentos::all();
        $localidad=localidad::all();

//dd($gerentes);
        foreach ($hallazgos as $hall) {
            if($hall->valida==0){
                $valido=0;
            }
        }

       # dd($valido);
        return view('hallazgos.create',compact('hallazgos','valido','gerentes','auditor','empresas','documentos','localidad'));
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

        

        return view('hallazgos.show')->with('hallazgos', $hallazgos);
    }

    /**
     * Show the form for editing the specified hallazgos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id){
        $filtro = new hallazgos;

        $hallazgos = $this->hallazgosRepository->find($id);
        $responsables = $filtro->tipo_persona(1);
        $auditores = $filtro->tipo_persona(2);
        $gerentes = $filtro->tipo_persona(3);

        return view('hallazgos.edit',compact('hallazgos','responsables','auditores','gerentes'));
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

        $hallazgos = $this->hallazgosRepository->update($request->all(), $id);

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

        $this->hallazgosRepository->delete($id);

        return redirect(route('hallazgos.index'));
    }

    function upload_informe(Request $request){
        $file_img = $request->file('archivo');
        $hallazgo = new Temporal_informe();

        Temporal_informe::truncate();
        $i = 0;
        $res = '';
        $csvFile = fopen($_FILES['archivo']['tmp_name'], 'r');
            fgetcsv($csvFile);
            while(($line = fgetcsv($csvFile)) !== FALSE){  
                Temporal_informe::insert(['hallazgo'=>utf8_encode($line[0]),
                                          'tipo'=>utf8_encode($line[1]),
                                          'recomendacion'=>utf8_encode($line[2]),
                                          'riesgo'=>utf8_encode($line[3]),
                                          'responsable'=>utf8_encode($line[4]),
                                          'causa_raiz'=>utf8_encode($line[5]),
                                          'accion'=>utf8_encode($line[6]),
                                          'compromiso'=>utf8_encode($line[7]),
                                          'calificacion'=>utf8_encode($line[8]),
                                          'calif_numerico'=>utf8_encode($line[9]),
                                          'anio'=>utf8_encode($line[10]),
                                          'trimestre'=>utf8_encode($line[11]),
                                          'archivo'=>$request->narchivo,
                                          'localidad'=>$request->localidad,
                                          'empresa'=>$request->empresa,
                                          'auditor'=>$request->auditor,
                                          'gerente'=>$request->gerente
                                      ]);

                #$hallazgo->hallazgo = utf8_encode($line[0]);
                #$hallazgo->tipo = utf8_encode($line[1]);
                #$hallazgo->recomendacion = utf8_encode($line[2]);
                #$hallazgo->riesgo = utf8_encode($line[3]);
                #$hallazgo->responsable = utf8_encode($line[4]);
                #$hallazgo->causa_raiz = utf8_encode($line[5]);
                #$hallazgo->accion = utf8_encode($line[6]);
                #$hallazgo->compromiso = utf8_encode($line[7]);
                #$hallazgo->calificacion = utf8_encode($line[8]);
                #$hallazgo->calif_numerico = utf8_encode($line[9]);
                #$hallazgo->anio = utf8_encode($line[10]);             
                #$hallazgo->trimestre = utf8_encode($line[11]);
                #$hallazgo->archivo = $request->narchivo;
                #$hallazgo->localidad = $request->localidad;
                #$hallazgo->empresa = $request->empresa;
                #$hallazgo->auditor = $request->auditor;
                #$hallazgo->gerente = $request->gerente;
                #$hallazgo->save();
        
            }
        return redirect()->back();
    }

    function guarda_informe(){

       $var =  db::select('insert into audita_hallazgo(anio, trimestre, auditor, responsable,gerencia, tipo, archivo, calificacion, calificacion_num, hallazgo, recomendacion,riesgo, accion, fecha_com, causa_raiz, proceso, empresa, user_id)
                    select anio, trimestre, auditor, u.id, gerente, i.tipo, archivo, calificacion,calif_numerico,hallazgo,recomendacion,riesgo, accion, compromiso,causa_raiz, localidad, empresa,'.auth()->id().'
                    from informe_temporal i
                    inner join users as u  on u.usuario = i.responsable');
                    /**
        dd('insert into audita_hallazgo(anio, trimestre, auditor, responsable,gerencia, tipo, archivo, calificacion, calificacion_num, hallazgo, recomendacion,riesgo, accion, fecha_com, causa_raiz, proceso, empresa, user_id)
                    select anio, trimestre, auditor, responsable, gerente, tipo, archivo,, calificacion,calif_numerico,hallazgo,recomendacion,riesgo, accion, compromiso,causa_raiz, localidad, empresa, '.auth()->id().'
                    from informe_temporal'); */

        return 1;
    }

    function muestra_hallazgo(Request $request){
        $hallazgo = hallazgos::where('id',$request->id_hallazgo)->get();
        $hallazgo = $hallazgo[0];

        $options = view('hallazgos.hallazgo_det',compact('hallazgo'))->render();

        return json_encode($options);
    }

    function ver_hallazgo(Request $request){
        $hallazgo = new hallazgos;
        $hallazgo->id_hallazgo = $request->id_hallazgo;

        $infoComentarios_mod = new info_comentarios;

        $auditaHallazgo = $hallazgo->obtiene_hallazgos($hallazgo);
        $auditaHallazgo = $auditaHallazgo[0]; 
        $id_hallazgo=$auditaHallazgo->id;
        
        $infoComentarios=$infoComentarios_mod->carga_comentarios($id_hallazgo);  

        $id=$request->id_hallazgo;

        $options = view('audita_hallazgos.show',compact('auditaHallazgo','infoComentarios','id'))->render();
        return json_encode($options);     
    }

    function guarda_comentarios(Request $request){
        $infoComentarios_mod = new info_comentarios;
        if(!empty($request->file('archivo'))){
            $path =  'storage/'.Storage::putFileAs('hallazgos', $request->file('archivo'), $request->file('archivo')->getClientOriginalName());
        }else{
            $path = '';
        }
        info_comentarios::insert(['id_usuario'=>auth()->id(),
                                  'id_hallazgo'=>$request->id_hallazgo,
                                  'comentarios'=>$request->comentarios,
                                  'archivo'=>$path,
                                  'created_at'=>date('Y-m-d'),
                                  'estatus'=>$request->estatus]);
        $infoComentarios=$infoComentarios_mod->carga_comentarios($request->id_hallazgo);  

        $options = view('info_comentarios.table',compact('infoComentarios'))->render();
        return ($options);
    }

    function elimina_com(Request $request){
        $infoComentarios_mod = new info_comentarios;
        info_comentarios::where('id',$request->id)->delete();
        $infoComentarios=$infoComentarios_mod->carga_comentarios($request->id_hallazgo);  

        $options = view('info_comentarios.table',compact('infoComentarios'))->render();
        return ($options);
           
    }
}
