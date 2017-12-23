<?php

//echo rand(100000,999999);
$arr = ['PHP','iOS','Android','NodeJS','Angular','React','Front-end'];
//echo $arr[1]; //7
//echo $arr[rand(0,count($arr)-1)];


//echo $str[61];

function createToken($length){
    $str = "ZXCVBNMASDFGHJKLQWERTYUIOPqwertyuiopasdfghjklzxcvbnm1234567890";
    $token = '';
    for($i=1;$i<=$length;$i++){
        $pos = rand(0,strlen($str)-1);
        $token.=$str[$pos];
    }
    return $token;
}

echo createToken(35);

//CE3lx7hQtsytFXAhlLl2Twk2wEpfd7
//p8qHGkMZAg3ce4kuXICmRbKsoF8yibQn4Ln

?>