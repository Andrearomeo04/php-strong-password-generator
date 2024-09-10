<?php 
function randomPassword($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_=+[]{}|;:,.<>?';
    $password ='';
    $charlen = strlen($chars);

    while (strlen($password) < $_GET['length']) {
        $password .= $chars[rand(0, $charlen - 1)];

    }

    return $password;

}
?>