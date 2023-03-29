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

        div#centro{

        }

        div.row {
            margin: 1% 1% 0 1%;
        }

        div.card-body{
          background-color: #f7f7f7;
          padding: 8%;
        }

        div.card-body h5{
          margin-bottom: 9%;
          font-weight: bold;
        }

        div.card-body P, h5{
          text-align: center;
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

        div.card-body2 P, h5{
          text-align: center;
        }

        div.card-body2 button{
          margin: 3% 0 0 37%;
        }

        div.tab-content {
            min-height: 500px;
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
            type="button" role="tab" aria-controls="nav-home" aria-selected="true">RIMA</button>
        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
            type="button" role="tab" aria-controls="nav-profile" aria-selected="false">ARTIGOS</button>
        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
            type="button" role="tab" aria-controls="nav-contact" aria-selected="false">MANUAIS</button>
        <button class="nav-link" id="nav-ebooks-tab" data-bs-toggle="tab" data-bs-target="#nav-ebooks"
        type="button" role="tab" aria-controls="nav-ebooks" aria-selected="false">E-BOOKS</button>
    </div>
</nav>
<div class="tab-content" id="nav-tabContent" >
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">


        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – Bonfim</h5>
                    <p class="card-text">
                    Relatório de Impacto Ambiental
                    </p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Palm Springs Road" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – Cantá</h5>
                    <p class="card-text">
                    Relatório de Impacto Ambiental
                    </p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – Pau Rainha</h5>
                    <p class="card-text">Relatório de Impacto Ambiental</p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – Santa Luz</h5>
                    <p class="card-text">Relatório de Impacto Ambiental</p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – Palmaplan Energia</h5>
                    <p class="card-text">Relatório de Impacto Ambiental</p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – Baliza</h5>
                    <p class="card-text">
                    Relatório de Impacto Ambiental
                    </p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – São Jaoquim</h5>
                    <p class="card-text">Relatório de Impacto Ambiental</p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Skyscrapers" />
                <div class="card-body">
                    <h5 class="card-title">RIMA – Jaguatirica II</h5>
                    <p class="card-text">
                    Relatório de Impacto Ambiental
                    </p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
        </div>


    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Segunda aba</div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col1">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body2">
                    <h5 class="card-title">MÓDULO DE CADASTRO</h5>
                    <p class="card-text">
                    MANUAL DO USUÁRIO
                    </p>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
        </div>

    </div>
    <div class="tab-pane fade" id="nav-ebooks" role="tabpanel" aria-labelledby="nav-ebooks-tab">

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body2">
                    <h5 class="card-title">DIREITOS DE PROPRIEDADE NO BRASIL RURAL</h5>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Palm Springs Road" />
                <div class="card-body2">
                    <h5 class="card-title">REGULARIZAÇÃO FUNDIÁRIA</h5>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body2">
                    <h5 class="card-title">Os territórios indígenas e tradicionais protegem a biodiversidade?</h5>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body2">
                    <h5 class="card-title">PANORAMA DOS DIREITOS DE PROPRIEDADE NO BRASIL RURAL</h5>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../../imagens/map.jpg" class="card-img-top"
                    alt="Los Angeles Skyscrapers" />
                <div class="card-body2">
                    <h5 class="card-title">GOVERNANÇA DA TERRA E SUSTENTABILIDADE DIGITAL 2</h5>
                    <button type="button" class="btn btn-outline-dark">BAIXAR</button>
                </div>
                </div>
            </div>
            </div>
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