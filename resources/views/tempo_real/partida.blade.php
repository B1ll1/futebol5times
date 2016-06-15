@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="placar" style="padding: 10px 0 50px 0;">
                <div class="text-center">
                    <h2>
                        <span style="padding-right: 50px;">{{ $sumula->equipeCasa->nome }}</span> <img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeCasa->nome) }}.png" style="padding-right: 50px;"/>
                                                <span style="font-size: 1.7em;">0</span> X <span style="font-size: 1.7em;">0</span>
                        <img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeVisitante->nome) }}.png" style="padding-left: 50px;"/> <span style="padding-left: 50px;">{{ $sumula->equipeVisitante->nome }}</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="timeline" class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body text-center">

                    </div>
                </div>
            </div>

            <div id="ficha" class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Ficha de Jogo</h4></div>
                    <div class="panel-body" style="padding: 0; margin: 0;">
                        <div class="col-md-6" style="padding: 0; margin: 0;">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="font-size: 1.3em;"> {{ $sumula->equipeCasa->nome }}</th>
                                        <th class="text-center"><img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeCasa->nome) }}.png" width="30px;" height="30px;"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($escalacaoCasa as $esc)
                                    <tr>
                                        <td>{{ $esc->jogador->nome}}</td>
                                        <td></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-6" style="padding: 0; margin: 0;">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th class="text-center"><img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeVisitante->nome) }}.png" width="30px;" height="30px;"></th>
                                        <th class="text-center" style="font-size: 1.3em;"> {{ $sumula->equipeVisitante->nome }}</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($escalacaoVisitante as $esc)
                                    <tr>
                                        <td></td>
                                        <td>{{ $esc->jogador->nome}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('specific_scripts')
@stop

@section('inline_scripts')
<script type="text/javascript">

</script>
@stop