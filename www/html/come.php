<?php

require_once '../model/common.php';
require_once '../model/quick_come.php';
not_login_check();


if(send_get_check('come') === TRUE){
    $time= date('Hi');
    require_once './come_stamping.php';
    header(LOGIN_JUMP);
    exit;
}

if(send_get_check('quick_come') === TRUE){
    $time = '0800';     
    require_once './come_stamping.php';
    header(REGISTER_JUMP);
    exit;
}

include_once '../view/come_view.php';
