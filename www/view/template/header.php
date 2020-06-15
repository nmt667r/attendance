<header>
    <link rel='stylesheet' href='./assets/css/header.css'>
    <div class="flex center">
        <?php if(isset($_SESSION['user_id']) === TRUE){
            $come = already_stamping_check($db,'come');
            $left = already_stamping_check($db,'left');
            ?>
            <div class='header_nav'><a href="register.php">新規登録</a></div>
            <div class='header_nav'><a href="mypage.php">マイページ</a></div>
            <?php link_hidden($come,'出勤','come.php') ?>
            <?php link_hidden($left,'退勤','left.php') ?>
            <div class='header_nav'><a href="logout.php">ログアウト</a></div>
            <div class='logo'>勤怠管理システム</div>
        <?php }else{?>        
            <div class='header_nav'><a href="login.php">ログイン</a></div>
            <div class='header_nav'><a href="quick_come.php">クイック出勤打刻</a></div>
            <div class='logo'>勤怠管理システム</div>
        <?php }?>           
    </div>
</header>
