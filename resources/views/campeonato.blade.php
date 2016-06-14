@extends('layouts.app')

@section('specific_styles')
<style type="text/css">

</style>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: green; color: black;"><b>Tabela</b></div>
                     <table class="table table-hover" id="classificacao" >
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
                             <tr>
                                <td style="height: 44px;">{{$key+1}} <a href="{{route('index',[$key+1])}}">{{$obj['nome']}}</a></td>
                                <td>{{$obj['pontos']}}</td>
                                <td>{{$obj['jogos']}}</td>
                                <td>{{$obj['vitorias']}}</td>
                                <td>{{$obj['empates']}}</td>
                                <td>{{$obj['derrotas']}}</td>
                                <td>{{$obj['gp']}}</td>
                                <td>{{$obj['gc']}}</td>
                                <td>{{$obj['sg']}}</td>
                             </tr>
                         @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
            <table id="rodada" class="table table-hover display" cellspacing="0" width="100%">
                     <thead>
                            <tr>
                                <th style="text-align: center; background-color: green; color: black;"><b>Rodadas</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rodadas as $rodada)
                             <tr>
                                <th style="text-align: center;">QUA - {{$jogos[$rodada->id-1]->data->format('d/m/y')}} <-> {{$campos[$rodada->campo_id-1]->nome}}</th>
                             </tr>
                             <tr>
                                <th style="text-align: center;">{{$classificacao[$rodada->casaid]['nome']}} <a href="{{route('index',[$rodada->casaid])}}"><img src="http://futebol.trabalho/images/{{strtolower($classificacao[$rodada->casaid]['nome'])}}.png"></a> {{$golsporjogo[$rodada->id][$rodada->casaid]}} X {{$golsporjogo[$rodada->id][$rodada->visitanteid]}} <a href="{{route('index',[$rodada->visitanteid])}}"><img src="http://futebol.trabalho/images/{{strtolower($classificacao[$rodada->visitanteid]['nome'])}}.png"></a> {{$classificacao[$rodada->visitanteid]['nome']}}</th>
                             </tr>
                         @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                              <td style="text-align: center;">{!! $rodadas->render() !!}</td>
                            </tr>
                          </tfoot>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color: green; color: black;"><b>Artilharia</b></div>
                     <table class="table table-hover" id="artilharia">
                        <thead>
                            @foreach($gols as $key => $gol)
                            <tr>
                                <th>{{$jogadores[$key]->nome}} <img src="http://futebol.trabalho/images/{{strtolower($classificacao[$jogadores[$key]->equipeid]['nome'])}}.png"> {{$gol}}</th>
                            </tr>
                           @endforeach()
                        </thead>
                    </table>
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