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
          text-align: center;
        }

        button.accordion-button {
            background-color: #f4f3f3;
            margin-bottom: 0.2%;
            border-radius: 10px;
            font-size: 45.2%;
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

    <h2>Quem somos</h2> <br><br>

    <p>A Fundação Estadual do Meio Ambiente e Recursos Hídricos – FEMARH-RR, foi criada pela Lei Estadual nº 001, art. 46, inciso III, item 2, de 26 de janeiro de 1991, e regulamentada pela Lei Delegada nº 004, de 16 de janeiro de 2003, quando então era denominada Fundação Estadual do Meio Ambiente, Ciência e Tecnologia do Estado de Roraima – FEMACT-RR. O órgão foi reorganizado pela Lei n° 815 de 07 de julho de 2011, deixando de ter competência no que tange a Ciência e Tecnologia do Estado, ficando responsável pelo Meio Ambiente e Recursos Hídricos, passando a ter a nominação atual.</p>

    <p>Tem como objetivos promover, elaborar, gerir, coordenar e executar a política do meio ambiente e de recursos hídricos do Estado de Roraima, com a finalidade de garantir o controle, a preservação, a conservação e a recuperação ambiental, visando o desenvolvimento socioeconômico sustentável e a melhoria da qualidade de vida da população.</p>

    <p>Entre suas diretrizes estão a de garantir a implementação de políticas na área ambiental e de recursos hídricos que possibilitem a conservação e manutenção dos recursos naturais, contribuindo para a qualidade de vida da população e o desenvolvimento sustentável.</p>

    <br><br>

    <h2>ORGANOGRAMA</h2>

</div>

<!-- Menu Sistemas   -->

<div id="sistema">

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <b>I - Conselhos de Direção Superior:</b>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <p>a) Conselho Estadual do Meio Ambiente – CEMA;</p>
        <p>b) Conselho Estadual de Recursos Hídricos – CERH; e</p>
        <p>c) Presidência.</p>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <b>II - Órgãos de Assessoramento:</b>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <p>a) Gabinete do Presidente;</p>
            <p>b) Assessoria Especial Técnica;</p>
            <p>c) Controle Interno;</p>
            <p>d) Núcleo de Contrato, Convênios e Projetos;</p>
            <p>e) Autoridade Julgadora;</p>
            <p>f) Núcleo de Conciliação Ambiental;</p>
            <p>g) ASCOM;</p>
            <p>h) Ouvidoria;</p>
            <p>i) Comissão Permanente de Licitação e Pregoeiro.</p>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <b>III - Órgãos de Execução</b>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <p><b>a) Diretoria Administrativa e Financeira:</b></p>
        <p>Divisão de Contabilidade;</p>
        <p>Divisão de Orçamento e Finanças;</p>
        <p>Divisão de Recursos Humanos;</p>
        <p>Divisão de Administrativa; </p>
        <p>Centro de Informática.</p>
        <p><b>b) Diretoria de Monitoramento e Controle Ambiental:</b></p>
        <p>Divisão de Fiscalização Ambiental;</p>
        <p>Divisão de Mudanças Climáticas e Prevenção a Queimadas;</p>
        <p>Divisão de Monitoramento e Controle Ambiental;</p>
        <p>Divisão de Educação Ambiental.</p>
        <p><b>c) Diretoria de Gestão Florestal:</b></p>
        <p>Divisão de Controle Florestal;</p>
        <p>Divisão de Unidade de Conservação;</p>
        <p>Divisão de Reflorestamento e Crédito Florestal.</p>
        <p><b>d) Diretoria de Licenciamento e Gestão Ambiental:</b></p>
        <p>Divisão de Licenciamento Ambiental; </p>
        <p>Divisão de Aquicultura e Gestão de Fauna;</p>
        <p>Divisão de Uso do Solo e Agricultura Familiar; e</p>
        <p>Divisão de Licenciamento Ambiental e Infraestrutura, Indústria e Serviços.</p>
        <p><b>e) Diretoria de Recursos Hídricos:</b></p>
        <p>Divisão de Gestão e Planejamento de Recursos Hídricos; </p>
        <p>Divisão de Segurança de Barragens; e</p>
        <p>Divisão de Outorga.</p>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Base -->

<footer>

    <div id="op">
        <img src="../imagens/Logo-Femarh.png" alt="">
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
        <img src="../imagens/brasao-logo.png" alt="">
    </div>

    </footer>














<script src="../../bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>