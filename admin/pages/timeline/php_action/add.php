<?php

    include "../../../db_connect.php";

    if($_POST) {
        $judul = $_POST['judul'];
        $teks = $_POST['artikel'];
        
        $photo_size = $_FILES['file']['size'];
        $photo_loc = $_FILES['file']['tmp_name'];
        $photo_name = $_FILES['file']['name'];
        $photo_type = $_FILES['file']['type'];
        
        $image = time().'-'.$photo_name.'';
        $path = "../../../images/timeline/".$image;

        if($photo_type == "image/jpg" || $photo_type == "image/png" || $photo_type == "image/jpeg"){
          if($photo_size <= 1000000){
              if(move_uploaded_file($photo_loc, $path)) {
                $sql = "INSERT INTO timeline (judul,teks, gambar) VALUES ('$judul','$teks','$image')";
      
              if($connect->query($sql) === TRUE){
                echo "<p>New Record Successfully Created!</p>";
                echo "<a href='../add_timeline.php'><button type='button'>Back</button></a>";
                echo "<a href='../index.php'><button type='button'>Home</button></a>";
              } else {
                echo "Error" .$sql.' '.$connect->connect_error;
                echo "Maaf, terjadi kesalahan saat mencoba menyimpan";
                echo "<br><a href='../add_timeline.php'>Kembali Ke Form</a>";
              }
            } else {
              echo "Maaf, gambar gagal untuk diupload.";
              echo "<br><a href='../add_timeline.php'>Kembali Ke Form</a>";
            }
          } else {
            echo "Maaf, ukuran gambar yang diupload tidak boleh lebih dari 1MB";
                  echo "<br><a href='../add_timeline.php'>Kembali Ke Form</a>";
          }
        } else {
          echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
          echo "<br><a href='../add_timeline.php'>Kembali Ke Form</a>";
          }
        
        $connect->close();

    }

?>