<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Sobre Nós</title>

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
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-1-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Conheça a</h4>
            <h2>G&R Passagens Aéreas</h2>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="best-features about-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Bem-vindos à G&R, onde sua viagem é nossa prioridade!</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/about-1-570x350.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <h4>Nosso Objetivo</h4>
            <p>Na G&R, somos apaixonados por conectar pessoas e destinos ao redor do mundo com excelência, conforto e
              segurança. Fundada com a missão de oferecer uma experiência de voo inigualável, nossa empresa aérea tem se
              destacado no setor por sua inovação e compromisso com a qualidade.</p>
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="team-members">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Como começou?</h2>
          </div>

          <h5>G&R Passagens Aéreas</h5>

          <p>No início de 2024, dois estudantes de Tecnologia da Informação, Gabriel e Ramon, compartilhavam uma paixão
            em comum: a aviação. Ambos cursavam a renomada universidade tecnológica do país e, além do amor por códigos
            e algoritmos, eram fascinados pela ideia de conectar o mundo através dos céus. Entre uma aula e outra,
            muitas conversas giravam em torno de como a tecnologia poderia revolucionar a indústria aérea, tornando as
            viagens mais acessíveis, eficientes e agradáveis para todos.</p>


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