<?php
namespace Model;

class SubcategoriasModel {
    protected $id;
    protected $nome;
    protected $descricao;
    protected $categorias_id;
    
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getCategorias_id() {
        return $this->categorias_id;
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

    public function setCategorias_id($categorias_id): void {
        $this->categorias_id = $categorias_id;
    }

    public function __construct() {
        
    }

    public function loadAll(){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM subcategorias';
        
        $resultList = $db->Consultar($sql);
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->descricao = $values['descricao'];
                $this->categorias_id = $values['categorias_id'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
    
    public function loadById($sub_id){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM subcategorias WHERE id ='.$sub_id;
        
        $resultList = $db->Consultar($sql);
        if($db->total == 1){
            foreach($resultList as $values){
                $this->id = $values['id'];
                $this->nome = $values['nome'];
                $this->descricao = $values['descricao'];
                $this->categorias_id = $values['categorias_id'];
            }
        }
        
        $db->Desconectar();
        
        return $resultList;
    }
}
