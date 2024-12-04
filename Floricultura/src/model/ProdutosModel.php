<?php

namespace Model;


class ProdutosModel {
    protected $id;
    protected $nome;
    protected $imagem;
    protected $preco_base;
    protected $descricao;
    protected $subcategorias_id;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getPreco_base() {
        return $this->preco_base;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getSubcategorias_id() {
        return $this->subcategorias_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setImagem($imagem): void {
        $this->imagem = $imagem;
    }

    public function setPreco_base($preco_base): void {
        $this->preco_base = $preco_base;
    }

    public function setDescricao($descricao): void {
        $this->descricao = $descricao;
    }

    public function setSubcategorias_id($subcategorias_id): void {
        $this->subcategorias_id = $subcategorias_id;
    }

    public function __construct() {
        
    }

    public function loadAll(){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM produtos';
        
        $resultList = $db->Consultar($sql);
        
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->imagem = $values['imagem'];
                $this->preco_base = $values['preco_base'];
                $this->descricao = $values['descricao'];
                $this->subcategorias_id = $values['subcategorias_id'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
    
    public function loadWhereIn($whereIn){
        $db = new ConexaoMysql;
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM produtos WHERE id IN('.$whereIn.')';
        
        $resultList = $db->Consultar($sql);
        
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->imagem = $values['imagem'];
                $this->preco_base = $values['preco_base'];
                $this->descricao = $values['descricao'];
                $this->subcategorias_id = $values['subcategorias_id'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
    
    public function loadById($id){
        $db = new ConexaoMysql;
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM produtos WHERE id = '.$id;
        
        $resultList = $db->Consultar($sql);
        
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->imagem = $values['imagem'];
                $this->preco_base = $values['preco_base'];
                $this->descricao = $values['descricao'];
                $this->subcategorias_id = $values['subcategorias_id'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
    
    public function loadBySubcategorias($sub_id){
        $db = new ConexaoMysql;
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM produtos WHERE subcategorias_id = '.$sub_id;
        
        $resultList = $db->Consultar($sql);
        
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->imagem = $values['imagem'];
                $this->preco_base = $values['preco_base'];
                $this->descricao = $values['descricao'];
                $this->subcategorias_id = $values['subcategorias_id'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
}
