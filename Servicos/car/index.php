<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../../bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>
        body {
            padding: 0;
            margin: 0;
            border: 0;
            box-sizing: border-box; 
        }

        #topo{
            max-width: 24%;
            height: 100%;
            padding: 20px;
            float: left;
        }

        #topo img{
            width: 93%;
            height: 21%;
        }

        #teste {
            background-color: transparent;
            border: none;
            color: #6e6e6e;
            font-weight: bold;
            margin: 0;
            padding: 15px 20px 5px 20px;
        }

        #teste:hover {
            color: #6abb51;
            border-bottom: 2px solid #6abb51;
        }

        .container {
            float: left;
            width: 61%;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        footer {
            position: absolute;
            background-color: green;
            width: 100%;
            margin: 0;
            margin-top: 10%;
        }

        div#op {
            display: inline-block;
            width: 33.30%;
            height: 100%;
            float: left;
        }

        div#op img{
            width: 45%;
            height: 27%%;
            margin-top: 22%;
            margin-left: 22%;
        }

        div#op1 {
            display: inline-block;
            width: 33.30%;
            height: 100%;
            float: left;
        }

        div#op2 {
            display: inline-block;
            width: 33.30%;
            height: 100%;
        }

        div#op2 img{
            width: 45%;
            height: 27%%;
            margin-top: 21%;
            margin-left: 22%;
        }

        div#base-linkGroup{
            margin: 7% 0 0 0;
        }

        div#base-link a {
            text-decoration: none;
        }

        div#base-link h6{
            padding: 10px;
            background-color: transparent;
            border: none;
            color: white;
            font-weight: bold;
            width: 100%;
            height: 100%;
            text-align: center;
            padding: 5px;
        }

        div#base-link1 h2{
            padding: 10px;
            color: white;
            text-align: center;
            width: 100%;
            height: 100%;
        }

        div#centro h2{
        }

        button.accordion-button {
            background-color: #f4f3f3;
            margin-bottom: 0.2%;
            border-radius: 10px;
            font-size: 45.2%;
        }

        div#centro{

        }

        div.card-body{
          background-color: #f7f7f7;
          padding: 8%;
        }

        div.card-body h5{
          margin-bottom: 9%;
          font-weight: bold;
        }



        div.card-body button{
          margin: 3% 0 0 33%;
        }

        div.card-body2{
          background-color: #f7f7f7;
          padding: 8% 3% 8% 3%;
        }

        div.card-body2 h5{
          margin-bottom: 9%;
          font-weight: bold;
        }



        div.card-body2 button{
          margin: 3% 0 0 37%;
        }

        div.tab-content {
            min-height: 500px;
        }
        
        .tab-content .tab-pane{ 
            border:solid 1px #d3d3d3;  
            border-top: 0; 
            padding: 2%;  
        }

        button#btns {
            color:black;
            background-color: transparent;
            border-color: #4a8a45;
            color: #4a8a45;
            border-width: 2px;
            margin: 1.5%;
            padding: 1.2% 2% 1.2% 2%;
            max-width: 25%;
        }

        button#btns:hover {
            background-color: #4a8a45;
            color:white;
        }



        .tab-pane a{
            text-decoration: none;
        }

        /* Smaller than standard 960 (devices and browsers) */
        @media only screen and (min-width: 901px) {
            footer{
                height: 33%;
            }
            div#centro {
                margin: 1% 20% 0 20%;
            }
            div#sistema {
                margin: 1% 20% 0 20%;
            }
        }

        /* All Mobile Sizes (devices and browser) */
        @media only screen and (max-width: 900px) {
            footer{
                height: 25%;
            }
            div#centro {
                margin: 2% 4% 0 4%;
            }
            div#base-link1 h2 {
              font-size: 12px;
            }
            div.nav button{
                font-size: 12px;
            }
        }

        /* Smaller than standard 960 (devices and browsers) */
        @media only screen and (max-width: 959px) {
            h6{
                font-size: 10px;
            }
        }

        /* Tablet Portrait size to standard 960 (devices and browsers) */
        @media only screen and (min-width: 768px) and (max-width: 959px) {
            h6{
                font-size: 12px;
            }
        }

        /* All Mobile Sizes (devices and browser) */
        @media only screen and (max-width: 767px) {
            h6{
                font-size: 14px;
            }
        }

        /* Mobile Landscape Size to Tablet Portrait (devices and browsers) */
        @media only screen and (min-width: 480px) and (max-width: 767px) {
            h6{
                font-size: 9px;
            }
        }

        /* Mobile Portrait Size to Mobile Landscape Size (devices and browsers) */
        @media only screen and (max-width: 479px) {
            h6{
                font-size: 7px;
            }
        }

    </style>
