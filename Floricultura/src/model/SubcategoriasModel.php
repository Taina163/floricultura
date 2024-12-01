<?php

namespace Model;

class SubcategoriasModel
{
    protected $id;
    protected $nome;
    protected $descricao;
    protected $categorias_id;

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
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao($descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of categorias_id
     */
    public function getCategoriasId()
    {
        return $this->categorias_id;
    }

    /**
     * Set the value of categorias_id
     */
    public function setCategoriasId($categorias_id): self
    {
        $this->categorias_id = $categorias_id;

        return $this;
    }
}
