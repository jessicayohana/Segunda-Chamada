<?php

//CONFERIR

class Conexao {

    const HOST      = "localhost";
    const NOMEBANCO = "segunda_chamada";
    const USUARIO   = "root";
    const SENHA     = "";
    
    //!!!Substitua daqui para baixo
    public static $conexao = null;


    public static function getConexao(){
        
        try{
            if(self::$conexao == null){
                self::$conexao = new PDO("mysql:host=localhost".self::HOST.";dbname=segunda_chamada".self::NOMEBANCO.";charset=utf8",self::USUARIO, self::SENHA);

                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            }
            
            return self::$conexao;
            
        }catch(PDOException $e){
            die("Falhou a conexao ou ocorreu um erro banco: " . $e->getMessage()); 
        }

        return $conexao;
    }
}

//teste conexao
//$con = new Conexao();
//$con->getConexao();
