<?php

class PlanoInternet
{
  public $nome;
  public $velocidade;
  public $preco;
  public $id;

  public function __construct($nome, $preco, $velocidade)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->velocidade = $velocidade;
  }

  public function getNome()
  {
    return $this->nome;
  }

  public function getPreco()
  {
    return $this->preco;
  }

  public function getVelocidade()
  {
    return $this->velocidade;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function detalhes()
  {
    return $this->nome . $this->preco . $this->velocidade;
  }
}
