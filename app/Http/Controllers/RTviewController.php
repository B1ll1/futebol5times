<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Gol;
use App\Cartao;
use App\Substituicao;
use App\Jogador;

class RTviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gols()
    {
        $sumulaid = $_GET['sumulaid'];
        $golstime = DB::table('gols')->where('gols.sumula_id', '=', $sumulaid)->select('equipe_id', DB::raw('count(equipe_id) as total'))->groupBy('equipe_id')->lists('total','equipe_id');
        $golsjogador = Gol::where('sumula_id', '=', $sumulaid)->join('jogadores', 'gols.jogador_id', '=', 'jogadores.id')->select('jogador_id', 'instante', 'jogadores.nome', DB::raw('count(jogador_id) as total'))->groupBy('jogador_id')->get();
        $cartoes = Cartao::where('sumula_id', '=', $sumulaid)->join('jogadores', 'cartoes.jogador_id', '=', 'jogadores.id')->select('cartoes.jogador_id', 'cartoes.instante', 'cartoes.tipo', 'jogadores.nome')->get();
        $subs = Substituicao::where('sumula_id', '=', $sumulaid)->select(['jogador_id_sai', 'jogador_id_entra', 'instante'])->get();
        $jogadores = Jogador::all();
        $gols = Gol::where('sumula_id', '=', $sumulaid)->join('jogadores', 'gols.jogador_id', '=', 'jogadores.id')->select(['jogador_id', 'instante', 'jogadores.nome'])->get();
        return response()->json(['status' => 'success', 'golstime' => $golstime, 'golsjogador' => $golsjogador, 'cartoes' => $cartoes, 'subs' => $subs, 'jogadores' => $jogadores, 'gols' => $gols]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
