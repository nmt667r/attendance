<?php

function quick_come_submit(){
    if(time_rimit_check('0800') === TRUE){ ?>
        <form method="post">
        <div>名前：    <input type="text" name="name"></div>
        <div>パスワード<input type="password" name="password"></div>
                       <input type="submit" value="クイック出勤打刻">
                       <input type="hidden" name="post_type" value="quick_come">
        </form>
    <?php }else{ ?>
        <div class="red">AM8:00以降はこの機能は使えません。</div>
    <?php } 
}

function brevity_quick_come(){
    if(time_rimit_check('0800') === TRUE){ ?>
        <form method="get">
                       <input type="submit" value="AM8:00に打刻予約">
                       <input type="hidden" name="get_type" value="quick_come">
        </form>
    <?php }else{ ?>
        <div class="red">AM8:00以降は打刻予約機能は使えません。</div>
    <?php }
}