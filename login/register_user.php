<?php

require_once "../database/user_db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userDb = new UserDb();
    session_start();

    $nome = $_POST["register_name"];
    $email = $_POST["register_email"];
    $senha = $_POST["register_password"];
    $perfil = "usuario";

    if (empty($nome) || empty($email) || empty($senha)) {
        $_SESSION['register_message'] = "Obrigatório o preenchimento de todos os campos";
        header("Location: myaccount.php");
    } else {
        $data = array(':nome' => $nome, ':email' => $email, ':senha' => $senha, ':perfil' => $perfil);
        $userDb->register($data);

        $data = array(':email' => $email, ':senha' => $senha);
        $user = $userDb->getByLogin($data);
        $_SESSION['user'] = $user;

        header('Location: ../reservation/reservation.php');
        exit();
    }
}