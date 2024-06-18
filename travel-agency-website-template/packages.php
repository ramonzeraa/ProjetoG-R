<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Pacotes</title>

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
  <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Compre seus</h4>
            <h2>Pacotes</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="product-item">
            <a href="package-details-fortaleza.php"><img src="img/Fortal.jpg" alt="image"></a>
            <div class="down-content">
              <a href="package-details-fortaleza.php">
                <h4>Pacote Fortaleza</h4>
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



        <div class="col-md-4">
          <div class="product-item">
            <a href="package-details-RJ.php"><img src="img/rio.jpg" alt=""></a>
            <div class="down-content">
              <a href="package-details-RJ.php">
                <h4>Rio de Janeiro</h4>
              </a>

              <h6>R$ 950</h6>

              <p></p>

              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> 20/09 - 29/09</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 8 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Voo direto</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <a href="package-details-SP.php"><img src="img/sp.jpg" alt=""></a>
            <div class="down-content">
              <a href="package-details-SP.php">
                <h4>São Paulo</h4>
              </a>

              <h6>R$ 850</h6>

              <p></p>

              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> 04/10 - 10/10</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 5 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Voo direto</strong>
              </small>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="product-item">
            <a href="package-details-balneario.php"><img src="img/balneario.jpg" alt=""></a>
            <div class="down-content">
              <a href="package-details-balneario.php">
                <h4>Balneário Camboriú</h4>
              </a>

              <h6>R$ 1.450</h6>

              <p></p>

              <small>
                <strong title="Available"><i class="fa fa-calendar"></i> 12/07 - 19/07</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Nights"><i class="fa fa-cube"></i> 6 noites</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                <strong title="Flight included"><i class="fa fa-plane"></i> Voo direto</strong>
              </small>
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
            <p>Desenvolvido por GAbriel e Ramon <a href="https://www.phpjabbers.com/"></a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="contact-form">
            <form action="#" id="contact">
              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Pick-up location" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Return location" required="">
                  </fieldset>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Pick-up date/time" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Return date/time" required="">
                  </fieldset>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Enter full name" required="">

              <div class="row">
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Enter email address" required="">
                  </fieldset>
                </div>

                <div class="col-md-6">
                  <fieldset>
                    <input type="text" class="form-control" placeholder="Enter phone" required="">
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary">Book Now</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="assets/js/custom.js"></script>
  <script src="assets/js/owl.js"></script>
</body>

</html>