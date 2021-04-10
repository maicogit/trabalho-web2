<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/reset.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>CoockBook</title>

 </head>
   <body>

   <header>
     <nav>
       <ul class="topnav">
         <li><a class="active" href="index.php?page=home">CoockBook</a></li>
<?php
        echo $_SESSION['logado'] . 'entrar home<br>';
        echo $_SESSION['nome'] . ' NOOOME<br>';
//        exit;
//session_start();
//if (isset($_SESSION['logado'])) {
    if ($_SESSION['logado'] === 'sim') {

?>
         <li class="right dropdown">
         <button class="dropbtn"><?php $_SESSION['nome']; ?></button>
          <div class="dropdown-content">
            <a href="handler/usuario.hdlr.php?opcao=selcionar">DETALHES</a>
            <a href="index.php?page=sair">SAIR</a>
          </div>
        </li>
         <li class="right"><a href="index.php?page=categorias">NOVA RECEITA</a></li>
         <li class="right"><a href="index.php?page=categorias">CATEGORIAS</a></li>
         <li class="right"><a href="index.php?page=home">HOME</a></li>
<?php

    } else {
?>
       <li class="right"><a href="index.php?page=entrar">ENTRAR</a></li>
         <li class="right"><a href="index.php?page=registrar">REGISTRAR</a></li>
         <li class="right"><a href="index.php?page=categorias">CATEGORIAS</a></li>
         <li class="right"><a href="index.php?page=home">HOME</a></li>
       </ul>
       </ul>
<?php
    }
//}
?>
     </nav>
   </header>

   <div class="left-sidebar">left</div>
   <main class="center-grid">
