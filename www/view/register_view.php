<!DOCTYPE html>
<html lang="ja">
<head>
    <?php require_head_common('登録画面') ?>
</head>
<body>
    <?php include_once '../view/template/header.php' ?> 
    <div class="center">
        <h1>新規社員登録</h1>
        <?php foreach($err_msg as $err){ ?>
            <div style="color:red"><?php echo $err ?></div>
        <?php }?>
        <main>
            <form method="POST">
                <div>名前：<input type="text" name="name"></div>
                <div>ログインパスワード：<input type="password" name="passwd"></div>
                <div>部門： <select name="depertment">
                                <?php foreach ($depertment_table as $depertment_key => $depertment) { ?>
                                    <option value="<?php echo $depertment_key ?>"><?php echo $depertment ?></option>
                                <?php } ?>
                            </select>
                </div>
                <div>課　：<select name="section">
                                <?php foreach ($section_table as $section_key =>$section) { ?>
                                    <option value="<?php echo $section_key ?>"><?php echo $section ?></option>
                                <?php } ?>
                            </select>
                </div>
                <div><input type="submit" value="登録"></div>
                <input type="hidden" name="post_type" value="register">
                <input type="hidden" name="token" value="<?php //echo ($token) ?>">
            </form>
        </main>
    </div>
</body>
</html>