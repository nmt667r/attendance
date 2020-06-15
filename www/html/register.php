<?php

//設定読み込み
require_once '../model/common.php';
require_once '../model/definition.php';
$err_msg =[];

not_login_check();

if(send_post_check('register') === TRUE){
    require_once './register_employee.php';
}
$depertment_table = get_depertment_table();
$section_table = get_section_table();

include_once '../view/register_view.php';