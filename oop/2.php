<?php
class SinhVien{
    public $name = "Khoa pham training";
    private $id = "234567";

    public function setName($ten){
        $this->name = $ten;
    }

    function getId(){
        return $this->id;
    }

}
class HocSinh extends SinhVien{

    public $name;
    public $age;
    
    public function setAge($tuoi){
        $this->age = $tuoi;
    }

    public function getId(){
        return $this->id;
    }
    
}
// $svB = new HocSinh;
// echo  $svB->name;
// echo "<br>";
// echo $svB->getId();
// $svB->setName('Nguyen Van A');
// echo $svB->name;



// $svA = new SinhVien;
// echo  $svA->name;
// $svA->setName('Nguyen Van A');
// echo "<br>";
// echo  $svA->name;
// //echo $svA->id;
// echo $svA->getId();

/**
 * create class Cat have propertis:name,color
 *                  have action: go, eat, catchMouse
 * create class son's Cat except catchMouse
 * class Chihuahua 
 */
class Cat{
    protected $name;
    protected $color = "black";
    
    protected function go(){
        return $this->getName()." going to school.";
    }
    protected function setName($name){
        return $this->name = $name;
    }
    protected function getName(){
        return $this->name;
    }
    private function catchMouse(){
        return "con mèo mẹ đang bắt con chuột";
    }

}
class subCat extends Cat{
    protected function play(){
        return $this->name. " playing soccer";
    }
   // color, name, play, go, setName, getName
    public function setName($name){
        return parent::setName($name); // action of Cat
    }
    public function getName(){
        return parent::getName(); // action of Cat
    }
}
class Chihuahua extends subCat{
    //color, name, play, go, setName, getName
    // public function setName($name){
    //     return $this->setName($name); //not action of Cat,  đệ quy
    //     return self::setName($name);
    // }
    
}

// $chi1 = new Chihuahua;
// $chi1->setName('HuaHua');
// echo $chi1->getName();

$cat1 = new subCat;
$cat1->setName('King');
echo $cat1->getName();
?>