<?php

require_once '../model/common.php';
not_login_check();


if(send_get_check('left') === TRUE){
    
    require_once './left_stamping.php';
}

include_once '../view/left_view.php';
