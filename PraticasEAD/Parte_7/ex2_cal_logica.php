<?php

$numero_1 = '';
$numero_2 = '';
$numero_3 = '';
$numero_4 = '';
$numero_5 = '';

$cauculo = '';

if (isset($_POST['btn_caucular'])) {
    $numero_1 = trim($_POST['n1']);
    $numero_2 = trim($_POST['n2']);
    $numero_3 = trim($_POST['n3']);
    $numero_4 = trim($_POST['n4']);
    $numero_5 = trim($_POST['n5']);

    $cauculo = ($numero_1 + $numero_2 + $numero_3) / ($numero_5 * $numero_5);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cauculo</title>
</head>

<body>
    <form method='post' action="ex2_cal_logica.php">
        <label> Numero 1: </label>
        <input type="text" name="n1" value="<?= $numero_1 ?>">
        <br>
        <label> Numero 2: </label>
        <input type="text" name="n2" value="<?= $numero_2 ?>">
        <br>
        <label> Numero 3: </label>
        <input type="text" name="n3" value="<?= $numero_3 ?>">
        <br>
        <label> Numero 4: </label>
        <input type="text" name="n4" value="<?= $numero_4 ?>">
        <br>
        <label> Numero 5: </label>
        <input type="text" name="n5" value="<?= $numero_5 ?>">
        <br>
        <button name="btn_caucular">Caucular<</button>
                <input disabled value="<?= $caucular ?>">


    </form>
</body>

</html>