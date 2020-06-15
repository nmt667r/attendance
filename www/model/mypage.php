<?php

function already_come_check($db,$stam_type,$text){
    if(already_stamping_check($db,$stam_type) === FALSE){?>
        <div>本日はまだ<?php print $text ?>打刻されていません</div>
    <?php }else{ ?>
        <div><?php print $text ?>打刻済みです。</div>
    <?php }
}

function get_stamping_record($db){
    $sql='
    SELECT
        day, 
        cometime,
        lefttime
    FROM come FULL OUTER JOIN lefttime
    ON come.user_id = lefttime.user_id
    WHERE user_id = ?
    ';
return fetch_quary($db,$sql,array($_SESSION['user_id'])); 
}

/**
 * 内部結合
SELECT
come.month,
come.day,		
come.cometime,
lefttime.lefttime
FROM come 
INNER JOIN lefttime
ON come.user_id = lefttime.user_id AND come.day = lefttime.day AND come.month = lefttime.month
WHERE come.user_id = 21
*/

