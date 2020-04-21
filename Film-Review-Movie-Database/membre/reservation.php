<?php
require 'inc/bootstrap.php';?>
<?php Session_Start(); ?>
<?php require 'inc/header.php'; ?>
<h1>Je réserve ! </h1>
<br>
<form action="" method="POST">

    <div class="form-group">
        <label for="">Votre nom et prénom</label>
        <input type="text" name="username" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="">Nom du film</label>
        <input type="password" name="password" class="form-control"/>
    </div>

    <div class="form-group">
        <label for="">Nombre de personnes <label>
        <input type="password" name="password_confirm" class="form-control"/>
    </div>

    <button type="submit" class="btn btn-primary">Je réserve</button>

</form>

<?php require 'inc/footer.php'; ?>
