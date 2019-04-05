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
                    {!! Form::open(['route' => 'estadisticas.store']) !!}

                        @include('estadisticas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <script>
=======
>>>>>>> decf8382a7361bc880ac329a8c3ff29e986192a1
@endsection
