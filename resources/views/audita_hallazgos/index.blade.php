@extends('layouts.app')
 
@section('content')
    
        <h1 class="pull-left">Audita Hallazgos</h1>
        <br>
        <span>
        <a class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('auditaHallazgos.create') !!}"><i class="fa fa-plus"></i> Nuevo</a>
        </span>
        @include('flash::message')
        <br><br>
        <div class="" style="overflow: auto;">
                    @include('audita_hallazgos.table')
        </div>
@endsection








