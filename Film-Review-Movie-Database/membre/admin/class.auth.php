<?php class Auth{
    
    var $forbiddenPage = "index.php?p=forbidden";
    
    /**
     * Permet d'identifier un utilisateur
     **/
    function login($d){
        global $PDO; 
        $req = $PDO->prepare('SELECT users.id, users.username,users.email,users.role_id,roles.name,roles.slug,roles.level  FROM users LEFT JOIN roles ON users.role_id=roles.id WHERE username=:username AND password=:password');
        $req->execute($d); 
        $data = $req->fetchAll();
        if(count($data)>0){
                $_SESSION['Auth'] = $data[0]; 
                return true;
        }
        return false; 
    }
    
    /**
     * Autorise un rang à accéder à une page, redirige vers forbidden sinon
     * */
    function allow($rang){
        global $PDO; 
        $req = $PDO->prepare('SELECT slug,level  FROM roles');
        $req->execute(); 
        $data = $req->fetchAll();
        $roles = array(); 
        foreach($data as $d){
            $roles[$d->slug] = $d->level; 
        }
        if(!$this->user('slug')){
            $this->forbidden(); 
        }else{
            if($roles[$rang] > $this->user('level')){
                $this->forbidden(); 
            }else{
                return true;
            }
        }

        
    }
    
    /**
     * Récupère une info utilisateur
     ***/
    function user($field){
        if($field == 'role') $field = 'slug'; 
        if(isset($_SESSION['Auth']->$field)){
            return $_SESSION['Auth']->$field;
        } else{
            return false; 
        }
    }
    
    /**
     * Redirige un utilisateur
     * */
    function forbidden(){
        header('Location:'.$this->forbiddenPage);
    }
    
}

$Auth = new Auth();
