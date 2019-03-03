@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo Ausentismo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tipoAusentismo, ['route' => ['tipoAusentismos.update', $tipoAusentismo->id], 'method' => 'patch']) !!}

                        @include('tipo_ausentismos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection