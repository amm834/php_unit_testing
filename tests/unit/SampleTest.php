<?php
use PHPUnit\Framework\TestCase;

final class SampleTest extends TestCase {
  // testAssertsToTrue()
  // testFailuer()
  public function testFailuer():void{
    $this->assertFalse(false);
  }
}