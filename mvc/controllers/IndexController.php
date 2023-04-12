<?php
  class IndexController extends Controller {
   
    function index() { 

      $prod = new Produto();
      $produtos = $prod->read(); 
        
      $this-> view('produto', compact('produtos'));
    }
   
  }
 ?>
