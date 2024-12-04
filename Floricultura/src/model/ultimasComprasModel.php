<?php
namespace Model;

class UltimasComprasModel {
    protected $id;
    protected $data;
    protected $lista_produtos;
    protected $valor_total;
    protected $farmacia_compra;
    protected $usuarios_id;
    
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

    public function getFarmacia_compra() {
        return $this->farmacia_compra;
    }

    public function getUsuarios_id() {
        return $this->usuarios_id;
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

    public function setFarmacia_compra($farmacia_compra): void {
        $this->farmacia_compra = $farmacia_compra;
    }

    public function setUsuarios_id($usuarios_id): void {
        $this->usuarios_id = $usuarios_id;
    }

    public function __construct() {
        
    }
    
    public function loadAll($user_id){
        $db = new ConexaoMysql();
        
        $db->Conectar();
        
        $sql = 'SELECT * FROM ultimas_compras WHERE usuarios_id ='.$user_id;
                
        $results = $db->Consultar($sql);
        
        if($db->total == 1){
            echo("sucesso");
            foreach($results as $values){
            $this->id = $values['id'];
            $this->data = $values['data'];
            $this->lista_produtos = $values['lista_produtos'];
            $this->valor_total = $values['valor_total'];
            $this->farmacia_compra = $values['farmacia_compra'];
            $this->usuarios_id = $values['usuarios_id'];
        }
        }
            
        return $results;
    }
        
    }
?>
