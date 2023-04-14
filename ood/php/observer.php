<?php

// Define the Observer interface
interface Observer {
  public function update($subject);
}

// Define the Subject interface
interface Subject {
  public function attach(Observer $observer);
  public function detach(Observer $observer);
  public function notify();
}

// Define the Concrete Subject
class ConcreteSubject implements Subject {
  private $observers = array();
  private $state;

  public function attach(Observer $observer) {
    $this->observers[] = $observer;
  }

  public function detach(Observer $observer) {
    $key = array_search($observer, $this->observers, true);
    if ($key !== false) {
      unset($this->observers[$key]);
    }
  }

  public function notify() {
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }

  public function setState($state) {
    $this->state = $state;
    $this->notify();
  }

  public function getState() {
    return $this->state;
  }
}

// Define the Concrete Observer
class ConcreteObserver implements Observer {
  private $state;

  public function update($subject) {
    $this->state = $subject->getState();
    echo "New state: $this->state\n";
  }
}

// Client code
$subject = new ConcreteSubject();

$observer1 = new ConcreteObserver();
$subject->attach($observer1);

$observer2 = new ConcreteObserver();
$subject->attach($observer2);

$subject->setState(1);
$subject->setState(2);

$subject->detach($observer2);

$subject->setState(3);
