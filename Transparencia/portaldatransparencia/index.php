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

        div#flush-collapseThree a{
            text-decoration: none;
        }

        button#btns {
            color:black;
            background-color: transparent;
            border-color: #4a8a45;
            color: #4a8a45;
            border-width: 2px;
            margin: 1.5%;
            padding: 1.2% 2% 1.2% 2%;
        }

        button#btns:hover {
            background-color: #4a8a45;
            color:white;
        }
        div.accordion-body a{
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
            div#btn{
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
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

    <h2><b>Portal da Transparência - FEMARH</b></h2><br><br>

    <div id="btn">
        <a href="https://www.transparencia.rr.gov.br/servidores/folha-de-pagamento"><button type="button" class="btn btn-success" id="btns"><b>FOLHA DE PAGAMENTO SERVIDORES</b></button></a>
        <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/transparencia"><button type="button" class="btn btn-success" id="btns"><b>CONSULTA PÚBLICA DE LICENÇAS</b></button></a>
        <a href="https://licenciaja.femarh.rr.gov.br/licenciaja/consulta-publica"><button type="button" class="btn btn-success" id="btns"><b>MOVIMENTAÇÃO PROCESSUAL</b></button></a>
        <a href="https://femarh.com/sistemaunico/Consultores/"><button type="button" class="btn btn-success" id="btns"><b>CONSULTORES FEMARH</b></button></a>
        <a href="https://femarh.com/sistemaunico/"><button type="button" class="btn btn-success" id="btns"><b>SISTEMA ÚNICO</b></button></a>
    </div>
    <br><br>
    <h3><b>Por Diretoria</b></h3>

</div>

<!-- Menu Sistemas   -->

<div id="sistema">

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <b>Diretoria de Licenciamento e Gestão Ambiental - DLGA</b>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="https://dlaiis.femarh.com/transparencia/">Divisão de Licenciamento Ambiental e Infraestrutura, Indústria e Serviços;</a><br>
        <a href="https://dla.femarh.com/transparencia/">Divisão de licenciamento Ambiental</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <b>Diretoria de Gestão Florestal - DIFLOR</b>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="https://drive.google.com/drive/folders/1bI4DYph0qkj_mUuNxQQ2putawXyl7qQV">2015</a><br>
            <a href="https://drive.google.com/drive/folders/1LsvfApFs-sAwGO-_8KgpRipGFGZrhCkT">2016</a><br>
            <a href="https://drive.google.com/drive/folders/17E9XSxG48uASVFxYbuO9tO19gy5W1Imt">2017</a><br>
            <a href="https://drive.google.com/drive/folders/1idJ_-7hzoqH0hWCN6H34x7tqXeL3VR5M">2018</a><br>
            <a href="https://drive.google.com/drive/folders/1idJ_-7hzoqH0hWCN6H34x7tqXeL3VR5M">2019</a><br>
            <a href="https://drive.google.com/drive/folders/1jzzzZaNBmz80Yxpvv1o8g3Iu0RCp1gCZ">2020</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
      <b>Diretoria de Recursos Hídricos - DRHI</b>
      </button>
    </h2>
    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <h6><b>Boletins qualidade da água</b></h6>
            <a href="">2021</a><br>
            2022(Em atualização) <br>
            <h6><b>Boletins hidroclimáticos</b></h6>
            <a href="https://drive.google.com/drive/folders/1Wk_sKUI6OZ7j7fLCspRXPK2zpW7FQVmS">2020</a><br>
            <a href="https://drive.google.com/drive/folders/1aTojN2TcBDXsMOnhknS1op6zBvpBWTFu">2021</a><br>
            <a href="https://drive.google.com/drive/folders/1chiylzzjo6t9qfr2HG1uBhO6tkM6-Ke4">2022</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
      <b>Diretoria Administrativa e Financeira - DIRAF</b>
      </button>
    </h2>
    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
        Em atualização
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
      <b>Diretoria de Monitoramento e Controle Ambiental – DMCA</b>
      </button>
    </h2>
    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
        Em atualização
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <b>Diretoria de Pesquisa e Tecnologia e Gestão territorial - DPTGT</b>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="https://extranet.femarh.com/siggarr/">Acessar</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading7">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
      <b>CUAJ - Comissão Única de Autoridade Julgadora</b>
      </button>
    </h2>
    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
        <a href="https://cuaj.femarh.com/transparencia/">Acessar</a>
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