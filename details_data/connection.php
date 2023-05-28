<?php

//connection information

$hostname = "localhost";
$username = "root";
$password = "";
$database = "details_data";

$conn = mysqli_connect($hostname, $username, $password, $database);

//connection check

if (!$conn) {
    echo "not connected" . mysqli_connect_error();
}


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];

//insert data

if (isset($_POST['submit'])) {
    $add = "INSERT INTO `details_data`( `name`, `email`, `mobile`) VALUES ('$name','$email','$mobile')";
    if (mysqli_query($conn, $add)) {
        echo 'Data Inserted';
    } else {
        echo 'Data Not Inserted';
    }
}

// delete data

if (isset($_POST['delete'])) {
    $delete = "DELETE FROM `details_data` WHERE `id`='$id'";
    if (mysqli_query($conn, $delete)) {
        echo 'Data Delete';
    } else {
        echo 'Data Not Delete';
    }
}

// show data

if (isset($_POST['show'])) {
    $show = "SELECT * FROM `details_data` WHERE `id`='$id'";
    $b = mysqli_query($conn, $show);
    for ($i=0;mysqli_num_rows($b)>$i;$i++){
        $a = mysqli_fetch_array($b);
        echo $a['id'];
        echo $a['name'];
        echo $a['email'];
        echo $a['mobile'];
    }
}

// update data

if(isset($_POST['update'])){
    $update="UPDATE `details_data` SET `id`='$id',`name`='$name',`email`='$email',`mobile`='$mobile' WHERE `id`='$id'";
    if(mysqli_query($conn,$update)){
    echo 'Data Updated';
    }
    else{
        echo 'Data Not Updated';
    }
}