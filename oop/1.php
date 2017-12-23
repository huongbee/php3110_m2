<?php

class HocSinh{
    public $name; //thuoc tinh
    public $age; //tt

    public function setName($ten){  //phuong thuc
        return $this->name = $ten;
    }
    public function getName(){  //phuong thuc
        return $this->name;
    }
    // function call_getName(){
    //     return $this->getName();
    // }
}


$banA = new HocSinh;
$banA->setName("Khoa Pham Training");
echo "Ban A ten la: ". $banA->getName();

//echo var_dump($banA);

?>