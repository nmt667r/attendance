<?php

function logout(){
  $session_name = session_name();
        $_SESSION = array();
        if (isset($_COOKIE[$session_name])) {
          $params = session_get_cookie_params();
          setcookie($session_name, '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
          );
        }
        session_destroy();
}

function stamping_error_check($db){
  $stamp = '';
  $sql = '
    SELECT * 
        FROM come
        WHERE user_id=? AND month=? AND day=?
    ';
  $stamp = fetch_quary($db,$sql,array($_SESSION['user_id'],date('m'),date('d')));
  if($stamp === FALSE){
    return TRUE;
  }else{
    return FALSE;
  }
}

function link_hidden($str,$text,$link){
  
  if($str !== FALSE){
    print "<div class='header_nav hidden'>{$text}済み</div>";
  }else{
    print "<div class='header_nav'><a href={$link}>{$text}</a></div>";
  }
}

function already_stamping_check($db,$stamping_type){
  if($stamping_type === 'come'){
    $sql = '
    SELECT * 
        FROM come
        WHERE user_id=? AND month=? AND day=?
    ';
  }else if($stamping_type === 'left'){
    $sql = '
    SELECT * 
        FROM lefttime
        WHERE user_id=? AND month=? AND day=?
    ';
  }
  $stamping = fetch_quary($db,$sql,array($_SESSION['user_id'],date('m'),date('d')));
  if(isset($stamping)=== TRUE){
    return $stamping;
  }
}

function time_rimit_check($time){
//$timeは'xxxx'形式　例→time_rimit_check(0800);
  if($time >= date('Hi')){
    return TRUE;
  }else{
    return FALSE;
  }
}