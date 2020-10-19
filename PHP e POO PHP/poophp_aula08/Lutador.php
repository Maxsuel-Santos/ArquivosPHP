<?php 
class Lutador {
    private $nome;             // private $nome, $nacionalidade, $idade,$altura,$peso,$categoria,$vitorias,$derrotas,$empates;     
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    // Método especial (__construct de todos os atributos menos da $categoria).

    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);             // $this->  também referencia métodos especiais (get, set e construct).
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    // Métodos especiais (get e set de todos os atributos).

    public function getNome() {
        return $this->nome;
    } private function setNome($no) {
        $this->nome = $no;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    } private function setNacionalidade($na) {
        $this->nacionalidade = $na;
    }

    public function getIdade() {
        return $this->idade;
    } private function setIdade($id) {
        $this->idade = $id;
    }

    public function getAltura() {
        return $this->altura;
    } private function setAltura($al) {
        $this->altura = $al;
    }

    public function getPeso() {
        return $this->peso;
    } private function setPeso($pe) {
        $this->peso = $pe;
        $this->setCategoria();
    }

    public function getCategoria() {                 
        return $this->categoria;
    }private function setCategoria() {                                // Tem relação com o __construct
        if ($this->peso < 52.2 || $this->peso > 120.2) {
            $this->categoria = "Inválido.";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve.";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio.";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "Pesado.";
        } else {
            $this->categoria = "Inválido.";
        }
    }

    private function getVitorias() {
        return $this->vitorias;
    } private function setVitorias($vi) {
        $this->vitorias = $vi;
    }

    private function getDerrotas() {
        return $this->derrotas;
    } private function setDerrotas($de) {
        $this->derrotas = $de;
    }

    private function getEmpates() {
        return $this->empates;
    } private function setEmpates($em) {
        $this->empates = $em;
    }

    // Métodos internos (de acesso).

    public function apresentar() {
        print("<p>-------------------------------------------</p>");
        print("</br><strong>Nome</strong>: ". $this->getNome() .".");
        print("</br><strong>País</strong>: ". $this->getNacionalidade() .".");
        print("</br>". $this->getIdade() ." anos de <strong>idade</strong>.");
        print("</br>". $this->getAltura() ."m de <strong>altura</strong>.");
        print("</br><strong>Peso</strong>: ". $this->getPeso() ."KG.");
        print("</br><strong>Vitórias</strong>: ". $this->getVitorias() .".");
        print("</br><strong>Derrotas</strong>: ". $this->getDerrotas() .".");
        print("</br><strong>Empates</strong>: ". $this->getEmpates() .".");
        print("<p>-------------------------------------------</p>");
    }
    public function status() {
        print("<p>-------------------------------------------</p>");
        print($this->getNome());
        print(" é um peso ". $this->getCategoria());
        print("</br>". $this->getVitorias() ." <strong>Vittórias</strong>.");
        print("</br>".$this->getDerrotas() ." <strong>Derrotas</strong>.");
        print("</br>".$this->getEmpates() ." <strong>Empates</strong>.");
        print("<p>-------------------------------------------</p>");
    }
    public function ganharLuta() {
        $this->setVitorias($this->getVitorias()+1);      // $this->vitoria += 1;
    }
    public function perderLuta() {
        $this->setDerrotas($this->getDerrotas()+1);      // $this->derrotas += 1;
    }
    public function empatarLuta() {
        $this->setEmpates( $this->getEmpates()+1);       // $this->empates += 1;
    }    

}
