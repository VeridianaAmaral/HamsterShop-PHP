<?php
  session_start();
  include_once "autoload.php";

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define("APP", "http://localhost/mvc/");

  $rotasPermitidas = array('usuario/login', 'usuario/entrar', 'usuario/cadastrar', 'usuario/salvar');

if (isset($_GET['url']) && isset($_SESSION['logado']) && !in_array($_GET['url'], $rotasPermitidas)) {
    $url = $_GET['url'];
} else {
    if (isset($_GET['url']) && in_array($_GET['url'], $rotasPermitidas)) {
        $url = $_GET['url'];
    } else if (isset($_SESSION['logado'])) {
      if ($_SESSION['tipo']) {
        $url = 'estoque/cadastrar';
      }else{
        $url= 'index/index';
      }
    } else {
        $url = 'usuario/login';
    }
}

  $parametros = explode("/", $url);
  $nomeControlador = ucfirst($parametros[0]).'Controller';

  $acao = $parametros[1];
  $controlador = new $nomeControlador();

  if (count($parametros) == 2) {
    $controlador->$acao();
  } else {
    $id = $parametros[2];
    $controlador->$acao($id);
  }

 ?>
