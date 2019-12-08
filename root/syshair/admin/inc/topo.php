<?php
  
    session_start();

   
    if($_SESSION["Usuario"] == ""){
        
        header("location: login.php?erro=Usuário não autorizado!!!");
        exit();
        
    }

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Admin do Site do WebDesign Studio">
    <meta name="author" content="Luiz Germano">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Visual - O seu novo jeito de ser!!!<?=tituloPagina;?></title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">-->

    <!-- Bootstrap core CSS -->
      <?php
        include_once("/bootstrap.php");

      ?>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="/syshair/css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../index.html"><img class="mb-4" src="/syshair/images/barbershop.png" alt="" width="110"></a>
      <div class="navbar-collapse">
      <h2 class="navbar-text mr-auto bg-sucess" style="padding-left: 50px; color: white"><?=$titulo?></h2>     

        <h6 class="my-2 my-sm-0 bg-sucess" style="padding-right: 30px; color: white"><?php echo 'Olá!!!  ' . $_SESSION["Nome"]; ?></h6>
      </div>
    </nav>

<div class="container-fluid" style="margin-top: 107px;">
  <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">
              <span data-feather="book-open"></span>
              Agenda Geral<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="empresa.php">
              <span data-feather="film"></span>
              Minha Agenda
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tipousuario_lista.php">
              <span data-feather="unlock"></span>
              Tipo Usuários
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cliente_lista.php">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profissional_lista.php">
              <span data-feather="user"></span>
              Profissionais
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="servico_lista.php">
              <span data-feather="scissors"></span>
              Serviços
            </a>
          </li>
            
            <li class="nav-item">
            <a class="nav-link" href="usuario_lista.php">
              <span data-feather="layers"></span>
              Relatórios
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="../admin/logout.php">
              <span data-feather="power"></span>
              Sair
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">