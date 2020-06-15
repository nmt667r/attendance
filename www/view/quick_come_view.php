<!DOCTYPE html>
<html lang="ja">
<head>
    <?php require_head_common('クイック出勤打刻画面') ?>
</head>
<body>
    <?php include_once '../view/template/header.php' ?> 
    <div class="center">
        <h1>クイック出勤打刻</h1>
        <?php if(isset($err_msg) === TRUE){ ?>
            <div style="color:red"><?php echo $err_msg ?></div>
        <?php }?>
        <h2>クイック出勤打刻機能ではAM8時に打刻を行います。</h2>
        <?php quick_come_submit() ?>
    </div>
</body>
</html>