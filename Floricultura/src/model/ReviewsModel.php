<?php

namespace Model;

class ReviewsModel
{

    protected $id;
    protected $nota;
    protected $comentario;
    protected $usuarios_id;
    protected $produtos_id;

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
     * Get the value of nota
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set the value of nota
     */
    public function setNota($nota): self
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get the value of comentario
     */
    public function getComentario()
    {
        return $this->comentario;
    }

    /**
     * Set the value of comentario
     */
    public function setComentario($comentario): self
    {
        $this->comentario = $comentario;

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

    /**
     * Get the value of produtos_id
     */
    public function getProdutosId()
    {
        return $this->produtos_id;
    }

    /**
     * Set the value of produtos_id
     */
    public function setProdutosId($produtos_id): self
    {
        $this->produtos_id = $produtos_id;

        return $this;
    }
}
