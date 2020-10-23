<?php
function ClassName($str){
    $regex='/^[CAP]{1}[0-9]{4}[G-M]{1}$/';
    if(preg_match($regex,$str)){
        echo "Welcome to class";
    }else{
        echo "Khong tim thay lop hop le";
    }
}
ClassName('C0318G');
echo "<br>";
ClassName('C0820H1');