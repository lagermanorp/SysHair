<?php

	$tituloPagina = "Dashboard";
	$titulo = "Serviços";
	include_once("inc/topo.php");

?>

	<form action="servico_acao.php" method="post">
		<input type="hidden" name="id" value="<?$id?>">

		<div class="form-group">
		    <label for="inputName">Nome</label>
		    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="">
		</div>	
			  
			
		<div class="form-row">
		    <div class="form-group col-md-6">
		    	<label for="inputValor">Valor</label>
			     <input type="text" class="form-control" id="inputValor" name="valor" placeholder="">
			</div>
			<div class="form-group col-md-6">
			    <label for="inputPercentual">Percentual</label>
			    <input type="text" class="form-control" id="inputPercentual" name="percentual" placeholder="">
			</div>
		</div>
			  
		<div class="form-group text-center">
            <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
            <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
        </div>
			
	</form>

<?php

  include_once("inc/rodape.php");

?>
      
 