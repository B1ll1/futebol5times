Para executar no LINUX
--------------------------------------------------------------------------------------------------------------------------------------------

1. É necessário primeiramente a instalar o COMPOSER para baixar as dependências
    https://getcomposer.org/download/

2. Com o composer instalado, abra o Terminal e vá até a basta raiz do projeto
    cd CAMINHO_PARA_A_PASTA/futebol5times

3. Execute o comando:
    sudo composer install

4. Execute o comando abaixo para gerar uma nova chave única para o projeto Laravel
    php artisan key:generate

5. Configure o arquivo .env para acesso ao banco de dados e configure as seguintes variáveis:
    DB_DATABASE=nome_do_banco
    DB_USERNAME=username
    DB_PASSWORD=senha

    OBS: Criar apenas o banco, não as tabelas, pois o Laravel criará as tabelas

6. Após configurar o arquivo .env execute o comando:
    php artisan migrate --seed

    OBS: Esse comando, criar o banco de dados e popula as tabelas Equipes, Jogos,
    Jogadores, Equipe_Jogos (rodadas) e Users

7. Então, execute o comando a seguir para ligar o servidor php
    php artisan serve

8. Para realizar o login (canto superior direito) e acessar a área de lances de jogos utilize
    email: narrador@email.com
    senha: 123456
------------------------------------------------------------------------------------------------------------------------------

Estrutura de pastas

app (MODELOS)
   |------- Http
   |            |------- Controllers (CONTROLADORES)
   |            |                  |---- Auth
   |            |                  |       |----- AuthController.php
   |            |                  |---- CampeonatoController.php
   |            |                  |---- RealTimeController.php
   |            |                  |---- RTviewController.php
   |            |------- routes.php (Arquivo das urls)
   |-------- Arbitro.php
   |-------- Campo.php
   |-------- Cartao.php
   |-------- Equipe.php
   |-------- Escalacao.php
   |-------- Gol.php
   |-------- Jogador.php
   |-------- Jogo.php
   |-------- Posicao.php
   |-------- Substituicao.php
   |-------- Sumula.php
   |-------- User.php
database
   |-------- migrations (Arquivos de migração do banco de dados)
   |-------- seeds (Arquivos para popular algumas tabelas)
resources
   |------- views (VIEWS)
                  |------- layouts
                  |                |---- app.blade.php (layout padrão das páginas)
                  |------- tempo_real
                  |                |---- dashboard.blade.php
                  |                |---- partida.blade.php
                  |                |---- partidas.blade.php
                  |------- campeonato.blade.php
                  |------- time.blade.php

Repositório do GitHub: https://github.com/B1ll1/futebol5times
Lá estão todos os commits com o passo a passo do desenvolvimento do sistema.

Grupo:
        Adan Santos
        Rodolfo Zahn
        Gabriel Gomes
-----------------------------------------------------------------------------------------------------------------------------
OBS: Nunca executamos esse projeto no Windows, porém tendo o composer instalado
acreditamos que o passo a passo seja o mesmo.