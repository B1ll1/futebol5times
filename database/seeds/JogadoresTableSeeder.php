<?php

use Illuminate\Database\Seeder;
use App\Jogador;

class JogadoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jogadores =array(
            //Internacional
            array('nome' => 'Tomás Lima Cardoso', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kauã Azevedo Santos', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Felipe Martins Alves', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diego Santos Oliveira', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Antônio Gomes Fernandes', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Santos Costa', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Douglas Lima Silva', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estevan Castro Araujo', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Martim Silva Carvalho', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Carlos Dias Oliveira', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Mateus Pereira Araujo', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Guilherme Martins Barbosa', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vitor Cavalcanti Gomes', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Antônio Fernandes Lima', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Luan Alves Goncalves', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Bruno Pinto Santos', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        //America-MG
            array('nome' => 'Ryan Cardoso Souza', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Breno Barbosa Almeida', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Douglas Azevedo Goncalves', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Joao Azevedo Goncalves', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'André Ribeiro Dias', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vinícius Oliveira Fernandes', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Gustavo Azevedo Rocha', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Thiago Rocha Ferreira', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Oliveira Correia', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Arthur Almeida Barros', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Miguel Barros Gomes', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'João Castro Pereira', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Igor Melo Rocha', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Victor Melo Carvalho', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Enzo Araujo Costa', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Tomás Barbosa Alves', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        //Cruzeiro
            array('nome' => 'Estevan Dias Barbosa', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Sousa Cavalcanti', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Barros Souza', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Nicolas Alves Barros', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kaua Cardoso Goncalves', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Bruno Rodrigues Cunha', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Miguel Rodrigues Cavalcanti', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Ryan Souza Ferreira', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Igor Cunha Cavalcanti', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Danilo Costa Correia', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kauê Rocha Azevedo', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Lima Pinto', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Pedro Ferreira Castro', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vitor Rodrigues Souza', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diogo Barbosa Lima', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Thiago Goncalves Martins', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
         //Atletico-PR
            array('nome' => 'Tomás Martins Goncalves', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Matheus Almeida Melo', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Júlio Gomes Pereira', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vinicius Melo Gomes', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Victor Correia Oliveira', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diego Rodrigues Costa', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Rafael Dias Pinto', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Mateus Dias Araujo', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Nicolas Barros Dias', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Júlio Costa Alves', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estevan Rodrigues Melo', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Renan Cunha Lima', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Samuel Cunha Castro', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diogo Rodrigues Dias', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Thiago Fernandes Pinto', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'João Silva Ribeiro', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
        //Sao Paulo
            array('nome' => 'Luis Goncalves Pinto', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Davi Rocha Souza', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Rodrigo Silva Rodrigues', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Renan Carvalho Fernandes', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Victor Correia Oliveira', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Matheus Souza Gomes', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Antônio Rocha Costa', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Cavalcanti Oliveira', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Fábio Azevedo Rodrigues', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kaua Sousa Melo', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Renan Melo Cavalcanti', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'João Oliveira Carvalho', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'André Rodrigues Ferreira', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Arthur Silva Ribeiro', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Marcos Santos Barros', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Bruno Correia Sousa', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString())
        );
        Jogador::insert($jogadores);
    }
}
