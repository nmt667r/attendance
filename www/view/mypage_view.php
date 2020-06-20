<!DOCTYPE html>
<html lang="ja">
<head>
    <?php require_head_common('マイページ') ?>
</head>
<body>
    <?php include_once '../view/template/header.php' ?>
    <div class="center">
        <h2>ようこそ<?php echo h($_SESSION['user_name'])?>さん</h2>

        <?php already_come_check($db,'come','出勤')?>
        <?php already_come_check($db,'left','退勤')?>
</div>
</body>
</html>