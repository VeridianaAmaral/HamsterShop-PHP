<?php
  class IndexController extends Controller {
   
    function index() { 

      $prod = new Produto();
      $produtos = $prod->read(); 

      $this->view('index', compact('produtos'));

    }
   
  }
 ?>
