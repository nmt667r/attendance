<?php

//$_POSTに値が入力されているかチェック
function isset_post_check($name,$password,$depertment,$section){
    $name = name_space_delete($name);
    $password = name_space_delete($password);

    $err_msg[] = if_notset_str($name,'名前');
    $err_msg[] = if_notset_str($password,'パスワード');
    $err_msg[] = if_notset_str($depertment,'部門');
    $err_msg[] = if_notset_str($section,'課');
    $err_msg = array_filter($err_msg);
    return $err_msg;
}

//値が未入力の場合はエラーメッセージを返す。
function if_notset_str($str,$problem){
    if(mb_strlen($str) === 0){
        $err_msg = $problem."を入力してください";
        return $err_msg;
    }else{
        return false;
    }
}

//名前の長さチェック
function length_err_check($name,$password){
    $name = name_space_delete($name);
    if(mb_strlen($name) === 1){
        $err_msg[] = '名前は正しく入力して下さい。';
    }else if(mb_strlen($name) > 20){
        $err_msg[] = '名前が長すぎます。20文字以内の方しか登録できません...';
    }
    if(mb_strlen($password) >20 || mb_strlen($password) < 7){
        $err_msg[] = 'パスワードの長さが不適切です。8文字以上20文字以下でお願いします。';
    }
    return $err_msg;
}

//名前の空白を削除
function name_space_delete($name){
    $name = str_replace(array(" ", "　"), "", $name);
    return $name;
}

//パスワードの正規表現チェック
function value_check_regex($str){
    if(preg_match(ALPHANUMERIC_REGEX,$str) === 0){
        return FALSE;
    }
    return TRUE;        
}

//社員をDBに登録
function register_db($db,$name,$password,$depertment,$section){
    $sql ='
        INSERT INTO 
            Employee(
                user_name,
                passwd,
                depertment,
                section,
                class,
                created,
                updated
            )
        VALUE(?,?,?,?,1,now(),now())        
    ';
    return fetch_quary($db,$sql,array($name,$password,$depertment,$section));    
}