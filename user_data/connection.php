<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "crud_data";

$con = mysqli_connect($host, $user, $password, $database);

$id = $_POST['id'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$city = $_POST['city'];

//insert
if (isset($_POST['submit'])) {
    $insert = "INSERT INTO `user_data`(`id`, `name`, `mobile`, `gender`, `city`) VALUES ('$id','$name','$mobile','$gender','$city')";
    mysqli_query($con, $insert);
}

//update
if (isset($_POST['update'])) {
    $update = "UPDATE `user_data` SET `id`='$id',`name`='$name',`mobile`='$mobile',`gender`='$gender',`city`='$city' WHERE `id`='$id'";
    mysqli_query($con, $update);
}

//delete
if (isset($_POST['delete'])) {
    $delete = "DELETE FROM `user_data` WHERE `id`='$id'";
    mysqli_query($con, $delete);
}

//show

if (isset($_POST['show'])) {
    $show = "SELECT * FROM `user_data`";
    mysqli_query($con, $show);
}
?>

<html>
    <body>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <td>Mobile</td>
                <td>Gender</td>
                <td>City</td>
            </tr>
            <?php
            //show


            $show = "SELECT * FROM `user_data`";
            $data = mysqli_query($con, $show);

            while ($result = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $result['id']; ?></td>
                    <td><?php echo $result['name']; ?></td>
                    <td><?php echo $result['mobile']; ?></td>
                    <td><?php echo $result['gender']; ?></td>
                    <td><?php echo $result['city']; ?></td>


                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>