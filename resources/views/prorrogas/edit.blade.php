@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prorroga
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prorroga, ['route' => ['prorrogas.update', $prorroga->id], 'method' => 'patch']) !!}

                        @include('prorrogas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection