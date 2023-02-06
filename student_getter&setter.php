<?php

use Student as GlobalStudent;

class Student{
    private $fname;
    private $id;
    private $image;
    private $date;
    private $program_id;
    private $level;

    public function __construct($fname, $id, $image, $date, $program_id, $level)
    {
      $this->fname = $fname;
      $this->id = $id;   
      $this->image = $image; 
      $this->date = $date; 
      $this->program_id = $program_id;    
      $this->level = $level;  
    }

public function __get($property)
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
  
}
}

        

        $Student->__set($Student, 'Will Smith');
        echo $Student->__get('Full_name')

// echo $Student-> getFull_name;




?>