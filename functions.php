<?php
$newPassword = "";

function pwGenerator ($length) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-+=<>?';
    global $newPassword;

    $maxIndex = strlen($chars) - 1;

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $maxIndex);
        $newPassword .= $chars[$randomIndex];
    }

    return $newPassword;
 }
?>