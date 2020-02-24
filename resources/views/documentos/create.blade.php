@extends('layouts.app')
@section('titulo')Documentos 
@endsection
 
@section('content')
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('documentos.index') !!}"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
@php($editar = 0)      
{!! Form::open(['route' => 'documentos.store','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
         @include('documentos.fields')
{!! Form::close() !!}
@endsection
