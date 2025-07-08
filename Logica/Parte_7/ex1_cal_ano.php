<?php

$janeiro = '';
$fevereiro = '';
$março = '';
$abril = '';
$maio = '';
$junho = '';
$julho = '';
$agosto = '';
$setembro = '';
$outubro = '';
$novembro = '';
$dezembro = '';

$soma = '';

if (isset($_POST['btn_somar'])) {
    $janeiro = trim($_POST['jan']);
    $fevereiro = trim($_POST['fev']);
    $março = trim($_POST['mar']);
    $abril = trim($_POST['abr']);
    $maio = trim($_POST['mai']);
    $junho = trim($_POST['jun']);
    $julho = trim($_POST['jul']);
    $agosto = trim($_POST['ago']);
    $setembro = trim($_POST['set']);
    $outubro = trim($_POST['out']);
    $novembro = trim($_POST['nov']);
    $dezembro = trim($_POST['dez']);

    $soma = $janeiro + $fevereiro + $março + $abril + $maio + $junho + $julho + $agosto + $setembro + $outubro + $novembro + $dezembro;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganhos dos mêses</title>
</head>

<body>
    <form method='post' action="ex1_cal_ano.php">
        <label>Ganho do mês de Janeiro:</label>
        <input type="text" name="jan" value="<?= $janeiro ?>">
        <br>
        <label>Ganho do mês de Fevereiro:</label>
        <input type="text" name="fev" value="<?= $fevereiro ?>">
        <br>
        <label>Ganho do mês de Março:</label>
        <input type="text" name="mar" value="<?= $março ?>">
        <br>
        <label>Ganho do mês de Abril:</label>
        <input type="text" name="abr" value="<?= $abril ?>">
        <br>
        <label>Ganho do mês de Maio:</label>
        <input type="text" name="mai" value="<?= $maio ?>">
        <br>
        <label>Ganho do mês de Junho:</label>
        <input type="text" name="jun" value="<?= $junho ?>">
        <br>
        <label>Ganho do mês de Julho:</label>
        <input type="text" name="jul" value="<?= $julho ?>">
        <br>
        <label>Ganho do mês de Agosto:</label>
        <input type="text" name="ago" value="<?= $agosto ?>">
        <br>
        <label>Ganho do mês de Setembro:</label>
        <input type="text" name="set" value="<?= $setembro ?>">
        <br>
        <label>Ganho do mês de Outubro:</label>
        <input type="text" name="out" value="<?= $outubro ?>">
        <br>
        <label>Ganho do mês de Novembro:</label>
        <input type="text" name="nov" value="<?= $novembro ?>">
        <br>
        <label>Ganho do mês de Dezembro:</label>
        <input type="text" name="dez" value="<?= $dezembro ?>">
        <br>
        <button name="btn_somar">Somar</button>
        <input disabled value="<?= $soma ?>">

    </form>

</body>

</html>