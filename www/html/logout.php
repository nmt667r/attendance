<?php
    
    require_once '../model/common.php';
    
    not_login_check();
    
    logout();
        
    //viewページ読み込み
    header(LOGIN_JUMP);
    exit;
?>