<?php
require_once 'ContaCliente.php';

class ContaPoupanca extends ContaCliente
{

    public $aniversario;

    function __construct($numero, $tipoConta, $niver)
    {
        parent::__construct($numero, $tipoConta);
        $this->aniversario = $niver;
    }

    /** Função retirar (sobrescrito) 
     * Verifica se há saldo para retirar tal quantia
     */
    function Retirar($valor)
    {
        if ($this->getSaldo() >= $valor) {
            parent::Retirar($valor);
        } else {
            echo "Retirada não permitida";
            return false;
        }

        //retirada permitida
        return true;
    }
}
