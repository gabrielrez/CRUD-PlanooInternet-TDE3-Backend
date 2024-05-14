<?php
require_once 'PlanoInternet.php';
require_once 'PlanoInternetDAO.php';

$planoDAO = new PlanoInternetDAO();
$planos = $planoDAO->read();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Planos de internet</title>
</head>

<style>
  body {
    max-width: 400px;
    margin: auto;
  }

  .box {
    border: 1px solid #ccc;
    padding: 8px;
    margin-top: 8px;
    border-radius: 8px;
  }
</style>

<body>
  <div class="container">
    <?php foreach ($planos as $plano) : ?>
      <div class="box">
        <div class="header">
          <h3 class="title"><?= $plano['nome'] ?></h3>
        </div>
        <div class="content">
          <ul>
            <li>Velocidade: <?= $plano['velocidade'] ?> Mbps</li>
            <li>Preço: R$ <?= $plano['preco'] ?> / mês</li>
          </ul>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>