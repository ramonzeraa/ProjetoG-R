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

$sql = "SELECT * FROM usuarios ORDER BY nome DESC";
$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="configuracoes.css" rel="styleshhet">

    <title>G&R Passagens Aéreas</title>
    <style>
        .table-bg {
            background: rgb(0, 0, 0, 0.5);
            border-radius: 15px 15px 0 0;
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">



</head>

<body>
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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Página Inicial
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="packages.php">Pacotes</a></li>

                        <li class="nav-item active"><a class="nav-link" href="about-us.php">Sobre Nós</a></li>

                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Mais</a>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="testimonials.php">Feedbacks</a>
                                <a class="dropdown-item" href="terms.php"></a>
                            </div>
                        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>

                        <li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastre-se</a></li>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br><br>

    <table class="table table-bg">
        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Senha</th>
                <th scope="col">Nome</th>
                <th scope="col">Telefone</th>
                <th scope="col">Sexo</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Endereço</th>
                <th scope="col">...</th>


            </tr>
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['senha'] . "</td>";
                echo "<td>" . $user_data['nome'] . "</td>";
                echo "<td>" . $user_data['telefone'] . "</td>";
                echo "<td>" . $user_data['sexo'] . "</td>";
                echo "<td>" . $user_data['data_nasc'] . "</td>";
                echo "<td>" . $user_data['cidade'] . "</td>";
                echo "<td>" . $user_data['estado'] . "</td>";
                echo "<td>" . $user_data['endereco'] . "</td>";
                echo "<td>
                <a class = 'btn btn primary' href='#'>
                <svg
                </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>