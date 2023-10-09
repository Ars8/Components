<?php
require_once 'init.php';

echo Session::flash('success');
$user = new User;
if($user->isLoggedIn()) {
    echo "Hi, <a href='#'>{$user->data()->username}</a>";
    echo "<p><a href='logout.php'>Logout</a></p>";
    echo "<p><a href='update.php'>Update profile</a></p>";
    echo "<p><a href='changepassword.php'>Change password</a></p>";

    if($user->hasPermissions('admin')) {
        echo "You are moderator";
    }
} else {
    echo "<a href='login.php'>Login</a> or <a href='register.php'>Register</a>";
}
//setcookie('cookie', 'cookie', time() + 3600, '/');
echo(Config::get('cookie.cookie_expiry'));