<?php
function ValidatePhoneNumber($str){
    $regex='/^\([0-9]{2}\)+-\([0]{1}[0-9]{9}\)$/';
    if(preg_match($regex,$str)){
        echo "So dien thoai la hop le";
    }else{
        echo "Vui long nhap lai";
    }
}
ValidatePhoneNumber('(84)-(0978489648)');
echo "<br>";
ValidatePhoneNumber('(a8)-(22222222)');