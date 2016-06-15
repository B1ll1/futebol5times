<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Sumula;
use App\Equipe;
use App\Gol;
use App\Jogador;
use App\Cartao;
use App\Escalacao;
use App\Substituicao;
use Carbon\Carbon;
use App\Posicao;

class RealTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sumulas = Sumula::whereNull('ganhador_id')->get();

        return view('tempo_real.partidas', compact('sumulas'));
    }

    public function live($sumulaId)
    {
        $sumula = Sumula::findOrFail($sumulaId);

        $escalacaoCasa = Escalacao::where('sumula_id', $sumulaId)->where('equipe_id', $sumula->equipe_id_casa)->get();
        $escalacaoVisitante = Escalacao::where('sumula_id', $sumulaId)->where('equipe_id', $sumula->equipe_id_visitante)->get();

        return view('tempo_real.partida', compact('sumula', 'escalacaoCasa', 'escalacaoVisitante'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $sumulas = Sumula::whereNull('ganhador_id')->get();

        return view('tempo_real.dashboard', compact('sumulas'));
    }

    public function getJogo($sumulaId)
    {
        $sumula = Sumula::findOrFail($sumulaId);

        $casa = Equipe::findOrFail($sumula->equipe_id_casa);
        $jogadoresCasa = $casa->jogadores;
        $visitante = Equipe::findOrFail($sumula->equipe_id_visitante);
        $jogadoresVisitante = $visitante->jogadores;

        if($casa && $visitante) {
            return response()->json([
                'status' => 'success',
                'casa' => $casa,
                'jogadoresCasa' => $jogadoresCasa,
                'visitante' => $visitante,
                'jogadoresVisitante' => $jogadoresVisitante,
            ]);
        } else {
            return response()->json(['status' => 'fail']);
        }
    }

    public function postGol(Request $request, $sumulaId)
    {
        $datas = $request['dados'];
        $inputs = [];

        foreach($datas as $data) {
            $inputs[$data['name']] = $data['value'];
        }
        $jogador = Jogador::findOrFail($inputs['jogador_id']);

        $gol = new Gol([
            'sumula_id' => $sumulaId,
            'jogador_id' => $inputs['jogador_id'],
            'equipe_id' =>  $jogador->equipe->id,
            'instante' => Carbon::now()
        ]);
        $gol->save();

        if($gol)
            return response()->json(['status' => 'success']);
        else
            return response()->json(['status' => 'fail']);

    }

    public function postCartao(Request $request, $sumulaId)
    {
        $datas = $request['dados'];
        $inputs = [];

        foreach($datas as $data) {
            $inputs[$data['name']] = $data['value'];
        }
        $jogador = Jogador::findOrFail($inputs['jogador_id']);

        $cartao = new Cartao([
            'sumula_id' => $sumulaId,
            'jogador_id' => $inputs['jogador_id'],
            'instante' => Carbon::now(),
            'tipo' => $request['tipo']
        ]);
        $cartao->save();

        if($cartao)
            return response()->json(['status' => 'success']);
        else
            return response()->json(['status' => 'fail']);

    }

    public function postEscalacao(Request $request, $sumulaId)
    {
        $sumula = Sumula::findOrFail($sumulaId);
        $casa = Equipe::findOrFail($sumula->equipe_id_casa);
        $visitante = Equipe::findOrFail($sumula->equipe_id_visitante);

        $reservasCasa = [];
        $reservasVisitante = [];

        foreach ($casa->jogadores as $key => $jogador) {
            if($key > 10) {
                array_push($reservasCasa, $jogador);
            }
            else {
                $escalacao = Escalacao::create([
                    'sumula_id' => $sumulaId,
                    'jogador_id' => $jogador->id,
                    'equipe_id' => $jogador->equipe->id
                ]);
                if($key<1){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Goleiro'
                    ]);
                }
                else if($key>=1 && $key<=4){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Defesa'
                    ]);
                }
                else if($key>=5 && $key<=8){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Meio Campo'
                    ]);
                }
                else if($key>=9 && $key<=10){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Atacante'
                    ]);
                }
            }
        }

        $jogadoresCasa = Escalacao::join('jogadores', 'jogadores.id', '=', 'escalacao.jogador_id')
            ->where('escalacao.equipe_id', $casa->jogadores()->first()->equipe->id)
            ->select('jogadores.*')->get();

        foreach ($visitante->jogadores as $key => $jogador) {
            if($key > 10) {
                array_push($reservasVisitante, $jogador);
            }
            else {
                $escalacao = Escalacao::create([
                    'sumula_id' => $sumulaId,
                    'jogador_id' => $jogador->id,
                    'equipe_id' => $jogador->equipe->id
                ]);
                if($key<1){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Goleiro'
                    ]);
                }
                else if($key>=1 && $key<=4){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Defesa'
                    ]);
                }
                else if($key>=5 && $key<=8){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Meio Campo'
                    ]);
                }
                else if($key>=9 && $key<=10){
                    Posicao::create([
                        'escalacao_id' => $escalacao->id,
                        'jogador_id' => $jogador->id,
                        'nome' => 'Atacante'
                    ]);
                }
            }
        }
        $jogadoresVisitante = Escalacao::join('jogadores', 'jogadores.id', '=', 'escalacao.jogador_id')
            ->where('escalacao.equipe_id', $visitante->jogadores()->first()->equipe->id)
            ->select('jogadores.*')->get();

        if($jogadoresCasa && $jogadoresVisitante) {
            return response()->json([
                'status' => 'success',
                'jogadoresCasa' => $jogadoresCasa,
                'jogadoresVisitante' => $jogadoresVisitante,
                'reservasCasa' => $reservasCasa,
                'reservasVisitante' => $reservasVisitante,
            ]);
        }
        else {
            return response()->json(['status' => 'fail']);
        }
    }

    public function postSubstituicao(Request $request, $sumulaId)
    {
        $datas = $request['dados'];
        $inputs = [];

        foreach($datas as $data) {
            $inputs[$data['name']] = $data['value'];
        }

        $substituicao = Substituicao::create([
            'sumula_id' => $sumulaId,
            'jogador_id_sai' => $inputs['jogador_id_sai'],
            'jogador_id_entra' => $inputs['jogador_id_entra'],
            'instante' => Carbon::now()
        ]);

        if($substituicao) {
            return response()->json(['status' => 'success']);
        }
        else {
            return response()->json(['status' => 'fail']);
        }
    }

    public function finishGame($sumulaId)
    {
        $sumula = Sumula::findOrFail($sumulaId);

        $golsCasa = count(Gol::where('sumula_id', $sumulaId)->where('equipe_id', $sumula->equipe_id_casa)->get());
        $golsVisitante = count(Gol::where('sumula_id', $sumulaId)->where('equipe_id', $sumula->equipe_id_visitante)->get());

        if ($golsCasa > $golsVisitante) {
            $vencedor = $sumula->equipe_id_casa;
        }
        else if ($golsCasa < $golsVisitante) {
            $vencedor = $sumula->equipe_id_visitante;
        }
        else {
            $vencedor = 0;
        }

        $sumula->ganhador_id = $vencedor;
        $sumula->update();

        if ($vencedor || $vencedor == 0) {
            return response()->json(['status' => 'success']);
        }
        else {
            return response()->json(['status' => 'fail']);
        }
    }
}
