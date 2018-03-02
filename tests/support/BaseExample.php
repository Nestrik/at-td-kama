<?php

use PHPUnit\Framework\TestCase;

class BaseExample extends TestCase {
  protected $driver;
  
  public function setUp() {
    global $capabilities;
    global $driverHost;
    $this->driver = RemoteWebDriver::create($driverHost, $capabilities, 30000, 30000);
  }
  
  protected function tearDown() {
    $this->driver->quit();
  }
}