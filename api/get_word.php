<?php
    include '../server_init.php';
    $sql = "SELECT COUNT(*) FROM `word`";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result); 
    $cnt = $row[0];
    $str = "";
    $k = 0;
    for ($i = 0; $i < 5; $i++) {
        $word_id = mt_rand(1,$cnt);
        $sql="SELECT * from `word` where word_id= '{$word_id}'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result); 
        $db_word = $row['word_str'];
        $word = strip_tags($db_word);
        $k = $k + mb_strlen($word,'utf-8');
        if($k > 10)
        {
            $str = $str."<br>";
            $k = 0;
        }
        $str = $str.$word;
        if($i<4) {
            $str=$str."/";
        }
    }
?>