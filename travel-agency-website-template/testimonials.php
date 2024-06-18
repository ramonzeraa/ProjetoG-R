<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Feedbacks</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
    <div class="jumper">
      <div></div>
      <div></div>
      <div></div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- Header -->
  <header class="">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php">
          <h2>G&R Agência de <em>Viagens</em></h2>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="packages.php">Pacotes</a></li>
            <li class="nav-item active"><a class="nav-link" href="about-us.php">Sobre Nós</a></li>
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="testimonials.php">Feedbacks</a>
                <a class="dropdown-item" href="terms.php">Termos</a>
              </div>
            </li>

            <?php if (isset($_SESSION['email'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
              </li>
              <li class="nav-item">
                <span class="nav-link">Bem-vindo, <?php echo $logado; ?></span>
              </li>
            <?php else : ?>
              <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
              <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastre-se</a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <!-- Page Content -->
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-3-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Conheça os</h4>
            <h2>Testemunhos de nossos Clientes</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section-background">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Carlos A.</h4>
              <p class="n-m"><em>"A experiência de voar com a G&R foi simplesmente excepcional! Desde o momento da
                  compra das passagens até o desembarque, tudo foi perfeito. O site é fácil de usar, e o atendimento ao
                  cliente é de primeira classe. Com certeza, voltarei a viajar com a G&R!"</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Mariana L.</h4>
              <p class="n-m"><em>"Fiquei muito impressionada com a eficiência e a cordialidade da G&R. Comprei minhas
                  passagens online sem nenhum problema e, ao chegar no aeroporto, fui recebida por uma equipe super
                  atenciosa. O voo foi tranquilo, e o serviço de bordo, impecável. Recomendo demais!"</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>João M.</h4>
              <p class="n-m"><em>"Comprei minhas passagens aéreas pela G&R e tive uma experiência incrível. O processo
                  de compra foi rápido e fácil, e o atendimento ao cliente foi excelente, respondendo a todas as minhas
                  dúvidas prontamente. A viagem foi confortável e pontual. Parabéns, G&R!"</em></p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Ana P.</h4>
              <p class="n-m"><em>"Viajar com a G&R foi uma das melhores decisões que já tomei. O site é intuitivo, e as
                  ofertas de passagens são excelentes. Além disso, a equipe de bordo foi extremamente amigável e
                  prestativa. Tive uma viagem tranquila e prazerosa. Recomendo a todos!"</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Ricardo S.</h4>
              <p class="n-m"><em>"Minha primeira viagem com a G&R superou todas as expectativas. A compra das passagens
                  foi simples e rápida, e a comunicação da empresa é excelente. Durante o voo, fui muito bem atendido e
                  me senti realmente valorizado como cliente. Certamente viajarei novamente com a G&R."</em></p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Celestino T.</h4>
              <p class="n-m"><em>"A G&R é, sem dúvida, a melhor companhia aérea com a qual já viajei. A compra das
                  passagens foi um processo sem complicações, e o atendimento ao cliente foi fantástico. Durante o voo,
                  pude aproveitar um serviço de bordo excepcional e um conforto que raramente se encontra. Cinco
                  estrelas!"</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>Desenvolvido por Gabriel e Ramon <a href="https://www.phpjabbers.com/"></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>