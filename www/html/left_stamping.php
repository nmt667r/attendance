<?php


    $sql='
    INSERT INTO
        lefttime(
            user_id,
            month,
            day,
            lefttime
        )
        VALUE(?,?,?,?)
            ';
   return fetch_quary($db,$sql,array($_SESSION['user_id'],date('m'),date('d'),date('Hi')));

?>