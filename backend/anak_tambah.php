<?php

    include 'db_connect.php';
    $id=$_GET['id_user'];
  

    $postdata = file_get_contents("php://input");
    $nama = "";


    if (isset($postdata)) {
        $request = json_decode($postdata);
        $nama = $request->nama;

            $query = mysqli_query($connect,"INSERT INTO anak_user (id_user, nama_anak) VALUES ('$id', '$nama') ");
            
           if($query){
        
                $data =array(
                    'message' => "Tambah anak Success!",
                    'status' => "200"
                );
            }
            else {
                $data =array(
                    'message' => "Tambah anak Failed!",
                    'status' => "404"
                ); 
            }
        echo json_encode($data);
    }
?>
