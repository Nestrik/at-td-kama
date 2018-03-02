<?php
require_once __DIR__.'/bootstrap.php';

class KamaTdTests extends BaseTest {
  private $baseUrl = 'https://www.td-kama.com/';
  
  function testWinterTiresPage() {
      $this->driver->get($this->baseUrl . 'ru/tyre_catalog/car/wintertires/');
      $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
      $this->assertContains('Купить зимние шины', $headerElement->getText());
  }
  
  function testSummerTiresPage() {
      $this->driver->get($this->baseUrl . 'ru/tyre_catalog/car/summertires/');
      $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
      $this->assertContains('Купить летние шины', $headerElement->getText());
  }
  
  function testTruckTires() {
      $this->driver->get($this->baseUrl . 'ru/tyre_catalog/truck_all/');
      $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
      $this->assertContains('Подобрать грузовые комбинированные шины', $headerElement->getText());
  }
  
  function testCMKTires() {
      $this->driver->get($this->baseUrl . 'ru/brand/cmk/');
      $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
      $this->assertContains('ЦМК шины КАМА', $headerElement->getText());
  }
  
  function testCatalogPage() {
      $this->driver->get($this->baseUrl . 'ru/tyre_catalog/');
      $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
      $this->assertContains('Каталог шин KAMA TYRES', $headerElement->getText());
  }
  
  function testMainPage() {
      $this->driver->get($this->baseUrl);
      $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
      $this->assertContains('Лидер шинного', $headerElement->getText());
      $this->assertContains('рынка в России', $headerElement->getText());
  }
}