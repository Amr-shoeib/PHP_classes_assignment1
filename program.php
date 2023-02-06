<?php

class Program {
    private $id;
    private $name;

    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function programId(){
        echo $this->id . 'program id';
    }

    public function getName(){
       return $this->name . 'IDP';
    }

    public function setname($name){
        if(is_string($name) && strlen($name) >1){
            $this->name = $name;
            return "name has been updated to $name";
        }else{
            return 'not a valid name';
        }
    }
}

$program1 = new program ('id', 'name');
echo $programName->getName();
$programName->setname('IMS');



// /     public function setid($id) {
//        $this->id = $id;
//     }
 
//     public function getid() {
//        return $this->id;
//     }
 
//     public function setname($name) {
//        $this->name = $name;
//     }
 
//     public function getname() {
//        return $this->name;
    
//     }
    
//  }

 
 
//  $program = new Program();
//  $program->setid("1");
//  $program->setname("IDP");
 
 
//  echo "id: " . $program->getid() . "<br>";
//  echo "name: " . $program->getname();
 
  
  

?>