</head>
<body>
<div style="display: inline-block;width: 100%;">
<!-- Logo Governo / FEMARH -->
    
    <div id="topo">
        <img src="../../imagens/FEMARH-LOGO1.png" alt="">
    </div>

<!-- Menu Suspenso -->

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#conteudoNavbarSuportado" aria-bs-controls="conteudoNavbarSuportado" aria-bs-expanded="false" aria-bs-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
        

    <li class="nav-item active">
        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Home
        </button>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Institucional
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Quem somos</a></li>
            <li><a class="dropdown-item" href="#">Presidência</a></li>
            <li><a class="dropdown-item" href="#">Fundo Estadual do Meio Ambiente - FEMA</a></li>
            <li><a class="dropdown-item" href="#">Biblioteca</a></li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Colegiado
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
                <a class="dropdown-item" href="#">Conselhos  &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                    <a class="dropdown-item" href="#">Submenu item 1</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Submenu item 2</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Submenu item 4</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">Submenu item 5</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="#">Comitês</a></li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Diretorias
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Diretoria de Recursos Hídricos - DRHI</a></li>
            <li><a class="dropdown-item" href="#">Diretoria de Gestão Florestal - DIFLOR</a></li>
            <li><a class="dropdown-item" href="#">Diretoria de Licenciamento e Gestão Ambiental - DLGA</a></li>
            <li><a class="dropdown-item" href="#">Diretoria de Monitoramento e Controle Ambiental - DMCA</a></li>
            <li><a class="dropdown-item" href="#">Diretoria Administrativa e Financeira - DIRAF</a></li>
            <li><a class="dropdown-item" href="#">Diretoria de Pesquisa e Tecnologia e Gestão Territorial - DPTGT</a></li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Banco de Leis
        </button>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Transparência
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Controladoria</a></li>
            <li><a class="dropdown-item" href="#">Transparência FEMARH</a></li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Serviços
        </button>
      </li>


      <li class="nav-item dropdown">
        <button type="button" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Contato
        </button>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Ouvidoria
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">FALA BR</a></li>
        </ul>
      </li>


    </ul>
  </div>
</nav>
</div>
</div>

<!-- Centro   -->



<div id="centro">

