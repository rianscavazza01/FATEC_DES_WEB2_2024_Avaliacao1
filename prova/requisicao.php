<?php
    session_start();

    if (isset($_SESSION['cordenador']) && $_SESSION['cordenador'] === true) {
    } else {
        header('location: index.php');
        exit();
    }

    if ($_POST['opcao2'] == 'ge'){
    $arquivo = "ge.txt";
    if(!file_exists("ge.txt")){
        $abre = fopen("ge.txt", "w");
    }else{
        $abre = fopen("ge.txt", "a");
    }

    fwrite($abre, $_POST['opcao1'].' | ');
    fwrite($abre,  $_POST['data'].' | ');
    fwrite($abre,  $_POST['solicitacao'].' | ');
    fwrite($abre,  $_POST['opcao2']);
    fwrite($abre, "\n");
    fflush($abre);
    fclose($abre);

    header("location: cadastro.php");
    } elseif($_POST['opcao2'] == 'dsm'){
        if ($_POST['opcao2'] == 'dsm'){
    $arquivo = "dsm.txt";
    if(!file_exists("dsm.txt")){
        $abre = fopen("dsm.txt", "w");
    }else{
        $abre = fopen("dsm.txt", "a");
    }

    fwrite($abre, $_POST['opcao1'].' | ');
    fwrite($abre,  $_POST['data'].' | ');
    fwrite($abre,  $_POST['solicitacao'].' | ');
    fwrite($abre,  $_POST['opcao2']);
    fwrite($abre, "\n");
    fflush($abre);
    fclose($abre);
    
    header("location: cadastro.php");
    }   
    }
?>