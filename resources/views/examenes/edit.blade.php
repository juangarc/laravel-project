@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Examenes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($examenes, ['route' => ['examenes.update', $examenes->id], 'method' => 'patch']) !!}

                        @include('examenes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection