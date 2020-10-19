<?php
class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
        print("<p>Conta criada com sucesso!</p>");
    }

    public function setNumConta($n) {
        $this->numConta = $n;
    }
    public function getNumConta() {
        return $this->numConta;
    }
    public function setTipo($t) {
        $this->tipo = $t;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setDono($d) {
        $this->dono = $d;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setSaldo($s) {
        $this->saldo = $s;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setStatus($s) {
        $this->status = $s;
    }
    public function getStatus() {
        return $this->status;
    }


    public function abrirConta($t) {
        $this->setTipo($t);              //  $this->tipo = $t;
        $this->setStatus(true);
        if ($t == "CC") {               //   $this->setSaldo(50.00);
            $this->saldo = 50.00;
        } elseif ($t == "CP") {
            $this->saldo = 150.00;      //   $this->setSaldo(150.00);
        }
    }
    public function fecharConta() {
        if ($this->saldo > 0) {        // $this->getSaldo() > 0;
            print("<p>Essa conta possui saldo. Para fechá-la é necessário que não haja saldo algum e/ou débito.</p>");
        } elseif ($this->saldo < 0) {
            print("<p>Essa conta possui débito. Para fechá-la é necessário que não haja saldo algum e/ou débito.</p>");
        } else {
            $this->setStatus(false);
        }
    }
    public function depositar($v) {
        if ($this->getStatus(true)) { // Não precisa do "true".
            $this->saldo += $v;      //   $this->setSaldo($this->getSaldo() + $v);           -> Jeito mais correto a se fazer.
        } else {
            print("<p>Impossível realizar o depósito! Por favor, abra sua conta primeiro.</p>");
        }
    }
    public function sacar($v) {
        if ($this->getStatus()) {        // true
            if ($this->getSaldo() >= $v) {
                $this->saldo -= $v;
            } else {
                echo("<p>Saldo insuficiente!</p>");
            }
        } else {
            echo("<p>Impossível realizar saques!</p>");
        }
    }
    public function pagarMensal() {
        if ($this->tipo == "CC") {
            $v = 12;
        } elseif ($this->tipo == "CP") {
            $v = 20;
        }
        if ($this->getStatus()) {
            if ($this->saldo > $v) {
                $this->saldo -= $v;
            } else {
                echo("<p>Saldo insuficiente!</p>");
        }   
        } else {
            print("<p>Impossível pagar!</p>");
        }

    } 
}
