<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

if (preg_match('/iPhone|iPod|Android/', $userAgent)) {
    // Redirect hoặc thay đổi giao diện cho thiết bị di động
    header("Location: mobile.html");
    exit();
} elseif (preg_match('/iPad/', $userAgent)) {
    header("Location: table.html");
    exit();
} else {
    header("Location: desktop.html");
    exit();
}
?>
