<?php

// Encapsulation in PHP can be achieved through the use of access modifiers such as public, private, and protected.
// Here is an example of encapsulation in PHP using private access modifier:
class Person {
  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }

  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setAge($age) {
    $this->age = $age;
  }
}
// In this example, the properties $name and $age are declared as private, meaning they can only be accessed within the class.
// The public methods getName(), getAge(), setName(), and setAge() are used to access and modify the private properties.
// This way, the internal state of the object is protected from external interference.



// Inheritance in PHP can be achieved using the "extends" keyword. 
// Here is an example of inheritance in PHP:
class Employee extends Person {
  private $salary;

  public function __construct($name, $age, $salary) {
    parent::__construct($name, $age);
    $this->salary = $salary;
  }

  public function getSalary() {
    return $this->salary;
  }

  public function setSalary($salary) {
    $this->salary = $salary;
  }
}
// In this example, the Employee class extends the Person class using the "extends" keyword.
// The Employee class has an additional private property $salary, and its own constructor that calls the parent constructor using "parent::__construct()".
// The Employee class also has its own methods getSalary() and setSalary() to access and modify the $salary property.


// Polymorphism in PHP can be achieved through method overriding and interfaces.
// Method overriding is when a subclass provides its own implementation of a method that is already defined in its parent class.
// Here is an example of method overriding in PHP:
class Animal {
  public function makeSound() {
    echo "Unknown sound";
  }
}

class Dog extends Animal {
  public function makeSound() {
    echo "Bark";
  }
}

// In this example, the Dog class extends the Animal class and overrides the makeSound() method with its own implementation.
// When an instance of Dog calls the makeSound() method, it will output "Bark" instead of "Unknown sound".

// Interfaces in PHP define a set of methods that a class must implement.
// Here is an example of an interface in PHP:

interface Shape {
  public function getArea();
}
// In this example, the Shape interface defines a single method getArea() that any class implementing the interface must define.
// This allows for polymorphism, as any class that implements the Shape interface can be used interchangeably in code that expects a Shape object.


// Abstraction in PHP can be achieved through abstract classes and interfaces.
// Abstract classes are classes that cannot be instantiated, but can be extended by other classes.
// Here is an example of an abstract class in PHP:

abstract class Vehicle {
  protected $numWheels;

  public function setNumWheels($numWheels) {
    $this->numWheels = $numWheels;
  }

  abstract public function start();
}

// In this example, the Vehicle class is declared as abstract using the "abstract" keyword.
// The class has a protected property $numWheels and a public method setNumWheels() to set the value of $numWheels.
// The class also has an abstract method start() that any class extending Vehicle must implement.
// Abstract classes can provide a template for other classes to follow, while still allowing for flexibility in implementation.