<?php
require_once 'init.php';

$user = new User;
if($user->isLoggedIn()) {
    echo "Hi, <a href='#'>{$user->data()->username}</a>";
    echo "<p><a href='logout.php'>Logout</a></p>";
    echo "<p><a href='update.php'>Update profile</a></p>";
} else {
    echo "<a href='login.php'>Login</a> or <a href='register.php'>Register</a>";
}
//setcookie('cookie', 'cookie', time() + 3600, '/');
echo(Config::get('cookie.cookie_expiry'));