<?php
// Require các thư viện PHP
require_once 'Session.php';
require_once 'Function.php';
require_once 'DB.php';

//Khai bao du lieu
// include 'data.php';

$_DOMAINS = 'http://localhost/tkb/';

// Khởi tạo session
$session = new Session();
$session->start();

// Kiểm tra session

if ($session->get() != '')
{
    $user = $session->get();
}
else
{
    $user = '';
}

// Nếu đăng nhập

if ($user)
{
    // Lấy dữ liệu tài khoản
      $data_user = $data;
}

?>
