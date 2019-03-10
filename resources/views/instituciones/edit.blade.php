@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Instituciones
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($instituciones, ['route' => ['instituciones.update', $instituciones->id], 'method' => 'patch']) !!}

                        @include('instituciones.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection