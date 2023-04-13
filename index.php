<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">

</head>
<body>

<!-- Logo Governo / FEMARH -->
    
    <div id="topo">
        <img src="imagens/FEMARH-LOGO1.png" alt="">
    </div>

<!-- carrossel -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5"></li>
        <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">

        <div class="carousel-item active">
        <img src="imagens/tartaruga.jpg" class="d-block w-100" alt="slide 0">
        </div>
        <div class="carousel-item">
        <img src="imagens/femarh.jpg" class="d-block w-100" alt="slide 1">
        </div>
        <div class="carousel-item">
        <img src="imagens/tartaruga.jpg" class="d-block w-100" alt="slide 2">
        </div>
        <div class="carousel-item">
        <img src="imagens/tartaruga.jpg" class="d-block w-100" alt="slide 3">
        </div>
        <div class="carousel-item">
        <img src="imagens/tartaruga.jpg" class="d-block w-100" alt="slide 4">
        </div>
        <div class="carousel-item">
        <img src="imagens/tartaruga.jpg" class="d-block w-100" alt="slide 5">
        </div>
        <div class="carousel-item">
        <img src="imagens/tartaruga.jpg" class="d-block w-100" alt="slide 6">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
    </a>
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
        <a class="nav-link" href="./index.php" id="teste">
            Home
        </a>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Institucional
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./Institucional/quem somos/">Quem somos</a></li>
            <li><a class="dropdown-item" href="./Institucional/presidencia/">Presidência</a></li>
            <li><a class="dropdown-item" href="./Institucional/fema/">Fundo Estadual do Meio Ambiente - FEMA</a></li>
            <li><a class="dropdown-item" href="./Institucional/biblioteca/">Biblioteca</a></li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Colegiado
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li>
                <a class="dropdown-item" href="#">Conselhos  &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                    <a class="dropdown-item" href="Colegiado/conselhos/cemact/">CEMACT</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">CERH</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="#">Comitês &raquo;</a>
              <ul class="dropdown-menu dropdown-submenu">
                <li>
                  <a class="dropdown-item" href="Colegiado/comites/comite-de-queimadas/">Comitê de Prevenção à Queimadas</a>
                </li>
              </ul>
              </li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="./Diretorias/" aria-expanded="false" id="teste">
          Diretorias
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./Diretorias/diretoria-de-recursos-hidricos/">Diretoria de Recursos Hídricos - DRHI</a></li>
            <li><a class="dropdown-item" href="./Diretorias/diretoria-de-gestao-florestal-diflor/">Diretoria de Gestão Florestal - DIFLOR</a></li>
            <li><a class="dropdown-item" href="./Diretorias/diretoria-de-licenciamento-e-gestao-ambiental-dlga/">Diretoria de Licenciamento e Gestão Ambiental - DLGA  &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                    <a class="dropdown-item" href="./Diretorias/diretoria-de-licenciamento-e-gestao-ambiental-dlga/diretor-wagner/">Diretor</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="./Diretorias/diretoria-de-monitoramento-e-controle-ambiental-dmca/">Diretoria de Monitoramento e Controle Ambiental - DMCA &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                      <a class="dropdown-item" href="./Diretorias/diretoria-de-monitoramento-e-controle-ambiental-dmca/divisao-de-mudancas-climaticas-e-prevencao-a-queimadas/">Divisão de Mudanças Climáticas e Prevenção a Queimadas</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="./Diretorias/diretoria-de-monitoramento-e-controle-ambiental-dmca/divisaodefiscalizacaoambiental/">Divisão de Fiscalização Ambiental</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="./Diretorias/diretoria-administrativa-e-financeira-diraf/">Diretoria Administrativa e Financeira - DIRAF</a></li>
            <li><a class="dropdown-item" href="./Diretorias/diretoria-de-pesquisa-e-tecnologia-e-gestao-territorial-dptgt/">Diretoria de Pesquisa e Tecnologia e Gestão Territorial - DPTGT &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                      <a class="dropdown-item" href="./Diretorias/diretoria-de-pesquisa-e-tecnologia-e-gestao-territorial-dptgt/luana-tabaldi/">Diretora</a>
                    </li>
                </ul>
            </li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="./Banco-de-leis/" id="teste">
          Banco de Leis
        </a>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Transparência
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.transparencia.rr.gov.br/">Controladoria</a></li>
            <li><a class="dropdown-item" href="Transparencia/portaldatransparencia/">Transparência FEMARH</a></li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="./Servicos/" id="teste">
          Serviços
        </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="./Contato/" id="teste">
          Contato
        </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://ouvidoria.rr.gov.br/" aria-expanded="false" id="teste" target="_blank">
          Ouvidoria
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://falabr.cgu.gov.br/publico/RR/Manifestacao/RegistrarManifestacao">FALA BR</a></li>
        </ul>
      </li>


    </ul>
  </div>
</nav>
</div>

<!-- Menu Sistemas   -->

