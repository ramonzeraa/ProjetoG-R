<?php
session_start();

// print_r($_REQUEST);
if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {

    include_once('conex_bd.php');
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email : ' . $email);
    // print_r('<br>');
    // print_r('Senha : ' . $senha);


    $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

    $result = $con->query($sql);

    // print_r($sql);
    // print_r($result);

    if (mysqli_num_rows($result) <  1) {

        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: login.php');
    } else {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('location: index.php');
    }
} else {
    header('location : login.php');
}
