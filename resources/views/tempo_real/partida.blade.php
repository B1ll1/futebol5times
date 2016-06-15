@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div id="placar" style="padding: 10px 0 50px 0;">
                <div class="text-center">
                    <h2>
                        <span style="padding-right: 50px;">{{ $sumula->equipeCasa->nome }}</span> <img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeCasa->nome) }}.png" style="padding-right: 50px;"/>
                                                <span style="font-size: 1.7em;" id="casa">0</span> X <span style="font-size: 1.7em;" id="visitante">0</span>
                        <img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeVisitante->nome) }}.png" style="padding-left: 50px;"/> <span style="padding-left: 50px;">{{ $sumula->equipeVisitante->nome }}</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div id="timeline" class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="row" id="timelinecartoes">
                            <h3>Cartoes</h3>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="row" id="timelinegols">
                            <h3>Gols</h3>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-body text-center">
                        <div class="row" id="timelinesubs">
                            <h3>Substituições</h3>
                        </div>
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
                                        <td><span id="jog{{$esc->jogador->id}}">{{ $esc->jogador->nome}}</span></td>
                                        <td><span style="font-size: 1.0em;" id="jogador{{$esc->jogador->id}}"></span></td>
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
                                        <td><span style="font-size: 1.0em;" id="jogador{{$esc->jogador->id}}"></span></td>
                                        <td><span id="jog{{$esc->jogador->id}}">{{ $esc->jogador->nome}}</span></td>
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
    var sumulaid = {{$sumula->id}};
    var casaid = {{$sumula->equipeCasa->id}};
    var visitanteid = {{$sumula->equipeVisitante->id}};
    var auxcartoes = 0;
    var auxgols = 0;
    var auxsubs = 0;
    var auxsub = 0;
    setInterval(function() {
            $.ajax({
                method: 'GET',
                url: '/acompanhamento/golslive',
                dataType: 'json',
                data: {sumulaid: sumulaid}
            }).done(function(data) {
                if(data.status == 'success') {
                     $("#casa").text(data.golstime[casaid]);
                     $("#visitante").text(data.golstime[visitanteid]);
                     var golsjogador = data.golsjogador;
                     for (gols in golsjogador ){
                        $("#jogador"+golsjogador[gols].jogador_id).text(golsjogador[gols].total);
                     }
                     var cartoes = data.cartoes;
                     var tamanhocartoes = cartoes.length;
                     if(tamanhocartoes>auxcartoes){
                            $('#timelinecartoes').append(`<p>${data.cartoes[auxcartoes].nome} - ${data.cartoes[auxcartoes].instante} - ${data.cartoes[auxcartoes].tipo} </p>`);
                            auxcartoes+=1;
                     }
                     var tamanhogols = golsjogador.length;
                     if(tamanhogols>auxgols){
                            $('#timelinegols').append(`<p> GOL  do ${data.golsjogador[auxgols].nome} - ${data.golsjogador[auxgols].instante}</p>`);
                            auxgols+=1;
                     }
                     var tamanhosubs = data.subs.length;
                     if(tamanhosubs>auxsubs){
                            $('#timelinesubs').append(`<p> Sai o jogador ${data.jogadores[data.subs[auxsubs].jogador_id_sai-1].nome} e entra o jogador  ${data.jogadores[data.subs[auxsubs].jogador_id_entra-1].nome} - ${data.subs[auxsubs].instante}</p>`);
                            $('#jog'+data.jogadores[data.subs[auxsubs].jogador_id_sai-1].id).empty();
                            $('#jog'+data.jogadores[data.subs[auxsubs].jogador_id_sai-1].id).text(data.jogadores[data.subs[auxsubs].jogador_id_entra-1].nome);
                            auxsubs+=1;
                     }
                     $('#jog'+data.jogadores[data.subs[auxsubs-1].jogador_id_sai-1].id).attr('id', 'jog'+data.jogadores[data.subs[auxsubs-1].jogador_id_entra-1].id);
                     $('#jogador'+data.jogadores[data.subs[auxsubs-1].jogador_id_sai-1].id).empty();
                     $('#jogador'+data.jogadores[data.subs[auxsubs-1].jogador_id_sai-1].id).attr('id', 'jogador'+data.jogadores[data.subs[auxsubs-1].jogador_id_entra-1].id);
                }
            });
        }, 3000);
</script>
@stop