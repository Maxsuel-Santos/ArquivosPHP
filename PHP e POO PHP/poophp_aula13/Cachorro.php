<?php
require_once 'Lobo.php';
class Cachorro extends Lobo {
    public function emitirSom(){
        print("<p>AU AU AU!</p>");
    }


    public function reagirFrase($frase) {
        if ($frase == "Toma comida" || $frase == "Olá") {
            print("<p>Abanar e latir.</p>");
        } else {
            print("<p>Rosnar.</p>");   
        }
    } public function reagirHora($hora, $min) {
        if ($hora<12) {
            print("<p>Abanar.</p>");
        } elseif ($hora>=18) {
            print("<p>Ignorar.</p>");
        } else {
            print("<p>Abanar e latir.</p>");
        }
    } public function reagirDono($dono) {
        if ($dono == true) {
            print("<p>Abanar.</p>");
        } else {
            print("<p>Rosnar e latir.</p>");
        }
    } public function reagirIdadePeso($idade, $peso) {
        if ($idade<5) {
            if ($peso<10) {
                print("<p>Abanar.<p>");
            } else {
                print("<p>Latir.<p>");
            }
        } else {
            if ($peso<10) {
                print("<p>Latir.</p>");
            } else {
                print("<p>Ignorar.</p>");
            }
        }
    }
}
