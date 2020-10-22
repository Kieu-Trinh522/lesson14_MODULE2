<?php
function checkMail($str){
    $regexp= '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if(preg_match($regexp,$str)){
        echo "Mail hop le";
    }else{
        echo "Mail khong hop le";
    }
}
checkMail('Damkieutrinh522@gmail.com');
echo "<pre>";
checkMail('#damkieutrinh522@gmail.com');
echo "<pre>";
checkMail('@gmail.com');
