<?php

    include "../../../db_connect.php";

    if($_POST) {
      
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $superadmin = $_POST['superadmin'];
      
      if($_POST['password'] && $_POST['passwordnew']){
        $password = md5($password);
        $cek = "SELECT nama_admin FROM admin WHERE id_admin='$id' AND password_admin='$password'";   
        if($connect->query($cek) === TRUE){
          $sql = "UPDATE admin SET nama_admin = '$nama', email_admin = '$email', password_admin = '$password', super_admin = '$superadmin' WHERE id_admin = {$id}";
          if($connect->query($sql) === TRUE){
            echo "<p>New Record Successfully Created!</p>";
            echo "<br><a href='../edit_admin.php?id=".$id."'>Kembali Ke Form</a>";
            echo "<a href='../index.php'><button type='button'>Home</button></a>";
          } else {
            echo "Error" .$sql.' '.$connect->connect_error;
            echo "Maaf, terjadi kesalahan saat mencoba menyimpan";
            echo "<br><a href='../edit_admin.php?id=".$id."'>Kembali Ke Form</a>";
          }
        } else {
          echo "Maaf, Password salah";
          echo "<br><a href='../edit_admin.php?id=".$id."'>Kembali Ke Form</a>";
        }
      }
      else{
        $sql = "UPDATE admin SET nama_admin = '$nama', email_admin = '$email', super_admin = '$superadmin' WHERE id_admin = {$id}";
      
        if($connect->query($sql) === TRUE){
          echo "<p>New Record Successfully Created!</p>";
          echo "<br><a href='../edit_admin.php?id=".$id."'>Kembali Ke Form</a>";
          echo "<a href='../index.php'><button type='button'>Home</button></a>";
        } else {
          echo "Error" .$sql.' '.$connect->connect_error;
          echo "Maaf, terjadi kesalahan saat mencoba menyimpan";
          echo "<br><a href='../edit_admin.php?id=".$id."'>Kembali Ke Form</a>";
        }
      }      
        $connect->close();
    }

?>