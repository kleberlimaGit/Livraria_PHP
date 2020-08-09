<?php

require_once './Publicacao.php';
require_once './Pessoa.php';
class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPag;
    private $pagAtual;
    private $aberto;
    private $leitor;

    function __construct($titulo, $autor, $totPag, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPag = $totPag;
        $this->pagAtual = 0;
        $this->aberto = false;
        $this->leitor = $leitor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getTotPag() {
        return $this->totPag;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }

    public function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    public function setAutor($autor): void {
        $this->autor = $autor;
    }

    public function setTotPag($totPag): void {
        $this->totPag = $totPag;
    }

    public function setPagAtual($pagAtual): void {
        $this->pagAtual = $pagAtual;
    }

    public function setLeitor($leitor): void {
        $this->leitor = $leitor;
    }

    public function abrir() {
        return $this->aberto = true;
    }

    public function avançarPag() {
        if ( $this->aberto  && $this->pagAtual < $this->totPag) {
            $this->pagAtual++;
            echo '<br> Pagina atual: '. $this->pagAtual.'<br>';
        }elseif($this->aberto == false){
            echo '<br> Por favor abra o livro antes <br>';
        }else{
            echo '<br> Não existe uma proxima página <br>';
        }
    }

    public function fechar() {
        return $this->aberto = false;
    }

    public function folhear($pag) {
        if ($this->aberto && $pag <= $this->totPag && $pag>=0) {
            $this->pagAtual = $pag;
        }elseif($this->aberto==false){
            echo '<br> Livro encontra-se fechado <br>';
        }else{
            echo '<br> Pagina nao existe neste livro <br>';
        }
    }

    public function voltarPag() {
        if ($this->aberto && $this->pagAtual!=0) {
            $this->pagAtual--;
            echo '<br> Pagina atual: '. $this->pagAtual.'<br>';
            
        }else{
            echo '<br> Não existe pagina anterior a esta <br>';
        }
    }
    public function apresentarLeitor($pessoa){
        echo '<br> Leitor: '.$pessoa->getNome().'<br>'.
             'Esta lendo '.$this->titulo.'<br>'.
             'do autor: '.$this->autor.'<br>'.
             'livro possui um total de '.$this->totPag.' paginas <br>';   
    }
    public function mostrarPag() {
        echo '<br>Pagina atual: '.$this->pagAtual.'<br>';
    }

}
