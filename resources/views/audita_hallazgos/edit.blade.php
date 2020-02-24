
@extends('layouts.app')

@section('titulo')Edita Hallazgo @endsection

@section('content')
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('hallazgos.index') !!}"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
@php($editar = 1)
 {!! Form::model($auditaHallazgo, ['route' => ['auditaHallazgos.update', $auditaHallazgo->id], 'method' => 'patch','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
                        @include('audita_hallazgos.fields')
 {!! Form::close() !!}
@endsection



