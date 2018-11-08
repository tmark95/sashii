<?php 


class Cart
{
  private $username;
  private $description;
  private $cant;
  private $totalPrice;

  public function __construct($username, $description, $cant, $totalPrice)
  {
    
    $this->username = $username;
    $this->description = $description;
    $this->cant = $cant;
    $this->totalPrice = $totalPrice;
    
  }

  public function setUser($user)
  {
    $this->user = $user;
    return $this;
  }

  public function getUser($user)
  {
    return $this->user;
  }

}
