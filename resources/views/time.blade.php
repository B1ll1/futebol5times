@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @foreach($classificacao_ordenada as $key=>$obj)
                @unless($classificacao[$id]['nome']!=$obj['nome'])
                <div class="panel-heading" style="background-color: #707070 ; color: black;"><h4>{{$obj['nome']}}  <img src="http://dev.futebol.com/images/{{strtolower($obj['nome'])}}.png"></h4></div>
                @endunless
                @endforeach
                <div class="panel-body">

                    <div class="row">
                             <div class="col-md-12">
                                <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #A0A0A0; color: black;"><b>Tabela</b></div>
                                <table class="table table-hover" id="classificacao">
                                        <thead>
                                            <tr>
                                                <th>Classificação</th>
                                                <th>P</th>
                                                <th>J</th>
                                                <th>V</th>
                                                <th>E</th>
                                                <th>D</th>
                                                <th>GP</th>
                                                <th>GC</th>
                                                <th>SG</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($classificacao_ordenada as $key=>$obj)
                                            @unless($classificacao[$id]['nome']!=$obj['nome'])
                                             <tr>
                                                <td>{{$key+1}} {{$obj['nome']}}</td>
                                                <td>{{$obj['pontos']}}</td>
                                                <td>{{$obj['jogos']}}</td>
                                                <td>{{$obj['vitorias']}}</td>
                                                <td>{{$obj['empates']}}</td>
                                                <td>{{$obj['derrotas']}}</td>
                                                <td>{{$obj['gp']}}</td>
                                                <td>{{$obj['gc']}}</td>
                                                <td>{{$obj['sg']}}</td>
                                             </tr>
                                            @endunless
                                            @endforeach
                                        </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                             <div class="col-md-12">
                                <div class="panel panel-default">
                                    <table id="rodada" class="table table-striped table-hover display" cellspacing="0" width="100%">
                                         <thead>
                                                <tr>
                                                    <th style="text-align: center;">Últimos Jogos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($ultimosjogos as $jogo)
                                                 <tr>
                                                    <th style="text-align: center;">QUA - {{$jogos[$jogo["jogo_id"]-1]->data->format('d/m/y H:i')}}</th>
                                                 </tr>
                                                 <tr>
                                                    <th style="text-align: center;">{{$classificacao[$jogo["casaid"]]['nome']}} {{$golsporjogo[$jogo["jogo_id"]][$jogo["casaid"]]}} X {{$golsporjogo[$jogo["jogo_id"]][$jogo["visitanteid"]]}} {{$classificacao[$jogo["visitanteid"]]['nome']}}</th>
                                                 </tr>
                                             @endforeach
                                            </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                     <div class="row">
                             <div class="col-md-12">
                                <div class="panel panel-default">
                                    <table id="rodada" class="table table-striped table-hover display" cellspacing="0" width="100%">
                                         <thead>
                                                <tr>
                                                    <th style="text-align: center;">Próximos Jogos</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($proximosjogos as $jogo)
                                                 <tr>
                                                    <th style="text-align: center;">QUA - {{$jogos[$jogo["jogo_id"]-1]->data->format('d/m/y H:i')}}</th>
                                                 </tr>
                                                 <tr>
                                                    <th style="text-align: center;">{{$classificacao[$jogo["casaid"]]['nome']}}  X  {{$classificacao[$jogo["visitanteid"]]['nome']}}</th>
                                                 </tr>
                                             @endforeach
                                            </tbody>
                                    </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                             <div class="col-md-12">
                                <div class="panel panel-default">
                                <div class="panel-heading" style="background-color: #A0A0A0; color: black;"><b>Jogadores</b></div>
                                    <table id="rodada" class="table table-striped table-hover display" cellspacing="0" width="100%">
                                         <thead>
                                                <tr>
                                                    <th style="text-align: left;">Jogador</th>
                                                    <th style="text-align: center;">Gols</th>
                                                    <th style="text-align: center;">CA</th>
                                                    <th style="text-align: center;">CV</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($jogadores as $jogador)
                                                 <tr>
                                                    <th style="text-align: left;">{{$jogador->nome}}</th>
                                                    @if(isset($gols[$jogador->id]))
                                                    <th style="text-align: center;">{{$gols[$jogador->id]}}</th>
                                                    @else
                                                    <th style="text-align: center;">0</th>
                                                    @endif
                                                    @if($cartoes[$jogador->id]['amarelo']>0)
                                                    <th style="text-align: center;">{{$cartoes[$jogador->id]['amarelo']}}</th>
                                                    @else
                                                    <th style="text-align: center;">0</th>
                                                    @endif
                                                    @if($cartoes[$jogador->id]['vermelho']>0)
                                                    <th style="text-align: center;">{{$cartoes[$jogador->id]['vermelho']}}</th>
                                                    @else
                                                    <th style="text-align: center;">0</th>
                                                    @endif
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
</div>
@endsection
