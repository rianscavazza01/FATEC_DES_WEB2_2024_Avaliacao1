<?php
session_start();

if (isset($_SESSION['cordenador']) && $_SESSION['cordenador'] === true) {
} else {
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastrar</h2>
        <form action="requisicao.php" method="post">
            <h4>Laboratórios</h4>
                <label for="opcao">Escolha:</label>
                <select id="opcao" name="opcao1">
                    <option value="lab1">Lab 1</option>
                    <option value="lab2">Lab 2</option>
                    <option value="lab3">Lab 3</option>
                </select>
            
            <br>

            <div class="form-group">
                <label>Prazo Limite (dd/mm/aaaa)</label>
                <input type="data" name="data" class="form-control" value="">
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <label>Solicitação</label>
                <input type="text" name="solicitacao" class="form-control" value="">
                <span class="help-block"></span>
            </div>

            <h4>Curso</h4>
                <label for="opcao">Escolha:</label>
                <select id="opcao" name="opcao2">
                    <option value="ge">GE</option>
                    <option value="dsm">DSM</option>
                </select>

            <br>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>    
</body>
</html>