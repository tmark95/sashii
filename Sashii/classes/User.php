<?php

/**
 *
 */

class User
{
  private $name;
  private $lastn;
  private $username;
  private $email;
  private $emailConfirm;
  private $pass;
  private $passConfirm;
  private $gender;
  private $terms;
 

  public function __construct($name, $lastn, $username, $email, $emailConfirm, $pass, $passConfirm, $gender, $terms)
  {
    $this->name = $name;
    $this->lastn = $lastn;
    $this->username = $username;
    $this->email = $email;
    $this->pass = $pass;
    $this->gender = $gender;
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

  public function setLastn($lastn)
  {
    $this->name = $lastn;
    return $this;
  }

  public function getLastn()
  {
    return $this->lastn;
  }

  public function setUsername($username)
  {
    $this->username = $username;
    return $this;
  }

  public function getUsername()
  {
    return $this->username;
  }
  

  public function setPassword($pass)
  {
    $this->name = $name;
    return $this;
  }
  public function getPass()
  {
    
    return $this->pass;
  }


  public function getPassConfirm()
  {
    return $this->passConfirm;
  }

  public function hashPassword()
  {

  }

  public function setEmail($email)
  {
    $this->email = $email;
  }
  public function getEmail()
  {
    return $this->email;
  }
  public function getEmailConfirm()
  {
    return $this->emailConfirm;
  }

  public function setGender($gender)
  {
    $this->gender = $gender;
    return $this;
  }
  public function getGender()
  {
    return $this->gender;
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

