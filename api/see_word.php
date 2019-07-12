<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="../style.css">
        <title> 단어 보기 </title>
    </head>

    <body>
        <div class="site-main">
            <?php include '../head.php';?>
            <div class = "site-content">
                <div class = "content_random-word">
                    <div id = "title">
                        랜덤 단어 5개 보기
                    </div>
                    
                    <div id = "content">
                        <?php
                            include 'get_word.php';
                            echo "<div class = \"content\">".$str."</div>";
                        ?>
                    </div>
                </div>
            </div>
            
            <div class ="site-tail">
                <?php
                    include '../server_init.php'; 
                    include '../tail.php';
                ?>
            </div>
        </div>
    </body>
</html>