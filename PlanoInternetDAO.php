<?php

require_once 'PlanoInternet.php';
require_once 'Conexao.php';

class PlanoInternetDAO
{
  public function create(PlanoInternet $plano)
  {
    $conn = Conexao::getConn();
    $stmt = $conn->prepare('INSERT INTO planos_internet (nome, preco, velocidade) VALUES (?, ?, ?)');
    $stmt->bindValue(1, $plano->nome);
    $stmt->bindValue(2, $plano->preco);
    $stmt->bindValue(3, $plano->velocidade);
    $stmt->execute();
  }

  public function read()
  {
    $conn = Conexao::getConn();
    $stmt = $conn->query('SELECT * FROM planos_internet');
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
