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

  public function update(PlanoInternet $plano)
  {
    $conn = Conexao::getConn();
    $stmt = $conn->prepare('UPDATE planos_internet SET nome = ?, preco = ?, velocidade = ? WHERE id = ?');
    $stmt->bindValue(1, $plano->getNome());
    $stmt->bindValue(1, $plano->getPreco());
    $stmt->bindValue(1, $plano->getVelocidade());
    $stmt->bindValue(1, $plano->getId());
  }

  public function delete(PlanoInternet $plano)
  {
    $stmt = Conexao::getConn()->prepare('DELETE FROM planos_internet WHERE id = ?');
    $stmt->bindValue(1, $plano->getId());
    $stmt->execute();
  }
}
