<?php

    include "../../../db_connect.php";

    if($_POST) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        $password = md5($password);

        $sql = "INSERT INTO user (nama_user, email_user, password_user) VALUES ('$nama','$email','$password')";
      
        if($connect->query($sql) === TRUE){
          // header('Location: ../index.php');
          echo "<p>New Record Successfully Created!</p>";
            echo "<a href='../add_user.php'><button type='button'>Back</button></a>";
                echo "<a href='../index.php'><button type='button'>Home</button></a>";
              } else {
                echo "Error" .$sql.' '.$connect->connect_error;
                echo "Maaf, terjadi kesalahan saat mencoba menyimpan";
                echo "<br><a href='../add_user.php'>Kembali Ke Form</a>";
              }
            
        $connect->close();

    }

?>