<?php

class PlanoInternet
{
  public $nome;
  public $velocidade;
  public $preco;

  public function __construct($nome, $preco, $velocidade)
  {
    $this->nome = $nome;
    $this->preco = $preco;
    $this->velocidade = $velocidade;
  }

  public function detalhes()
  {
    return $this->nome . $this->preco . $this->velocidade;
  }
}
