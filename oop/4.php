<?php
class SinhVien{
    public static $name = "Nguyen Van A";

    static function setName($ten){
        return SinhVien::$name = $ten;
    }

    function getName(){
        return SinhVien::$name;
    }
}

// $sv = new SinhVien;
// $sv->setName('KPT');
// echo $sv->name;
SinhVien::setName('KPT');
echo SinhVien::getName();

echo "<br>";

SinhVien::setName('KPT2');
echo SinhVien::$name;



?>