<?php

// Define the Command interface with an execute method
interface Command {
    public function execute();
}

// Define a Receiver class that will receive the commands
class Receiver {
    public function doSomething(string $action) {
        echo "Receiver is doing something: " . $action . "\n";
    }
}

// Define a ConcreteCommand class that implements the Command interface
class ConcreteCommand implements Command {
    private $receiver;
    private $action;

    public function __construct(Receiver $receiver, string $action) {
        $this->receiver = $receiver;
        $this->action = $action;
    }

    public function execute() {
        $this->receiver->doSomething($this->action);
    }
}

// Define an Invoker class that will execute the commands
class Invoker {
    private $command;

    public function setCommand(Command $command) {
        $this->command = $command;
    }

    public function executeCommand() {
        $this->command->execute();
    }
}

// Create the Receiver object
$receiver = new Receiver();

// Create the ConcreteCommand object and pass it the Receiver object
$command = new ConcreteCommand($receiver, "some action");

// Create the Invoker object and set the ConcreteCommand object as its command
$invoker = new Invoker();
$invoker->setCommand($command);

// Execute the command through the Invoker object
$invoker->executeCommand();
