@extends('layouts.app')

@section('specific_styles')
<style type="text/css">

</style>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: green; color:white; font-size: 1.5em;"><strong>Jogos ao Vivo</strong></div>
                <div class="panel-body  text-center">
                    <ul id="jogos" style="list-style-type: none;">

                    </ul>
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
    $(document).ready(function() {
        setInterval(function() {
            $.ajax({
                method: 'GET',
                url: '/tempo-real/partidas/listar',
                dataType: 'json'
            }).done(function(data) {
                if(data.status == 'success') {
                    $('#jogos').empty();
                    for(var i = 0; i < data.sumulas.length; i++) {
                        $('#jogos').append(`
                            <a href="/tempo-real/partida/${data.sumulas[i].id}/ao-vivo">
                                <li>
                                    <span style="padding-right: 50px;">${data.casa[i].nome}</span>
                                    <img src="/images/${data.casa[i].nome.toLowerCase()}.png"/ style="padding-right: 50px;">
                                    X
                                    <img src="/images/${data.visitante[i].nome.toLowerCase()}.png" style="padding-left: 50px;"/>
                                    <span style="padding-left: 50px;">${data.visitante[i].nome}</span>
                                </li>
                            </a><br>
                        `);
                    }
                }
            });
        }, 1000);
    });
</script>
@stop