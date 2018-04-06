<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Sistema restaurante</title>
  </head>
	<body>

		
    <div style="width: 30%; margin:10% 35%; border: 2px solid #555555; border-radius: 5px; padding: 20px">
    			<h2>Cadastro</h2>
      <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    ?>
      <form method="post" action="valida-cadastro.php">
      	<div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome" placeholder="Nome">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input name="usuario" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
          <input type="submit" name="btnLogin" class="btn btn-primary" value="Cadastrar">
        
        
      </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>