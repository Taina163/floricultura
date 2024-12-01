<?php

namespace Model;

class ProdutosModel
{

    protected $id;
    protected $nome;
    protected $preco_venda;
    protected $descricao;
    protected $imagem;
    protected $subcategorias_id;

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
     * Get the value of preco_venda
     */
    public function getPrecoVenda()
    {
        return $this->preco_venda;
    }

    /**
     * Set the value of preco_venda
     */
    public function setPrecoVenda($preco_venda): self
    {
        $this->preco_venda = $preco_venda;

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
     * Get the value of imagem
     */
    public function getImagem()
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     */
    public function setImagem($imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of subcategorias_id
     */
    public function getSubcategoriasId()
    {
        return $this->subcategorias_id;
    }

    /**
     * Set the value of subcategorias_id
     */
    public function setSubcategoriasId($subcategorias_id): self
    {
        $this->subcategorias_id = $subcategorias_id;

        return $this;
    }
}
