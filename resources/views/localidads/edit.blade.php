@extends('layouts.app')

@section('titulo')Localidad @endsection

@section('content')
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('localidads.index') !!}"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
@php($editar = 1)
 {!! Form::model($localidad, ['route' => ['localidads.update', $localidad->id], 'method' => 'patch','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
                        @include('localidads.fields')
 {!! Form::close() !!}
@endsection



