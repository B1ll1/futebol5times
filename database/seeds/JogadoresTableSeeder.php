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

            array('nome' => 'Tomás Lima', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kauã Azevedo', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Felipe Martins', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diego Santos', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Antônio Gomes', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Santos', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Douglas Lima', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estevan Castro', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Martim Silva', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Carlos Dias', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Mateus Pereira', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Guilherme Martins', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vitor Cavalcanti', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Antônio Fernandes', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Luan Alves', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Bruno Pinto', 'equipe_id' => 1, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),

            array('nome' => 'Ryan Cardoso', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Breno Barbosa', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Douglas Azevedo', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Joao Azevedo', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'André Ribeiro', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vinícius Oliveira', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Gustavo Azevedo', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Thiago Rocha', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Oliveira', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Arthur Almeida', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Miguel Barros', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'João Castro', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Igor Melo', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Victor Melo', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Enzo Araujo', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Tomás Barbosa', 'equipe_id' => 2, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),

            array('nome' => 'Estevan Dias', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Sousa', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Barros', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Nicolas Alves', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kaua Cardoso', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Bruno Rodrigues', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Miguel Rodrigues', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Ryan Souza', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Igor Cunha', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Danilo Costa', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kauê Rocha', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Lima', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Pedro Ferreira', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vitor Rodrigues', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diogo Barbosa', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Thiago Goncalves', 'equipe_id' => 3, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),

            array('nome' => 'Tomás Martins', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Matheus Almeida', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Júlio Gomes', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Vinicius Melo', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Victor Correia', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diego Rodrigues', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Rafael Dias', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Mateus Dias', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Nicolas Barros', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Júlio Costa', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Estevan Rodrigues', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Renan Cunha', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Samuel Cunha', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Diogo Rodrigues', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Thiago Fernandes', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'João Silva', 'equipe_id' => 4, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),

            array('nome' => 'Luis Goncalves', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Davi Rocha', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Rodrigo Silva', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Renan Carvalho', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Victor Correia', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Matheus Souza', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Antônio Rocha', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Leonardo Cavalcanti', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Fábio Azevedo', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Kaua Sousa', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Renan Melo', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'João Oliveira', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'André Rodrigues', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Arthur Silva', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Marcos Santos', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            array('nome' => 'Bruno Correia', 'equipe_id' => 5, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),

            // array('nome' => 'Leonardo Correia', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Joao Melo', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Diogo Almeida', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Ryan Cardoso', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Miguel Correia', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Alex Fernandes', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Fábio Fernandes', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Gabriel Gomes', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Martim Goncalves', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Vitor Ribeiro', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Luiz Souza', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Danilo Alves', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Otávio Alves', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Miguel Dias', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Martim Rocha', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString()),
            // array('nome' => 'Enzo Barbosa', 'equipe_id' => 6, 'created_at' => \Carbon\Carbon::now()->toDateTimeString(), 'updated_at' => \Carbon\Carbon::now()->toDateTimeString())
        );
        Jogador::insert($jogadores);
    }
}
