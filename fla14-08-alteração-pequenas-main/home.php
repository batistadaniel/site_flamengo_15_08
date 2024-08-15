<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['login'])) {
    $_SESSION['alert_message'] = 'Você precisa estar logado para acessar esta página!';
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
    <link rel="stylesheet" href="src/css/menu-home.css">
    <link rel="stylesheet" href="src/css/home.css">


    <title>Nação - Home</title>
</head>

<body>
    <header>
        <div class="logo-mobile">
            <a href="#"><img src="src/img/logo-crf.png" alt="Logo CRF" class="logo-mobile"></a>
        </div>
        <div class="titulo">
            <a href="#">
                <h1>Feed do Urubu</h1>
            </a>
        </div>

        <div class="menu-desktop">
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="comentarios.php?pagina=1">Comentarios</a> </li>
                    </ul>
                </nav>
            </div>
            <div id="dropdow-menu" class="dropdown-menu">
                <?php
                echo '<a style=color:#fff href="?logout=true" id="logout-button">Sair</a>';
                ?>
            </div>
            <div class="icone-perfil" id="icone-perfil">
                <i class="bi bi-person-circle"></i>
            </div>
        </div>
    </header>

    <main>
    <div class="menu-main">
            <nav>
                <ul>
                    <li>
                        <button id="historia" onclick="mostraSection('historiaClube')">Historia</button>
                    </li>

                    <li>
                        <button id="titulos" onclick="mostraSection('titulosClube')">Titulos</button>
                    </li>

                    <li>
                        <button id="curiosidades" onclick="mostraSection('curiosidadesClube')">Curiosidades</button>
                    </li>

                    <li>
                        <button id="basquete" onclick="mostraSection('basqueteClube')">Basquete</button>
                    </li>

                    <li>
                        <button>Historia</button>
                    </li>
                </ul>
            </nav>
        </div>

        <section id="historiaClube" class="section"> 
            <h1>A Origem</h1>

            <p>
                No final do século XIX, o remo era popular no Rio de Janeiro, enquanto o futebol começava a ganhar espaço. Jovens do Flamengo formaram um grupo para competir em remo e compraram um barco chamado "Pherusa". Em 6 de outubro de 1895, enfrentaram um vento forte que virou o barco. Joaquim Bahia nadou até a praia para buscar ajuda, e, após serem resgatados pelo barco "Leal", a Pherusa foi reformada novamente, mas acabou sendo roubada.
            </p>

            <div class="imagens">
                <img class="remo" src="https://estanterubronegra.com.br/wp-content/uploads/2020/11/remo_do_flamengo.jpeg" alt="Time de Remo do Flamengo no inicio.">
                <p>Time de Remo do Flamengo no inicio.</p>
            </div>

            <h1>Fundação do Clube</h1>

            <p>
                Em 17 de novembro de 1895, Nestor de Barros e outros fundaram o Grupo de Regatas do Flamengo na casa de Barros, na Praia do Flamengo. O barco "Scyra" foi a principal atração da reunião, onde foram eleitos a primeira diretoria e definidos os sócios-fundadores. A data oficial da fundação foi estabelecida para 15 de novembro. As cores iniciais do clube eram azul e ouro, mas mudaram para vermelho e preto em 1898.
            </p>

            <div class="imagens">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/1896_-_Flamengo.jpg/220px-1896_-_Flamengo.jpg" alt="Integrantes da equipe de remo do Flamengo em 1896.">
                <p>Integrantes da equipe de remo do Flamengo em 1896.</p>
            </div>

            <h1>Crescimento e Futebol</h1>

            <p>
                O Flamengo começou a se destacar nas competições, conquistando sua primeira vitória na I Regata do Campeonato Náutico do Brasil em 1898. Em 1902, o clube foi rebatizado como Clube de Regatas do Flamengo. Em 25 de outubro de 1903, antes da criação oficial do departamento de futebol, os remadores do Flamengo participaram de um amistoso contra o Botafogo, marcando o início da sua incursão no futebol.
            </p>

            <div class="imagens">
                <img src="https://images.flamengo.com.br/public/images/artigos/bodies/1524168175.jpg" alt="Flamengo na decada de 1910.">
                <p>Flamengo na decada de 1910.</p>
            </div>

            <h1>O Mais Querido do Brasil</h1>

            <p>
                Em 1927, um concurso promovido pela água mineral Salutaris e pelo Jornal do Brasil tinha como objetivo eleger o "clube mais querido do Brasil". Para participar, o torcedor deveria escrever o nome do seu time favorito no rótulo da garrafa d'água ou no cupom impresso no jornal e enviar o formulário preenchido para a sede do Jornal do Brasil, no Rio de Janeiro.
            </p>

            <p>
                O time vencedor ganharia a imponente Taça Salutaris, junto com o título de "clube mais querido do Brasil". No final da contagem, o Flamengo conquistou 254.850 votos e saiu vitorioso. Atualmente, a Taça Salutaris ocupa um lugar de destaque na sala de troféus do Clube de Regatas do Flamengo, ao lado da Copa Libertadores da América e da Taça Intercontinental de 1981.
            </p>

            <p>
                Outro fator que ajudou a consolidar a popularidade do Flamengo pelo país foi a Segunda Guerra Mundial. Com o Brasil alinhado aos Estados Unidos, foram construídas antenas de alta captação nas cidades de Natal (RN) e Belém (PA) pelos americanos, inicialmente destinadas a interceptar sinais de navios inimigos.
            </p>

            <div class="imagens">
                <img class="remo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/S%C3%A3o_Judas_Tadeu_Flamengo.jpg/180px-S%C3%A3o_Judas_Tadeu_Flamengo.jpg" alt="Santuário de São Judas Tadeu, padroeiro do Flamengo, na sede do clube, na Lagoa.">
                <p>Santuário de São Judas Tadeu, padroeiro do Flamengo, na sede do clube, na Lagoa.</p>
            </div>

            
            <p>
                Essas antenas, no entanto, permitiram a transmissão de jogos de futebol via rádio para o Norte e Nordeste do país. Naquela época, o Rio de Janeiro, então capital do Brasil, tinha uma enorme influência nacional. Além disso, o rádio era o meio de comunicação mais popular, principalmente para notícias e transmissões esportivas.
            </p>
            
            <p>
                As campanhas vitoriosas do Flamengo nos campeonatos estaduais do início dos anos 1940 ajudaram a espalhar a fama do clube pelo país. Hoje em dia, diversas pesquisas de institutos especializados continuam a confirmar que o Flamengo possui a maior torcida tanto em âmbito estadual quanto nacional.
            </p>
            
            <h1>Símbolos e cores</h1>

            <p>
                O escudo do Flamengo passou por algumas mudanças ao longo dos anos, com o último redesenho em 2018.
            </p>

            <p>
                O clube utiliza três versões: o escudo completo como logotipo oficial, o escudo de remo para atividades relacionadas ao esporte, e o monograma "CRF" no uniforme de futebol.
            </p>

            <p>
                Desde 2005, o uniforme principal apresenta apenas uma estrela dourada acima do monograma, em referência ao título mundial de 1981.
            </p>




            <a class="fontes" href="https://pt.wikipedia.org/wiki/Clube_de_Regatas_do_Flamengo">Fonte, <span></span> clique aqui!!</a>
        </section>

        <section id="titulosClube" class="section"> 
            <h1>Titulos</h1>

            <h3>INTERNACIONAIS</h3>
            <ul class="lista">
                <li>Mundial interclubes - 1981</li>
                <li>Taça Libertadores da América - 1981, 2019 e 2022 (invicto)</li>
                <li>Copa Mercosul - 1999</li>
                <li>Copa Ouro Sul-americana - 1996 (invicto)</li>
                <li>Recopa Sul-Americana - 2020</li>
            </ul>

            <h3>NACIONAIS E INTERESTADUAIS</h3>
            <ul class="lista">
                <li>Campeonato Brasileiro (8 títulos) - 1980, 1982, 1983, 1987, 1992, 2009, 2019 e 2020</li>
                <li>Copa do Brasil - 1990 (invicto), 2006, 2013 e 2022</li>
                <li>Supercopa do Brasil - 2020 e 2021</li>
                <li>Torneio Rio-São Paulo - 1940 e 1961</li>
                <li>Copa dos Campeões Regionais - 2001</li>
                <li>Copa dos Campeões Mundiais - 1997 (invicto)</li>
                <li>Taça dos Campeões Estaduais - 1956</li>
                <li>Taça dos Campeões Brasileiros - 1992</li>
                <li>Torneio do Povo - 1972</li>
            </ul>

            <h3>ESTADUAIS</h3>
            <ul class="lista">
                <li>Campeonato Carioca - (38 títulos) 1914, 1915 (invicto) 1920 (invicto), 1921, 1925, 1927, 1939, 1942, 1943, 1944, 1953, 1954, 1955, 1963, 1965, 1972, 1974, 1978, 1979, 1979 (especial - invicto), 1981, 1986, 1991, 1996 (invicto), 1999, 2000, 2001, 2004, 2007, 2008, 2009, 2011 (invicto), 2014, 2017 (invicto), 2019, 2020, 2021 e 2024 (invicto). </li>
                <li> Taça Guanabara - (24 títulos) 1970, 1972 (invicto), 1973 (invicto), 1978, 1979, 1980 (invicto), 1981, 1982, 1984, 1988, 1989 (invicto), 1995, 1996 (invicto), 1999 (invicto), 2001, 2004, 2007, 2008, 2011 (invicto), 2014, 2018, 2020, 2021 e 2024 (invicto).</li>
                <li>Taça Rio (10 títulos) - 1978 (invicto), 1983, 1985 (invicto), 1986, 1991(invicto), 1996 (invicto), 2000, 2009, 2011 (invicto) e 2019.</li>
                <li>Taça da Capital do Rio de Janeiro - 1991 (invicto) e 1993.</li>
                <li>Copa Rio - 1991 (invicto).</li>
                <li>Torneio Extra do Rio de Janeiro - 1934.</li>
                <li>Torneio Aberto do Rio de Janeiro - 1936 (invicto).</li>
                <li>Torneio Relâmpago do Rio de Janeiro - 1943.</li>
                <li>Copa Record - 2005</li>
                <li>Torneio Início do Campeonato Carioca - (6 títulos) 1920, 1922, 1946, 1951, 1952, 1959</li>
            </ul>

            <h3>TORNEIOS NO EXTERIOR</h3>
            <ul class="lista">
                <li>Torneio Quadrangular de Lima (Peru) - 1952</li>
                <li>Torneio Quadrangular da Argentina - 1953</li>
                <li>Torneio Quadrangular de Israel - 1958</li>
                <li>Torneio Hexagonal do Peru - 1959</li>
                <li>Torneio Octagonal de Verão - 1961</li>
                <li>Torneio Quadrangular da Tunísia - 1962</li>
                <li>Troféu Naranja (Espanha) - 1964 e 1986</li>
                <li>Torneio Quadrangular do Equador - 1966</li>
                <li>Torneio Quadrangular de Marrocos - 1968</li>
                <li>Torneio Palma de Mallorca (Espanha) - 1978</li>
                <li>Troféu Ramón de Carranza (Espanha) - 1979 e 1980</li>
                <li>Troféu Ciudad de Santander (Espanha) - 1980</li>
                <li>Capa Punta del Este (Uruguai) - 1981</li>
                <li>Torneio Internacional de Nápoles (Itália) - 1981</li>
                <li>Torneio Air Gabon (Gabão) - 1987</li>
                <li>Torneio Internacional de Angola - 1987</li>
                <li>Copa Kirin (Japão) - 1988</li>
                <li>Troféu Colombino (Espanha) - 1988</li>
                <li>Torneio de Hamburgo (Alemanha Ocidental) - 1989</li>
                <li>Capa Marlboro (Estados Unidos) - 1990</li>
                <li>Taça Libertad (Argentina) - 1993</li>
                <li>Torneio See'94 (Malásia) - 1994</li>
                <li>Florida Cup - 2019</li>
            </ul>

            <h3>TORNEIOS INTERNACIONAIS NO BRASIL</h3>
            <ul class="lista">
                <li>Torneio Internacional do Rio de Janeiro - 1954 e 1955</li>
                <li>Torneio Internacional do Morumbi - 1957</li>
                <li>Torneio Internacional de Verão - 1970 e 1972</li>
                <li>Torneio QUadrangular Internacional de Goiás - 1975</li>
            </ul>

            <h3>TORNEIOS INTERESTADUAIS</h3>
            <ul class="lista">
                <li>Torneio Triangular de Curitiba - 1953</li>
                <li>Torneio Triangular de Goiás - 1965</li>
                <li>Torneio Quadrangular do Espírito Santo - 1965</li>
                <li>Torneio 320 Anos de Jundiaí (SP) - 1975</li>
                <li>Torneio Elmo Serejo (DF) - 1976</li>
                <li>Torneio Inauguração do Estádio José Fragelli em Cuiabá/MT - 1976</li>
                <li>Torneio Quadrangular de Varginha (MG) - 1990</li>
                <li>Torneio Cidade de Brasília - 1997</li>
            </ul>

            <h3>TORNEIOS MUNICIPAIS / ESTADUAIS</h3>
            <ul class="lista">
                <li>Taça Madame Gaby Coelho Netto - 1916</li>
                <li>Troféu América Fabril - 1919 e 1922<br></li>
            </ul>

            <a class="fontes" href="https://www.flamengo.com.br/titulosdoflamengo">Fonte, <span></span> clique aqui!!</a>
        </section>

        <section id="curiosidadesClube" class="section">
            <h2>Por que o mascote do flamengo é um urubu?</h2>

            <p>
                O mascote do Flamengo é, talvez, o mais icônico de todos os mascotes brasileiros, mas você sabe por que ele foi adotado? O primeiro mascote do Flamengo era o Popeye – sim, aquele desenho beeem antigo – mas, nos anos 60, a torcida do Flamengo adotou o urubu após provocações das torcidas adversárias. 
            </p>

            <p>
                A história conta que 4 amigos flamenguistas soltaram um urubu – sim, o animal – com uma bandeira do time em um clássico contra o Botafogo, em 1969. Como o time venceu a partida, a torcida cantou em sua homenagem e nunca mais deixou o urubu de lado! 
            </p>

            <div class="imagens">
                <img class="urubu" src="https://www.ofutebolero.com.br/image/ofutebolerocombr/urubu-e-mascote-do-flamengo-1702061780.jpeg" alt="Time do Flamengo Campeão Sul-Americano de Clubes Campeões de Basquete Masculino de 1953.">
                <p>Time do Flamengo Campeão Sul-Americano de Clubes Campeões de Basquete Masculino de 1953.</p>
            </div>
        </section>

        <section id="basqueteClube" class="section">
            <h2>Basquete Masculino</h2>

            <p>
                O basquete masculino do Flamengo começou sua trajetória em 1919, vencendo o primeiro campeonato de basquete organizado no Brasil. Em 1932, o clube conquistou seu primeiro título oficial do Campeonato Carioca. A década de 1950 foi marcante para o Flamengo, com a equipe vencendo 10 campeonatos estaduais consecutivos e conquistando, em 1953, o primeiro título internacional de um clube brasileiro, no Campeonato Sul-Americano de Clubes.
            </p>

            <p>
                Nos anos 2000, o Flamengo voltou a brilhar. Em 2008, venceu seu primeiro título do NBB (Novo Basquete Brasil) e, em 2014, alcançou o topo do basquete mundial ao vencer o Mundial de Clubes contra o Maccabi Tel Aviv, de Israel. Esse feito histórico colocou o Flamengo ao lado de clubes como Barcelona e Real Madrid, que possuem títulos mundiais tanto no futebol quanto no basquete.
            </p>

            <p>
                O Flamengo continuou a dominar o cenário do basquete brasileiro, vencendo diversos títulos do NBB e da Copa Super 8, além de consagrar-se bicampeão mundial em 2022, ao derrotar o San Pablo Burgos, da Espanha. Isso consolidou o clube como uma das maiores potências do basquete, tanto no Brasil quanto no cenário internacional.
            </p>

            <div class="imagens">
                <a href="https://flaestatistica.com.br/fotos/time-do-c-r-flamengo-esportes-olimpicos/1953/campeonato-sulamericano-de-clubes-campeoes-de-1953" target="_blank"><img class="basqueteInicio" src="https://flaestatistica.com.br/imagens/fotos/1953TimeSul-AmericanoClubesBasquete.jpg" alt="Time do Flamengo Campeão Sul-Americano de Clubes Campeões de Basquete Masculino de 1953."></a> 
                <p>Time do Flamengo Campeão Sul-Americano de Clubes Campeões de Basquete Masculino de 1953.</p>
            </div>

            <h2>Basquete Feminino</h2>

            <p>
                O basquete feminino do Flamengo teve início oficial na década de 1960, período em que o clube começou a investir no esporte para mulheres. Logo no início, a equipe conquistou seu espaço no cenário estadual, sendo uma das principais forças do basquete feminino no Rio de Janeiro.
            </p>

            <p>
                Durante as décadas de 1970 e 1980, o time feminino do Flamengo se destacou ao conquistar diversos títulos estaduais e regionais. Com jogadoras talentosas e uma estrutura de apoio sólida, o clube se tornou uma referência no basquete feminino, sendo uma potência no esporte no estado.
            </p>

            <p>
                Nos anos 1990, o Flamengo continuou competitivo, participando de torneios nacionais e disputando de igual para igual com os principais clubes do Brasil. A equipe feminina contribuiu para a popularização do basquete no clube, com um legado de dedicação e conquistas.
            </p>

            <p>
                Atualmente, o basquete feminino do Flamengo continua representando o clube em competições, com foco no desenvolvimento de novas atletas e na promoção do esporte entre as mulheres. O clube mantém seu compromisso de fomentar o basquete feminino e continuar a história de glórias que construiu ao longo das décadas.
            </p>

            <div class="imagens">
                <a href="https://flaestatistica.com.br/fotos/time-do-c-r-flamengo-esportes-olimpicos/1965/flamengo-bicampeao-carioca-basquete-feminino-1965" target="_blank"><img class="basqueteInicio" src="https://flaestatistica.com.br/imagens/fotos/bicampeacariocabasquetefeminino64-65.jpg" alt="Equipe bicampeã carioca de basquete feminino 64-65."></a> 
                <p>Equipe bicampeã carioca de basquete feminino 64-65. <br><br> Norminha (nº14), Amelinha (nº5), Dilcy (nº11), Angelina (nº6), Didi (nº8).</p>

            </div>

        </section>

        <!-- <section>
            <h1>Em construção 🏗️🚧 </h1>
        </section> -->
    </main>
    
    <script>
        let iconePerfil = document.getElementById('icone-perfil');
        let dropdownMenu = document.getElementById('dropdow-menu');

        iconePerfil.addEventListener('click', (event) => {
            // Previne que o clique no ícone feche o menu imediatamente
            event.stopPropagation();
            // Alterna a visibilidade do menu
            dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
        });

        document.addEventListener('click', (event) => {
            // Verifica se o clique foi fora do ícone e do menu
            if (!iconePerfil.contains(event.target) && !dropdownMenu.contains(event.target)) {
                dropdownMenu.style.display = 'none'; // Oculta o menu
            }
        });

        function mostraSection(sectionId) {
    
            // Logica pra ocultar todas as secoes
            let secoes = document.getElementsByTagName('section'); // Conta todas as secoes pela tag 
            for (let i = 0; i < secoes.length; i++) {
                secoes[i].style.display = 'none';
            }
            
            // Exibe a secao que foi clicada passando um parametro que e o Id da secao
            let secao = document.getElementById(sectionId);
            secao.style.display = 'flex';
        }


    </script>
</body>
</html>