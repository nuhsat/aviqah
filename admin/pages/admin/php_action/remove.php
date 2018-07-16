<?php
    include "../../../db_connect.php";

        if($_GET) {
        $id = $_GET['id'];


        $sql = "DELETE FROM admin WHERE id_admin = {$id}";
        if($connect->query($sql) === TRUE) {
            echo "<p>Successfully removed!</p>";
            echo "<a href='../index.php'><button type='button'>Back</button></a>";
        } else {
            echo "Error updating record : ".$connect->error;
        }
        $connect->close();
        }
 ?>
