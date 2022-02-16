<?php

class Conta
{
    private $titular;
    private $saldo;
    //atributos privados dos objetos, necessario criar metodos para alterar as "contas"

    private static $numeroDeContas = 0;
    // 'statico' - Membros da classe (Conta)


    public function __construct(Titular $titular)
    { // sempre que criar um novo objeto (new Conta), o construtor sera chamado
        $this->titular = $titular;
        $this->saldo =  0;

        self::$numeroDeContas++;
        // self = $this para a classe atual
    }
    public function __destruct()
    { // função ira deletar contas sem referencia (variavel apontando)
        // metodo unset(varivavel) retira o ponteiro para o objeto
        self::$numeroDeContas--;
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
    public function getCpfTitular(): string
    {
        return $this->titular->getCpf();
    }
    public function getNomeTitular(): string
    {
        return $this->titular->getNome();
    }
    public static function recuperaNumeroDeContas(): int
    {
        return self::$numeroDeContas;
    }
}
