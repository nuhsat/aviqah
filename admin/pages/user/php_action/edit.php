<?php

    include "../../../db_connect.php";

    if($_POST) {
      
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      
      if($_POST['password'] && $_POST['passwordnew']){
        $password = md5($password);
        $cek = "SELECT nama_user FROM user WHERE id_user='$id' AND password_user='$password'";   
        if($connect->query($cek) === TRUE){
          $sql = "UPDATE user SET nama_user = '$nama', email_user = '$email', password_user = '$password' WHERE id_user = {$id}";
          if($connect->query($sql) === TRUE){
            echo "<p>New Record Successfully Created!</p>";
            echo "<br><a href='../edit_user.php?id=".$id."'>Kembali Ke Form</a>";
            echo "<a href='../index.php'><button type='button'>Home</button></a>";
          } else {
            echo "Error" .$sql.' '.$connect->connect_error;
            echo "Maaf, terjadi kesalahan saat mencoba menyimpan";
            echo "<br><a href='../edit_user.php?id=".$id."'>Kembali Ke Form</a>";
          }
        } else {
          echo "Maaf, Password salah";
          echo "<br><a href='../edit_user.php?id=".$id."'>Kembali Ke Form</a>";
        }
      }
      else{
        $sql = "UPDATE user SET nama_user = '$nama', email_user = '$email' WHERE id_user = {$id}";
      
        if($connect->query($sql) === TRUE){
          echo "<p>New Record Successfully Created!</p>";
          echo "<br><a href='../edit_user.php?id=".$id."'>Kembali Ke Form</a>";
          echo "<a href='../index.php'><button type='button'>Home</button></a>";
        } else {
          echo "Error" .$sql.' '.$connect->connect_error;
          echo "Maaf, terjadi kesalahan saat mencoba menyimpan";
          echo "<br><a href='../edit_user.php?id=".$id."'>Kembali Ke Form</a>";
        }
      }      
        $connect->close();
    }

?>