@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Estadistica
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($estadistica, ['route' => ['estadisticas.update', $estadistica->id], 'method' => 'patch']) !!}

                        @include('estadisticas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection