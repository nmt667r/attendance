<?php

function get_db_connect(){
    // MySQL用のDSN文字列
    $dsn = 'mysql:dbname='. DB_NAME .';host='. DB_HOST .';charset='.DB_CHARSET;
   
    try {
      // データベースに接続
      $db = new PDO($dsn, DB_USER, DB_PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4'));
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
      exit('接続できませんでした。理由：'.$e->getMessage() );
    }
    return $db;
  }

function fetch_quary($db,$sql,$params = array()){
    try{
        $stmt = $db->prepare($sql); 
        $stmt ->execute($params);
        return $stmt->fetch();
    }catch(PDOException $e){
        exit('接続できませんでした。理由：'.$e->getMessage() );
    }
}

function fetch_all_quary($db,$sql,$params = array()){
    try{
        $stmt = $db->prepare($sql); 
        $stmt ->execute($params);
        return $stmt->fetchAll();
    }catch(PDOException $e){
        exit('接続できませんでした。理由：'.$e->getMessage() );
    }
}
