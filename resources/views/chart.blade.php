<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Estadisticas</div>

                <div class="panel-body">
                    <div class="content">
                        <div class="caja_inline" style="float:left;width: 50%;"> {!! $chart->html() !!}</div>
                        <hr>
                        <div class="caja_inline" style="float:left;width: 50%;"> {!! $pie->html() !!}</div>
                    </div>
                    <div class="content">
                    <div class="caja_inline" style="float:left;width: 30%;">{!! $donut->html() !!}</div>
                        <hr>
                    </div>

                </div>
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