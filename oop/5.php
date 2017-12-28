<?php
abstract class SinhVien{
    public $name;
    public function getValue(){
        echo "text";
    }

    abstract function returnValue();

}
abstract class SV extends SinhVien{
    function returnValue(){
        echo 123456;
    }
}

class hocsinh extends SV{

}


$sv = new hocsinh;
echo $sv->getValue();

echo $sv->returnValue();



?>