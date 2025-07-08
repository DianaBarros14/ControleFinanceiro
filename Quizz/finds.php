<?php
session_start();

// Definição das respostas corretas
$respostasCorretas = [
  'pergunta1' => 'c', // Brasília
  'pergunta2' => 'd', // 8
  'pergunta3' => 'c', // 26
  'pergunta4' => 'a', // Salvador
  'pergunta5' => 'b'  // Júpiter (corrigido de "Jípter")
];

// Verifica se o formulário foi enviado
if (isset($_POST['btnEnviar'])) {
  $pontos = 0;

  // Verifica as respostas do usuário
  foreach ($respostasCorretas as $pergunta => $respostaCorreta) {
    if (isset($_POST[$pergunta]) && $_POST[$pergunta] == $respostaCorreta) {
      $pontos++;
    }
  }

  // Define a mensagem de resultado na sessão
  if ($pontos == 5) {
    $_SESSION['mensagem'] = "🎉 Parabéns! Você acertou todas as respostas!";
  } elseif ($pontos >= 3) {
    $_SESSION['mensagem'] = "👏 Bom trabalho! Você acertou $pontos de 5 questões.";
  } elseif ($pontos >= 1) {
    $_SESSION['mensagem'] = "⚠️ Você acertou $pontos de 5 questões. Continue praticando!";
  } else {
    $_SESSION['mensagem'] = "❌ Você não acertou nenhuma resposta. Tente novamente!";
  }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Quiz</title>
</head>

<body>
  <div class="titulo">
    <h1>Quiz de Conhecimentos Gerais</h1>
  </div>

  <!-- Exibição da mensagem se existir -->
  <?php
  if (isset($_SESSION['mensagem'])) {
    echo "<div class='resultado'><p>{$_SESSION['mensagem']}</p></div>";
    unset($_SESSION['mensagem']); // Remove a mensagem após exibição
  }
  ?>

  <form action="finds.php" method="POST">
    <div class="grid-1">
      <p>1. Qual a capital do Brasil ?</p>
      <input type="radio" name="pergunta1" value="a"> São Paulo<br>
      <input type="radio" name="pergunta1" value="b"> Rio de Janeiro<br>
      <input type="radio" name="pergunta1" value="c"> Brasília<br>
      <input type="radio" name="pergunta1" value="d"> Salvador<br>
    </div>
    <hr>
    <div class="grid-2">
      <p>2. Quantos planetas existem no sistema solar ?</p>
      <input type="radio" name="pergunta2" value="a"> 4<br>
      <input type="radio" name="pergunta2" value="b"> 7<br>
      <input type="radio" name="pergunta2" value="c"> 9<br>
      <input type="radio" name="pergunta2" value="d"> 8<br>
    </div>
    <hr>
    <div class="grid-3">
      <p>3. Quantos estados existem no Brasil ?</p>
      <input type="radio" name="pergunta3" value="a"> 27<br>
      <input type="radio" name="pergunta3" value="b"> 29<br>
      <input type="radio" name="pergunta3" value="c"> 26<br>
      <input type="radio" name="pergunta3" value="d"> 32<br>
    </div>
    <hr>
    <div class="grid-4">
      <p>4. Qual a primeira capital do Brasil ?</p>
      <input type="radio" name="pergunta4" value="a"> Salvador<br>
      <input type="radio" name="pergunta4" value="b"> Bahia<br>
      <input type="radio" name="pergunta4" value="c"> Rio de Janeiro<br>
      <input type="radio" name="pergunta4" value="d"> São Paulo<br>
    </div>
    <hr>
    <div class="grid-5">
      <p>5. Qual maior planeta do sistema solar ?</p>
      <input type="radio" name="pergunta5" value="a"> Marte<br>
      <input type="radio" name="pergunta5" value="b"> Júpiter<br>
      <input type="radio" name="pergunta5" value="c"> Saturno<br>
      <input type="radio" name="pergunta5" value="d"> Urano<br>
    </div>
    <hr><br>

    <div class="box-btn">
      <button type="submit" name="btnEnviar" class="style-btn">Enviar Respostas</button>
    </div>
  </form>
</body>

</html>