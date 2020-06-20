<!DOCTYPE html>
<html lang="ja">
<head>
    <?php require_head_common('出社打刻') ?>
</head>

<body>
    <?php include_once '../view/template/header.php' ?>
    <div class="center">
        <?php if(isset($_SESSION['user_name']) ===TRUE){?>
            <div>ようこそ<?php echo h($_SESSION['user_name'])?>さん</div>
        <?php } ?>

        <form method="get">
            <input type="submit" value="現時刻で出勤打刻">
            <input type="hidden" name="get_type" value="come">
        </form>

        <?php brevity_quick_come() ?>
    </div>
    
</body>
</html>