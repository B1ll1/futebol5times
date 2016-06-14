<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipe;
use App\Http\Requests;
use Yajra\Datatables\Facades\Datatables;
use Illuminate\Support\Facades\DB;
use App\Gol;
use App\Sumula;
use App\Jogador;
use App\Cartao;
use App\Jogo;
use App\Campo;

class CampeonatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=null)
    {
        //arrays que serao utilizados
        $classificacao = [1 => ['nome'=>'Internacional','pontos'=>0,'jogos'=>0,'vitorias'=>0, 'empates'=>0, 'derrotas'=>0, 'gp'=>0, 'gc'=>0, 'sg'=>0], 2 => ['nome'=>'América-MG','pontos'=>0,'jogos'=>0,'vitorias'=>0, 'empates'=>0, 'derrotas'=>0, 'gp'=>0, 'gc'=>0, 'sg'=>0], 3 => ['nome'=>'Cruzeiro','pontos'=>0,'jogos'=>0,'vitorias'=>0, 'empates'=>0, 'derrotas'=>0, 'gp'=>0, 'gc'=>0, 'sg'=>0], 4 => ['nome'=>'Atlético-PR','pontos'=>0,'jogos'=>0,'vitorias'=>0, 'empates'=>0, 'derrotas'=>0, 'gp'=>0, 'gc'=>0, 'sg'=>0], 5 => ['nome'=>'São Paulo','pontos'=>0,'jogos'=>0,'vitorias'=>0, 'empates'=>0, 'derrotas'=>0, 'gp'=>0, 'gc'=>0, 'sg'=>0]];
        $golsporjogo = [1 =>[1=>0,2=>0],2 =>[3=>0,4=>0],3 =>[1=>0,5=>0],4 =>[3=>0,2=>0],5 =>[1=>0,3=>0],6 =>[4=>0,5=>0],7 =>[1=>0,4=>0],8 =>[2=>0,5=>0],9 =>[2=>0,4=>0],10 =>[3=>0,5=>0],11 =>[2=>0,1=>0],12 =>[4=>0,3=>0],13 =>[5=>0,1=>0],14 =>[2=>0,3=>0],15 =>[3=>0,1=>0],16 =>[5=>0,4=>0],17 =>[4=>0,1=>0],18 =>[5=>0,2=>0],19 =>[4=>0,2=>0],20 =>[5=>0,3=>0]];
        $ultimosjogos = [];
        $proximosjogos = [];
        $cartoes = array_fill(1,80,['amarelo'=>0,'vermelho' =>0]);
        $sumula = Sumula::whereNotNull('ganhador_id')->get();

        foreach($sumula as $obj){
            if($obj->ganhador_id!=0){
                //Se nao for empate
                //soma 3 pontos pro time que venceu 1 jogo
                $classificacao[$obj->ganhador_id]['pontos'] +=3;
                //soma 1 jogos time da casa
                $classificacao[$obj->equipe_id_casa]['jogos'] +=1;
                //soma 1 jogo time visitante
                $classificacao[$obj->equipe_id_visitante]['jogos'] +=1;
                if($obj->equipe_id_casa==$obj->ganhador_id){
                    //soma 1 vitoria time da casa
                    $classificacao[$obj->equipe_id_casa]['vitorias'] +=1;
                    //soma 1 derrota time visitante
                    $classificacao[$obj->equipe_id_visitante]['derrotas'] +=1;
                }
                else{
                    //soma 1 vitoria time visitante
                    $classificacao[$obj->equipe_id_visitante]['vitorias'] +=1;
                    //soma 1 derrota time da casa
                    $classificacao[$obj->equipe_id_casa]['derrotas'] +=1;
                }

            }
            else{
                //Se for empate
                //soma 1 ponto time da casa
                $classificacao[$obj->equipe_id_casa]['pontos'] +=1;
                //soma 1 ponto time visitante
                $classificacao[$obj->equipe_id_visitante]['pontos'] +=1;
                //soma 1 jogo time da casa
                $classificacao[$obj->equipe_id_casa]['jogos'] +=1;
                //soma 1 jogo time visitante
                $classificacao[$obj->equipe_id_visitante]['jogos'] +=1;
                //soma 1 empate time da casa
                $classificacao[$obj->equipe_id_casa]['empates'] +=1;
                //soma 1 empate time visitante
                $classificacao[$obj->equipe_id_visitante]['empates'] +=1;
            }
            foreach($obj->gols as $gol){
                $equipe_id_casa = $obj->equipe_id_casa;
                $equipe_id_visitante = $obj->equipe_id_visitante;
                if($gol->equipe_id==$equipe_id_casa){
                    ///soma 1 gol para time da casa
                    $golsporjogo[$gol->sumula_id][$equipe_id_casa] +=1;
                    //soma 1 gp time da casa
                    $classificacao[$equipe_id_casa]['gp']+=1;
                    //soma 1 sg time da casa
                    $classificacao[$equipe_id_casa]['sg']+=1;
                    //soma 1 gc time visitante
                    $classificacao[$equipe_id_visitante]['gc']+=1;
                    //subtrai 1 sg time visitante
                    $classificacao[$equipe_id_visitante]['sg']-=1;
                }
                else if($gol->equipe_id==$equipe_id_visitante){
                    //soma 1 gol time visitante
                    $golsporjogo[$gol->sumula_id][$equipe_id_visitante] +=1;
                     //soma 1 gc time da casa
                    $classificacao[$equipe_id_casa]['gc']+=1;
                     //soma 1 sg time visitante
                    $classificacao[$equipe_id_visitante]['sg']+=1;
                     //soma 1 gp time visitante
                    $classificacao[$equipe_id_visitante]['gp']+=1;
                     //subtrai 1 sg time da casa
                    $classificacao[$equipe_id_casa]['sg']-=1;
                }
            }
        }

       function sortBy($field, &$array, $direction = 'asc')
       //ordena por campo
        {
            usort($array, create_function('$a, $b', '
                $a = $a["' . $field . '"];
                $b = $b["' . $field . '"];

                if ($a == $b)
                {
                    return 0;
                }

                return ($a ' . ($direction == 'asc' ? '>' : '<') .' $b) ? -1 : 1;
            '));

            return true;
        }
        $classificacao_ordenada= $classificacao;
        //retorna os jogos com os dados relevantes;
        $rodadas = DB::table('equipe_jogos')->select(['equipe_jogos.equipe_id_casa as casaid' , 'equipe_jogos.equipe_id_visitante as visitanteid', 'equipe_jogos.id as id', 'equipe_jogos.campo_id as campo_id'])->paginate(2);
        //ordena o array pelo time com mais pontos
        sortBy('pontos',   $classificacao_ordenada);
        //retorna todos os gols
        $gols = DB::table('gols')->select('jogador_id', DB::raw('count(jogador_id) as total'))->groupBy('jogador_id')->orderBy('total','desc')->lists('total','jogador_id');
        //retorna todos os jogadores
        $jogadores = DB::table('jogadores')->select(['jogadores.id as id', 'jogadores.nome as nome', 'jogadores.equipe_id as equipeid'])->get();
        //retorna todos os jogos com os campos
        // $jogos = Jogo::join('campos', 'jogos.campo_id','=', 'campos.id')->join('equipe_jogos', 'jogos.id', '=', 'equipe_jogos.jogo_id')->get();
        $jogos = Jogo::all();
        $campos = Campo::all();
        if(isset($id)){
            //jogos que ainda nao ocorreram
            $sumula_n = Sumula::whereNull('ganhador_id')->get();
            foreach($sumula as $obj){
                if($obj->equipe_id_casa==$id ||$obj->equipe_id_visitante==$id){
                    //popula o array  de ultimos jogos do time
                    array_push($ultimosjogos,['casaid'=>$obj->equipe_id_casa, 'visitanteid' => $obj->equipe_id_visitante, 'jogo_id' => $obj->id]);
                }
            }
            foreach($sumula_n as $obj){
                if($obj->equipe_id_casa==$id ||$obj->equipe_id_visitante==$id){
                    //popula o array de proximos jogos do time
                    array_push($proximosjogos,['casaid'=>$obj->equipe_id_casa, 'visitanteid' => $obj->equipe_id_visitante, 'jogo_id' => $obj->id]);
                }
            }
            //retorna proximos 3 jogos
            $proximosjogos = array_slice($proximosjogos,0,3,true);
            //retorna ultimos 3 jogos
            $ultimosjogos = array_slice($ultimosjogos,-3,3,true);
            //retorna os gols feitos pelos jogadores da equipe desejada
            $gols = DB::table('gols')->where('equipe_id', '=', $id)->select('jogador_id', DB::raw('count(jogador_id) as total'))->groupBy('jogador_id')->lists('total','jogador_id');
            //retorna os jogadores da equipe desejada
            $jogadores = DB::table('jogadores')->where('jogadores.equipe_id', '=', $id)->select(['jogadores.id as id', 'jogadores.nome as nome', 'jogadores.equipe_id as equipeid'])->get();

            foreach($jogadores as $jogador){
                //retorna os cartoes de um jogador
                // $cartao = Cartao::where('jogador_id', '=', $jogador->id)->get();
                $cartoes_aux = Jogador::find($jogador->id)->cartoes;
                foreach($cartoes_aux as $cartao){
                    array_merge($cartoes,[$jogador->id =>['amarelo'=> 0, 'vermelho' =>0]]);

                    if($cartao->tipo == "amarelo"){
                        $cartoes[$jogador->id]['amarelo'] += 1;
                    }
                    else if($cartao->tipo == "vermelho"){
                        $cartoes[$jogador->id]['vermelho'] += 1;
                    }
                }
            }
            return view('time')->with(compact('classificacao', 'rodadas', 'classificacao_ordenada', 'golsporjogo', 'id', 'ultimosjogos', 'proximosjogos', 'jogadores', 'gols', 'cartoes', 'jogos'));
        }
        else{
            return view('campeonato')->with(compact('classificacao', 'rodadas', 'classificacao_ordenada', 'golsporjogo', 'gols', 'jogadores', 'jogos', 'campos'));
        }

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

    }
}
