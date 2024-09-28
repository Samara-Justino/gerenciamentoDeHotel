<?php

require_once "conn.php";
require_once "../model/User.php";

class UserDb
{
    private $connection;

    public function __construct()
    {
        $this->connection = new Conexao();
    }

    // fetch: Busca o primeiro registro
    // Consultando apenas um registro 
    public function getByLogin($data)
    {
        $sql = "SELECT * FROM samara_login_user WHERE login_email = :email AND login_password = :senha";
        $stmt = $this->connection->executarQuery($sql, $data);
        $userDb = $stmt->fetch();

        // Validando se existe usurário no banco de dados - Se tiver valor instância o User
        if (!empty($userDb)) {
            $user = new User();
            $user->id = $userDb['id_login'];
            $user->email = $userDb['login_email'];
            $user->password = $userDb['login_password'];
            $user->profile = $userDb['login_profile'];
            $user->name = $userDb['login_name'];
            return $user;
        } else {
            return null;
        }
    }

    public function register($data)
    {
        $sql = "INSERT INTO samara_login_user (login_name, login_email, login_password, login_profile) VALUES (:nome, :email, :senha, :perfil)";
        $this->connection->cadastrarRegistro($sql, $data);
    }
}
