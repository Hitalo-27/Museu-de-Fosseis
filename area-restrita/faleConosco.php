<?php
include_once("valida-sentinela.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Fale Conosco</title>
  <link rel="apple-touch-icon" Tamanhos="57x57" href="../icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" tamanhos="60x60" href="../icon/ apple -icon-60x60.png ">
  <link rel=" apple-touch-icon " tamanhos=" 72x72 " href=" ../icon/apple-icon-72x72.png ">
  <link rel=" apple-touch-icon " tamanhos="76x76" href="../icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon " tamanhos=" 114x114 " href=" ../icon/apple-icon-114x114.png ">
  <link rel="apple-touch-icon" tamanhos="120x120" href="../icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" tamanhos="144x144" href="../icon/ apple-icon-144x144.png ">
  <link rel=" apple-touch-icon " tamanhos=" 152x152 " href=" ../icon/apple-icon-152x152.png ">
  <link rel=" apple-touch-icon " tamanhos="180x180" href="../icon/apple-icon-180x180.png">
  <link rel="ícone" type="imagem / png" tamanhos="192x192" href="../icon/android-icon-192x192.png">
  <link rel="icon" type="image / png  " size="32x32" href="../icon/favicon-32x32.png">
  <link rel="icon" type="image / png" Tamanhos="96x96" href="../icon/favicon-96x96.png">
  <link rel="icon" type="image / png" Tamanhos="16x16" href="../icon/ favicon-16x16. png ">
  <link rel=" manifesto " href="../icon/manifest.json">
  <meta name="msapplication-TileColor" content="">
  <meta name="msapplication-TileImage" content="../icon/ms-icon-144x144.png">
  <meta name="theme-color" content="">

  <link rel="stylesheet" href="../css/menu5.css">

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/faleConosco3.css">




  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  <svg xmlns="http://www.w3.org/2000/svg" style="display:none;"></svg>
  <defs>
    <symbol viewBox="0 0 60 60" id="icon-facebook">
      <path d="M25.8 46.3h6.7V30H37l.6-5.6h-5.1v-2.8c0-1.5.1-2.3 2.2-2.3h2.8v-5.6H33c-5.4 0-7.3 2.7-7.3 7.3v3.4h-3.4V30h3.4v16.3zM30 60C13.4 60 0 46.6 0 30S13.4 0 30 0s30 13.4 30 30-13.4 30-30 30z" />
    </symbol>
    <symbol viewBox="0 0 60 60" id="icon-linkedin">
      <path d="M46.8 44.1V32.4c0-6.3-3.3-9.2-7.8-9.2-3.6 0-5.2 2-6.1 3.4v-2.9h-6.8c.1 1.9 0 20.4 0 20.4h6.8V32.7c0-.6 0-1.2.2-1.7.5-1.2 1.6-2.5 3.5-2.5 2.5 0 3.4 1.9 3.4 4.6V44l6.8.1zM19 20.9c2.4 0 3.8-1.6 3.8-3.5 0-2-1.5-3.5-3.8-3.5s-3.8 1.5-3.8 3.5 1.4 3.5 3.8 3.5zM30 60C13.4 60 0 46.6 0 30S13.4 0 30 0s30 13.4 30 30-13.4 30-30 30zm-7.6-15.9V23.7h-6.8v20.4h6.8z" />
    </symbol>
    <symbol viewBox="0 0 60 60" id="icon-twitter">
      <path d="M34.2 18.3c-2.6 1-4.3 3.4-4.1 6.1l.1 1-1-.1c-3.8-.5-7.1-2.1-10-4.9L17.7 19l-.4 1c-.8 2.3-.3 4.7 1.3 6.3.8.9.6 1-.8.5-.5-.2-.9-.3-1-.2-.1.1.4 2.1.8 2.8.5 1.1 1.7 2.1 2.9 2.7l1 .5h-1.2c-1.2 0-1.2 0-1.1.5.4 1.4 2.1 2.8 3.9 3.5l1.3.4-1.1.7c-1.7 1-3.6 1.5-5.6 1.6-.9 0-1.7.1-1.7.2 0 .2 2.6 1.4 4 1.9 4.5 1.4 9.8.8 13.7-1.6 2.8-1.7 5.7-5 7-8.2.7-1.7 1.4-4.9 1.4-6.4 0-1 .1-1.1 1.2-2.3.7-.7 1.3-1.4 1.5-1.6.2-.4.2-.4-.9 0-1.8.6-2 .6-1.2-.4.6-.7 1.4-1.9 1.4-2.3 0-.1-.3 0-.7.2-.4.2-1.2.5-1.8.7l-1.1.4-1-.7c-.6-.4-1.4-.8-1.8-.9-.9-.4-2.6-.4-3.5 0zM30 60C13.4 60 0 46.6 0 30S13.4 0 30 0s30 13.4 30 30-13.4 30-30 30z" />
    </symbol>
  </defs>
  </svg>

  <div class="hero">
    <header id="masthead" role="banner">
      <div class="container">
        <button class="hamburger hamburger--boring" type="button">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
          <span class="hamburger-label">Menu</span>
        </button>
        <form id="masthead-search">

          <a class="sair" href="../logout.php">Sair</a>
        </form>
        <nav id="site-nav" role="navigation">
          <div class="col">
            <h4 style="color:#4C0013; font-family: fantasy;">Conheça</h4>
            <ul>
              <li><a href="index-restrita.php">Home</a></li>

            </ul>
          </div>
          <div class="col">
            <h4 style="color:#4C0013; font-family: fantasy;">O Museu</h4>
            <ul>
              <li><a href="exposicoes.php">Exposições</a></li>

            </ul>
          </div>

          <div class="col">
            <h4 style="color:#4C0013; font-family: fantasy;">Companhia</h4>
            <ul>
              <li><a href="quemsomos.php">Quem Somos</a></li>
              <li><a href="faleConosco.php">Fale Conosco</a></li>

            </ul>
          </div>
          <div class="col">
            <ul class="social">
              <li><a href=""><svg title="Facebook">
                    <use xlink:href="#icon-facebook"></use>
                  </svg></a></li>
              <li><a href=""><svg title="Twitter">
                    <use xlink:href="#icon-twitter"></use>
                  </svg></a></li>
              <li><a href=""><svg title="LinkedIn">
                    <use xlink:href="#icon-linkedin"></use>
                  </svg></a></li>
            </ul>
          </div>
        </nav>

      </div>
    </header>



    <div class="Strong">
      <strong>Fale Conosco através das </br> seguintes redes sociais</strong>
    </div>
    <main>
      <h1 class="corInstragram">
        <img src="../img/Instagram.png" alt="Logo do Instagram">
        <p> @MuseuFosseisOficial</p>
      </h1>

      <h1 class="corFacebook">
        <img src="../img/Facebook.png" alt="Logo do Instagram">
        <p> @MuseuFosseisOficial</p>
      </h1>

      <h1 class="corTwitter">
        <img src="../img/Twitter.png" alt="Logo do Instagram">
        <p> @MuseuFosseisOficial</p>
      </h1>
    </main>

    <div class="container-fluid final">
      <div class="row">
        <div class="col-sm">
        </div>
        <div class="roda" style="width: 18rem; height: 10rem; background: #4C0013; border-color: #4C0013;">
          <img class="card-img-top" src="../img/rodape1.png" alt="Imagem de capa do card">
          <hr>
          <div class="card-body">
            <p class="card-text">
            <div class="rodape"><b>Central de Atendimento</b></div>
            <div class="rodape2"> Grande São Paulo <br> (11) 4554-9023<br><br> Segunda Opção<br> 0800-455-1907 </div>


            </p>
          </div>
        </div>
        <hr>

        <div class="roda1" style="width: 18rem; height: 10rem; background: #4C0013; border-color: #4C0013;">
          <img class="card-img-top" src="../img/rodape1.png" alt="Imagem de capa do card">
          <hr>
          <div class="card-body">
            <p class="card-text">
            <div class="rodape"><b>Visitas</b></div>
            <div class="rodape2"> De Segunda a Sabado <br> Das 9:00hs as 18:00hs<br><br> Domingo e Feriados <br> Das 8:00 as 20:00 </div>

            </p>
          </div>
        </div>
      </div>

    </div>

  </div>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js></script>
  <script src="../js/main.js"></script>
</body>

</html>