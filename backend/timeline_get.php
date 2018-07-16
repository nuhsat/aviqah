<?php

  include 'db_connect.php';

    $query = mysqli_query($connect, "SELECT * FROM timeline ");

    if(mysqli_num_rows($query)){        
        $result_set = array();
        while($result =mysqli_fetch_assoc($query)){
            $result_set[]=$result;
        }
        
        $data =array(
            'message' => "timeline ada",
            'data' => $result_set,
            'status' => "200"
        );
    }
    else{
        $data =array(
            'message' => "timeline gagal",
            'status' => "404"
        );

    }
      echo json_encode($data);
?>
