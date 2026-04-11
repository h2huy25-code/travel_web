<?php include "../config.php"; ?>

<style>
.tour{
    border:1px solid #ccc;
    padding:10px;
    margin:10px;
    width:300px;
}
.tour img{
    width:100%;
    height:180px;
    object-fit:cover;
}

.list-tour {
    display: flex;
    flex-wrap: wrap; /* cho xuống dòng khi hết chỗ */
    gap: 20px;
}

.tour {
    width: 300px;
}
</style>

<h2>Danh sách tour</h2>

<?php

$sql="SELECT * FROM tb_tours";

$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){

?>

<div class="list-tour">


    <div class="tour">

    <h3><?php echo $row['nametour']; ?></h3>

    <img src="../database/image/<?php echo $row['image']; ?>"> 

    <p><?php echo $row['description']; ?></p>

    <p>Giá: <?php echo $row['price']; ?></p>

    <p>Ngày: <?php echo $row['duration']; ?></p>

    <a href="book.php?id=<?php echo $row['id']; ?>">Đặt tour</a>

    </div>

<?php
}
?>

</div>