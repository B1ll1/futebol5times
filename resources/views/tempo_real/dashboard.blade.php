@extends('layouts.app')

@section('specific_styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@show

@section('content')
<div id="container" class="container">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background: green; color: white; font-size: 1.5em;">Qual partida deseja narrar?</div>
                    <div class="panel-body">
                        <div class="col-md-10">
                            <select id="sumulaSelect" class="form-control" name="sumulaSelect">
                                <option value=""></option>
                                @foreach($sumulas as $sumula)
                                <option value="{{ $sumula->id }}">
                                    {{ $sumula->equipeCasa()->first()->nome }} x {{ $sumula->equipeVisitante()->first()->nome }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-2">
                            <button id="btnIniciarPartida" class="btn btn-sm btn-success">Iniciar Partida</button>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="background: green; color:white; font-size: 1.5em;">
                    <span id="spanTime1"></span>
                </div>
                <div id="panelTime1" class="panel-body">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#tabGol1">Gol</a></li>
                      <li><a data-toggle="tab" href="#tabAmarelo1">Cartão Amarelo</a></li>
                      <li><a data-toggle="tab" href="#tabVermelho1">Cartão Vermelho</a></li>
                      <li><a data-toggle="tab" href="#tabSubstituicao1">Substituição</a></li>
                    </ul>

                    <div class="tab-content">
                        {{-- Tab Gols --}}
                        <div id="tabGol1" class="tab-pane fade in active"><br>
                            {!! Form::open(['id' => 'formGol1', 'class' => 'form-horizontal']) !!}
                                <div class="col-md-6">
                                    <select id="selectTime1Jogadores" class="form-control selectJogadores" name="jogador_id">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                </div>
                                <div class="col-md-3">
                                    <button id="btnSalvaGol1" type="submit" class="btn btn-sm btn-success">Registrar</button>
                                </div>
                            {!! Form::close() !!}
                        </div>

                      <div id="tabAmarelo1" class="tab-pane fade">
                            {!! Form::open(['id' => 'formAmarelo1', 'class' => 'form-horizontal']) !!}
                                <div class="col-md-6">
                                    <select id="selectTime1JogadoresAmarelo" class="form-control selectJogadores" name="jogador_id" style="width: 100%">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                </div>
                                <div class="col-md-3">
                                    <button id="btnSalvaAmarelo1" type="submit" class="btn btn-sm btn-success">Registrar</button>
                                </div>
                            {!! Form::close() !!}
                      </div>

                      <div id="tabVermelho1" class="tab-pane fade">
                            {!! Form::open(['id' => 'formVermelho1', 'class' => 'form-horizontal']) !!}
                                <div class="col-md-6">
                                    <select id="selectTime1JogadoresVermelho" class="form-control selectJogadores" name="jogador_id" style="width: 100%">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                </div>
                                <div class="col-md-3">
                                    <button id="btnSalvaVermelho1" type="submit" class="btn btn-sm btn-success">Registrar</button>
                                </div>
                            {!! Form::close() !!}
                      </div>

                      <div id="tabSubstituicao1" class="tab-pane fade">
                            {!! Form::open(['id' => 'formSubstituicao1', 'class' => 'form-horizontal']) !!}
                                <br><div class="row">
                                    <div class="col-md-6">
                                        <select id="selectTime1Atual" class="form-control selectJogadores" name="jogador_id_sai" style="width: 100%">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <select id="selectTime1Subs" class="form-control selectJogadores" name="jogador_id_entra" style="width: 100%">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-3">
                                        {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                    </div>
                                    <div class="col-md-2">
                                        <button id="btnSalvaSubstituicao1" type="submit" class="btn btn-sm btn-success">Registrar</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                      </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading text-center" style="background: green; color:white; font-size: 1.5em;">
                    <span id="spanTime2"></span>
                </div>
                <div id="panelTime2" class="panel-body">

                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#tabGol2">Gol</a></li>
                      <li><a data-toggle="tab" href="#tabAmarelo2">Cartão Amarelo</a></li>
                      <li><a data-toggle="tab" href="#tabVermelho2">Cartão Vermelho</a></li>
                      <li><a data-toggle="tab" href="#tabSubstituicao2">Substituição</a></li>
                    </ul>

                    <div class="tab-content">
                      {{-- Tab Gols --}}
                      <div id="tabGol2" class="tab-pane fade in active"><br>
                            {!! Form::open(['id' => 'formGol2', 'class' => 'form-horizontal']) !!}
                            <div class="col-md-6">
                                <select id="selectTime2Jogadores" class="form-control selectJogadores" name="jogador_id">
                                    <option value=""></option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                    {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                </div>
                            <div class="col-md-3">
                                <button id="btnSalvaGol2" type="submit" class="btn btn-sm btn-success">Registrar</button>
                            </div>
                            {!! Form::close() !!}
                      </div>

                      <div id="tabAmarelo2" class="tab-pane fade">
                            {!! Form::open(['id' => 'formAmarelo2', 'class' => 'form-horizontal']) !!}
                                <div class="col-md-6">
                                    <select id="selectTime2JogadoresAmarelo" class="form-control selectJogadores" name="jogador_id" style="width: 100%">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                </div>
                                <div class="col-md-3">
                                    <button id="btnSalvaAmarelo2" type="submit" class="btn btn-sm btn-success">Registrar</button>
                                </div>
                            {!! Form::close() !!}
                      </div>

                      <div id="tabVermelho2" class="tab-pane fade">
                            {!! Form::open(['id' => 'formVermelho2', 'class' => 'form-horizontal']) !!}
                                <div class="col-md-6">
                                    <select id="selectTime2JogadoresVermelho" class="form-control selectJogadores" name="jogador_id" style="width: 100%">
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                </div>
                                <div class="col-md-3">
                                    <button id="btnSalvaVermelho2" type="submit" class="btn btn-sm btn-success">Registrar</button>
                                </div>
                            {!! Form::close() !!}
                      </div>

                      <div id="tabSubstituicao2" class="tab-pane fade">
                            {!! Form::open(['id' => 'formSubstituicao2', 'class' => 'form-horizontal']) !!}
                                <br><div class="row">
                                    <div class="col-md-6">
                                        <select id="selectTime2Atual" class="form-control selectJogadores" name="jogador_id_sai" style="width: 100%">
                                            <option value=""></option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <select id="selectTime2Subs" class="form-control selectJogadores" name="jogador_id_entra" style="width: 100%">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div><br>

                                <div class="row">
                                    <div class="col-md-3">
                                        {!! Form::number('instante', null, ['class' => 'form-control', 'placeholder' => 'Tempo']) !!}
                                    </div>
                                    <div class="col-md-5">
                                        <button id="btnSalvaSubstituicao2" type="submit" class="btn btn-sm btn-success">Registrar</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('specific_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@stop

@section('inline_scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('#sumulaSelect').select2({
            placeholder: 'Selecione um jogo...',
        });

        $('.selectJogadores').select2({
            placeholder: 'Selecione um jogador...',
        });

        $('#selectTime1Jogadores').on('change', function() {
            $('#btnSalvaGol1').prop('disabled', false);
        });
        $('#selectTime2Jogadores').on('change', function() {
            $('#btnSalvaGol2').prop('disabled', false);
        });

        $('#selectTime1JogadoresAmarelo').on('change', function() {
            $('#btnSalvaAmarelo1').prop('disabled', false);
        });
        $('#selectTime2JogadoresAmarelo').on('change', function() {
            $('#btnSalvaAmarelo2').prop('disabled', false);
        });

        $('#selectTime1JogadoresVermelho').on('change', function() {
            $('#btnSalvaVermelho1').prop('disabled', false);
        });
        $('#selectTime2JogadoresVermelho').on('change', function() {
            $('#btnSalvaVermelho2').prop('disabled', false);
        });

        $('#selectTime1Atual').on('change', function() {
            $('#btnSalvaSubstituicao1').prop('disabled', false);
        });
        $('#selectTime2Atual').on('change', function() {
            $('#btnSalvaSubstituicao2').prop('disabled', false);
        });

        $('#btnIniciarPartida').prop('disabled', true); // Desativa o botão iniciar partida
        $('#btnSalvaGol1').prop('disabled', true);
        $('#btnSalvaGol2').prop('disabled', true);
        $('#btnSalvaAmarelo1').prop('disabled', true);
        $('#btnSalvaAmarelo2').prop('disabled', true);
        $('#btnSalvaVermelho1').prop('disabled', true);
        $('#btnSalvaVermelho2').prop('disabled', true);
        $('#btnSalvaSubstituicao1').prop('disabled', true);
        $('#btnSalvaSubstituicao2').prop('disabled', true);
    });

    // Função para pegar os dados da sumula escolhida no select
    $('#sumulaSelect').on('change', function() {
        $('#btnIniciarPartida').prop('disabled', false); // Libera o botão iniciar partida
        var sumula_id = $(this).val();
        $('#btnIniciarPartida').data('sumula-id', sumula_id);
        $('#panelTime1').data('sumula-id', sumula_id);
        $('#panelTime2').data('sumula-id', sumula_id);

        $.ajax({
            method: 'GET',
            url: '/tempo-real/partida/'+sumula_id,
            dataType: 'json',
            async: false,
        })
        .done(function(data) {
            if(data.status == 'success') {
                var spanTime1 = $('#spanTime1');
                var spanTime2 = $('#spanTime2');

                // Faz um append do escudo e nome do time da casa
                spanTime1.empty();
                spanTime1.append(`
                    <img src="http://dev.futebol.com/images/${(data.casa.nome).toLowerCase()}.png"/>
                    <h3>${data.casa.nome}</h3>
                `);

                // Faz um append do escudo e nome do time visitante
                spanTime2.empty();
                spanTime2.append(`
                    <img src="http://dev.futebol.com/images/${data.visitante.nome.toLowerCase()}.png"/>
                    <h3>${data.visitante.nome}</h3>
                `);
            }
        });
    });

    // Inicia partida escondendo a seleção de jogos
    $('#btnIniciarPartida').on('click', function() {
            $('#container').append(`
                    <div class="row text-center">
                        <button id="btnEncerrarPartida" class="btn btn-lg btn-success">Encerrar Partida</button>
                    </div>
            `);

            var sumula_id = $(this).data('sumula-id');
            $(this).parent().parent().parent().remove();

            $.ajax({
                headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                method: 'POST',
                url: '/tempo-real/partida/'+ sumula_id + '/escalacao',
                dataType: 'json',
        })
        .done(function(data) {
            if(data.status == 'success') {
                // Popula com os jogadores da casa
                for(var i = 0; i < data.jogadoresCasa.length; i++) {
                    $('#selectTime1Jogadores').append(`
                        <option value="${data.jogadoresCasa[i].id}">${data.jogadoresCasa[i].nome}</option>`);

                    $('#selectTime1JogadoresAmarelo').append(`
                        <option value="${data.jogadoresCasa[i].id}">${data.jogadoresCasa[i].nome}</option>`);

                    $('#selectTime1JogadoresVermelho').append(`
                        <option value="${data.jogadoresCasa[i].id}">${data.jogadoresCasa[i].nome}</option>`);

                    $('#selectTime1Atual').append(`
                        <option value="${data.jogadoresCasa[i].id}">${data.jogadoresCasa[i].nome}</option>`);
                }

                // Popula com os reservas da casa
                for(var i = 0; i < data.reservasCasa.length; i++) {
                    $('#selectTime1Subs').append(`
                            <option value="${data.reservasCasa[i].id}">${data.reservasCasa[i].nome}</option>`);
                }

                // Popula com os jogadores do visitante
                for(var i = 0; i < data.jogadoresVisitante.length; i++) {
                    $('#selectTime2Jogadores').append(`
                        <option value="${data.jogadoresVisitante[i].id}">${data.jogadoresVisitante[i].nome}</option>`);

                    $('#selectTime2JogadoresAmarelo').append(`
                        <option value="${data.jogadoresVisitante[i].id}">${data.jogadoresVisitante[i].nome}</option>`);

                    $('#selectTime2JogadoresVermelho').append(`
                        <option value="${data.jogadoresVisitante[i].id}">${data.jogadoresVisitante[i].nome}</option>`);

                    $('#selectTime2Atual').append(`
                        <option value="${data.jogadoresVisitante[i].id}">${data.jogadoresVisitante[i].nome}</option>`);
                }

                // Popula com os reservas do visitante
                for(var i = 0; i < data.reservasVisitante.length; i++) {
                    $('#selectTime2Subs').append(`
                            <option value="${data.reservasVisitante[i].id}">${data.reservasVisitante[i].nome}</option>`);
                }
            }
        });
    });

    $(document).on('click', '#btnEncerrarPartida', function(e) {
        var sumula_id = $('#panelTime1').data('sumula-id');

        $.ajax({
            method: 'GET',
            url: '/tempo-real/partida/'+ sumula_id +'/encerrar',
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                location.reload();
            }
        });
    });

    // ************************** Submit dos Formulários de Gol ***************************
    $('#formGol1').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime1').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/gol',
            data: { dados },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaGol1').prop('disabled', true);
            }
        });
    });

    $('#formGol2').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime2').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/gol',
            data: { dados },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaGol2').prop('disabled', true);
            }
        });
    });
    // *********************** Fim do Submit dos Formulários de Gol *************************

    // *********************** Submit dos Formulários de Cartão Amarelo *********************
    $('#formAmarelo1').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime1').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/cartao',
            data: {
                dados: dados,
                tipo: 'amarelo'
            },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaAmarelo1').prop('disabled', true);
            }
        });
    });

    $('#formAmarelo2').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime2').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/cartao',
            data: {
                dados: dados,
                tipo: 'amarelo'
            },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaAmarelo2').prop('disabled', true);
            }
        });
    });
    // ************** Fim do Submit dos Formulários de Cartão Amarelo *******************

    // ******************** Submit dos Formulários de Cartão Vermelho ********************
    $('#formVermelho1').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime1').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/cartao',
            data: {
                dados: dados,
                tipo: 'vermelho'
            },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaVermelho1').prop('disabled', true);
            }
        });
    });

    $('#formVermelho2').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime2').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/cartao',
            data: {
                dados: dados,
                tipo: 'vermelho'
            },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaVermelho2').prop('disabled', true);
            }
        });
    });
    // *************** Fim do Submit dos Formulários de Cartão Vermelho ***************

    // ******************** Submit dos Formulários de Substituição ***********************
    $('#formSubstituicao1').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime1').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/substituicao',
            data: {
                dados: dados,
            },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaSubstituicao1').prop('disabled', true);
            }
        });
    });

    $('#formSubstituicao2').on('submit', function(e) {
        e.preventDefault();
        var dados = $(this).serializeArray();
        var sumula_id = $('#panelTime2').data('sumula-id');

        $.ajax({
            headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
            method: 'POST',
            url: '/tempo-real/partida/'+ sumula_id +'/substituicao',
            data: {
                dados: dados,
            },
            dataType: 'json'
        })
        .done(function(data) {
            if(data.status == 'success') {
                $('#btnSalvaSubstituicao2').prop('disabled', true);
            }
        });
    });
    // ****************** Fim do Submit dos Formulários de Substituição ********************
</script>
@stop