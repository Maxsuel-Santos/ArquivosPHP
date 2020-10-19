<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;


    public function detalhes() {
        print("Livro ". $this->titulo ." escrito por ". $this->autor);
        print("</br>Páginas: ". $this->totPaginas . ". </br>Página atual: ". $this->pagAtual .".");
        print("</br>Sendo lido por ". $this->leitor->getNome());
    }


    public function abrir() {
        $this->aberto = true;
    }
    public function fechar() {
        $this->aberto = false;
    }
    public function folhear($p) {
        if ($p>$this->totPaginas || $p<0) {
            $this->pagAtual = 0;
        } else {
            $this->pagAtual = $p;
        }
    }
    public function avancarPag() {
        $this->pagAtual ++;
    }
    public function voltarPag() {
        $this->pagAtual --;
    }


    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }



    function getTitulo() {
        return $this->titulo;
    } function getAutor() {
        return $this->autor;
    } function getTotPaginas() {
        return $this->totPaginas;
    } function getPagAtual() {
        return $this->pagAtual;
    } function getAberto() {
        return $this->aberto;
    } function getLeitor() {
        return $this->leitor;
    }


    
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    } 
    function setAutor($autor) {
        $this->autor = $autor;
    } 
    function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    } 
    function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    } 
    function setAberto($aberto) {
        $this->aberto = $aberto;
    } 
    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }
}
