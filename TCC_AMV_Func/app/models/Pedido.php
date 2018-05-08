<?php
/**
 * Created by PhpStorm.
 * User: Jéssica Yohana Otto
 * Date: 18/04/2018
 * Time: 09:46
 */

require_once "Conexao.php";

class Pedido
{
    public $cod_pedido;
    public $cod_coordenador;
    public $matricula_aluno;
    public $data_inicial;
    public $data_prova;
    public $observacao;
    public $motivo;
    public $anexo;
    public $status;

    public function __construct($cod_pedido,$cod_coordenador,$matricula_aluno,$data_prova,$data_pedido,
    $observacao, $motivo, $anexo, $status)
    {
    $this->cod_pedidodido  =$cod_pedido;
    $this->cod_coordenador =$cod_coordenador;
    $this->matricula_aluno =$matricula_aluno;
    $this->data_prova      =$data_prova;
    $this->data_pedido     =$data_pedido;
    $this->observacao      =$observacao;
    $this->motivo          =$motivo;
    $this->anexo           =$anexo;
    $this->status          =$status;

}

}