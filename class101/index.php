<?php

# Defining a class
class Task {
  # Assigning protected variables
  protected $description;
  protected $completed = false;
  # Constructor function
  public function __construct($description)
  {
    $this->description = $description;
  }

  # Getter's and Setter's for accessing the private and protected values from attributes || variables
  public function setDescription($description) // Setter's
  {
    $this->description = $description;
  }

  public function getDescription() // Getter's
  {
    return $this->description;
  }

  public function setCompleted($completed) // Setter's
  {
    $this->completed = $completed;
  }

  public function getCompleted() // Getter's
  {
    return $this->completed;
  }

  # Class Methods
  public function complete()
  {
    $this->completed = true;
  }

  # Class MEthods
  public function isComplete()
  {
    return $this->completed;
  }

}

# An array of tasks
$tasks =  [ 
  new Task("Go to the store"),
  new Task("Go to the school"),
  new Task("Go to the varsity"),
  new Task("Go to store")
];

$tasks[0]->complete();
$tasks[3]->complete();

# Including 'index.view.php' file
require 'index.view.php';