<?php
session_start();

if (isset($_SESSION['cordenador']) && $_SESSION['cordenador'] === true) {
} elseif (isset($_SESSION['tecnico']) && $_SESSION['tecnico'] === true) {
} else {
    header('location: index.php');
    exit();
}
?>

 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>.Benvindo ao site.</h1>
    </div>
    <p>
        <a href="cadastro.php" class="btn btn-primary">Cadastro </a>
        <br><br>
        <a href="visualiza_ge.php" class="btn btn-info">Verificar GE</a>
        <br><br>
        <a href="visualiza_dsm.php" class="btn btn-info">Verificar DSM</a>
        <br><br>
        <a href="visualiza.php" class="btn btn-info">Verificar TUDO</a>
        <br><br>
        <a href="logout.php" class="btn btn-danger">Sair da conta</a>
    </p>
</body>
</html>