<nav >
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
            type="button" role="tab" aria-controls="nav-home" aria-selected="true">Apresentação</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Descrição</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Execução</button>
        <button class="nav-link" id="nav-ebooks-tab" data-bs-toggle="tab" data-bs-target="#nav-ebooks"
        type="button" role="tab" aria-controls="nav-ebooks" aria-selected="false">Acervo</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent" >
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        

        <h2>Objetivos</h2><br>
        <p>Apoiar a implementação do Cadastro Ambiental Rural (CAR) no estado de Roraima</p><br> 
        <h2>Beneficiários</h2><br>
        <p>Pequenos proprietários ou posseiros rurais familiares (imóveis de até quatro módulos fiscais) que desenvolvam atividades agrossilvipastoris, incluindo assentados de reforma agrária do estado de Roraima, bem como o estado de Roraima, por meio das ações de capacitação, aprimoramento de infraestrutura, adequação de base legal e elaboração do Plano Estadual de Recuperação de Áreas de Preservação Permanente (APPs) e Reserva Legal (RL).</p>


    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    

        <h2>Contextualização</h2><br>
        <p>O Código Florestal (Lei nº 12.651/2012) define o Cadastro Ambiental Rural (CAR) como sendo o registro público eletrônico de âmbito nacional, obrigatório para todos os imóveis rurais, com a finalidade de integrar as informações ambientais das propriedades e posses rurais, compondo base de dados para controle, monitoramento, planejamento ambiental e econômico e combate ao desmatamento.</p><br> 
        <p>O projeto representa um novo marco na política de regularização ambiental do estado de Roraima, como instrumento de apoio à diminuição de passivos ambientais e base para recuperação de áreas degradadas em imóveis rurais.</p><br> 

        <h2>O Projeto</h2><br>
        <p>O projeto tem como objetivo apoiar a implementação do Cadastro Ambiental Rural (CAR) no estado de Roraima e está estruturado em 2 componentes:</p>

        <ol>
            <li>Promoção e apoio à inscrição no CAR;</li>
            <li>Aprimoramento da infraestrutura e capacitação de agentes públicos para a implantação e gerenciamento do CAR.</li>
        </ol>

        <p>O público-alvo do projeto é constituído por:</p>

        <ol>
            <li>pequenos proprietários ou posseiros rurais familiares (imóveis de até quatro módulos fiscais) que desenvolvam atividades agrossilvipastoris, incluindo assentados de reforma agrária dos 09 municípios do estado de Roraima; e</li>
            <li>o estado de Roraima, por meio das ações de capacitação, aprimoramento de infraestrutura, adequação de base legal e elaboração do Plano Estadual de Recuperação de APPs e RLs.</li>
        </ol>

        <h5>O PROJETO</h5><br>
        <p>O público-alvo do projeto é constituído por:</p><br>
        <ul>
            <li>pequenos proprietários ou posseiros rurais familiares (imóveis de até quatro módulos fiscais) que desenvolvam atividades agrossilvipastoris, incluindo assentados de reforma agrária dos 09 municípios do estado de Roraima; e</li>
            <li>o estado de Roraima, por meio das ações de capacitação, aprimoramento de infraestrutura, adequação de base legal e elaboração do Plano Estadual de Recuperação de APPs e RLs.</li>
        </ul><br>
        <p>O mesmo tem como objetivo apoiar a implementação do Cadastro Ambiental Rural (CAR) no estado de Roraima e está estruturado em  componentes:</p>

        <p><b>COMPONENTE 1 –</b> Inscrição de 14.249 imóveis rurais no Cadastro Ambiental Rural.</p>
        <p>Esse componente se subdivide em:</p>
        <ul>
            <li>10.028 Imóveis Rurais localizados em Projetos de Assentamentos (PAs);</li>
            <li>4.221 Imóveis Rurais localizados fora de Projetos de Assentamento (PAs)(4.221).</li>
        </ul>

        <p><b>COMPONENTE 2 –</b> Aquisição de equipamentos e mobiliários de escritório para suportar a implantação do CAR.</p><br>

        <h5>LÓGICA DE INTERVENÇÃO</h5><br>
        <p>O projeto se insere na componente “Monitoramento e Controle” (2) do Quadro Lógico do Fundo Amazônia.</p>


    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

        <h2>Valor total desembolsado em relação ao valor do apoio do fundo Amazônia</h2>
        <p>100%</p><br> 

        <p>ATIVIDADES REALIZADAS</p><br> 
        <p><b>COMPONENTE 1 –</b> Inscrição de 14.249 imóveis rurais no Cadastro Ambiental Rural</p>
        <p>Foi concluído o processo licitatório (Pregão eletrônico n°1/2019) no dia 18 de outubro de 2019, para contratação da empresa responsável pela promoção e apoio à inscrição no CAR, que originou o contrato n° 004/2019. A contratada recebeu a ordem de serviço no dia 28 de fevereiro de 2020, e deu início as atividades tendo como resultado 11.519 inscrições:</p>
        <ul>
            <li>Imóveis Rurais localizados em Projetos de Assentamentos (PAs) – Foram realizadas 4.320 (quatro mil, trezentos e vinte) inscrições de imóveis localizados dentro de projetos de assentamento.</li>
            <li>Imóveis Rurais localizados fora de Projetos de Assentamento (PAs) – Foram realizadas 7.199 (sete mil, cento e noventa e nove) inscrições de imóveis localizados dentro de projetos de assentamento.</li>
        </ul><br>

        <p><b>COMPONENTE 2 –</b> Aquisição de equipamentos e mobiliários de escritório para suportar a implantação do CAR.</p><br>
        <p>No dia 24 de maio de 2020 concluiu-se o processo licitatório (Pregão eletrônico n° 11/2019-01) referente à aquisição dos equipamentos e mobiliário de informática para aprimoramento da infraestrutura para a implantação e gerenciamento do CAR, que originou os contratos N° 007/2020, 008/2020, 009/2020 ,010/2020, 011/2020, 012/2020 e 013/2020.</p>
        <p>O total de itens adquiridos pelo projeto foram de 147, os equipamentos se justificariam pela necessidade de aumentar a capacidade de armazenamento e processamento de dados, decorrente do aumento no número de cadastros, bem como reduzir os riscos de indisponibilidade do sistema.</p><br>

        <h6>Confira a execução física e financeira do projeto:</h6><br>

        <div id="btn">
            <a href="https://www.transparencia.rr.gov.br/servidores/folha-de-pagamento"><button type="button" class="btn btn-success" id="btns"><b>QUADRO DE USOS E FONTES DETALHADO</b></button></a>
            <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/transparencia"><button type="button" class="btn btn-success" id="btns"><b>RELAÇÃO DE PAGAMENTOS</b></button></a>
            <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/consulta-publica"><button type="button" class="btn btn-success" id="btns"><b>GRAU PERCENTUAL DE EXECUÇÃO FÍSICA</b></button></a>
            <a href="https://femarh.com/sistemaunico/Consultores/"><button type="button" class="btn btn-success" id="btns"><b>TOTAL DE IMÓVEIS</b></button></a>
        </div>


    </div>
    <div class="tab-pane fade" id="nav-ebooks" role="tabpanel" aria-labelledby="nav-ebooks-tab">

    <h2><b>Acervo</b></h2><br>
        <p>Nessa área disponibilizamos os principais materiais gerados (publicações, vídeos, imagens) pelo projeto. Clique no nome do arquivo para iniciar o download.</p>
        <p>Para outras informações sobre os projetos apoiados pelo fundo Amazônia, <a href="https://www.fundoamazonia.gov.br/pt/home/">clique aqui.</a></p><br>
        <p>Publicações em portais de notícias:</p>
        <a href="https://folhabv.com.br/noticia/CIDADES/Interior/Cadastro-Ambiental-Rural-pode-ser-feito-de-forma-gratuita/87462">https://folhabv.com.br/noticia/CIDADES/Interior/Cadastro-Ambiental-Rural-pode-ser-feito-de-forma-gratuita/87462</a>
        <a href="https://opinativa.net/noticia/456841/agricultura-forte-regularizacao-ambiental-possibilita-reforco-na-producao">https://opinativa.net/noticia/456841/agricultura-forte-regularizacao-ambiental-possibilita-reforco-na-producao</a>
        <br><br><br>

        <h2><b>Contratos e Aditivos</b></h2><br>
        <p>Pequenos proprietários ou posseiros rurais familiares (imóveis de até quatro módulos fiscais) que desenvolvam atividades agrossilvipastoris, incluindo assentados de reforma agrária do estado de Roraima, bem como o estado de Roraima, por meio das ações de capacitação, aprimoramento de infraestrutura, adequação de base legal e elaboração do Plano Estadual de Recuperação de Áreas de Preservação Permanente (APPs) e Reserva Legal (RL).</p>

        <div id="btn">
            <a href="https://www.transparencia.rr.gov.br/servidores/folha-de-pagamento"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 004_2019</b></button></a>
            <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/transparencia"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 007_2020</b></button></a>
            <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/consulta-publica"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 008_2020</b></button></a>
            <a href="https://femarh.com/sistemaunico/Consultores/"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 009_2020</b></button></a>
            <a href="https://femarh.com/sistemaunico/"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 010_2020</b></button></a>
            <a href="https://www.transparencia.rr.gov.br/servidores/folha-de-pagamento"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 011_2019</b></button></a>
            <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/transparencia"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 012_2020</b></button></a>
            <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/consulta-publica"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO N 013_2020</b></button></a>
            <a href="https://femarh.com/sistemaunico/Consultores/"><button type="button" class="btn btn-success" id="btns"><b>ADITIVO CONTRATO N 004_2019</b></button></a>
            <a href="https://femarh.com/sistemaunico/"><button type="button" class="btn btn-success" id="btns"><b>CONTRATO DE CONCESSÃO DE COLABORAÇÃO FINANCEIRA NÃO REEMBOLSÁVEL N° 14.2.1016.1</b></button></a>
        </div>

    </div>
