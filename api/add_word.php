<?php
    include_once('../server_init.php');
    $word = $_POST['word'];
    $created_at = date("Y-m-d H:i:s");
    
    $sql="SELECT * from `word` where word_str= '{$word}';";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if(!empty($row))
    {
        echo("<script>location.href='push/addword_1.html';</script>");
    }
    else
    {
        $sql =  "INSERT INTO `word` (`word_str`,`created_at`) VALUES ('$word', '$created_at')";
        $result = mysqli_query($conn,$sql);
    
        if(!$result) {
            echo("<script>location.href='push/addword_2.html';</script>");
        }
        else {
            echo("<script>location.href='push/addword_3.html';</script>");
        }    
    }

    
?>