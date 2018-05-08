<?php
/**
 * Created by PhpStorm.
 * User: Jéssica Yohana Otto
 * Date: 18/04/2018
 * Time: 13:24
 */

require_once 'Conexao.php';
require_once 'Aluno.php';

class CrudAluno
{
    private$conexao;
    public $aluno;

    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }

    public function salvar(Aluno $aluno){
        $sql = ("INSERT INTO aluno (nome, email, senha, matricula_aluno) 

        VALUES ('{$aluno->getNome()}', '{$aluno->getEmail()}', '{$aluno->getSenha()}',{$aluno->getMatricula()})");
        $this->conexao->exec($sql);
    }

    public function editar(Aluno $aluno){
        $sql = "UPDATE aluno set nome = '{$aluno->getNome()}', email = '{$aluno->getEmail()}',
        senha = '{$aluno->getSenha()}' WHERE matricula_aluno = '{$aluno->getMatricula()}'";

        $this->conexao->exec($sql);
    }

    public function excluir(Aluno $aluno){
        $sql = "DELETE  FROM aluno WHERE matricula_aluno ='{$aluno->getMatricula}'";
        $this->conexao->exec($sql);
    }


    public function getAluno(){
        $consulta = $this->conexao->query("SELECT * FROM aluno");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
