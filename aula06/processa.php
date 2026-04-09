<?php 
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //email: adm@gmail.com
    //senha: 1234
    

    if ($email == 'areasupersuperrestrita@gmail.com' && $senha == '244466666') {
        //vamos para a área restrita
        //echo 'vamos para a área restrita';
        $nome = "Samir";

        header('Location: secreta.php?nome='.$nome);
    } else {
        //volta para o forms
        //echo 'volta para o forms';
        header('Location: erro.php');
    }
    
?>