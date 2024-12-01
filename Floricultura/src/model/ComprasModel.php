<?php

namespace Model;

class ComprasModel
{

    protected $id;
    protected $valor_total;
    protected $lista_produtos;
    protected $data_compra;
    protected $usuarios_id;

    public function __construct() {}



    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of valor_total
     */
    public function getValorTotal()
    {
        return $this->valor_total;
    }

    /**
     * Set the value of valor_total
     */
    public function setValorTotal($valor_total): self
    {
        $this->valor_total = $valor_total;

        return $this;
    }

    /**
     * Get the value of lista_produtos
     */
    public function getListaProdutos()
    {
        return $this->lista_produtos;
    }

    /**
     * Set the value of lista_produtos
     */
    public function setListaProdutos($lista_produtos): self
    {
        $this->lista_produtos = $lista_produtos;

        return $this;
    }

    /**
     * Get the value of data_compra
     */
    public function getDataCompra()
    {
        return $this->data_compra;
    }

    /**
     * Set the value of data_compra
     */
    public function setDataCompra($data_compra): self
    {
        $this->data_compra = $data_compra;

        return $this;
    }

    /**
     * Get the value of usuarios_id
     */
    public function getUsuariosId()
    {
        return $this->usuarios_id;
    }

    /**
     * Set the value of usuarios_id
     */
    public function setUsuariosId($usuarios_id): self
    {
        $this->usuarios_id = $usuarios_id;

        return $this;
    }
}
