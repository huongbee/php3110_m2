<?php
class SinhVien{
    public $name = "Khoa pham training";
    public $id = "234567";

    public function setName($ten){
        $this->name = $ten;
    }

}
class HocSinh extends SinhVien{

    public $name;
    public $age;
    public function setAge($tuoi){
        $this->age = $tuoi;
    }
    
}
$svB = new HocSinh;
echo  $svB->name;
$svb->setName('Nguyen Van A');
echo $svB->name;



// $svA = new SinhVien;
// echo  $svA->name;
// $svA->setName('Nguyen Van A');
// echo "<br>";
// echo  $svA->name;





?>