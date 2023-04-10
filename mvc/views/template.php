<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.108.0">
  <title>HamsterShop</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">
  <link rel="stylesheet"  type="text/css"  href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">     
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
</head>
<body>  

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ACA1E4">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand --> 
      <a class="navbar-brand mt-2 mt-lg-0" href="<?php echo APP; ?>">
        <img
          src="./../../assets/BlackWhiteHamster.svg"                       
          alt="Hamster Logo"
          loading="lazy"          
          width= 120px
          height=120px;
        />
      </a>
      <!-- Left links -->     
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo APP; ?>">Home</a>
        </li> -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Roedores
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
          
          <?php               
            $roedor = new Roedor();
            $roedores = $roedor-> read();               
            $listarProdutos = APP . 'produto/listarprodutos';
            foreach ($roedores as $roedor) :              
            echo ("<li><a class='dropdown-item' href=" .($listarProdutos . "?especie=" . strtolower($roedor['especie'])) . ">"   . ucfirst(strtolower($roedor['especie'])) . "</a></li>");              
            endforeach;           
          ?>               
          </ul>
        </li>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="">Produtos</a>
        </li>
        <?php 
        echo (isset($_SESSION['logado']) && ($_SESSION['flg_admin'] == true) ? "<li class='nav-item'> <a class='nav-link' href=''>Cadastrar produtos</a> </li>" : "");
        ?>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->    

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <i class="bi bi-file-earmark-code-fill"></i>
      </a>
      <?php       
            $pathDeslogar = APP . 'usuario/deslogar';
            $pathLogar = APP . 'usuario/login';            
            echo (isset($_SESSION['logado']) ? "<a class='nav-link active' href='$pathDeslogar'>Usuário: {$_SESSION['username']} | Deslogar</a>" : "<a class='nav-link active' href='$pathLogar'>Logar</a>");         
            ?>
    </div>
   

    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<main class="container">
    <div class="p-5" id="border-main">
      <?php
      require_once $arquivo;
      ?>
    </div>
  </main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
  </html>