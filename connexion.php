<?php
include('include_haut.php');
?>
<div class="row">
  <form method="post" action="connexion.php">
    <div class="row">
      <div class="form-group col-sm-2">
        <label for="exampleInputPassword1">Login</label>
        <input type="pseudo" name="pseudo" class="form-control" id="exampleInputPseudo" placeholder="Pseudo">
      </div>
    </div>
  <div class="row">
    <div class="form-group col-sm-2">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  </div>
    <button type="submit" class="btn btn-default">Connexion</button>
  </form>
</div>
