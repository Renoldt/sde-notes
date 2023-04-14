<?php

// Define the interface for the builder
interface Builder {
  public function buildPartA();
  public function buildPartB();
  public function getResult();
}

// Define the concrete builder classes that implement the builder interface
class ConcreteBuilder1 implements Builder {
  private $product;

  public function __construct() {
    $this->product = new Product();
  }

  public function buildPartA() {
    $this->product->addPart("Part A");
  }

  public function buildPartB() {
    $this->product->addPart("Part B");
  }

  public function getResult() {
    return $this->product;
  }
}

class ConcreteBuilder2 implements Builder {
  private $product;

  public function __construct() {
    $this->product = new Product();
  }

  public function buildPartA() {
    $this->product->addPart("Part X");
  }

  public function buildPartB() {
    $this->product->addPart("Part Y");
  }

  public function getResult() {
    return $this->product;
  }
}

// Define the product class
class Product {
  private $parts = array();

  public function addPart($part) {
    $this->parts[] = $part;
  }

  public function listParts() {
    echo "Product parts: " . implode(', ', $this->parts) . "\n";
  }
}

// Define the director class that controls the order of construction
class Director {
  private $builder;

  public function setBuilder(Builder $builder) {
    $this->builder = $builder;
  }

  public function buildMinimalViableProduct() {
    $this->builder->buildPartA();
  }

  public function buildFullFeaturedProduct() {
    $this->builder->buildPartA();
    $this->builder->buildPartB();
  }
}

// Client code
$director = new Director();
$builder1 = new ConcreteBuilder1();
$builder2 = new ConcreteBuilder2();

// Build minimal viable product using builder 1
$director->setBuilder($builder1);
$director->buildMinimalViableProduct();
$product = $builder1->getResult();
$product->listParts();

// Build full featured product using builder 1
$director->setBuilder($builder1);
$director->buildFullFeaturedProduct();
$product = $builder1->getResult();
$product->listParts();

// Build full featured product using builder 2
$director->setBuilder($builder2);
$director->buildFullFeaturedProduct();
$product = $builder2->getResult();
$product->listParts();