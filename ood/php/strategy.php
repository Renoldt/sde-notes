<?php

// Define the interface for the strategy pattern
interface Strategy {
  public function execute($data);
}

// Define concrete strategies
class ConcreteStrategyA implements Strategy {
  public function execute($data) {
    return "Strategy A executed with data: " . $data;
  }
}

class ConcreteStrategyB implements Strategy {
  public function execute($data) {
    return "Strategy B executed with data: " . $data;
  }
}

// Define the context that uses the strategy pattern
class Context {
  private $strategy;

  public function __construct(Strategy $strategy) {
    $this->strategy = $strategy;
  }

  public function executeStrategy($data) {
    return $this->strategy->execute($data);
  }
}

// Use the strategy pattern
$strategyA = new ConcreteStrategyA();
$strategyB = new ConcreteStrategyB();

$context = new Context($strategyA);
echo $context->executeStrategy("some data"); // Output: "Strategy A executed with data: some data"

$context = new Context($strategyB);
echo $context->executeStrategy("some data"); // Output: "Strategy B executed with data: some data"
