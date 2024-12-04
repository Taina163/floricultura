<?php

namespace Model;


class UsuariosModel {

    //put your code here
    protected $id;
    protected $nome;
    protected $email;
    protected $senha;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }


    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

    public function __construct() {
        
    }

    public function checkLogin() {
        $db = new ConexaoMysql;

        $db->Conectar();

        $sql = 'SELECT senha FROM usuarios WHERE email = "' . $this->email . '" AND'
                . ' senha = "' . $this->senha . '"';

        $db->Executar($sql);

        $db->Desconectar();

        return $db->total;
    }

    public function cadastrar() {
        $db = new ConexaoMysql;

        $db->Conectar();

        $sql = 'INSERT INTO usuarios VALUES (0,"' . $this->nome . '",'
                . '"' . $this->email . '",'
                . '"' . $this->senha . '")';

        $db->Executar($sql);

        $db->Desconectar();

        return $db->total;
    }

    public function loadUserId() {
        $db = new ConexaoMysql();

        $db->Conectar();

        $sql = 'SELECT id FROM usuarios WHERE email = "' . $this->email . '" AND'
                . ' senha = "' . $this->senha . '"';

        $user_id = $db->Consultar($sql);

        if ($db->total == 1) {
            foreach ($user_id as $value) {
                $this->id = $value['id'];
            }
        }

        $db->Desconectar();

        return $user_id;
    }

}
