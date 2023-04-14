<?php

// Define a class that will act as the Facade
class OrderFacade {
  private $order;
  private $payment;
  private $shipping;

  public function __construct() {
    $this->order = new Order();
    $this->payment = new Payment();
    $this->shipping = new Shipping();
  }

  public function placeOrder($orderDetails) {
    $this->order->createOrder($orderDetails);
    $this->payment->processPayment($orderDetails['payment']);
    $this->shipping->shipOrder($orderDetails['shipping']);
  }
}

// Define the classes that the Facade will interact with
class Order {
  public function createOrder($orderDetails) {
    // Code to create the order
  }
}

class Payment {
  public function processPayment($paymentDetails) {
    // Code to process the payment
    foreach($paymentDetails as $attr => $value){
        echo 'payment attr ' . $attr . ' : ' . $value . PHP_EOL;
    }
  }
}

class Shipping {
  public function shipOrder($shippingDetails) {
    // Code to ship the order
    foreach($shippingDetails as $attr => $value){
        echo 'shipping attr ' . $attr . ' : ' . $value . PHP_EOL;
    }
  }
}

// Use the Facade to place an order
$orderFacade = new OrderFacade();
$orderDetails = array(
  'product' => 'Widget',
  'quantity' => 1,
  'payment' => array(
    'type' => 'credit card',
    'number' => '1234 5678 9012 3456',
    'expiration' => '01/23',
    'cvv' => '123'
  ),
  'shipping' => array(
    'name' => 'John Doe',
    'address' => '123 Main St',
    'city' => 'Anytown',
    'state' => 'CA',
    'zip' => '12345',
    'country' => 'USA'
  )
);
$orderFacade->placeOrder($orderDetails);

