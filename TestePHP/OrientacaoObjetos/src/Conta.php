<?php

class Conta
{
    private $cpfTitular; // a partir do 7.4     public String $cpf;
    private $nomeTitular;
    private $saldo;

    //atributos privados, necessario criar metodos para alterar as "contas"

    public function __construct(string $cpfTitular, string $nomeTitular)
    {
        $this->cpfTitular = $cpfTitular;
        $this->nomeTitular = $nomeTitular;
        $this->saldo =  0;
    }

    public function saca(float $valorASacar): void
    {
        if ($valorASacar > $this->saldo) {
            echo "Saldo indisponivel";
            return;
        }
        $this->saldo -= $valorASacar;
    }
    public function deposita(float $valorADepositar): void
    {
        if ($valorADepositar < 0) {
            echo "valor presisa ser positivo";
            return;
        }
        $this->saldo += $valorADepositar;
    }
    public function transferir($valoraTransferir, $contaDestino): void
    {
        if ($valoraTransferir > $this->saldo) {
            echo "valor indisponivel";
            return;
        }
        $this->sacar($valoraTransferir);
        $contaDestino->depositar($valoraTransferir);
    }
    public function getSaldo(): float
    {
        return $this->saldo;
    }
    public function setCpfTitular(string $cpf): string
    {
        return $this->cpfTitular = $cpf;
    }
    public function getCpfTitular(): string
    {
        return $this->cpfTitular;
    }
    public function setNomeTitular(string $nome): string
    {
        return $this->nomeTitular = $nome;
    }
    public function getNomeTitular(): string
    {
        return $this->nomeTitular;
    }
}
