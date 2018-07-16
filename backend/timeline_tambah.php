<?php

    include 'db_connect.php';
  

    $postdata = file_get_contents("php://input");
    $judul = "";


    if (isset($postdata)) {
        $request = json_decode($postdata);
        $judul  = $request->judul;
        $teks   = $request->teks;
        $img = $request->file;

        $fname = $judul."-".time();
        $img = str_replace('data:image/png;base64,', '', $img);
        $img = str_replace(' ', '+', $img);
        $img = base64_decode($img);
        $subFolder = "/images/patients";
        $dir = __DIR__ .$subFolder ; // Full Path
        is_dir($dir) || @mkdir($dir) || die("Can't Create folder");

        file_put_contents($dir . DIRECTORY_SEPARATOR . $fname.".jpg", $img);
        $imagePath = $subFolder."/".$fname.".jpg";

        $query = mysqli_quey($connect,"INSERT INTO timeline (judul, teks) VALUES ('$judul', '$teks') ");

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
