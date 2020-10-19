<?php

class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar() {   // Método
        if ($this->tampada == true) {    // ... ($this->tampada) ...
            print "<p>Warning: Você não pode rabiscar!</p>";
        } else {
            print "<p>Você pode rabiscar!</p>";
        }
    }
    
    function tampar() {
        $this->tampada = true;
    }
    
    function destampar() {
        $this->destampar = false;
    }
}
