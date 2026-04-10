<?php include "config.php"; ?>
	<link rel="stylesheet" href="css/style.css">

	<div class="menu">
		<a href="index.php">Trang chủ</a>

<?php
if(isset($_SESSION['user'])){
	echo '<a href="user/tours.php">Tour</a>';
	echo '<a href="logout.php">Logout</a>';

	if($_SESSION['role']=="admin"){
		echo '<a href="admin/dashboard.php">Admin</a>';
	}

}else{
	echo '<a href="login.php">Login</a>';
	echo '<a href="signup.php">Sign up</a>';
}
?>
</div>

<div class="container">
<h2>Website du lịch</h2>
<p>Chào mừng bạn đến hệ thống đặt tour.</p>
</div>