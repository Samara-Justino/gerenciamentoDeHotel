<?php

class Conexao
{

    private $db;
    private $host = "localhost:3306";
    private $user = "root";
    private $password = "";
    private $database = "hotel";

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=$this->host; dbname=$this->database", $this->user, $this->password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }

    public function executarQuery($sql, $params = [])
    {
        try {
            $stmt = $this->db->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Erro ao executar a consulta: " . $e->getMessage());
        }
    }

    //Funções específicas para o CRUD
    //CREATE
    public function cadastrarRegistro($sql, $dados)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($dados);
        return $this->db->lastInsertId();
    }

     //READ
    public function listarRegistros($sql)
    {
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

      //UPDATE
    public function editarRegistro($sql, $id, $dados)
    {
        $stmt = $this->db->prepare($sql);
        $dados['id'] = $id;
        return $stmt->execute($dados);
    }

        //DELETE
    public function excluirRegistro($sql, $id)
    {
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(':id', $id);
        return $stmt->execute();
    }
}
