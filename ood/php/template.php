<?php

// Define the abstract class
abstract class Template {
  // The template method defines the skeleton of an algorithm.
  public final function templateMethod() {
    $this->primitiveOperation1();
    $this->primitiveOperation2();
    $this->concreteOperation();
    $this->hook();
  }

  // Primitive operations have to be defined in subclasses
  abstract protected function primitiveOperation1();
  abstract protected function primitiveOperation2();

  // Default implementation of concrete operation
  protected function concreteOperation() {
    // implementation
  }

  // Hook method can be overridden, but it's not mandatory
  protected function hook() {}
}

// Define the concrete class
class ConcreteClass extends Template {
  protected function primitiveOperation1() {
    // implementation
  }

  protected function primitiveOperation2() {
    // implementation
  }

  // This hook method is optional
  protected function hook() {
    // implementation
  }
}

// Usage
$object = new ConcreteClass();
$object->templateMethod();
