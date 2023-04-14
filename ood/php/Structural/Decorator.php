<?php

// 装饰者模式

// Define interface for components
interface Component {
    public function operation(): string;
}

// Define concrete component
class ConcreteComponent implements Component {
    public function operation(): string {
        return "ConcreteComponent";
    }
}

// Define abstract decorator
abstract class Decorator implements Component {
    protected $component;

    public function __construct(Component $component) {
        $this->component = $component;
    }

    public function operation(): string {
        return $this->component->operation();
    }
}

// Define concrete decorators
class ConcreteDecoratorA extends Decorator {
    public function operation(): string {
        return "ConcreteDecoratorA(" . parent::operation() . ")";
    }
}

class ConcreteDecoratorB extends Decorator {
    public function operation(): string {
        return "ConcreteDecoratorB(" . parent::operation() . ")";
    }
}

// Client code
function clientCode(Component $component) {
    echo "RESULT: " . $component->operation();
}

$component = new ConcreteComponent();
clientCode($component);

$decorator1 = new ConcreteDecoratorA($component);
$decorator2 = new ConcreteDecoratorB($decorator1);
clientCode($decorator2);
