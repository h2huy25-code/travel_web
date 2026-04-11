<?php
include "../config.php";

if($_SESSION['role']!="1"){
die("Không có quyền");
}
?>

<h2>Trang Admin</h2>

<a href="users.php">Quản lý user</a>
<br>
<a href="add_tour.php">Thêm tour</a>