<?php
if(!empty($_POST)){
    if($Auth->login($_POST)){
        
    }else{
        echo 'Mauvais identifiants'; 
    }
}

?>
    <h1>Se connecter</h1>
    <link href="http://localhost/Film-Review-Movie-Database/membre/css/app.css" rel="stylesheet">

    <form method="post" action="index.php?p=login">

        <div class="form-group">
            <label for="">Pseudo</label>
            <input type="text" name="username" class="form-control"/>
        </div>

        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password" class="form-control"/>
        </div>

        <div class="form-group">
            <label>
                <input type="checkbox" name="remember" value="1"/> Se souvenir de moi
            </label>
        </div>

        <button type="submit" class="button">Se connecter</button>


    </form>
<script>
    alert("Pseudo : test  /  MDP : 1234");
	</script>