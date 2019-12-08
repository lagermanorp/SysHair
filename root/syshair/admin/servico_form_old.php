<?php

  $tituloPagina = "Dashboard";
  include_once("inc/topo.php");

?>

    
    <form class="form-horizontal">
      
          <div class="panel panel-primary">
              <div class="panel-heading">Cadastro de Serviços</div>
          <div class="panel-body">
          
          <!-- Text input-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
              <div class="col-md-6">
                <input id="Nome" name="Nome" placeholder="" class="form-control input-md" type="text">
              </div>
          </div>

                <!-- Text input-->
          <div class="form-group">
            <label class="col-md-2 control-label" for="Nome">Valor <h11>*</h11></label>  
              <div class="col-md-3">
                <input id="Nome" name="Nome" placeholder="" class="form-control input-md" type="text">
              </div>

            <label class="col-md-1 control-label" for="Nome">Percentual</label>  
                <div class="col-md-2">
                  <input id="Nome" name="Nome" placeholder="" class="form-control input-md" type="text">
                </div>
          </div>
            

           <!-- Button (Double) -->
                <div class="form-group">
                  <label class="col-md-2 control-label" for="Cadastrar"></label>
                    <div class="col-md-6 text-center">
                      <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                      <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                    </div>
                </div>
              </div>
      
    </form>

  

<?php

  include_once("inc/rodape.php");

?>