<?php
session_start();
include_once('conex_bd.php');

if (!isset($_SESSION['email']) || !isset($_SESSION['senha'])) {
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('location: login.php');
  exit;
}

$logado = $_SESSION['email'];
$sql = "SELECT * FROM usuarios ORDER BY id_usuario desc";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>G&R Passagens Aéreas</title>

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
                <div class="search-box">
                  <input type="text" class="search-input" placeholder="Pesquisar...">
                  <button class="search-button">
                    <i class="fa fa-search"></i>
                  </button>
                </div>

              </div>

            </li>

            <?php if (isset($_SESSION['email'])) : ?>
              <li class="nav-item">
                <a class="nav-link" href="sair.php">Sair</a>
              </li>
              <li class="nav-item">
                <span class="nav-link">
                  <h6 style="color: white;">Bem-vindo, <?php echo $logado; ?></h6>
                </span>
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
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h4>Sua Passagem está Aqui!</h4>
          <h2>a Viagem dos sonhos</h2>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h4></h4>
          <h2></h2>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h4></h4>
          <h2></h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Promoções do Dia</h2>
            <a href="packages.php">veja mais <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="package-details-fortaleza.php"><img src="img/Fortal.jpg" alt=""></a>
            <div class="down-content">
              <a href="package-details-fortaleza.php">
                <h4>Pacote para Fortaleza</h4>
              </a>
              <h9>Preço por Pessoa</h9>
              <h6>R$ 1.380</h6>
              <p></p>
              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> 24/05 - 30/05</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 5 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Voo direto</strong>
              </small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="package-details-joaoPE.php"><img src="img/jj.jpg" alt=""></a>
            <div class="down-content">
              <a href="package-details-joaoPE.php">
                <h4>Pacote para João Pessoa</h4>
              </a>
              <h9>Preço por Pessoa</h9>
              <h6>R$ 1.397</h6>
              <p></p>
              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> 01/06 - 09/06</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 8 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Voo direto</strong>
              </small>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="product-item">
            <a href="package-details-Natal.php"><img src="img/Natal_RN.jpg" alt=""></a>
            <div class="down-content">
              <a href="package-details-Natal.php">
                <h4>Pacote para Natal-Rn</h4>
              </a>
              <h9>Preço por Pessoa</h9>
              <h6>R$ 1.256</h6>
              <p></p>
              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> 15/07 - 21/07</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 5 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Voo direto</strong>
              </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="best-features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Bem-vindos à G&R, onde sua viagem é nossa prioridade!</h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="left-content">
            <p>Na G&R, somos apaixonados por conectar pessoas e destinos ao redor do mundo com excelência, conforto e
              segurança. Fundada com a missão de oferecer uma experiência de voo inigualável, nossa empresa aérea tem se
              destacado no setor por sua inovação e compromisso com a qualidade.</p>
            <ul class="featured-list">
              <li>Excelência no Serviço<a href="about-us.php"></a></li>
              <li>Conforto e Conveniência<a href="about-us.php"></a></li>
              <li>Segurança e Confiança<a href="about-us.php"></a></li>
              <li>Frota Moderna<a href="about-us.php"></a></li>
              <li>Sustentabilidade<a href="about-us.php"></a></li>
              <li>Inovação Tecnológica<a href="about-us.php"></a></li>
              <li>Rede Global<a href="about-us.php"></a></li>
            </ul>
            <a href="about-us.php" class="filled-button">Leia Mais</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="right-image">
            <img src="assets/images/about-us.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  <li>Configurações da conta<a href="configuracoes.php"></a></li>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="inner-content">
            <p>G&R &copy; 2024 | Todos os direitos reservados. Design por <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
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
  <script src="assets/js/slick.js"></script>
  <script src="assets/js/accordions.js"></script>
</body>

</html>