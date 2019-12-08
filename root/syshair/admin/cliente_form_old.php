<?php

  $tituloPagina = "Dashboard";
  include_once("inc/topo.php");

?>


      <form class="form-horizontal">
      
      <div class="panel panel-primary">
          <div class="panel-heading">Cadastro de Cliente</div>           
      <div class="panel-body">
       
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
        <div class="col-md-6">
        <input id="Nome" name="Nome" placeholder="" class="form-control input-md" type="text">
        </div>


        <!-- Multiple Radios (inline) -->
        <label class="col-md-1 control-label" for="radios">Sexo</label>
        <div class="col-md-3"> 
          <label class="radio-inline" for="radios-0" >
            <input name="sexo" id="sexo" value="feminino" type="radio">
            Feminino
          </label> 
          <label class="radio-inline" for="radios-1">
            <input name="sexo" id="sexo" value="masculino" type="radio">
            Masculino
          </label>
        </div>
      </div>
    </div>

      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-2 control-label" for="prependedtext">Endereço</label>
        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon">Rua</span>
            <input id="rua" name="rua" class="form-control" placeholder="" type="text">
          </div>
          
        </div>
          <div class="col-md-2">
            <div class="input-group">
              <span class="input-group-addon">Nº </span>
              <input id="numero" name="numero" class="form-control" placeholder="" type="text">
            </div>
          </div>

          <!-- Search input-->
      <div class="form-group">
          <label class="col-md-1 control-label" for="CEP">CEP <h11>*</h11></label>
            <div class="col-md-2">
              <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="" type="search" maxlength="8" pattern="[0-9]+$">
            </div>
            <div class="col-md-1">
                <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
              </div>
          </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 control-label" for="prependedtext"></label>
          <div class="col-md-3">
          <div class="input-group">
            <span class="input-group-addon">Bairro</span>
            <input id="bairro" name="bairro" class="form-control" placeholder="" type="text">
          </div>
        </div>

        <div class="col-md-4">
          <div class="input-group">
            <span class="input-group-addon">Cidade</span>
            <input id="cidade" name="cidade" class="form-control" placeholder="" type="text">
          </div>
        </div>
        
         <div class="col-md-2">
          <div class="input-group">
            <span class="input-group-addon">Estado</span>
            <input id="estado" name="estado" class="form-control" placeholder="" type="text">
          </div>
        </div>
      </div>



      <!-- Prepended text-->
      <div class="form-group">
        <label class="col-md-2 control-label" for="prependedtext">Telefone <h11>*</h11></label>
        <div class="col-md-2">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
            OnKeyPress="formatar('## #####-####', this)">
          </div>
        </div>
        
          <label class="col-md-1 control-label" for="prependedtext">Email</label>
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input id="prependedtext" name="prependedtext" class="form-control" placeholder="email@email.com" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
          </div>
        </div>
       </div> 

       <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-2 control-label" for="Cadastrar"></label>
                <div class="col-md-8 text-center">
                  <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                  <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                </div>
            </div>
         </div>
    </form>
 

<?php

  include_once("inc/rodape.php");

?>