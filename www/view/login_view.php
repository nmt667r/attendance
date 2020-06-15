<!DOCTYPE html>
<html lang="ja">
<head>
    <?php require_head_common('ログイン') ?>    
</head>
<body>    
    <?php include_once '../view/template/header.php' ?>
    <div class="center">
        <h1>ログイン</h1>
        <?php if(isset($err_msg) === TRUE){
            print $err_msg;
        }?>
        <form method="POST">
            <div>名前：    <input type="text" name="name"></div>
            <div>パスワード<input type="password" name="password"></div>
                        <input type="submit">
                        <input type="hidden" name="post_type" value="login">
        </form>
    </div>
</body>
</html>
