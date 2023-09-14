<?php
 class ContaCliente
{
    private $numConta;
    public $dataCriacao;
    public $numero;
    public $titular;
    private $senha;
    private $saldo;
    private $tipoConta;
    public $status;


    function __construct($numero, $tipoConta)
    {
        $this->numero = $numero;
        $this->tipoConta = $tipoConta;
    }

    function getNumero()
    {
        return $this->numero;
    }

    function getSaldo()
    {
        return $this->saldo;
    }

    function setSaldo($novoValor)
    {
        $this->saldo = $novoValor;
    }
    function getTipoConta()
    {
        return $this->tipoConta;
    }

    function depositar($valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo + $valor;
        }
    }

    function Retirar($valor)
    {
        if ($valor > 0) {
            $this->saldo = $this->saldo - $valor;
        }
    }
    function fecharConta()
    {
        $this ->status= 'INATIVO';
    }

    function calcularMulta($valor)
    {
        return $valor * 0.02;
    }
}
