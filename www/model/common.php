<?php 
require_once '../conf/const.php';
require_once '../model/db.php';
require_once '../model/session.php';
require_once '../model/function.php';

session_start();
$db = get_db_connect();
get_local_model();

function require_head_common($title){
    print "<meta charset='utf-8'>";
    print "<title>{$title}</title>";
    print "<link rel='stylesheet' href='./css/html5reset-1.6.1.css'>";
    print "<link rel='stylesheet' href='./assets/css/template.css'>";
    get_local_css();
}

function get_local_css(){
    $file_name = get_own_informetion();
    if(file_exists('./assets/css/'.$file_name.'.css')){
        print "<link rel='stylesheet' href='./assets/css/{$file_name}.css'>";
    }
}

function get_own_informetion(){
    $own_directory = explode('/',$_SERVER['PHP_SELF']);
    $own_file_name = explode('.',$own_directory[count($own_directory)-1]);
    return $own_file_name[0];
}

function get_local_model(){
    $file_name = get_own_informetion();
    if(file_exists('../model/'.$file_name.'.php')){
        require_once '../model/'.$file_name.'.php';
    }
}

function h($str){
  return htmlspecialchars($str,ENT_QUOTES,'UTF-8');
}


function get_token(){
  $token = get_random_string();
  set_session('token', $token);
  return $token;
}

function token_check($str){
  if($_SESSION['token'] !== $str){
    header('Location: ./index.php');
    exit;
  }
}

function send_post_check($post_type){
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if($_POST['post_type'] === $post_type){
      return TRUE;
    }
  }
}

function send_get_check($get_type){
  if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if($_GET['get_type'] === $get_type){
      return TRUE;
    }
  }
}