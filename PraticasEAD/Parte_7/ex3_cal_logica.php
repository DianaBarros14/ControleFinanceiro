<?php

$gJan = '';
$gFev = '';
$gMar = '';
$gAbr = '';
$gMai = '';
$gJun = '';
$gJul = '';
$gAgo = '';
$gSet = '';
$gOut = '';
$gNov = '';
$gDez = '';
$pJan = '';
$pFev = '';
$pMar = '';
$pAbr = '';
$pMai = '';
$pJun = '';
$pJul = '';
$pAgo = '';
$pSet = '';
$pOut = '';
$pNov = '';
$pDez = '';
$totalGanhos = '';
$totalPerdas = '';
$lucroReal = '';
$lucroJaneiro = '';
$lucroFevereiro = '';
$lucroMarco = '';
$lucroAbril = '';
$lucroMaio = '';
$lucroJunnho = '';
$lucroJulho = '';
$lucroAgosto = '';
$lucroSetembro = '';
$lucroOutubro = '';
$lucroNovembro = '';
$lucroDezembro = '';

if (isset($_POST['btnEnviar'])) {
    $gJan = trim($_POST['gJan']);
    $gFev = trim($_POST['gFev']);
    $gMar = trim($_POST['gMar']);
    $gAbr = trim($_POST['gAbr']);
    $gMai = trim($_POST['gMai']);
    $gJun = trim($_POST['gJun']);
    $gJul = trim($_POST['gJul']);
    $gAgo = trim($_POST['gAgo']);
    $gSet = trim($_POST['gSet']);
    $gOut = trim($_POST['gOut']);
    $gNov = trim($_POST['gNov']);
    $gDez = trim($_POST['gDez']);
    $pJan = trim($_POST['pJan']);
    $pFev = trim($_POST['pFev']);
    $pMar = trim($_POST['pMar']);
    $pAbr = trim($_POST['pAbr']);
    $pMai = trim($_POST['pMai']);
    $pJun = trim($_POST['pJun']);
    $pJul = trim($_POST['pJul']);
    $pAgo = trim($_POST['pAgo']);
    $pSet = trim($_POST['pSet']);
    $pOut = trim($_POST['pOut']);
    $pNov = trim($_POST['pNov']);
    $pDez = trim($_POST['pDez']);

    $totalGanhos = $gJan + $gFev + $gMar + $gAbr + $gMai + $gJun + $gJul + $gAgo + $gSet + $gOut + $gNov + $gDez;
    $totalPerdas = $pJan + $pFev + $pMar + $pAbr + $pMai + $pJun + $pJul + $pAgo + $pSet + $pOut + $pNov + $pDez;

    $lucroReal = $totalGanhos - $totalPerdas;

    $lucroJaneiro = $gJan - $pJan;
    $lucroFevereiro = $gFev - $pFev;
    $lucroMarco = $gMar - $pMar;
    $lucroAbril = $gAbr - $pAbr;
    $lucroMaio = $gMai - $pMai;
    $lucroJunho = $gJun - $pJun;
    $lucroJulho = $gJul - $pJul;
    $lucroAgosto = $gAgo - $pAgo;
    $lucroSetembro = $gSet - $pSet;
    $lucroOutubro = $gOut - $pOut;
    $lucroNovembro = $gNov - $pNov;
    $lucroDezembro = $gDez - $pDez;
}

?>

<!DOCTYPE html>
<html lang="pt=br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Ganhos e Percas</title>
</head>

