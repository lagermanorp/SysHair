<?php
    $tituloPagina = "Dashboard";
    include_once("inc/topo.php");

    include_once(__DIR__ . "/dao/portifolios.dao.php");
    include_once(__DIR__ . "/dao/categorias.dao.php");

    $categoriasDAO = new CategoriasDAO();

    $id = "";
    $titulo = "";
    $subTitulo = "Inclusão";
    $imagem = "";
    $linkexterno = "";
    $descricao = "";
    $idCategoria = "";

    //Se receber o ID via GET, busca o registro para Alteração
    //Caso contrário, será Inclusão
    if (isset($_GET["id"]) && $_GET["id"] != "") {
        $id = $_GET["id"];
        $subTitulo = "Alteração";
        $portifoliosDAO = new PortifoliosDAO();
        $portifolio = $portifoliosDAO->BuscarPorId($id);
        $titulo = $portifolio->Titulo;
        $imagem = $portifolio->Imagem;
        $linkexterno = $portifolio->LinkExterno;
        $descricao = $portifolio->Descricao;
        $idCategoria = $portifolio->Id_categoria;
    }

?>

<!-- Portifolio - Inicio do código personalizado -->
<h1 class="h2">Cadastro de Portfolio <small><?=$subTitulo?></small></h1>   


<form action="portifolio_acao.php" method="post">
    <input type="hidden" name="id" value="<?$id?>"/>
    
    <div class="form-group">
        <label>Título</label>
        <input type="text" id="txtTitulo" name="Titulo" class="form-control" value="<?=$titulo?>"/>
    </div>
    
    <div class="form-group">
        <label>Categoria</label>
        <select name="ddlIdCategoria" id="ddlCategoria" class="form-control">
            <option value="">Selecione uma Categoria</option>
            <?php
            $categorias = $categoriasDAO->ListarTudo();
    
            foreach($categorias as $cat) {
                
            ?>
            <option value="<?=$cat->Id?>" <?=
            ($idCategoria==$cat->Id)?"selected=\"selected\"":""?>>
            <?=$cat->Titulo?></option>
            <?php
            }
            ?>
        </select>
    </div>
    
    <div class="form-group">
        <label>Imagem</label>
        <input type="file" id="arqImagem" name="Imagem" class="form-control"
               value="<?=$imagem?>"/>
    </div>
    
    
    <div class="form-group">
        <label>Link</label>
        <input type="url" id="LinkExterno" name="LinkExterno" class="form-control"
               value="<?=$linkexterno?>"/>
    </div>
        
    <div class="form-group">
        <label>Descrição</label>
        <textarea rows="15" id="txtDescricao" name="txtDescricao" class="form-control"><?=$descricao?></textarea>
    </div>
            
    <div class="form-group text-center">
        <button type="submit">Salvar</button>
    </div>
    
</form>


<!-- Portifolio - Final do código personalizado -->

<?php
    include_once("inc/rodape.php");
?>