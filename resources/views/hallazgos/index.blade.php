@extends('layouts.app')
 
@section('content')
    
        <h1 class="pull-left">Hallazgos</h1>
        <br>
        <span>
        <a class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('hallazgos.create') !!}"><i class="fa fa-plus"></i> Carga</a>
        </span>
        <br><br>
        <div class="" style="overflow: auto;">
                    @include('hallazgos.table')
              

        </div>
@endsection







