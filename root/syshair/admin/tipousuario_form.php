<?php

	$tituloPagina = "Dashboard";
	$titulo = "Tipo de Usuários";
	include_once("inc/topo.php");

?>

	<form action="tipousuario_acao.php" method="post">
		<input type="hidden" name="id" value="<?$id?>"/>

		 	<div class="form-group">
			    <label for="inputName">Nome</label>
			    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="">
			</div>

		<div class="form-group text-center">
            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
        </div>
	</form>

<?php

	include_once("inc/rodape.php");

?>