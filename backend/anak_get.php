<?php

  include 'db_connect.php';
    $id=$_GET['id_user'];

    $query = mysqli_query($connect, "SELECT * FROM anak_user WHERE id_user='$id'");

    if(mysqli_num_rows($query)){        
        $result_set = array();
        while($result =mysqli_fetch_assoc($query)){
            $result_set[]=$result;
        }
        
        $data =array(
            'message' => "User punya anak",
            'data' => $result_set,
            'status' => "200"
        );
    }
    else{
        $data =array(
            'message' => "User belum ada anak",
            'status' => "404"
        );

    }
      echo json_encode($data);
?>
