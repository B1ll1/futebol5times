@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                @foreach($classificacao_ordenada as $key=>$obj)
                @unless($classificacao[$id]['nome']!=$obj['nome'])
                <div class="panel-heading"><h4>{{$obj['nome']}}  <img src="http://futebol.trabalho/images/{{strtolower($obj['nome'])}}.png"></h4></div>
                @endunless
                @endforeach
                    <div class="row">
                             <div class="col-md-7">
                                <div class="panel panel-default">
                                <div class="panel-heading">Tabela</div>

                                <div class="panel-body">
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
                    </div>
                <div class="panel-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
