<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        require_once './Pessoa.php';
        require_once './Livro.php';
        
        $livro = new Livro('PHP para iniciantes', 'Jorge Lins', 200, new Pessoa('Kleber', 30, 'M'));
        $livro->apresentarLeitor($livro->getLeitor());
        $livro->abrir();
        $livro->avançarPag();
        $livro->voltarPag();
        $livro->fechar();
        $livro->folhear(199);
        $livro->mostrarPag();
   
        
        
        ?>
    </body>
</html>
