<?php

define('DB_HOST', 'mysql');
define('DB_NAME', 'sample');
define('DB_USER', 'testuser');
define('DB_PASS', 'password');
define('DB_CHARSET', 'utf8');
define('HTML_CHARACTER_SET', 'UTF-8');
define('DSN' , 'mysql:dbname='.DB_NAME.';host='.DB_HOST.';charset='.DB_CHARSET);

define('IMG_DIR', './assets/img/');
define('ALPHANUMERIC_REGEX' , '/\A[0-9a-zA-Z]+\z/');
define('LOGIN_JUMP' , 'Location: /login.php');
define('REGISTER_JUMP' , 'Location: /register.php');
define('MYPAGE_JUMP' , 'Location: /mypage.php');
define('COME_JUMP' , 'Location: /come.php');
define('QUICK_COMPLETE_JUMP','Location: /quick_complete.php');