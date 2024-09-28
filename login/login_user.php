<?php

require_once "../database/user_db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userDb = new UserDb();
    session_start();

    $login = $_POST['login_email'];
    $password = $_POST['login_password'];

    if (empty($login || $password)) {
        $_SESSION['login_message'] = "Obrigatório o preenchimento de todos os campos";
        header("Location: myaccount.php");
    } else {
        $data = array(':email' => $login, ':senha' => $password);
        $user = $userDb->getByLogin($data);


        $_SESSION['user'] = $user;
        header("Location: ../reservation/reservation.php");
    }
}