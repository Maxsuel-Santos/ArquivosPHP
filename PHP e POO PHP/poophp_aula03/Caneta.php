<?php

class Caneta {

    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function rabiscar() {   // Método
        if ($this->tampada == true) {    // ... ($this->tampada) ...
            print "<p>Warning: Você não pode rabiscar!</p>";
        } else {
            print "<p>Você pode rabiscar!</p>";
        }
    }

    public function tampar() {
        $this->tampada = true;
    }

    private function destampar() {
        $this->destampar = false;
    }

}
