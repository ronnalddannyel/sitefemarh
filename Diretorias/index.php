<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>
<body>
<!-- Logo Governo / FEMARH + Menu Suspenso - TOPO -->

<div class="d-print-none">

<!-- Logo Governo / FEMARH -->
    
    <div id="topo">
        <img src="../imagens/FEMARH-LOGO1.png" alt="">
    </div> <!-- Final - Logo Governo / FEMARH -->

<!-- Menu Suspenso -->

<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#conteudoNavbarSuportado" aria-bs-controls="conteudoNavbarSuportado" aria-bs-expanded="false" aria-bs-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">
        

      <li class="nav-item active">
        <a class="nav-link" href="../index.php" id="teste">
            Home
        </a>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Institucional
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Institucional/quem somos/">Quem somos</a></li>
            <li><a class="dropdown-item" href="../Institucional/presidencia/">Presidência</a></li>
            <li><a class="dropdown-item" href="../Institucional/fema/">Fundo Estadual do Meio Ambiente - FEMA</a></li>
            <li><a class="dropdown-item" href="../Institucional/biblioteca/">Biblioteca</a></li>
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
                    <a class="dropdown-item" href="../Colegiado/conselhos/cemact/">CEMACT</a>
                    </li>
                    <li>
                    <a class="dropdown-item" href="#">CERH</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="#">Comitês &raquo;</a>
              <ul class="dropdown-menu dropdown-submenu">
                <li>
                  <a class="dropdown-item" href="../Colegiado/comites/comite-de-queimadas/">Comitê de Prevenção à Queimadas</a>
                </li>
              </ul>
              </li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="../Diretorias/" aria-expanded="false" id="teste">
          Diretorias
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../Diretorias/diretoria-de-recursos-hidricos/">Diretoria de Recursos Hídricos - DRHI</a></li>
            <li><a class="dropdown-item" href="../Diretorias/diretoria-de-gestao-florestal-diflor/">Diretoria de Gestão Florestal - DIFLOR</a></li>
            <li><a class="dropdown-item" href="../Diretorias/diretoria-de-licenciamento-e-gestao-ambiental-dlga/">Diretoria de Licenciamento e Gestão Ambiental - DLGA  &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                    <a class="dropdown-item" href="../Diretorias/diretoria-de-licenciamento-e-gestao-ambiental-dlga/diretor-wagner/">Diretor</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="../Diretorias/diretoria-de-monitoramento-e-controle-ambiental-dmca/">Diretoria de Monitoramento e Controle Ambiental - DMCA &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                      <a class="dropdown-item" href="../Diretorias/diretoria-de-monitoramento-e-controle-ambiental-dmca/divisao-de-mudancas-climaticas-e-prevencao-a-queimadas/">Divisão de Mudanças Climáticas e Prevenção a Queimadas</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../Diretorias/diretoria-de-monitoramento-e-controle-ambiental-dmca/divisaodefiscalizacaoambiental/">Divisão de Fiscalização Ambiental</a>
                    </li>
                </ul>
            </li>
            <li><a class="dropdown-item" href="../Diretorias/diretoria-administrativa-e-financeira-diraf/">Diretoria Administrativa e Financeira - DIRAF</a></li>
            <li><a class="dropdown-item" href="../Diretorias/diretoria-de-pesquisa-e-tecnologia-e-gestao-territorial-dptgt/">Diretoria de Pesquisa e Tecnologia e Gestão Territorial - DPTGT &raquo;</a>
                <ul class="dropdown-menu dropdown-submenu">
                    <li>
                      <a class="dropdown-item" href="../Diretorias/diretoria-de-pesquisa-e-tecnologia-e-gestao-territorial-dptgt/luana-tabaldi/">Diretora</a>
                    </li>
                </ul>
            </li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="../Banco-de-leis/" id="teste">
          Banco de Leis
        </a>
      </li>


      <li class="nav-item dropdown">
        <button type="button" class="btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" id="teste">
            Transparência
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="https://www.transparencia.rr.gov.br/">Controladoria</a></li>
            <li><a class="dropdown-item" href="../Transparencia/portaldatransparencia/">Transparência FEMARH</a></li>
        </ul>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="../Servicos/" id="teste">
          Serviços
        </a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link" href="../Contato/" id="teste">
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
</div> <!-- Final - Menu Suspenso -->

</div> <!-- Final - Logo Governo / FEMARH + Menu Suspenso - TOPO -->

<!-- Centro   -->

<div id="centro">
    <h1><b>Diretorias</b></h1><br>

    <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                <img src="../imagens/luana.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">Diretoria de Pesquisa e Tecnologia e Gestão territorial - DPTGT</h5>
                    <p class="card-text">Luana Tabaldi</p>
                    <p class="card-text">
                    Email: luana.tabaldi@femarh.rr.gov.br
                    </p>
                    <hr>
                    <button type="button" class="btns"><i class="bi bi-linkedin"></i></button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../imagens/alessandra.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">Diretoria Administrativa e Financeira - DIRAF</h5>
                    <p class="card-text">Alessandra Sasso Campello</p>
                    <p class="card-text">
                    Email: diraf@femarh.rr.gov.br
                    </p>
                    <hr>
                    <button type="button" class="btns"><i class="bi bi-linkedin"></i></button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../imagens/wilson.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">Diretoria de Monitoramento e Controle Ambiental – DMCA</h5>
                    <p class="card-text">Wilson Jordão Mota Bezerra</p>
                    <p class="card-text">
                    Email: dmca@femarh.rr.gov.br
                    </p>
                    <hr>
                    <button type="button" class="btns"><i class="bi bi-linkedin"></i></button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../imagens/marta.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">Diretoria de Recursos Hídricos - DRHI</h5>
                    <p class="card-text">Marta Cecília Mota de M. Henchen</p>
                    <p class="card-text">
                    Email: drhi@femarh.rr.gov.br
                    </p>
                    <hr>
                    <button type="button" class="btns"><i class="bi bi-linkedin"></i></button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../imagens/wagner.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">Diretoria de Licenciamento e Gestão Ambiental - DLGA</h5>
                    <p class="card-text">Wagner Severo Nogueira</p>
                    <p class="card-text">
                    Email: dlga@femarh.rr.gov.br
                    </p>
                    <hr>
                    <button type="button" class="btns"><i class="bi bi-linkedin"></i></button>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="../imagens/shirlany.jpg" class="card-img-top"
                    alt="Hollywood Sign on The Hill" />
                <div class="card-body">
                    <h5 class="card-title">Diretoria de Gestão Florestal - DIFLOR</h5>
                    <p class="card-text">Shirlany Ribeiro de Melo</p>
                    <p class="card-text">
                    Email: diflor@femarh.rr.gov.br
                    </p>
                    <hr>
                    <button type="button" class="btns"><i class="bi bi-linkedin"></i></button>
                </div>
                </div>
            </div>
        </div>


    </div>

</div> <!-- Final - Centro   -->

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

    </footer> <!-- Final - Base -->














<script src="../bootstrap/js/bootstrap.bundle.js"></script>

</body>
</html>