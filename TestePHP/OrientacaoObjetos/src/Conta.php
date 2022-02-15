<?php

class Conta
{
    public $cpf; // a partir do 7.4     public String $cpf;
    public $nome;
    public $saldo = 0;

    public function sacar(float $valorASacar)
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function depositar(float $valorADepositar)
    {
        if ($valorADepositar < 0) {
            echo "valor presisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }
    public function transferir($valoraTransferir, $contaDestino)
    {
        if ($valoraTransferir > $this->saldo) {
            echo "valor indisponivel";
            return;
        }
        $this->sacar($valoraTransferir);
        $contaDestino->depositar($valoraTransferir);
    }
}
