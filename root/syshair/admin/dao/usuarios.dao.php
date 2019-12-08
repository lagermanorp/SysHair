<?php

    require_once(__DIR__ . "/../inc/conexao.php");
    require_once(__DIR__ . "/../model/usuario.model.php");


    class UsuariosDao extends Conexao {
        public $Mensagem;
        
        //Método para Autenticaçâo no Sistema
        public function Autenticar($usuario, $senha){
            $sql = "SELECT id FROM usuario WHERE email = ? AND senha = ?";
            $parametro = array($usuario, $senha);
            
            try {
                $comando = $this->prepare($sql);
                $resultado = $comando->execute($parametro);
                $registros = $comando->fetchAll(PDO::FETCH_ASSOC);
                
                return (count($registros) > 0);
            }
            catch (PDOException $ex) {
                $this->Mensagem = "Erro ao Listar: " . $ex->getMessage();
                return false;
            }
            
        }
     


        //Método para Buscar por Usuário
         public function BuscarObjPorUsuarioSenha($usuario, $senha){
            $sql = "SELECT id, nome, usuario, tipousuario_id, funcao, email, senha, endereco, bairro, cep, cidade, estado, telefone FROM usuario WHERE email = ? AND senha = ?";
            $parametro = array($usuario, $senha);
            $objusuario = null;
             
            try {
                $comando = $this->prepare($sql);
                $resultado = $comando->execute($parametro);
                $registros = $comando->fetchAll(PDO::FETCH_ASSOC);
              
                foreach($registros as &$reg){
                    $objusuario = new Usuario();
                    
                    $objusuario->Id = $reg["id"];
                    $objusuario->Nome = $reg["nome"];
                    $objusuario->Usuario = $reg["usuario"];
                    $objusuario->Tiposusuarios_id = $reg["tipousuario_id"];
                    $objusuario->Funcao = $reg["funcao"];
                    $objusuario->Email = $reg["email"];
                    $objusuario->Senha = $reg["senha"];
                    $objusuario->Endereco = $reg["endereco"];
                    $objusuario->Bairro = $reg["bairro"];
                    $objusuario->Cep = $reg["cep"];
                    $objusuario->Cidade = $reg["cidade"];
                    $objusuario->Estado = $reg["estado"];
                    $objusuario->Telefone = $reg["telefone"];

                    
                    return $objusuario;
                    
                    
                }
            }
            catch (PDOException $ex) {
                $this->Mensagem = "Erro ao Listar: " . $ex->getMessage();
                return $objusuario;
            }
            
        }


        //Método para inserir registro
        public function Inserir($usuario) {
            
            $sql = "INSERT INTO usuario (nome, usuario, tipousuario_id, funcao, email, senha, endereco, bairro, cep, cidade, estado, telefone)
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            
            $parametro = array($usuario->Nome, $usuario->Usuario, $usuario->Tipousuario_id, $usuario->Funcao, $usuario->Email, $usuario->Senha, $usuario->Endereco, $usuario->Bairro, $usuario->Cep, $usuario->Cidade, $usuario->Estado, $usuario->Telefone);
            
            try{
                $comando = $this->prepare($sql);
                $comando->execute($parametro);
                return true;
            }
            catch (PDOException $ex)
            {
                $this->Mensagem = "Erro ao inserir o registro" . $ex->getMessage();
                return false;
            }
        }


        //Método para alterar registro
        public function Alterar($usuario){
            $sql = "UPDATE usuario 
                        SET  nome = ?, usuario = ?, tipousuario_id = ?, funcao = ?, email = ?, senha = ?, endereco = ?, bairro = ?, cep = ?, cidade = ?, estado = ?, telefone = ?
                        WHERE id = ?";
            
            $parametro = array($usuario->Nome, $usuario->Usuario, $usuario->Tipousuario_id, $usuario->Funcao, $usuario->Email, $usuario->Senha, $usuario->Endereco, $usuario->Bairro, $usuario->Cep, $usuario->Cidade, $usuario->Estado, $usuario->Telefone,  $usuario->Id);
        
            try{
                $comando = $this->prepare($sql);
                $comando->execute($parametro);
                return true;
            }
            catch (PDOException $ex)
            {
                $this->Mensagem = "Erro ao alterar o registro" . $ex->getMessage();
                return false;
            }
                    
        }

        //Método para listar todos os registros
        public function ListarTudo(){
            $sql = "SELECT * FROM usuario";
            $retorno = array();
            try {
                $comando = $this->prepare($sql);
                $resultado = $comando->execute();
                $registros = $comando->fetchAll(PDO::FETCH_ASSOC);
                foreach($registros as &$reg){
                    $item = new Usuario();
                    $item->Id = $reg["id"];
                    $item->Nome = $reg["nome"];
                    $item->Usuario = $reg["usuario"];
                    $item->Tipousuario_id = $reg["tipousuario_id"];
                    $item->Funcao = $reg["funcao"];
                    $item->Email = $reg["email"];
                    $item->Senha = $reg["senha"];
                    $item->Endereco = $reg["endereco"];
                    $item->Bairro = $reg["bairro"];
                    $item->Cep = $reg["cep"];
                    $item->Telefone = $reg["telefone"];
                    $retorno[]=$item;
                }
            }
            catch (PDOException $ex)
            {
                $this->Mensagem = "Erro ao listar: " . $ex->getMessage();
            }
            return $retorno;    
        }
                    
        //Método para pesquisar por um registro específico
        public function BuscarPorId($id){
            $sql = "SELECT * FROM usuario where id = ?";
            $parametro = array($id);
            $retorno = null;
            try{
                $comando = $this->prepare($sql);
                $resultado = $comando->execute($parametro);
                $registros = $comando->fetchAll(PDO::FETCH_ASSOC);
                
                if(count($registros) > 0) {
                    //Aloco primeiro registro para preencher a Model    
                    $reg = $registros[0];
                    //Instancio e preencho a Model
                    $retorno = new Usuario();
                    $retorno->Id = $reg["id"];
                    $retorno->Nome = $reg["nome"];
                    $retorno->Usuario = $reg["usuario"];
                    $retorno->Tipousuario_id = $reg["tipousuario_id"];
                    $retorno->Funcao = $reg["funcao"];
                    $retorno->Email = $reg["email"];
                    $retorno->Senha = $reg["senha"];
                    $retorno->Endereco = $reg["endereco"];
                    $retorno->Bairro = $reg["bairro"];
                    $retorno->Cep = $reg["cep"];
                    $retorno->Telefone = $reg["telefone"];
                                        
                }
                
            }
            catch (PDOException $ex)
            {
                $this->Mensagem = "Erro ao listar: " . $ex->getMessage();
            }
            
            return $retorno;
        }

        //Método para excluir um registro específico
        public function Excluir($id){
            $sql = "DELETE FROM usuario where id = ?";
            $retorno = null;
            $parametros = array($id);
            try{
                $comando = $this->prepare($sql);
                $comando->execute($parametros);
                return true;
            }
            catch (PDOException $ex)
            {
                $this->Mensagem = "Erro ao deletar: " . $ex->getMessage();
            }
            
        }
}
        

    
?>