<body>
    <div class="title-page">
        <h1>Relatórios de Ganhos!</h1>
    </div>
    <form action="ex3_cal_logica.php" method='post'>
        <div class="box-dados">
            <div class="dados-1">
                <label>Ganho do mês de Janeiro:</label>
                <input type="text" name="gJan" value="<?= $gJan ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Fevereiro:</label>
                <input type="text" name="gFev" value="<?= $gFev ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Março:</label>
                <input type="text" name="gMar" value="<?= $gMar ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Abril:</label>
                <input type="text" name="gAbr" value="<?= $gAbr ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Maio:</label>
                <input type="text" name="gMai" value="<?= $gMai ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Junho:</label>
                <input type="text" name="gJun" value="<?= $gJun ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Julho:</label>
                <input type="text" name="gJul" value="<?= $gJul ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Agosto:</label>
                <input type="text" name="gAgo" value="<?= $gAgo ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Setembro:</label>
                <input type="text" name="gSet" value="<?= $gSet ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Outubro:</label>
                <input type="text" name="gOut" value="<?= $gOut ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Novembro:</label>
                <input type="text" name="gNov" value="<?= $gNov ?>" placeholder="Digite aqui...">
                <br>
                <label>Ganho do mês de Dezembro:</label>
                <input type="text" name="gDez" value="<?= $gDez ?>" placeholder="Digite aqui...">
            </div>

            <div class="dados-2">
                <label>Perdas do mês de Janeiro:</label>
                <input type="text" name="pJan" value="<?= $pJan ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Fevereiro:</label>
                <input type="text" name="pFev" value="<?= $pFev ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Março:</label>
                <input type="text" name="pMar" value="<?= $pMar ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Abril:</label>
                <input type="text" name="pAbr" value="<?= $pAbr ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Maio:</label>
                <input type="text" name="pMai" value="<?= $pMai ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Junho:</label>
                <input type="text" name="pJun" value="<?= $pJun ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Julho:</label>
                <input type="text" name="pJul" value="<?= $pJul ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Agosto:</label>
                <input type="text" name="pAgo" value="<?= $pAgo ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Setembro:</label>
                <input type="text" name="pSet" value="<?= $pSet ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Outubro:</label>
                <input type="text" name="pOut" value="<?= $pOut ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Novembro:</label>
                <input type="text" name="pNov" value="<?= $pNov ?>" placeholder="Digite aqui...">
                <br>
                <label>Perdas do mês de Dezembro:</label>
                <input type="text" name="pDez" value="<?= $pDez ?>" placeholder="Digite aqui...">
            </div>
        </div>

        <div class="box-btn">
            <button name="btnEnviar" class="style-btn">Enviar</button>
        </div>
    </form>

    <div class="box-resultado-1">
        <label>Total de Ganhos:</label>
        <input disabled value="R$ <?= number_format($totalGanhos, 2, ',', '.') ?>">
        <label>Perdas de Perdas:</label>
        <input disabled value="R$ <?= number_format($totalPerdas, 2, ',', '.') ?>">
        <label>Lucro Real Anual:</label>
        <input disabled value="R$ <?= number_format($lucroReal, 2, ',', '.') ?>">
    </div>

    <div class="box-dados">
        <div class="dados-1">
            <label>Lucro Real de Janeiro:</label>
            <input disabled value="R$ <?= number_format($lucroJaneiro, 2, ',', '.') ?>">
            <label>Lucro Real de Fevereiro:</label>
            <input disabled value="R$ <?= number_format($lucroFevereiro, 2, ',', '.') ?>">
            <label>Lucro Real de Março:</label>
            <input disabled value="R$ <?= number_format($lucroMarco, 2, ',', '.') ?>">
            <label>Lucro Real de Abril:</label>
            <input disabled value="R$ <?= number_format($lucroAbril, 2, ',', '.') ?>">
            <label>Lucro Real de Maio:</label>
            <input disabled value="R$ <?= number_format($lucroMaio, 2, ',', '.') ?>">
            <label>Lucro Real de Junho:</label>
            <input disabled value="R$ <?= number_format($lucroJunho, 2, ',', '.') ?>">
        </div>
        <div class="dados-2">
            <label>Lucro Real de Julho:</label>
            <input disabled value="R$ <?= number_format($lucroJulho, 2, ',', '.') ?>">
            <label>Lucro Real de Agosto:</label>
            <input disabled value="R$ <?= number_format($lucroAgosto, 2, ',', '.') ?>">
            <label>Lucro Real de Stemebro:</label>
            <input disabled value="R$ <?= number_format($lucroSetembro, 2, ',', '.') ?>">
            <label>Lucro Real de Outubro:</label>
            <input disabled value="R$ <?= number_format($lucroOutubro, 2, ',', '.') ?>">
            <label>Lucro Real de Novembro:</label>
            <input disabled value="R$ <?= number_format($lucroNovembro, 2, ',', '.') ?>">
            <label>Lucro Real de Dezembro:</label>
            <input disabled value="R$ <?= number_format($lucroDezembro, 2, ',', '.') ?>">
        </div>
    </div>
</body>

</html>