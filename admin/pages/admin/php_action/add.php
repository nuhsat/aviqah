<?php

    include "../../../db_connect.php";

    if($_POST) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $superadmin = $_POST['superadmin'];
    
        $password = md5($password);

        $sql = "INSERT INTO admin (nama_admin, email_admin, password_admin, super_admin) VALUES ('$nama','$email','$password', '$superadmin')";
      
        if($connect->query($sql) === TRUE){
          // header('Location: ../index.php');
          echo "<p>New Record Successfully Created!</p>";
            echo "<a href='../add_admin.php'><button type='button'>Back</button></a>";
                echo "<a href='../index.php'><button type='button'>Home</button></a>";
              } else {
                echo "Error" .$sql.' '.$connect->connect_error;
                echo "Maaf, terjadi kesalahan saat mencoba menyimpan";
                echo "<br><a href='../add_admin.php'>Kembali Ke Form</a>";
              }
            
        $connect->close();

    }

?>