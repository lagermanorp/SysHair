<?php

	$tituloPagina = "Dashboard";
	$titulo = "Profissionais";
	include_once("inc/topo.php");

?>

	<form action="profissional_acao.php" method="post">
		<input type="hidden" name="id" value="<?$id?>"/>

		  	<div class="form-group">
			    <label for="inputName">Nome</label>
			    <input type="text" class="form-control" id="inputNome" name="nome" placeholder="">
			</div>	
			  
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputUser">Usuário</label>
			      <input type="text" class="form-control" id="inputUser" name="user" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputFuncao">Senha</label>
			      <input type="text" class="form-control" id="inputfuncao" name="funcao" placeholder="">
			    </div>
			    <div class="form-group col-md-3">
			      <label for="inputFuncao">Permissão</label>
			      <input type="text" class="form-control" id="inputfuncao" name="funcao" placeholder="">
			    </div>
			</div>
			  
			<div class="form-group">
			      <label for="inputEmail">Email</label>
			      <input type="email" class="form-control" id="inputEmail" name="email" placeholder="">
			</div>
			
			<div class="form-group">
			    <label for="inputEndereco">Endereço</label>
			    <input type="text" class="form-control" id="inputEndereco" name="endereco" placeholder="">
			</div>
			  
			<div class="form-row">
			  	<div class="form-group col-md-6">
			      <label for="inputBairro">Bairro</label>
			      <input type="text" class="form-control" id="txtBairro" name="bairro" placeholder="">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputtelefone">Telefone</label>
			      <input type="tel" class="form-control" id="inputPassword4" placeholder="">
			    </div>
			</div>
			  
			<div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputCidade">Cidade</label>
			      <input type="text" class="form-control" id="inputCidade" name="cidade" placeholder="">
			    </div>
			    <div class="form-group col-md-4">
			      <label for="inputEstado">Estado</label>
			      <select id="inputEstado" name="estado" class="form-control">
			        <option selected>Selecione o Estado</option>
			        <option value="AC">Acre</option>
				    <option value="AL">Alagoas</option>
				    <option value="AP">Amapá</option>
				    <option value="AM">Amazonas</option>
				    <option value="BA">Bahia</option>
				    <option value="CE">Ceará</option>
				    <option value="DF">Distrito Federal</option>
				    <option value="ES">Espírito Santo</option>
				    <option value="GO">Goiás</option>
				    <option value="MA">Maranhão</option>
				    <option value="MT">Mato Grosso</option>
				    <option value="MS">Mato Grosso do Sul</option>
				    <option value="MG">Minas Gerais</option>
				    <option value="PA">Pará</option>
				    <option value="PB">Paraíba</option>
				    <option value="PR">Paraná</option>
				    <option value="PE">Pernambuco</option>
				    <option value="PI">Piauí</option>
				    <option value="RJ">Rio de Janeiro</option>
				    <option value="RN">Rio Grande do Norte</option>
				    <option value="RS">Rio Grande do Sul</option>
				    <option value="RO">Rondônia</option>
				    <option value="RR">Roraima</option>
				    <option value="SC">Santa Catarina</option>
				    <option value="SP">São Paulo</option>
				    <option value="SE">Sergipe</option>
				    <option value="TO">Tocantins</option>
				    <option value="EX">Estrangeiro</option>
			      </select>
			    </div>
			    <div class="form-group col-md-2">
			      <label for="inputCEP">CEP</label>
			      <input type="text" class="form-control" id="inputCEP">
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