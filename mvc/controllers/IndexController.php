<?php
  class IndexController extends Controller {
   
    function index() { 

      $prod = new Produto();
      $produtos = $prod->read(); 
        
      $this-> view('index2', compact('produtos'));
    }
   
  }
 ?>
