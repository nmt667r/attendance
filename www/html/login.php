<?php

//設定読み込み
require_once '../model/common.php';

already_login_check();

$err_msg = '';
$db = get_db_connect();
$name = $_POST['name'];
$password = $_POST['password'];

already_login_check();

if(send_post_check('login') === TRUE){
    $err_msg = login_matching_check($db,$name,$password);
    if($err_msg === TRUE){
        $err_msg = 'ログイン成功！';
        get_session($db,$name,$password);
        header(MYPAGE_JUMP);
        exit;
    }
}
include_once '../view/login_view.php';