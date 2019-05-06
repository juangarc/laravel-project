@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @hasanyrole('admin|user')
    @include('chart')
    @endhasanyrole
    @hasanyrole('costumer')
    <div class="text-center">
    <h1>Bienvenido al Modulo de registro de Solicitudes</h1>
    </div>
    @endhasanyrole
    </div>
</div>
@endsection
