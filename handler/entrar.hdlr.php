<?php
include '../dao/usuario.dao.php';
include '../classes/Usuario.php';
session_start();


if (isset($_POST['submit'])) {
  $erros = array();

  if (!empty($_POST['usuario']) && !empty($_POST['pass'])) {
      $usuario = pg_escape_string(utf8_encode($_POST['usuario']));
      $pass = pg_escape_string(md5($_POST['pass']));

      require_once('../conn/Connect.conn.php');

  } else {
      echo 'empty <br>';
  }

} else {
    header('location: ../index.php?page=home');
}

  $comando_sql = "SELECT * FROM usuario WHERE usuario = '$usuario';";
  if ($resultado = pg_query($conexao, $comando_sql)){
      if (pg_num_rows($resultado) == 1) {
          $resultado = pg_fetch_assoc($resultado);
          $_SESSION['logado'] = true;
          $_SESSION['id'] = $resultado['id_usuario'];
          $_SESSION['nome_user'] = $resultado['nome'];
          header('Location:home.php');
      } else {
          $erros[] = '<li>USUARIO ou SENHA incorreto!!!</li>';
      }
  }