</div>

</div>

<!-- Base -->

<footer>

    <div id="op">
        <img src="../../imagens/Logo-Femarh.png" alt="">
    </div>

    <div id="op1">



            <div id="base-link1">
                <h2>Governo Eletrônico</h2>
            </div>

            <div id="base-linkGroup">
            <div id="base-link">
                <a href="https://portal.rr.gov.br/" target="_blank"><h6>TRANSPARÊNCIA</h6></a> 
            </div>

            <div id="base-link">
                <a href="http://www.ouvidoria.rr.gov.br/" target="_blank"><h6>OUVIDORIA</h6></a> 
            </div>

            <div id="base-link">
                <a href="https://sefaz.rr.gov.br/" target="_blank"><h6>SEFAZ</h6></a> 
            </div>

            <div id="base-link">
                <a href="https://www.imprensaoficial.rr.gov.br/app/_inicial/" target="_blank"><h6>DIÁRIO OFICIAL</h6></a> 
            </div>

            <div id="base-link">
                <a href="https://www.servidor.rr.gov.br/app/login/" target="_blank"><h6>SERVIDOR</h6></a> 
            </div>
            </div>

    </div>

    <div id="op2">
        <img src="../../imagens/brasao-logo.png" alt="">
    </div>

    </footer>














<script src="../../bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>