<?php

namespace Model;

class CategoriasModel {
    protected $id;
    protected $nome;
    protected $descricao;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function __construct() {
        
    }

    public function loadAll(){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM categorias';
        
        $resultList = $db->Consultar($sql);
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->descricao = $values['descricao'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
}
