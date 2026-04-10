<?php include "../config.php"; ?>

<h2>Thêm tour</h2>

<form method="post" enctype="multipart/form-data">

Tên tour:
<input type="text" name="name">

<br><br>

Mô tả:
<textarea name="description"></textarea>

<br><br>

Giá:
<input type="number" name="price">

<br><br>

Ảnh:
<input type="file" name="image">

<br><br>

<button name="add">Thêm</button>

</form>

<?php

if(isset($_POST['add'])){

$name=$_POST['name'];
$des=$_POST['description'];
$price=$_POST['price'];

$image=$_FILES['image']['name'];

move_uploaded_file($_FILES['image']['tmp_name'],"../uploads/".$image);

$sql="INSERT INTO tours(name,description,price,image)
VALUES('$name','$des','$price','$image')";

mysqli_query($conn,$sql);

echo "Thêm thành công";

}
?>