<?php
interface SinhVien{
    
    function __construct();
    public function getValue();
    function returnValue();

}
interface HocSinh{

    function __destruct();

}
interface SinhVien2{
    public function getValue();
    function returnValue();
}


class SV implements SinhVien,HocSinh,SinhVien2{
    function __construct(){
        echo "__construct";
    }
    function getValue(){
        echo 12345;
    }

    function returnValue(){
        return 9876543;
    }
    function __destruct(){
        echo 123;
    }

}


$sv = new SV;
echo $sv->getValue();
?>