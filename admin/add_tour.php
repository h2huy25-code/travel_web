<?php include "../config.php"; ?>

<h2>Thêm tour</h2>

<form method="post" enctype="multipart/form-data">

Tên tour:
<input type="text" name="nametour">

<br><br>

Mô tả:
<textarea name="description"></textarea>

<br><br>

Giá:
<input type="number" name="price">

<br><br>

Ngày:
<textarea name="duration"></textarea>

<br><br>

Ảnh:
<input type="file" name="image">

<br><br>

<button name="add">Thêm</button>

</form>

<?php

if(isset($_POST['add'])){

$name=$_POST['nametour'];
$des=$_POST['description'];
$price=$_POST['price'];
$date=$_POST['duration'];
$image=$_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"../database/image/".$image);

$sql="INSERT INTO tb_tours (nametour,description,price,image,duration)
VALUES('$name','$des','$price','$image','$date')";

mysqli_query($conn,$sql);

echo "Thêm thành công";

}
?>