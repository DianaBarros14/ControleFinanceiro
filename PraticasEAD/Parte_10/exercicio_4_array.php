<?php

if(isset($_POST['btnCalcular'])){
    $tabuada = trim($_POST['tabuada']);

    if ($tabuada == ''){
        $msgError = '<div style="font-wight: bold; color:#ff0000;">Preencher todos os campos obrigatórios! </div>';
    }else{
        for ($i = 0; $i <= 10; $i++) {
            echo $tabuada . ' X ' . $i . ' = ' . ($tabuada * $i) . '<br>';
        }
    }
}
echo '<hr>';

?>

<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>

<body>
    <form method="POST" action="exercicio_4_array.php">
        <label>Selecione a tabuada desejada:</label>
        <select name="tabuada">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <button name="btnCalcular">Calcular</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>