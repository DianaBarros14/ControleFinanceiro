<?php

if (isset($_POST['btnEnviar'])) {
  $nome = trim($_POST['nome']);
  $idade = trim($_POST['idade']);

  if ($nome == '' || $idade == '') {
    $msgError = '<div style="font-wight: bold; color:#ff0000;">Preencher todos os campos obrigatórios! </div>';
  } else {
    // $nome_idade = array($nome, $idade);

    for ($i = 0; $i <= 5; $i++) {
      echo 'Meu nome  é ' . $nome . ' e tenho ' . $idade . ' anos de idade ' . '.';
    }
  }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atividade 1</title>
</head>

<body>
  <form action="exercicio_2_array.php" method="POST">
    <label>Digite seu Nome:</label>
    <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
    <label>Digite sua Idade:</label>
    <input type="text" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
    <button name="btnEnviar">Ver</button>
  </form>
  <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>