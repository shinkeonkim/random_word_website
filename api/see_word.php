<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="style.css">
        <title> 단어 보기 </title>
    </head>

    <body>
        <?php
            include_once('get_word.php');
            echo "<div class = \"word_board\">".$str."</div>";
        ?>
    </body>
</html>