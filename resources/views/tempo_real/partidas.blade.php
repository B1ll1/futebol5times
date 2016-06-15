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
                <div class="panel-heading">Jogos ao Vivo</div>
                <div class="panel-body  text-center">
                    <ul style="list-style-type: none;">
                        @foreach($sumulas as $sumula)
                        @unless($sumula->escalacao->isEmpty())
                        <a href="{{ route('real_time.live', $sumula->id)}}"><li>{{ $sumula->equipeCasa->nome}} <img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeCasa->nome) }}.png"> x <img src="http://dev.futebol.com/images/{{ strtolower($sumula->equipeVisitante->nome) }}.png"> {{ $sumula->equipeVisitante->nome }}</li></a>
                        @endunless
                        @endforeach
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

</script>
@stop