@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Especialidad
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoEspecialidad, ['route' => ['tipoEspecialidads.update', $tipoEspecialidad->id], 'method' => 'patch']) !!}

                        @include('tipo_especialidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection