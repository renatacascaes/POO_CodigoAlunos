<?php

require_once 'ContaCliente.php';

class contaCorrente extends ContaCliente
{

    public $limite;


    function __construct($numero, $tipoConta, $limiteConta)
    {
        parent::__construct($numero, $tipoConta);
        $this->limite = $limiteConta;
    }

    function Retirar($valor)
    {
        //imposto sobre movimentação financeira            
        $cpmf = 0.05;

        if (($this->getSaldo() + $this->limite) >= $valor) {
            //Executa método da classe pai
            parent::retirar($valor);
            //Debita o imposto
            parent::retirar($valor * $cpmf);
        } else {
            echo "Retirada não permitida";
            return false;
        }
        return true;
    }
}
