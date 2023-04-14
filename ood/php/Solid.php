<?php

// --- Single

// Single Responsibility Principle realized through a separate class for each responsibility
class UserManager {
  public function registerUser($userData) {
    // code to register user
  }
}

class EmailSender {
  public function sendEmail($emailData) {
    // code to send email
  }
}

// --- OC

// Open/Closed Principle realized through an abstract class that can be extended for new functionality without modifying existing code
abstract class PaymentGateway {
  abstract public function processPayment($paymentData);
}

class PayPalGateway extends PaymentGateway {
  public function processPayment($paymentData) {
    // code to process payment through PayPal
  }
}

class StripeGateway extends PaymentGateway {
  public function processPayment($paymentData) {
    // code to process payment through Stripe
  }
}

// New payment gateways can be added by extending the PaymentGateway class without modifying existing code.

// --- Liskov

// Liskov Substitution Principle realized through the use of type hinting in the processPayment method of the PaymentGateway class
// Any class that extends PaymentGateway can be used interchangeably without affecting the behavior of the code
function processPayment(PaymentGateway $paymentGateway, $paymentData) {
  $paymentGateway->processPayment($paymentData);
}

// --- I

// Interface Segregation Principle realized through the use of separate interfaces for different functionalities
interface UserRegistration {
  public function registerUser($userData);
}

interface EmailSending {
  public function sendEmail($emailData);
}

// Classes can implement only the interfaces they need, without being forced to implement unnecessary methods
class UserRegistrationManager implements UserRegistration {
  public function registerUser($userData) {
    // code to register user
  }
}

class EmailSendingManager implements EmailSending {
  public function sendEmail($emailData) {
    // code to send email
  }
}

// --- DI

// Dependency Inversion Principle realized through the use of dependency injection in the constructors of classes that depend on other classes
// This allows for loose coupling between classes and easier testing and maintenance

interface PaymentProcessor {
  public function processPayment($paymentData);
}

class PaymentManager {
  private $paymentProcessor;

  public function __construct(PaymentProcessor $paymentProcessor) {
    $this->paymentProcessor = $paymentProcessor;
  }

  public function processPayment($paymentData) {
    $this->paymentProcessor->processPayment($paymentData);
  }
}

class PayPalProcessor implements PaymentProcessor {
  public function processPayment($paymentData) {
    // code to process payment through PayPal
  }
}

class StripeProcessor implements PaymentProcessor {
  public function processPayment($paymentData) {
    // code to process payment through Stripe
  }
}

// The PaymentManager class can now be instantiated with any class that implements the PaymentProcessor interface, allowing for easy swapping of payment processors without modifying existing code.
