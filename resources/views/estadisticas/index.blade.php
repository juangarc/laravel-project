@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Estadisticas</h1>
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('estadisticas.create') !!}">Añadir nuevo</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('estadisticas.table')
            </div>
        </div>
        <div class="text-center">
        <h5><strong>K=240000 al año</strong></h5>
        <h6>Es el número de horas hombre trabajadas al año tomando 100 trabajadores aproximados, que equivalen a 240.000</h6>
        <h5><strong>Tasa de Accidentalidad: (#AT/#T)*100</strong></h5>
        <h6>Es igual al número de accidentes de trabajo / número de trabajadores * 100</h6>
        <h5><strong>Severidad de Accidentes: (((#Horas AT + #Horas cargadas) / (#HHT)) * 240.000)</strong></h5>
        <h6>Número de horas perdidas por accidente de trabajo + horas cargadas a trabajar en el mes / número de horas trabajadas en el mes * 240.000</h6>
        <h5><strong>Frecuencia de Accidentes: (#AT/#HHT) * 240.000</strong></h5>
        <h6>Número de accidentes reportados / número de horas hombre trabajadas en el mes * 240.000</h6>
        <h5><strong>Mortalidad de Accidentes: (#AT mortal / #AT) * 100</strong></h5>
        <h6>Número de accidentes mortales / número de accidentes de trabajo * 100</h6>
        <h5><strong>Índice de lesiones incapacitantes: (IS * IF) / 1000</strong></h5>
        <h6>Frecuencia de la accidentalidad * severidad de los accidentes /1000</h6>
        </div>
    </div>
@endsection
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    


