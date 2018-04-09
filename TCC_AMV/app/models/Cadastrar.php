<?php

class User {

    public $nome;
    public $sobrenome;
    public $email;
    public $senha;
    public $confsenha;
    public $nmatricula;

    public function __construct( $nome, $sobrenome, $email, $senha, $confsenha, $nmatricula){

        $this->nome      = $nome;
        $this->sobrenome = $sobrenome;
        $this->email     = $email;
        $this->senha     = $senha;
        $this->confsenha = $confsenha;
        $this->nmatricula= $nmatricula;

    }
}



 
