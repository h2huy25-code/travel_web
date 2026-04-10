<?php include "config.php"; ?>

<form method="post">
<h2>Sign up</h2>

<input type="text" name="username" placeholder="username" required>
<br><br>

<input type="password" name="password" placeholder="password" required>
<br><br>

<button name="signup">Đăng ký</button>
</form>

<?php
if(isset($_POST['signup'])){

$user=$_POST['username'];
$pass=md5($_POST['password']);

$sql="INSERT INTO users(username,password) VALUES('$user','$pass')";
mysqli_query($conn,$sql);

echo "Tạo tài khoản thành công";
}
?>