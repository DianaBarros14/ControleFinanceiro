<?php

if (isset($_POST['btnCalcular'])) {

    $numero1 = trim($_POST['n1']);
    $numero2 = trim($_POST['n2']);
 
    if ($numero1 == '' || $numero2 == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    }else{
        $soma = $numero1 + $numero2;
    }

    if($soma % 2 == 0){
        echo "O numero é par";
    }else{
        echo "O numero é impar";
    }
 
    if ($soma < 100) {
        $status = '<div style="font-weight: bold>; color:#006400;">Resultado menor que 100!</div>';
    } else if ($soma > 100) {
        $status = '<div style="font-weight: bold>; color:#006400;">Resultado maior que 100!</div>';
    } else {
        $status = '<div style="font-weight: bold>; color:#006400;">Resultado iguial a 100!</div>';
    }
   
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <form action="exercicio.php" method="post">
        <label>Numero 1 </label>
        <input type="text" name="n1" value="<?= isset($numero1) ? $numero1 : '' ?>">
        <label>Numero 2 </label>
        <input type="text" name="n2" value="<?= isset($numero2) ? $numero2 : '' ?>">
        <input disabled value="<?= isset($soma) ? $soma : '' ?>">
        <br>
        <button name="btnCalcular">Caucular</button>
        <hr>   
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    
</body>
</html>