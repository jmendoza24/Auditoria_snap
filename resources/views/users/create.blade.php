
@extends('layouts.app')
@section('titulo')Nuevo Usuario 
@endsection
 
@section('content')
<a class="btn btn_naranja pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.index') !!}"> <i class="fa fa-undo"></i> Regresar</a>
<br><br><br>
@php($editar = 0)      
{!! Form::open(['route' => 'users.store','class'=>'needs-validation','novalidate','enctype'=>'multipart/form-data']) !!}
         @include('users.fields')
{!! Form::close() !!}
@endsection
