<?php
class model_inscription
{
  protected email;
  protected mdp;
  public function __construct($email,$mdp)
  {
            $this->mdp = $mdp;
            $this->email = $email;
  }
    public function getmdp($mdp)
    {
        return $mdp;
    }
  }
    public function getlogin($email)
    {
        return $email;
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
?>
