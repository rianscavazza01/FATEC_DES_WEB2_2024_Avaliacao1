<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'coordenacao' and $_POST['password'] == 'coordenacao'){
        $_SESSION['cordenador'] = TRUE;
        $_SESSION["username"] = 'Cordenador';
        header("location: welcome.php");
    } 
    else if($_POST['username'] == 'tecnicos' and $_POST['password'] == 'tecnicos'){
        $_SESSION['tecnico'] = TRUE;
        $_SESSION["username"] = 'Tecnico';
        header("location: welcome.php");
    } 
    else {
        $_SESSION['cordenador'] = FALSE;
        $_SESSION['tecnico'] = FALSE;
    }
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
        <h2>Acessar</h2>
        <p>Favor inserir login e senha.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
                <span class="help-block"></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
            <div class="form-group">
                <a href="visualiza.php"><button class="btn btn-primary">Visualizar agendamentos</button></a>
            </div>
    </div>    
</body>
</html>