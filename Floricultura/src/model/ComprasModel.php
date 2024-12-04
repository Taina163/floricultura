<?php
namespace Model;


class ComprasModel {
    protected $id;
    protected $data;
    protected $lista_produtos;
    protected $valor_total;
    protected $usuarios_id;
    protected $farmacias_id;
    
    public function getId() {
        return $this->id;
    }

    public function getData() {
        return $this->data;
    }

    public function getLista_produtos() {
        return $this->lista_produtos;
    }

    public function getValor_total() {
        return $this->valor_total;
    }

    public function getUsuarios_id() {
        return $this->usuarios_id;
    }

    public function getFarmacias_id() {
        return $this->farmacias_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setData($data): void {
        $this->data = $data;
    }

    public function setLista_produtos($lista_produtos): void {
        $this->lista_produtos = $lista_produtos;
    }

    public function setValor_total($valor_total): void {
        $this->valor_total = $valor_total;
    }

    public function setUsuarios_id($usuarios_id): void {
        $this->usuarios_id = $usuarios_id;
    }

    public function setFarmacias_id($farmacias_id): void {
        $this->farmacias_id = $farmacias_id;
    }

    public function __construct() {
        
    }

    public function loadAll($user_id){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM compras WHERE usuarios_id = '.$user_id;
                
        $results = $db->Consultar($sql);
        
        if($db->total == 1){
            echo("sucesso");
            foreach($results as $values){
            $this->id = $values['id'];
            $this->data = $values['data'];
            $this->lista_produtos = $values['lista_produtos'];
            $this->valor_total = $values['valor_total'];
            $this->usuarios_id = $values['usuarios_id'];
            $this->farmacias_id = $values['farmacias_id'];
        }
        }
            
        return $results;
    }
    
    public function insert(){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'INSERT INTO compras VALUES(0,"'.$this->data.'",'
                . '"'.$this->lista_produtos.'",'
                . $this->valor_total.','
                . $this->usuarios_id.','
                . $this->farmacias_id.')';
        
        $db->Executar($sql);
        
        $db->Desconectar();
        
        return $db->total;
    }
}
