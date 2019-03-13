@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cupo
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cupo, ['route' => ['cupos.update', $cupo->id], 'method' => 'patch']) !!}

                        @include('cupos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection