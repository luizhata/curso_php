<?php

class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $extrato;
  public $agencia;

  public function __construct($numero, $agencia) {
    $this->numero = $numero;
    $this->agencia = $agencia;
  }

  public function deposita($valor) {
    $this->saldo += $valor;

    // log extrato
    $this->extrato .= "Depósito: R$ $valor<br>";
  }

  public function saca($valor) {
    if ($valor <= $this->saldo){
      $this->saldo -= $valor;

      // log extrato
      $this->extrato .= "Saque: R$ $valor<br>";
      return TRUE;
    }
    return FALSE;
  }

  public function consultaSaldo() {
    return $this->saldo;
  }

  public function imprimeExtrato() {
    $listaExtrato = $this->extrato;
    $saldoAtual = $this->consultaSaldo();
    $listaExtrato .= "Saldo Atual: R$ $saldoAtual <br>";
    return $listaExtrato;
  }

}
 ?>
