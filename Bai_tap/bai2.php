<?php
function ValidateAccount($str){
    $regexp='/^[_a-z0-9]{6,}$/';
    if(preg_match($regexp,$str)){
        echo "account hợp lệ";
    }else{
        echo "account không hợp lệ";
    }
}
ValidateAccount('123abc_');
echo '<pre>';
ValidateAccount('_abc123');
echo '<pre>';
ValidateAccount('abcdefg');
echo '<pre>';
ValidateAccount('12345');