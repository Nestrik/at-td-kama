<?php
require_once __DIR__.'/bootstrap.php';

class ViattiTest extends BaseExample {
  private $baseUrl = 'https://www.viatti.ru/';

  function testMainPage() {
    $this->driver->get($this->baseUrl);
    $element = $this->driver->findElement(WebDriverBy::xpath("//a[contains(@class, 'viatti-logo__big')]"));
    $this->assertContains('Шины Viatti - сила в надежности', $element->getAttribute('data-original-title'));
  }

  function testSchemePage() {
    $this->driver->get($this->baseUrl . 'ru/brand_viatti/shema/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Схемы правильной установки асимметричных зимних шин Viatti на автомобиль', $headerElement->getText());
  }

  function testBrandVittiPage() {
    $this->driver->get($this->baseUrl . 'ru/brand_viatti/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('О бренде', $headerElement->getText());
  }

  function testCatalogWinterPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/winter/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Зимние шины ', $headerElement->getText());
    $this->assertContains('Viatti', $headerElement->getText());
  }

  function testCatalogPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Каталог шин ', $headerElement->getText());
    $this->assertContains('Viatti', $headerElement->getText());
  }

  function testReviewsPage() {
    $this->driver->get($this->baseUrl . 'ru/reviews/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Независимые отзывы о ', $headerElement->getText());
    $this->assertContains('шинах Viatti', $headerElement->getText());
  }

  function testReviewsViattiBrinaNordicoPage() {
    $this->driver->get($this->baseUrl . 'ru/reviews/ViattiBrinaNordico/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Независимые отзывы о зимних шинах ', $headerElement->getText());
    $this->assertContains('Viatti', $headerElement->getText());
    $this->assertContains(' Brina Nordico', $headerElement->getText());
  }

  function testCatalogViattiVettoreBrinaPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/winter/ViattiVettoreBrina/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Зимние шины Viatti Vettore Brina', $headerElement->getText());
  }

  function testCatalogViattiBoscoPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/winter/ViattiBosco/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Зимние шины Viatti Bosco S/T', $headerElement->getText());
  }

  function testCatalogWinterViattiBrinaPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/winter/ViattiBrina/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Зимние шины Viatti Brina', $headerElement->getText());
  }

  function testCatalogSummerViattiBoscoATPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/summer/ViattiBoscoAT/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Летние шины Viatti Bosco A/T', $headerElement->getText());
  }

  function testCatalogWinterViattiVettoreInvernoPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/winter/ViattiVettoreInverno/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Зимние шины Viatti Vettore Inverno', $headerElement->getText());
  }

  function testCatalogSummerPage() {
    $this->driver->get($this->baseUrl . 'ru/tyre_catalog/summer/');
    $headerElement = $this->driver->findElement(WebDriverBy::cssSelector('h1'));
    $this->assertContains('Летние шины ', $headerElement->getText());
    $this->assertContains('Viatti', $headerElement->getText());
  }
}
