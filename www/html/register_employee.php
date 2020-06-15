<?php

$name = $_POST['name'];
$password = $_POST['passwd'];
$depertment = $_POST['depertment'];
$section = $_POST['section'];

$err_msg = isset_post_check($name,$password,$depertment,$section);

if(count($err_msg) === 0){
    $err_msg = length_err_check($name,$password);
    if(isset($err_msg) !== TRUE){
        if(value_check_regex($password) !== FALSE){
            register_db($db,$name,$password,$depertment,$section);
            $err_msg[] = '登録が完了しました。';
        }else{
            $err_msg[] = 'パスワードは半角英数で入力して下さい。';
        }
    }
}
