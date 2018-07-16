<?php
    include "../../../db_connect.php";

        if($_GET) {
        $id = $_GET['id'];


        $sql = "DELETE FROM timeline WHERE id_timeline = {$id}";
        if($connect->query($sql) === TRUE) {
            $sql2 = "SELECT gambar FROM timeline WHERE id_timeline = {$id}";
            $result = $connect->query($sql2);
            $row = $result->fetch_assoc();
            $path="../../../images/timeline/".$row['gambar']."";
            unlink($path);
            echo "<p>Successfully removed!</p>";
            echo "<a href='../index.php'><button type='button'>Back</button></a>";
        } else {
            echo "Error updating record : ".$connect->error;
        }
        $connect->close();
        }
 ?>