<div id="sistema">

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        <h5><b>SISTEMAS</b></h5> 
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

        <button type="button" class="btn btn-success" id="btns"><b>SISTEMA ÚNICO</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>CADASTRO AMBIENTAL RURAL</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>LICENCIA JÁ</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>SINAFLOR</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>SIGGARR</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>SEUC-RR</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>PORTAL DA TRANSPARÊNCIA</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>CERTIDÃO DE HOMOLOGAÇÃO DE INFRAÇÃO AMBIENTAL</b></button>

      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      <h5><b>PROJETOS</b></h5> 
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">

            <button type="button" class="btn btn-success" id="btns"><b>CAR RORAIMA</b></button>
            <button type="button" class="btn btn-success" id="btns"><b>PORTAL DE INFORMAÇÕES DO REDD + RR</b></button>

        </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      <h5><b>LINKS</b></h5> 
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">

        <button type="button" class="btn btn-success" id="btns"><b>FOCO DE QUEIMADAS</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>ABEMA</b></button>
        <button type="button" class="btn btn-success" id="btns"><b>GREEN CLIMATE FUND</b></button>

      </div>
    </div>
  </div>
</div>

</div>

<!-- CARDS -->
<div id="titulo">
    <h3>FEMARH INFORMA</h3> 
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="imagens/agua.jpeg" class="card-img-top" alt="Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">Por meio do Governo de Roraima, a FEMARH distribui mudas para comemorar o dia Mundial da Água</h5>
        <p class="card-text">
            Para comemorar a abertura da semana do Dia Mundial da Água, por meio do Governo do Estado de Roraima a Fundação Estadual do Meio Ambiente
        </p>
        <a href="https://portal.rr.gov.br/" target="_blank">LEIA MAIS &raquo;</a> 
      </div>
      <div class="card-footer">
        <small class="text-muted">22/03/2023</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imagens/agua.jpeg" class="card-img-top"
        alt="Los Angeles Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">PIRACEMA Pesca profissional em Roraima está proibida de 01 de março a 30 de junho</h5>
        <p class="card-text">De 01 de março a 30 de junho de 2023 está proibida a pesca profissional nos rios de Roraima. A medida, prevista em portaria federal,
        </p>
        <a href="https://portal.rr.gov.br/" target="_blank">LEIA MAIS &raquo;</a> 
      </div>
      <div class="card-footer">
        <small class="text-muted">01/03/2023</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imagens/agua.jpeg" class="card-img-top"
        alt="Palm Springs Road" />
      <div class="card-body">
        <h5 class="card-title">PROGRAMA REGULARIZA 50% MAIS Femarh realiza ação integrada  no município do Cantá</h5>
        <p class="card-text">
            PROGRAMA REGULARIZA 50% MAIS Femarh realiza ação integrada  no município do Cantá As atividades iniciaram na segunda-feira,13, e encerram neste sábado,18 , na Vila Central
        </p>
        <a href="https://portal.rr.gov.br/" target="_blank">LEIA MAIS &raquo;</a> 
      </div>
      <div class="card-footer">
        <small class="text-muted">27/02/2023</small>
      </div>
    </div>
  </div>
</div>

<div id="pages">

<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Anterior</a>
    </li>
    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
    <li class="page-item " >
      <a class="page-link" href="page/2">2</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item"><a class="page-link" href="#">7</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Proximo</a>
    </li>
  </ul>
</nav>

</div>

<!-- CARDS 2 -->

<div id="titulo">
    <h3>PUBLICAÇÕES</h3> 
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="imagens/agua.jpeg" class="card-img-top"
        alt="Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">OPORTUNIDADE Nº115/2022</h5>
        <p class="card-text">
        A Fundação Amazônia Sustentável tornou público hoje, 31 de janeiro, a Oportunidade N° 115/2022, para contratação de consultoria técnica, para o Projeto Destravando e Alavancando</p>
        <a href="https://portal.rr.gov.br/" target="_blank">LEIA MAIS &raquo;</a> 
      </div>
      <div class="card-footer">
        <small class="text-muted">01/02/2023</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imagens/agua.jpeg" class="card-img-top"
        alt="Los Angeles Skyscrapers" />
      <div class="card-body">
        <h5 class="card-title">NOTA TÉCNICA</h5>
        <p class="card-text">No mês de agosto e setembro, Roraima é caracterizado pelo aumento da velocidade do vento e redução das chuvas. Essa característica climatológica requer atenção em
        </p>
        <a href="https://portal.rr.gov.br/" target="_blank">LEIA MAIS &raquo;</a> 
      </div>
      <div class="card-footer">
        <small class="text-muted">20/09/2022</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="imagens/agua.jpeg" class="card-img-top"
        alt="Palm Springs Road" />
      <div class="card-body">
        <h5 class="card-title">LEI Nº 1.704 que dispõe sobre a criação do Sistema Estadual de Unidade de Conservação – SEUC/RR a recategorização da APA Baixo Rio Branco em Parque Estadual das Nascentes, RDS Itapará-Boiaçu e RDS Campina, e a criação RDS Xeriuni</h5>
        <p class="card-text">
        A Lei foi sancionada no dia 15 de julho a Lei Nº 1.704, que dispõe sobre a criação do Sistema Estadual de Unidade de Conservação
        </p>
        <a href="https://portal.rr.gov.br/" target="_blank">LEIA MAIS &raquo;</a> 
      </div>
      <div class="card-footer">
        <small class="text-muted">19/07/2022</small>
      </div>
    </div>
  </div>
</div>

<div id="pages">

<nav aria-label="...">
  <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link">Anterior</a>
    </li>
    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
    <li class="page-item " >
      <a class="page-link" href="page/2">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">Proximo</a>
    </li>
  </ul>
</nav>

</div>

<!-- Base -->

<footer>

    <div id="op">
        <img src="imagens/Logo-Femarh.png" alt="">
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
        <img src="imagens/brasao-logo.png" alt="">
    </div>

    </footer>














<script src="bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>