@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    @hasanyrole('admin|user')
    @include('chart')
    @endhasanyrole
    @hasanyrole('costumer')
    <h1>Bienvenido al Modulo de registro de Solicitudes</h1>
    @endhasanyrole
    </div>
</div>
@endsection
