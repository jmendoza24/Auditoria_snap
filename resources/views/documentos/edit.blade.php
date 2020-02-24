@extends('layouts.app')

@section('titulo')Empresas @endsection

@section('content')
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('documentos.index') !!}"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
@php($editar = 1)
 {!! Form::model($documentos, ['route' => ['documentos.update', $documentos->id], 'method' => 'patch','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
                        @include('documentos.fields')
 {!! Form::close() !!}
@endsection



