<?php

class Course {
  public $Php;
  public $Mean_stake;
  public $Javascript;
  public $Ui_design;
  

  public function __construct($Php, $Mean_stake, $Javascript, $Ui_design) {
    $this->Php = $Php;
    $this->Mean_stake = $Mean_stake;
    $this->Javascript = $Javascript;
    $this->Ui_design = $Ui_design;
    
  }

  public function Software() {
    return "Hello, my Course is {$this->Php} and I am studing {$this->Javascript} For almost three years.";
  }
}

$Course = new Course("Back end", "Software", "Front end", "Interface");
echo $Courses->Software();

?>
