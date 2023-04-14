<?php

// 适配器模式

interface Target {
    public function request(): string;
}

class Adaptee {
    public function specificRequest(): string {
        return "Adaptee's specific request.";
    }
}

class Adapter implements Target {
    private $adaptee;

    public function __construct(Adaptee $adaptee) {
        $this->adaptee = $adaptee;
    }

    public function request(): string {
        // This is an adapter that converts Adaptee's specific request to a target request.
        return "This is an adapter that converts " . $this->adaptee->specificRequest() . " to a target request.";
    }
}

$adaptee = new Adaptee();
$adapter = new Adapter($adaptee);

echo $adapter->request(); // Output: This is an adapter that converts Adaptee's specific request. to a target request.
