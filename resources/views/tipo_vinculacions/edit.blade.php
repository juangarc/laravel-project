@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Vinculacion
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoVinculacion, ['route' => ['tipoVinculacions.update', $tipoVinculacion->id], 'method' => 'patch']) !!}

                        @include('tipo_vinculacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection