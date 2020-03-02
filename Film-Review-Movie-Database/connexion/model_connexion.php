<?php
class model_inscription
{
  protected id;
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
    public function getlogin($login)
    {
        return $login;
    }
  
    public function getid($id)
    {
        return $id;
    }
?>
