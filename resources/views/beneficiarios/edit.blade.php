@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Beneficiario
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($beneficiario, ['route' => ['beneficiarios.update', $beneficiario->id], 'method' => 'patch']) !!}

                        @include('beneficiarios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection