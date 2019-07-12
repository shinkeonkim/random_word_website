<?php
    $sql = "SELECT COUNT(*) FROM `word`";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result); 
    $cnt = $row[0];

    echo "현재까지 추가된 단어의 개수는 ".(string)$cnt."개입니다.";
?>