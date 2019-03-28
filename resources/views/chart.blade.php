<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Estadisticas</div>

                <div class="panel-body">
                    {!! $chart->html() !!}
                </div>

                <hr>
               {!! $pie->html() !!}
                 <!-- <hr>
               {!! $donut->html() !!}

                <hr>
               {!! $geo->html() !!} -->
            </div>
        </div>
    </div>
</div>
{!! Charts::scripts() !!}
{!! $chart->script() !!}

{!! $pie->script() !!}

{!! $donut->script() !!}

{!! $geo->script() !!}
