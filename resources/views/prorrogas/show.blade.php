@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prorroga
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('prorrogas.show_fields')
                    <a href="{!! route('prorrogas.index') !!}" class="btn btn-default">Atrás</a>
                </div>
            </div>
        </div>
    </div>
@endsection
