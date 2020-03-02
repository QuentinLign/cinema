<?php
class model_connexion
{
  protected id;
  protected nom;
  protected email;
  protected mdp;
  protected login;
  protected prenom;
  protected telephone;
  public function __construct($nom, $email,$mdp,$login,$prenom,$id,$telephone)
  {
            $this->nom = $nom;
            $this->email = $email;
            $this->mdp = $mdp;
            $this->login = $login;
            $this->prenom = $prenom;
            $this->id = $id;
            $this->telephone = $telephone;
        }

    public function getnom($nom)
    {
        return $nom;
    }
  }
    public function getemail($email)
    {
        return $email;
    }
  }
    public function getmdp($mdp)
    {
        return $mdp;
    }
  }
    public function getlogin($login)
    {
        return $login;
    }
  }
    public function getprenom($prenom)
    {
        return $prenom;
    }
  }
    public function getid($id)
    {
        return $id;
    }
  }
    public function setnom ($nom)
    {
    if(is_string($nom))
    {
      $this->_nom=$nom;
    }
  }
    public function setemail ($email)
    {
    if(is_string($email))
    {
      $this->_email=$email;
    }
  }
    public function setmdp ($mdp)
    {
    if(is_string($mdp))
    {
      $this->_mdp=$mdp;
    }
  }
    public function setlogin ($login)
    {
    if(is_string($login))
    {
      $this->_login=$login;
    }
  }
    public function setprenom ($prenom)
    {
    if(is_string($prenom))
    {
      $this->_prenom=$prenom;
    }
  }
    public function setid ($id)
    {
    if(is_string($id))
    {
      $this->_id=$id;
    }
  }
    public function settelephone ($telephone)
    {
    if(is_string($telephone))
    {
      $this->_telephone=$telephone;
    }
  }
?>
