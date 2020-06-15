<?php

/**ログイン処理*/
  function login_matching_check($db,$name,$password){
    $err_msg = [];
    $sql = '
        SELECT * 
        FROM Employee 
        WHERE user_name = ?
        ';
        $deta = fetch_quary($db,$sql,array($name));
        if($deta !== FALSE ){
            if($deta['passwd'] === $password){                
                return TRUE;
            }else{
                $err_msg ='パスワードが間違っています';
            }
        }else{
        $err_msg ='名前が間違っています'; 
        }
    return $err_msg;
  }