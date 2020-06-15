<?php


    $sql='
    INSERT INTO
        come(
            user_id,
            month,
            day,
            cometime
        )
        VALUE(?,?,?,?)
            ';
   return fetch_quary($db,$sql,array($_SESSION['user_id'],date('m'),date('d'),$time));

?>