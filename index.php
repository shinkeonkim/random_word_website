<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="style.css">
        <title> Grepp 인턴들만의 툴</title>
    </head>

    <body>
        <?php include 'server_init.php'; ?>
        <div class = "site-main">
            <?php include 'head.php'; ?>
            <div class = "site-content">
                <div class = "content-set">
                    <div class = "content-name">
                        <h5> 1. 랜덤 단어 보기 <h5>
                    </div>

                    <div class = "content-main">
                        <form action = "api/see_word.php">
                            <button class = "btn-1"> 단어 보기! </button>
                        </form> 
                    </div>
                </div>
                
                <div class = "content-set">
                    <div class = "content-name"> 
                        <h5> 2. 최근 추가된 단어 보기 </h5>
                    </div>
                    
                    <div class = "content-main">
                        <form action = "api/see_recent_word.php">
                            <button class = "btn-1"> 최근 추가 단어 보기 </button>
                        </form>
                    </div>
                </div>
                <!--
                <div class = "content-set">
                    <div class = "content-name">
                        <h5> 3. 랜덤 단어 추가<h5>
                    </div>

                    <div class = "content-main">
                        <form class = "content-set" name="add_word" method = "POST" action = "api/add_word.php">
                            <input type="text" name = "word" maxlength = "20">
                            <button class = "btn-1"> 단어 추가! </button>
                        </form> 
                    </div>
                </div>
                -->
            </div>
            <div class ="site-tail">
                <?php 
                include 'server_init.php';
                include 'tail.php';
                ?>
            </div>
        </div>
    </body>
</html>