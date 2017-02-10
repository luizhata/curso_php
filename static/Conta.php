<?php

class Conta {
  public $numero;
  public $saldo;
  public $limite;
  public $extrato;
  public $agencia;
  public static $contador; // atributo da CLASSE

  public function __construct() {
    // acessar atributo static
    self::$contador++;
    $this->numero = self::$contador;
  }

  public static function zeraContador(){
    // envia email
    echo "Contador Zera Contador sendo chamado!<br><br>";
    self::$contador = 0;
  }
}
 ?>
