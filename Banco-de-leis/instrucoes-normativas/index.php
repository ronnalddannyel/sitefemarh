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
            border-left: solid 0.1px #d3d3d3;
            border-right: solid 0.1px #d3d3d3;
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

    <h2>Instruções normativas</h2>

</div>

<!-- Menu Sistemas   -->

<div id="sistema">

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border-top: solid 0.1px #d3d3d3;">
        <b>INS 2003</b>
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="">002 – REGULAMENTA A CONCESSÃO, APLICAÇÃO E PRESTAÇÃO DE CONTAS DE SUPRIMENTO DE FUNDOS, NO ÂMBITO DA FEMACT/RR – FUNDAÇÃO ESTADUAL DO MEIO AMBIENTE, CIÊNCIA E TECNOLOGIA.</a> <br>
        <a href="">003 – DISPÕE SOBRE O LICENCIAMENTO AMBIENTAL DA ATIVIDADE DE AGRICULTURA -FEMACT</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <b>INS 2006</b>
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">002 – DEFINIR PROCEDIMENTOS DE AUTORIZAÇÃO DE USO ALTERNATIVO DO SOLO</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading4">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
      <b>INS 2008</b>
      </button>
    </h2>
    <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001 – ESTABELECE OS CRITÉRIOS E PROCEDIMENTOS BÁSICOS PARA A IMPLEMENTAÇÃO DO CADASTRO TÉCNICO ESTADUAL DE ATIVIDADE</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading5">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
      <b>INS 2009</b>
      </button>
    </h2>
    <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001 – DISCIPLINAR OS PROCEDIMENTOS E CRITÉRIOS PARA ALIENAÇÃO DE PRODUTOS E SUBPRODUTOS PERECIVEIS DA FAUNA, DA FLORA E OS RECURSOS PESQUEIROS APREENDIDOS PELA FEMACT</a> <br>
            <a href="">002 – REGULAMENTAÇÃO PARA A UTILIZAÇÃO DO RECURSOS PROVENIENTES DO FUNDO ESTADUAL DO MEIO AMBIENTE CIENCIA E TECNOLOGIA</a> <br>
            <a href="">003 – REGULAMENTA A UTILIZAÇÃO DOS EQUIPAMENTOS DE INFORMÁTICA E ELETRONICOS DA FEMACT-RR</a> <br>
            <a href="">004 – REGULAMENTA OS TRAMITES ADMISTRATIVOS DE UTILIZAÇÃO DOS VEICULOS OFICIAIS DA FEMACT</a> <br>
            <a href="">005 – REGULAMENTA AS CAPACITAÇÕES DE SERVIDORES DA FEMACT-RR </a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading6">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
      <b>INS 2010</b>
      </button>
    </h2>
    <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">002 – REGULAMENTA OS TRAMITES ADMINISTRATIVOS DE UTILIZAÇÃO DOS VEICULOS OIFICIAIS DA FEMACT</a> <br>
            <a href="">006 – ACRESCENTA ATIVIDADE NA CLASSIFICAÇÃO DAS FONTES POLUIDORAS PARA FINS DE LICENCIAMENTO E DA OUTRAS PROVIDÊNCIAS</a> <br>
            <a href="">008 – DETERMINA OS VALORES DO HECTARE POR MUNICIPIO DEFINIDOS PELO ITERAIMA</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <b>INS 2012</b>
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="">002 – PROCEDIMENTOS SIMPLIFICADOS PARA O REGISTRO DE RESERVA LEGAL DE PROPRIEDADE DE POSSES RURAIS</a>
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading7">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
        <b>INS 2013</b>
      </button>
    </h2>
    <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="">001 – INSTRUÇÃO, A ORGANIZAÇÃO, O ENCAMINHAMENTO E O TRÂMITE DOS PROCESSO PARA FINS DE LICENCIAMENTOS E AUTORIZAÇÕES AMBIENTAIS</a> <br>
        <a href="">002 (DUPLICIDADE) – NORMATIZAR A RESPONSABILIDADE DO PRESTADOR DE SERVIÇOS NA AREA AMBIENTAL</a> <br>
        <a href="">002 – PROCEDIMENTOS SIMPLIFICADOS PARA O REGISTRO DE RESERVA LEGAL DE PROPRIEDADE E POSSE RURAIS-2012 OU 2013</a> <br>
        <a href="">003 – EMISSÃO DE CARTEIRAS DE PESCADORES E REGISTRO DE EMBARCAÇÕES PESQUEIRAS</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading8">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8">
      <b>INS 2014</b>
      </button>
    </h2>
    <div id="flush-collapse8" class="accordion-collapse collapse" aria-labelledby="flush-heading8" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001 – PROCEDIMENTOS SIMPLIFICADOS PARA LICENCIAMENTO ESPECIAL E A REGULARIZAÇÃO DE ATIVIDADE E EMPREENDIMENTOS REALIZADOS EM ASSENTAMENTOS DE REFORMA AGRARIA E AREA DE ATÉ 4 MODULOS</a> <br>
            <a href="">003 – IMPLANTAÇÃO DO CERTIFICADO DE REGULARIDADE AMBIENTAL NO ESTADO DE RORAIMA</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading9">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9">
      <b>INS 2015</b>
      </button>
    </h2>
    <div id="flush-collapse9" class="accordion-collapse collapse" aria-labelledby="flush-heading9" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001 – EXPEDIENTE DA PROCURADORIA JURÍDICA</a> <br>
            <a href="">002 – DISCIPLINA NO AMBITO DO ESTADO DE RORAIMA, OS PROCEDIMENTOS DE EMISSÃO E CONTROLE DAS COTAS DE RESERVA AMBIENTAL-CRA</a> <br>
            <a href="">003 – REVOGA A IN Nº 03-2014 PUBLICADO NO DOE DE 13.10.2014 QUE TRATA SOBRE A IMPLANTAÇÃO DE CERTIFICA DE REGULARIDADE AMBIENTAL</a> <br>
            <a href="">004 – LICENCIAMENTO AMBIENTAL SIMPLIFICADO E DA OUTRAS PROVIDENCIAS</a> <br>
            <a href="">005 – REGULAR A ADESÃO AO PROGRAMA DE RECUPERAÇÃO AMBIENTAL ESTABELECE O TERMO DE COMPROMISSO AMBIENTAL PARA A SUSPENSÃO DA PUNIBILIDADE DAS SANÇÕES AMBIENTAIS</a> <br>
            <a href="">006 – LICENCIAMENTO PARA ATIVIDADE DE LARA GARIMPEIRA EM RORAIMA</a> <br>
            <a href="">007 – ESTABELECER QUE NA REGIÃO DO BAIXO RIO BRANCO, NO QUE TANGE AO RIO ITAPARÁ,…</a> <br>
            <a href="">008 – ESTABELECER DIRETRIZES E PROCEDIMENTOS PARA A APREENSÃO E DESTINAÇÃO DE PRODUTOS E SUBPRODUTOS DA FAUNA E FLORA</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading10">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10">
      <b>INS 2016</b>
      </button>
    </h2>
    <div id="flush-collapse10" class="accordion-collapse collapse" aria-labelledby="flush-heading10" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001 – 03 -08-2016REGULA OS PROCEDIMENTOS PARA APURAÇÃO DE INFRAÇÕES ADMINISTRATIVAS POR CONDUTAS E ATIVIDADES LESIVAS AO MEIO AMBIENTE – REVOGADA A IN 001-2016 DE 15.01.16</a> <br>
            <a href="">001 – 15-01-2016 – REGULA OS PROCEDIMENTOS PARA APURAÇÃO DE INFRAÇÕES ADMINISTRATIVAS – REVOGADA PELA IN 001-2016 DE 02-02-2016</a> <br>
            <a href="">002 – SUSPENDE TODAS AS FORMAS DE MANEJO QUE ENVOLVA A QUEIMA DE RESIDUOS DAS ATIVIDADES MADEREIRAS E AGROPECUÁRIAS</a> <br>
            <a href="">003 – AUTORIZAÇÃO DE CONSESSÃO DE CREDITO FLORESTAL</a> <br>
            <a href="">004 – ALTERAÇÃO DA IN 01-2013 DE 18 DE ABRIL DE 2013</a> <br>
            <a href="">005 – REGULA A TRAMITAÇÃO PROCESSUAL DO PLANO DE MANEJO SUSTENTÁVEL</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading11">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapse11">
      <b>INS 2017</b>
      </button>
    </h2>
    <div id="flush-collapse11" class="accordion-collapse collapse" aria-labelledby="flush-heading11" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001- ESTABELECE A PERIODICIDADE, QUALIFICAÇÃO DA EQUIPE RESPONSÁVEL, CONTEÚDO MÍNIMO E NÍVEL DE DETALHAMENTO DAS INSPEÇÕES DE SEGURANÇA REGULARES E ESPECIAIS DE BARRAGENS DE ACUMULAÇÃO DE ÁGUA</a> <br>
            <a href="">002 – IN REGULA OS PROCEDIMENTOS PARA APURAÇÃO DE INFRAÇÕES ADMINISTRATIVAS POR CONDUTAS E ATIVIDADES LESIVAS AO MEIO AMBIENTE, A IMPOSIÇÃO DAS SANÇÕES …</a> <br>
            <a href="">003 – APROVA OS CRITÉRIOS E OS PROCEDIMENTOS PARA CLASSIFICAÇÃO, IMPLANTAÇÃO E A REVISÃO PERIODICA DE SEGURANÇA DE BARRAGENS DE ACUMULAÇÃO DE AGUA</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading12">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapse12">
      <b>INS 2018</b>
      </button>
    </h2>
    <div id="flush-collapse12" class="accordion-collapse collapse" aria-labelledby="flush-heading12" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="">001 – DISPÕE SOBRE OS CRITÉRIOS E DIRETRIZES GERAIS, BEM COMO DEFINE OS ESTUDOS AMBIENTAIS E OS PROCEDIMENTOS BÁSICOS A SEREM SEGUIDOS NO ÂMBITO DO LICENCIAMENTO AMBIENTAL DE PEQUENAS CENTRAIS HIDRELÉTRICAS – PCHS E CENTRAIS GERADORAS HIDRELÉTRICAS – CGHS COM CAPACIDADE GERADORA DE ATÉ 10MW.</a> <br>
        <a href="">001 – RETIFICAÇÃO – ONDE SE LÊ INS 001-18 – LEIA-SE INS 002-2018</a> <br>
        <a href="">002 – ALTERA A IN 001-CRITÉRIOS E DIRETRIZES QUE DEFINE OS ESTUDOS AMBIENTAIS E OS PROCEDIMENTOS A SER SEGUIDO NO L.A.</a>
      </div>
    </div>
    </div>
    <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading13">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapse13">
        <b>INS 2019</b>
      </button>
    </h2>
    <div id="flush-collapse13" class="accordion-collapse collapse" aria-labelledby="flush-heading13" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="">001 – IMPLANTAÇÃO DA DECLARAÇÃO DE REGULARIDADE AMBIENTAL</a> <br>
        <a href="">002 – VALIDADE DA LICENÇA DE OPERAÇÃO NO ESTADO DE RORAIMA</a> <br>
        <a href="">003 – ESTABELECER DIRETRIZES E PROCEDIMENTOS, NO ÂMBITO DA FEMARH, PARA A APREENSÃO E DESTINAÇÃO DE ANIMAIS E PRODUTOS </a> <br>
        <a href="">004 – ATIVIDADE OU EMPREENDIMENTOS DE UTILIDADE PUBLICA E INTERESSE SOCIAL</a> <br>
        <a href="">005 – REGULA OS PROCEDIMENTOS PARA APURAÇÃO DE INFRAÇÕES ADMINISTRATIVASPOR CONDUTAS E ATIVIDADES LESIVAS A MEIO AMBIENTE</a> <br>
        <a href="">006 – REGULA OS PROCEDIMENTOS PARA A APURAÇÃO DE INFRAÇÕES ADM.</a> <br>
        <a href="">007 – PROCEDIMENTO SIMPLIFICADO PARA O REGISTRO DA RESERVA LEGAL DE PROPRIEDADES E POSSES RURAIS</a>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading14">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse14" aria-expanded="false" aria-controls="flush-collapse14">
      <b>INS 2020</b>
      </button>
    </h2>
    <div id="flush-collapse14" class="accordion-collapse collapse" aria-labelledby="flush-heading14" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001 – º REVOGAR A INSTRUÇÃO NORMATIVA Nº 006, DE 16 DE JUNHO DE 2015</a> <br>
            <a href="">002 – REGULAMENTA O PROCESSO ADMINISTRATIVO ESTADUAL PARA APURAÇÃO DE INFRAÇÕES ADM POR CONDUTA E ATIVIDADES LESIVAS AO MEIO AMBIENTE</a> <br>
            <a href="">003 – PRORROGA A VIGÊNCIA DE LICENÇAS E AUTORIZAÇÕES AMBIENTAIS, AMPLIA O PRAZO PARA O CUMPRIMENTO DAS CONDICIONANTES IMPOSTAS PELA FEMARH </a> <br>
            <a href="">004 – OBRIGATÓRIEDADE DA REPOSIÇÃO FLORESTAL E O CONSUMO DE MATÉRIA PRIMA FLORESTAL</a> <br>
            <a href="">005 – REGULAMENTA O PROCEDIMENTO DE CONVERSÃO DE MULTAS AMBIENTAIS </a> <br>
            <a href="">006 – REGULAMENTA O PROCEDIMENTO DE ATUALIZAÇÃO DOS CRÉDITOS REFERENTES ÀS INFRAÇÕES AMBIENTAIS, E DÁ OUTRAS PROVIDÊNCIAS</a> <br>
            <a href="">007 – REVOGA A INSTRUÇÃO NORMATIVA Nº 003, DE MARÇO DE 2020</a> <br>
            <a href="">008 – ALTERA O ANEXO I DA INSTRUÇÃO NORMATIVA Nº 01/2008, DE 08 DE JULHO DE 2008</a> <br>
            <a href="">009 – REGULAMENTA O PROCEDIMENTO DE AUTORIZAÇÃO DE USO ALTERNATIVO DO SOLO PARA CONVERSÃO DE USO ALTERNATIVO DO SOLO EM ÁREAS DE ATÉ 3,0 HECTARES, PARA AGRICULTORES FAMILIARES DEFINIDOS NA FORMA DA LEI N° 11.26/2006</a> <br>
            <a href="">010 – ESTABELECE OS PROCEDIMENTOS RELATIVOS À EMISSÃO DE AUTORIZAÇÕES DE MANEJO DE FAUNA SILVESTRE, NECESSÁRIAS ÀS ATIVIDADES DE LEVANTAMENTO, MONITORAMENTO, RESGATE, AFUGENTAMENTO, DESTINAÇÃO E CONTROLE DA FAUNA SILVESTRE NO ÂMBITO DAS COMPETÊNCIAS DA FUNDAÇÃO ESTADUAL DO MEIO AMBIENTE E RECURSOS HÍDRICOS</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading15">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse15" aria-expanded="false" aria-controls="flush-collapse15">
      <b>INS 2021</b>
      </button>
    </h2>
    <div id="flush-collapse15" class="accordion-collapse collapse" aria-labelledby="flush-heading15" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">002 – ALTERA E ACRESCENTA DISPOSITIVOS À INSTRUÇÃO NORMATIVA Nº 04 DE 14 DE AGOSTO DE 2020 QUE DISPÕE SOBRE A OBRIGATORIEDADE DA REPOSIÇÃO FLORESTAL E O CONSUMO DE MATÉRIA PRIMA FLORESTAL E DÁ OUTRAS PROVIDÊNCIAS</a> <br>
            <a href="">003 – DISPÕE SOBRE O LICENCIAMENTO PARA A ATIVIDADE DE LAVRA GARIMPEIRA NO ESTADO DE RORAIMA, E DÁ OUTRAS PROVIDÊNCIAS” </a> <br>
            <a href="">004 – FIXA PRAZO MÁXIMO PARA DECLARAÇÃO DE ESTOQUE APÓS INICIO DO DEFESO REFERENTES À LEGISLAÇÃO DA PESCA E DÁ OUTRAS PROVIDÊNCIAS</a> <br>
            <a href="">005 – DISPÕE SOBRE A CLASSIFICAÇÃO E DIRETRIZES AMBIENTAIS PARA O ENQUADRAMENTO DAS ÁGUAS SUBTERRÂNEAS NO ESTADO DE RORAIMA COM USO DE PROTOCOLO COM PARÂMETROS BÁSICOS</a> <br>
            <a href="">006 – REVOGA O ARTIGO 2º DA INSTRUÇÃO NORMATIVA Nº 02 DE 2019, QUE DISPÕE SOBRE A VALIDADE DA LICENÇA DE OPERAÇÃO NO ESTADO DE RORAIMA</a> <br>
            <a href="">007 – REGULAMENTA O PROCESSO ADMINISTRATIVO ESTADUAL PARA APURAÇÃO DE INFRAÇÕES ADMINISTRATIVAS POR CONDUTAS E ATIVIDADES LESIVAS AO MEIO AMBIENTE</a> <br>
            <a href="">008 – DISPÕES SOBRE A VALIDADE DA LICENÇA DE OPERAÇÃO NO ESTADO DE RORAIMA </a> <br>
            <a href="">009 – ESTABELECE OS CRITÉRIOS E PROCEDIMENTOS BÁSICOS PARA A IMPLEMENTAÇÃO DO CADASTRO TÉCNICO ESTADUAL DE ATIVIDADES E INSTRUMENTOS DE DEFESA AMBIENTAL – CTEDA </a> <br>
            <a href="">010 -DISPÕE SOBRE A COLETA, O TRANSPORTE E A DESTINAÇÃO DE RESÍDUOS ORIUNDOS DO ESGOTAMENTO SANITÁRIO </a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading16">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse16" aria-expanded="false" aria-controls="flush-collapse16">
      <b>INS 2022</b>
      </button>
    </h2>
    <div id="flush-collapse16" class="accordion-collapse collapse" aria-labelledby="flush-heading16" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">001 – DISPÕE SOBRE A OBRIGATORIEDADE DA REPOSIÇÃO FLORESTAL E O CONSUMO DE MATÉRIA PRIMA FLORESTAL E DÁ OUTRAS PROVIDÊNCIAS</a> <br>
            <a href="">003 – DISPÕE SOBRE OS CRITÉRIOS E OS PROCEDIMENTOS PARA A CLASSIFICAÇÃO, IMPLANTAÇÃO, E A REVISÃO PERIÓDICA DE SEGURANÇA DE BARRAGENS DE ACÚMULO DE ÁGUA, CONTENÇÃO DE REJEITOS E RESÍDUOS DE DOMÍNIO DO ESTADO DE RORAIMA, CONSIDERANDO O DISPOSTO NA LEI FEDERAL Nº 12.334, DE 20 DE SETEMBRO DE 2010.</a> <br>
            <a href="">005 – REGULAMENTA O PROCESSO ADMINISTRATIVO ESTADUAL PARA APURAÇÃO DE INFRAÇÕES ADMINISTRATIVAS POR CONDUTAS E ATIVIDADES LESIVAS AO MEIO AMBIENTE </a> <br>
            <a href="">006 – DISPÕE SOBRE A COMPETÊNCIA DO ASSESSOR TÉCNICO ESPECIAL EM REALIZAR PARECER TÉCNICO AMBIENTAL NAS ÁREAS DE SUA FORMAÇÃO, REFERENTE AOS PROCESSOS DE LICENCIAMENTO AMBIENTAL</a> <br>
            <a href="">007 – DISPÕE SOBRE O LICENCIAMENTO PARA A ATIVIDADE DE LAVRA GARIMPEIRA NO ESTADO DE RORAIMA, E DÁ OUTRAS PROVIDÊNCIAS”</a> <br>
            <a href="">008 – DISPÕE SOBRE PROCEDIMENTOS TÉCNICOS PARA A PROMOÇÃO DA RASTREABILIDADE DE MADEIRAS EXPLORADAS EM PLANO DE MANEJO FLORESTAL SUSTENTÁVEL – PMFS E USO ALTERNATIVO DO SOLO – UAS EM FLORESTAS NATIVAS DO ESTADO DE RORAIMA</a> <br>
            <a href="">009 – DISPÕE SOBRE OS PROCEDIMENTOS ADMINISTRATIVOS PARA SUSPENSÃO E CANCELAMENTO DE CAR – CADASTRO AMBIENTAL RURAL, E ALTERAÇÃO DE DADOS DE ACESSO A CENTRAL DO PROPRIETÁRIO/POSSUIDOR, VISANDO CORREÇÕES JUNTO AO SISTEMA NACIONAL DE CADASTRO AMBIENTAL RURAL – SICAR</a> <br>
            <a href="">010 – DISCIPLINA O PROCEDIMENTO DE CONSULTA AO IPHAN – INSTITUTO DO PATRIMÔNIO HISTÓRICO E ARTÍSTICO NACIONAL NOS PROCESSOS DE LICENCIAMENTO AMBIENTAL E OUTORGA DE DIREITO DE USO DE RECURSOS HÍDRICOS EM TRAMITE NA FUNDAÇÃO ESTADUAL DO MEIO AMBIENTE E RECURSOS HÍDRICOS-FEMARH </a> <br>
            <a href="">011 – ALTERA A INSTRUÇÃO NORMATIVA Nº 05/2022, DE 08 DE FEVEREIRO DE 2022, REGULAMENTANDO OS PROCESSOS ADMINISTRATIVOS ESTADUAIS PARA APURAÇÃO DE INFRAÇÕES ADMINISTRATIVAS POR CONDUTAS E ATIVIDADES LESIVAS AO MEIO AMBIENTE</a> <br>
            <a href="">012 – DISPÕE SOBRE A IMPLANTAÇÃO DOS PROGRAMAS DE EDUCAÇÃO AMBIENTAL COMO SERVIÇO DE PRESERVAÇÃO, MELHORIA E RECUPERAÇÃO DO MEIO AMBIENTE, PARA PAGAMENTO PECUNIÁRIO DAS SANÇÕES ADMINISTRATIVAS</a> <br>
            <a href="">014 – DISPÕE SOBRE A REGULARIZAÇÃO AMBIENTAL DE IMÓVEIS RURAIS ATRAVÉS DA LAS, DRA E CRRA E DÁ OUTRAS PROVIDÊNCIAS INS 001 PROC. SEI</a> <br>
            <a href="">015 – Dispõe  adequá-la a Lei Estadual nº 1.540/2021, e dá outras providências.</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading17">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse17" aria-expanded="false" aria-controls="flush-collapse17">
      <b>INS 2023</b>
      </button>
    </h2>
    <div id="flush-collapse17" class="accordion-collapse collapse" aria-labelledby="flush-heading17" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <a href="">INSTRUCAO_NORMATIVA_N__01_2023-1</a>
        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-heading18">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse18" aria-expanded="false" aria-controls="flush-collapse18" style="border-bottom: solid 0.1px #d3d3d3;">
      <b>Leis complementares</b>
      </button>
    </h2>
    <div id="flush-collapse18" class="accordion-collapse collapse" aria-labelledby="flush-heading18" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="">LEI COMPLEMENTAR N. 323, DE 2 DE AGOSTO DE 2022</a>
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