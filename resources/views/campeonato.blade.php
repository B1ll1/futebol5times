@extends('layouts.app')

@section('specific_scripts')
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">Tabela</div>
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
                         @endforeach
                        </tbody>
                    </table>
                <div class="panel-body">
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
            <table id="rodada" class="table table-hover display" cellspacing="0" width="100%">
                     <thead>
                            <tr>
                                <th style="text-align: center;">Rodadas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rodadas as $rodada)
                             <tr>
                                <th style="text-align: center;">{{$classificacao[$rodada->casaid]['nome']}} <a href="{{route('time',[$rodada->casaid])}}"><img src="http://futebol.trabalho/images/{{strtolower($classificacao[$rodada->casaid]['nome'])}}.png"></a> {{$golsporjogo[$rodada->id][$rodada->casaid]}} X {{$golsporjogo[$rodada->id][$rodada->visitanteid]}} <a href="{{route('time',[$rodada->visitanteid])}}"><img src="http://futebol.trabalho/images/{{strtolower($classificacao[$rodada->visitanteid]['nome'])}}.png"></a> {{$classificacao[$rodada->visitanteid]['nome']}}</th>
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
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Artilharia</div>
                     <table class="table table-hover" id="artilharia">
                        <thead>
                            @foreach($gols as $key => $gol)
                            <tr>
                                <th>{{$jogadores[$key]->nome}} <img src="http://futebol.trabalho/images/{{strtolower($classificacao[$jogadores[$key]->equipeid]['nome'])}}.png"> {{$gol}}</th>
                            </tr>
                           @endforeach()
                        </thead>
                        <tbody>
                             <tr>
                             </tr>
                        </tbody>
                    </table>
                <div class="panel-body">
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