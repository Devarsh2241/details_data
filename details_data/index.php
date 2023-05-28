<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="connection.php" method="POST">
            <table border="5px">
                <tr>
                    <td>ID</td>
                    <td><input type="text" name="id">
                </tr>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name">
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email">
                </tr>
                <tr>
                    <td>Mobile</td>
                    <td><input type="text" name="mobile">
                </tr>
                <tr>
                <button type="submit" id="submit" name="submit">Submit</button>
                <button type="submit" id="delete" name="delete">Delete</button>
                <button type="submit" id="show" name="show">Show</button>
                <button type="submit" id="update" name="update">Update</button>
                </tr>

            </table>
        </form>
        <?php
        ?>
    </body>
</html>
