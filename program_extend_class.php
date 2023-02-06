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
  
  class Course extends Program {
    public $courseId;
  
    public function setCourseId($courseId) {
      $this->courseId = $courseId;
    }
  
    public function getCourseId() {
      return $this->courseId;
    }
  }
  
  $course->setName("php");
  $course->coursetId("1");
  
  echo $course->getName() . " is a course with ID " . $course->getCourseId() . " and is 1" ;
  



?>