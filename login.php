<?php include "config.php"; ?>

<form method="post">
<h2>Login</h2>

<input type="text" name="username" required>
<br><br>

<input type="password" name="password" required>
<br><br>

<button name="login">Login</button>
</form>

<?php

if(isset($_POST['login'])){

$user=$_POST['username'];
$pass=md5($_POST['password']);

$sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){

$row=mysqli_fetch_assoc($result);

$_SESSION['user']=$row['username'];
$_SESSION['role']=$row['role'];

header("location:index.php");

}else{
echo "Sai tài khoản";
}

}
?>