<?php
class Cliente{

    public $nome;
    public $cpf;
    public $endereco;
    public $telefone;

    public function __construct($nome, $cpf, $endereco, $telefone)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }
}