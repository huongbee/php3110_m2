<?php

class  SinhVien{
    public $name;
    private $id = "234567";

    function __construct($ten){
        return $this->name = $ten;
    }

    
    public function __destruct(){
        echo $this->name ." đã bị huỷ";
    }

    function getId(){
        return $this->id;
    }
}

class HocSinh extends SinhVien{
    function __destruct(){
        echo $this->name ." đã bị huỷ";
    }
}

// $sv = new SinhVien('KPT');
// //$sv->SinhVien('KPT');
// echo $sv->name;
// echo "<br>";
// echo $sv->getId();
// echo "<br>";

$hs = new HocSinh('KPT');
//$sv->SinhVien('KPT');
echo $hs->name;
echo "<br>";
echo $hs->getId();
echo "<br>";

?>