
@extends('layouts.app')

@section('titulo')Empresas @endsection

@section('content')
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('empresas.index') !!}"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
@php($editar = 1)
 {!! Form::model($empresas, ['route' => ['empresas.update', $empresas->id], 'method' => 'patch','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
                        @include('empresas.fields')
 {!! Form::close() !!}
@endsection



