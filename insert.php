<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="file" name="file1">
        <input type="file" name="file2">
        <input type="file" name="file3">
        <input type="text" name="name">
        <input type="text" name="storage">
        <input type="text" name="processor">
        <input type="text" name="ram">
        <input type="text" name="price">
        <button name="submit">submit</button>
    </form>
</body>

</html>



<?php
include 'connection.php';
if (isset($_POST['submit'])) {
    $filename = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];
    $folder = "upload/" . $filename;
    move_uploaded_file($temp, $folder);

    $filename1 = $_FILES['file1']['name'];
    $temp1 = $_FILES['file1']['tmp_name'];
    $folder1 = "upload/" . $filename1;
    move_uploaded_file($temp1, $folder1);

    $filename2 = $_FILES['file2']['name'];
    $temp2 = $_FILES['file2']['tmp_name'];
    $folder2 = "upload/" . $filename2;
    move_uploaded_file($temp2, $folder2);

    $filename3 = $_FILES['file3']['name'];
    $temp3 = $_FILES['file3']['tmp_name'];
    $folder3 = "upload/" . $filename3;
    move_uploaded_file($temp3, $folder3);

    $name = $_POST['name'];
    $storage = $_POST['storage'];
    $processor = $_POST['processor'];
    $ram = $_POST['ram'];
    $price = $_POST['price'];

    $insert = "INSERT INTO `record`(`file`, `file1`, `file2`, `file3`, `name`, `storage`, `processor`, `ram`, `price`) VALUES ('$filename','$filename1','$filename2','$filename3','$name','$storage','$processor','$ram','$price')";

    $query = mysqli_query($con, $insert);


}

?>