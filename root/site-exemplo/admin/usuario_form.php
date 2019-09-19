<?php
    $tituloPagina = "Dashboard";
    include_once("inc/topo.php");

    include_once(__DIR__ . "/dao/usuarios.dao.php");


    $id = "";
    $nome = "";
    $email = "";
    $senha = "";
    $subTitulo = "Inclusão";
    //Se receber o ID via GET, busca o registro para Alteração
    //Caso contrário, será Inclusão
    if (isset($_GET["id"]) && $_GET["id"] != "") {
        $id = $_GET["id"];
        $subTitulo = "Alteração";
        $usuariosDAO = new UsuariosDAO();
        $usuario = $usuariosDAO->BuscarPorId($id);
        $nome = $usuario->Nome;
        $email = $usuario->Email;
        $senha = $usuario->Senha;
        
    }
?>

<!-- Cadastro de USUARIO - Inicio do código personalizado -->
<h1 class="h2">Cadastro de Usuários <small><?=$subTitulo?></small></h1>

<form action="usuario_acao.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>"/>
    
    <div>
        <label>Nome:</label>
        <input type="text" id="Nome" name="txtNome" class="form-control" value="<?=$nome?>"/>
    </div>
    
    <div>
        <label>E-mail:</label>
        <input type="text" id="Email" name="txtEmail" class="form-control" value="<?=$email?>"/>
    </div>
    
    <div>
        <label>Senha:</label>
        <input type="text" id="Senha" name="txtSenha" class="form-control" value="<?=$senha?>"/>
    </div>
        
    <div>
        <button type="submit">Salvar</button>
    </div>
    
</form>


<!-- Usuario - Final do código personalizado -->

<?php
    include_once("inc/rodape.php");
?>