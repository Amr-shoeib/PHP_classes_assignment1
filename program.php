<?

class Program {
    public $name;
    public $id;
  
    public function setName($name) {
      $this->name = $name;
    }
  
    public function setid($id) {
      $this->id = $id;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getid() {
      return $this->id;
    }
  }
  
  class Full_time_program extends Program {
    public $Full_time_programId;
  
    public function setFull_time_programId($Full_time_programId) {
      $this->Full_time_programId = $Full_time_programId;
    }
  
    public function getFull_time_program() {
      return $this->Full_time_programId;
    }
  }
  
  $Full_time_program->setName("php");
  $Full_time_program->coursetId("1");
  
  echo $course->getName() . " is a course with ID " . $Full_time_programe->getFull_time_programeId() . " and is 1" ;
  



?>