<?php

    $tituloPagina = "Dashboard";
    $titulo = "Usuários";
    include_once("inc/topo.php");

?>

<?php
    
    
    include_once(__DIR__ . "/dao/usuarios.dao.php");

?>

<!-- Contato - Inicio do código personalizado -->
    <div>
        <a href="usuario_form.php" class="btn btn-primary">
        <span data-feather="plus-circle"></span>Salvar</a>
    </div>

    
<table class="table table-striped table-sm">
    <thead>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
        //Instancia a DAO
        $usuariosDAO = new UsuariosDAO();
        //Chama o Método de Listagem e armazena o resultado em $usuarios
        $usuarios = $usuariosDAO->ListarTudo();
        //Varre os elementos do Vetor, e exibe-os na listagem
        foreach($usuarios as $us) { //Fecha mais abaixo
        ?>
        <tr>
            <td><?=$us->Id?></td>
            <td><?=$us->Nome?></td>
            <td><a href="mailto:<?=$us->Email?>"><?=$us->Email?></a></td>
            <td><?=$us->Telefone?></td>
            <td><a href="usuario_form.php?id=<?=$us->Id?>">Alterar</a></td>
            <td><a href="usuario_form.php?id=<?=$us->Id?>">Excluir</a></td>
            
        </tr>
        <?php
        } //Fim do foreach
        ?>
    </tbody>

</table>

<?php

    include_once("inc/rodape.php");

?>
