<?php
class model_inscription
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
    public function getemail($email)
    {
        return $email;
    }
    public function getmdp($mdp)
    {
        return $mdp;
    }
    public function getlogin($login)
    {
        return $login;
    }
    public function getprenom($prenom)
    {
        return $prenom;
    }
    public function getid($id)
    {
        return $id;
    }
?>
