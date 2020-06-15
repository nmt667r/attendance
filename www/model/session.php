<?php

/**ログイン済みの場合勤怠登録画面に飛ばす(管理者は勤怠管理管理ページ)*/
    function already_login_check(){
        if(isset($_SESSION['user_id']) === TRUE){
        header(MYPAGE_JUMP);
        exit;
        }
    }

/**未ログインの場合にログイン画面に飛ばす*/
    function not_login_check(){
        if(isset($_SESSION['user_id']) !== TRUE){
        header(LOGIN_JUMP);
        exit;
        }
    }

/**ユーザー情報をセッション変数に格納*/
    function get_session($db,$name,$password){
        $_SESSION['user_name'] = $name;
            $sql = '
            SELECT * 
            FROM Employee 
            WHERE user_name = ? AND passwd = ?';
            $user_date = fetch_quary($db,$sql,array($name,$password));
        $_SESSION['user_id']   = $user_date['user_id'];
    }  
    
?>