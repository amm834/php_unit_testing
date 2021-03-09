<?php

use App\Models\User;
use PHPUnit\Framework\TestCase;

final class UserModelTest extends TestCase {

  public function testFirstName():void {
    $user = new User();
    $user->setFirstName('Aung');
    $this->assertEquals($user->getFirstName(), 'Aung');
  }

  public function testLastName():void {
    $user = new User();
    $user->setLastName('Moe');
    $this->assertEquals($user->getLastName(), 'Moe');
  }

  public function testFullName() : void {
    $user = new User();
    $user->setFirstName("Aung");
    $user->setLastName("Moe");

    $this->assertEquals($user->getFullName(), 'Aung Moe');
  }

  public function testUserEmail() {
    $user = new User();

    $user->setFirstName("Aung");
    $user->setLastName("Moe");

    $emailVariable = $user->getUserEmail();
    $this->assertArrayHasKey('full_name', $emailVariable);
    $this->assertArrayHasKey('user_email', $emailVariable);

    $this->assertEquals($emailVariable['full_name'], 'Aung Moe');
    $this->assertEquals($emailVariable['user_email'], 'amm834@gmail.com');
  }
}