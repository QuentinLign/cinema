<?php
class model_inscription
{
  protected login;
  protected mdp;
  public function __construct($login,$mdp)
  {
            $this->mdp = $mdp;
            $this->login = $login;
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
?>
