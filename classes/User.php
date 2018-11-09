<?php

class User
{
  private $name;
  private $apellido;
  private $email;
  private $email_conf;
  private $pass;
  private $pass_conf;
  private $perfil;
  private $terms;
 

  public function __construct($name, $apellido, $email, $email_conf, $pass, $pass_conf, $perfil, $terms)
  {
    $this->name = $name;
    $this->apellido = $apellido;
    $this->email = $email;
    $this->email_conf = $email_conf;
    $this->pass = $pass;
    $this->pass_conf = $pass_conf;
    $this->perfil = $perfil;
    $this->terms = $terms;
  
  }


  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }
  public function getName()
  {
    return $this->name;
  }


  public function setApellido($apellido)
  {
    $this->apellido = $apellido;
    return $this;
  }
  public function getApellido()
  {
    return $this->apellido;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }

  public function getEmailConf()
  {
    return $this->email_conf;
  }  

  public function setPassword($pass)
  {
    $this->pass = $pass;
    return $this;
  }

  public function getPassword()
  {
    return $this->pass;
  }

  public function getPasswordConf()
  {
    return $this->pass_conf;
  }

  public function hashPassword()
  {
  }

  public function getPerfil()
  {
    return $this->perfil;
  }

  public function setTerms($terms)
  {
    $this->terms = $terms;
  }
  public function getTerms()
  {
    return $this->terms;
  }
}

