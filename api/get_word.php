<?php
    include_once('../server_init.php');
    //$name = $_POST['name'];
    $sql = "SELECT COUNT(*) FROM `word`";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result); 
    $cnt = $row[0];
    $str = "";

    for ($i = 0; $i < 5; $i++) {
        $word_id = mt_rand(1,$cnt);
        $sql="SELECT * from `word` where word_id= '{$word_id}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result); 
        $str = $str.$row['word_str'];
        if($i<4) {
            $str=$str."/";
        }
    }
?>