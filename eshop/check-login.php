<?php
require_once ('config.php');
$secretPassword = 'Yakub';

if ($_POST['password'] == $secretPassword) {
    $_SESSION['login'] = 'on';
    header('Location: admin.php');
} else {
    header('Location: index.php');
}