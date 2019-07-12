<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="../style.css">
    </head>

    <body>
        <div class = "site-main">
            <?php include '../head.php'; ?>
            <div class = "site-content">
                <?php
                    $item = 10;
                    $start = 0;
                    include '../server_init.php';
                    $sql="SELECT * from `word` order by `created_at` desc limit $item OFFSET $start;";
                    $result = mysqli_query($conn,$sql);
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo $row['created_at'].$row['word_str'];
                        echo "<br>";
                    }
                ?>
            </div>
            <div class ="site-tail">
                <?php include '../tail.php';?>
            </div>     
        </div>
    </body>
</html>


