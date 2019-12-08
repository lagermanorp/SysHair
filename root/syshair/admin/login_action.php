<?php

    include_once(__DIR__ . "/dao/usuarios.dao.php");

    $usuario_dao = new UsuariosDAO();

    $Usu = $usuario_dao->BuscarObjPorUsuarioSenha($_POST["Email"], $_POST["Senha"]);
        if($Usu != null) {
        
        session_start();
        $_SESSION["Usuario"] = $_POST["Email"];
        $_SESSION["Nome"] = $Usu->Nome;
      
        echo $_SESSION["Nome"];
        header("location: ../agenda.html");
        exit();
    }

   header("location: usuario_form.php?erro=Credenciais incorretas!!!");


?>