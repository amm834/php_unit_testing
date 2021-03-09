<?php
namespace App\Models;

class User
{
  public string
  $first_name,
  $last_name;

  public function setFirstName($firstName) {
    $this->first_name = trim($firstName);
  }

  public function getFirstName() {
    return $this->first_name;
  }

  public function setLastName($lastName) {
    $this->last_name = trim($lastName);
  }

  public function getLastName() {
    return $this->last_name;
  }


  public function getFullName() {
    return "{$this->getFirstName()} {$this->getLastName()}";
  }

  public function getUserEmail() {
    return [
      'full_name' => $this->getFullName(),
      'user_email' => 'amm834@gmail.com'
    ];
  }

}