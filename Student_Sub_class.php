
<?php
class Student {
    private $id;
    private $fname;
    private $lname;
    private $image;
    private $date;
    private $program_Id;
    private $level;

  private function __construct($id, $fname, $lname, $image, $date, $program_id, $level) {
    $this->id = $id;
    $this->fname = $fname;
    $this->lname = $lname;
    $this->image = $image;
    $this->date = $date;
    $this->program_Id = $program_id;
    $this->level = $level;
  }
  public function getid() {
    return $this->id;
  }

  public function getfname() {
    return $this->fname;
  }

  public function getlname() {
    return $this->lname;
  }

  public function getimagee() {
    return $this->image;
  }

  public function getprogram_id() {
    return $this->program_Id;
  }

  public function getlevel() {
    return $this->level;
  }
}

class RegisteredStudent extends Student {
  private $registrationStudent;

  public function __construct($id, $fname, $lname, $image, $program_id,$level, $registrationStudent) {
    parent::__construct($id, $fname, $lname, $image, $program_id, $level);
    $this->registrationStudent = $registrationStudent;
  }

  public function getRegistrationStudent() {
    return $this->getRegistrationStudent();
  }
}
?>