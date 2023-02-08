<?php

class Student {
        private $id;
        private $fname;
        private $image;
        private $program_id;
     
        public function __construct($id, $fname, $image, $program_id) {
           $this->id = $id;
           $this->fname = $fname;
           $this->image = $image;
           $this->program_id = $program_id;
        }
     
        public function getid() {
           return $this->id;
        }
     
        public function getfname() {
           return $this->fname;
        }
     
        public function getimage() {
           return $this->image;
        }
     
        public function getprogram_id() {
           return $this->program_id;
        }
     }
     
     $student = new Student(1, "William", "william.jpg", "1");
     
     echo "ID: " . $student->getid() . "1";
     echo "fname: " . $student->getfname() . "William";
     echo "image: " . $student->getimage() . "william.jpg";
     echo "program_id: " . $student->getprogram_id() . "1";
     
?>





<!-- public function __get($property)
{
   if(property_exists($this, $property)){
    return $this->$property;

   } 
}

public function __set($property, $value)
{
    if(property_exists($this, $property)){
         $this->$property = $value;
    
}
return $this;

        $William = new student ( 'id' , 'William', 'Smith', 'wsmith.jpg,', '8-1-2018' , '1', '1');
        $Gary = new student ( 'id' , 'Gary', 'Lima', 'glima.jpg,', '11-1-2018' , '1', '2');
        $Mike = new student ( 'id' , 'Mike', 'Addison', 'maddison.jpg,', '18-1-2018' , '2', '1');
        $David = new student ( 'id' , 'David', 'Lynch', 'dlynch.jpg,', '20-1-2018' , '2', '2');
  
} -->