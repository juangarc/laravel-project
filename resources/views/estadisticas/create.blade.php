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
    <script>
function setTwoNumberDecimal(event) {
    this.value = parseFloat(this.value).toFixed(2);
}
</script>
@endsection
