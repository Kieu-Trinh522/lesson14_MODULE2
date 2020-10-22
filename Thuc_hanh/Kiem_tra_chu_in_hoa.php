<?php
function isFirstLetterUpperCase($str){
    $regexp='/^[A-Z]/';
    if(preg_match($regexp,$str)){
        echo "String's first character is uppercase";
    }else{
        echo "String's first character is not uppercase";
    }
}
isFirstLetterUpperCase('dam kieu trinh');
echo "<pre>";
isFirstLetterUpperCase('DAM KIEU TRINH');
echo "<pre>";
isFirstLetterUpperCase('Dam Kieu Trinh');