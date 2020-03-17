<?php
class model_connexion
{
  protected id;
  protected nom;
  protected prenom;
  protected mail;
  protected login;
  protected mdp;
  protected role;
  public function __construct($nom, $prenom,$mail,$login,$mdp,$role)
  {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->login = $login;
            $this->mdp = $mdp;
            $this->role = $role;
        }

    public function getnom($nom)
    {
        return $nom;
    }
  }
 public function getprenom($prenom)
    {
        return $prenom;
    }
  }
    public function getmail($mail)
    {
        return $mail;
    }
  }
    public function getlogin($login)
    {
        return $login;
    }
  }
    public function getmdp($mdp)
    {
        return $mdp;
    }
  }
    public function getrole($role)
    {
        return $role;
    }
  }
   
    public function setnom ($nom)
    {
    if(is_string($nom))
    {
      $this->_nom=$nom;
    }
  }
    public function setprenom ($prenom)
    {
    if(is_string($prenom))
    {
      $this->_prenom=$prenom;
    }
  }
    public function setmail ($mail)
    {
    if(is_string($mail))
    {
      $this->_mdp=$mail;
    }
  }
    public function setlogin ($login)
    {
    if(is_string($login))
    {
      $this->_login=$login;
    }
  }
    public function setmdp ($mdp)
    {
    if(is_string($mdp))
    {
      $this->_mdp=$mdp;
    }
  }
    public function setrole ($role)
    {
    if(is_string($role))
    {
      $this->_role=$role;
    }
  }
   
?>
