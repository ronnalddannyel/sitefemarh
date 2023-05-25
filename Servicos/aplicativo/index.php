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
            width: 10.5%;
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
/*
        div#op img{
            width: 245px;
            height: 80px;
            margin-top: 22%;
            margin-left: 22%;
        }
*/
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
/*
        div#op2 img{
            width: 270px;
            height: 100px;
            margin-top: 21%;
            margin-left: 22%;
        }
*/
        div#op2 img{
            width: 45%;
            height: 27%%;
            margin-top: 21%;
            margin-left: 22%;
        }

        div#opt{
            margin-top: 15%;
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
        }

        div#base-link1 h6{
            padding: 10px;
            color: white;
            text-align: center;
            width: 100%;
            height: 100%;
        }

        div#sistema {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        div.card {
            float: left;
            margin: 3%;
        }

        /* Smaller than standard 960 (devices and browsers) */
        @media only screen and (min-width: 959px) {
            footer{
                height: 33%;
            }
        }

        /* All Mobile Sizes (devices and browser) */
        @media only screen and (max-width: 958px) {
            footer{
                height: 25%;
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
        <a href="https://femarh.rr.gov.br/">
        <button type="button" aria-expanded="false" id="teste">
            Voltar Para o Site
        </button>
        </a>
      </li>


    </ul>
  </div>
</nav>
</div>
</div>
<!-- Menu Sistemas   -->

<div id="sistema">

<div class="card" style="width: 18rem;">
  <img src="../../imagens/femarh1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SISTEMA ÚNICO</h5>
    <p class="card-text"></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Sistema Único - <a href="#" class="card-link">Download</a></li>
  </ul>
</div>

<div class="card" style="width: 18rem;">
  <img src="../../imagens/SIGARR3.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SIGGARR</h5>
    <p class="card-text">Sistema de Informação Geográfica e Gestão Ambiental de Roraima</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">SIGGARR Extranet - <a href="#" class="card-link">Download</a></li>
    <li class="list-group-item">SIGGARR Intranet - <a href="#" class="card-link">Download</a></li>
  </ul>
</div>

</div>

<!-- Base -->

<footer>

    <div id="op">
        <img src="../../imagens/Logo-Femarh.png" alt="">
    </div>

    <div id="op1">

        <div id="opt">
            <div id="base-link">
                <a href="https://portal.rr.gov.br/" target="_blank"><h6>PORTAL DO GOVERNO</h6></a> 
            </div>

            <div id="base-link">
                <a href="http://www.ouvidoria.rr.gov.br/" target="_blank"><h6>OUVIDORIA</h6></a> 
            </div>

            <div id="base-link">
                <a href="https://www.imprensaoficial.rr.gov.br/app/_inicial/" target="_blank"><h6>DIÁRIO OFICIAL</h6></a> 
            </div>

            <div id="base-link1">
                <h6 >Desenvolvido pelo Centro de Informática – FEMARH</h6>
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