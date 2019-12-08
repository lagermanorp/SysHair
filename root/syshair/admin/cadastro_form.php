
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">


<?php
    
    include_once(__DIR__ . "/dao/usuarios.dao.php");

    $id = "";
    $nome = "";
    $telefone = "";
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
        $telefone = $usuario->Telefone;
        $email = $usuario->Email;
        $senha = $usuario->Senha;
        
    }

?>

    <title>Formulário de Cadastro</title>


    <!-- Principal CSS do Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="../css/floating-labels.css" rel="stylesheet">
  <script type="text/javascript" charset="UTF-8"></script>
</head>

  <body>
    <form class="form-signin" action="usuario_acao.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>"/>

      <div class="text-center mb-4">
        <img class="mb-4" src="../images/barbershop.png" alt="" width="150" height="150">
        <h1 class="h3 mb-3 font-weight-normal">Formulário de Cadastro</h1>
        <p>Favor informar os seus dados.</p>
      </div>

      <div class="form-label-group">
        <input type="nome" id="inputNome" name="txtNome" class="form-control" placeholder="Nome Completo" required autofocus>
        <label for="inputNome">Nome</label>
      </div>
      
      <div class="form-label-group">
        <input type="telefone" id="inputTelefone" name="txtTelefone" class="form-control" placeholder="Telefone" required autofocus>
        <label for="inputTelefone">Telefone</label>
      </div>
      
      <div class="form-label-group">
        <input type="email" id="inputEmail" name= "txtEmail" class="form-control" placeholder="Endereço de email" required autofocus>
        <label for="inputEmail">Endereço de email</label>
      </div>

      <div class="form-label-group">
        <input type="password" id="inputPassword" name="txtSenha" class="form-control" placeholder="Senha" required>
        <label for="inputPassword">Senha</label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; LGL Systems & Softwares - 2019</p>
    </form>
  </body>
</html>
