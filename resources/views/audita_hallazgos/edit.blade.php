@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Audita Hallazgo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($auditaHallazgo, ['route' => ['auditaHallazgos.update', $auditaHallazgo->id], 'method' => 'patch']) !!}

                        @include('audita_hallazgos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection