<?php
    $item = 10;
    $start = 0;
    include_once('../server_init.php');
    $sql="SELECT * from `word` order by `created_at` desc limit $item OFFSET $start;";
    $result = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_array($result))
    {
        echo $row['created_at'].$row['word_str'];
        echo "<br>";
    }
?>