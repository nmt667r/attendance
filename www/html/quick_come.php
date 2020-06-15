<?php 

require_once '../model/common.php';
require_once '../model/login.php';

already_login_check();

if(send_post_check('quick_come') === TRUE){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $err_msg = login_matching_check($db,$name,$password);
    if($err_msg === TRUE){        
        get_session($db,$name,$password);
        $stamp = stamping_error_check($db);
        if($stamp === TRUE){
            $time = '0800';     
            require_once './come_stamping.php';
            $err_msg = 'クイック打刻完了。';
        }else{
            $err_msg = '打刻済みです';
        }
        logout();
    }
}

include_once '../view/quick_come_view.php';