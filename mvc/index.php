<?php
  session_start();
  include_once "autoload.php";

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  define("APP", "http://localhost/mvc/");

  if (isset($_GET['url'])) {
    var_dump("if 1");
    if(isset($_SESSION['logado'])){
      var_dump("if 2");
      if($_GET['url'] != 'usuario/login'){
        var_dump("if 3");
      }
    }
  }else if (isset($_GET['url'])) {
    var_dump("if 4");
    if ( $_GET['url'] == 'usuario/entrar') {
      var_dump("if 5");
    }
  }{

  }

  if (isset($_GET['url']) && isset($_SESSION['logado']) && $_GET['url'] != 'usuario/login') {
   $url = $_GET['url'];
    var_dump($url , "if 1");
   }else {
    if(isset($_GET['url']) && $_GET['url'] == 'usuario/entrar' || $_GET['url'] == 'usuario/cadastar' || $_GET['url'] == 'usuario/salvar' ){
    $url = $_GET['url'];
    var_dump($url , "if 2");
  } else if(isset($_SESSION['logado'])){
    var_dump($url + "if 3");
    if ($_SESSION['tipo']) {
      $url = 'estoque/cadastrar';
    }else{
      $url= 'produto/listar';
    }    
  }
    else {
    var_dump($_GET['url'] , "else final");
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
