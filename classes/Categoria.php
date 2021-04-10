<?php

/**
 * Class Categoria
 * @author Maico Tedesco Mendes
 */
class Categoria
{
    private $id_categoria;
    private $nome;
    private $descricao;

    public function __construct($id_c, $n, $d)
    {
        $this->id_categoria = $id_c;
        $this->nome = $n;
        $this->descricao = $d;
    }

    public function getIdCategoria() {
        return $this->id_categoria;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getDescricao() {
        return $this->descricao;
    }
}
