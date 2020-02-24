@extends('layouts.app')
 
@section('content')
    
        <h1 class="pull-left">Empresas</h1>
        <br>
        <span>
           <a class="btn btn_azul pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('empresas.create') !!}"><i class="fa fa-plus"></i> Nueva Empresa</a>
        </span>
        @include('flash::message')
        <br><br>
        <div class="" style="overflow: auto;">
                    @include('empresas.table')
              
        </div>
@endsection









