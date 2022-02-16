<?php

class Titular
{
  private  $cpf;
  private  $nome;


  public function __construct(CPF $cpf, string $nome)
  {
    $this->cpf = $cpf;
    $this->nome = $nome;
    $this->validaNomeTitular($nome);
  }
  public function getCpf(): string
  {
    return $this->cpf->getNumeroCpf();
  }
  public function getNome(): string
  {
    return $this->nome;
  }
  private function validaNomeTitular(string $nomeTitular)
  { // metodo privado apenas para o construtor da 'Conta'
    if (strlen($nomeTitular) < 5) {
      echo "Nome precisa ter pelomenos 5 caracteres";
      exit();
    }
  }
}
