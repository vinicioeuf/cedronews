<?php
    require('conexao.php');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<form action="fazlogin.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" >Email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Senha: </label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
  </div>
  <div class="mb-3 form-check">
    <label class="form-check-label" for="exampleCheck1" >Não possui uma conta? <a href="cadastro.php">Crie uma</a></label>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Enviar</button>
</form>

