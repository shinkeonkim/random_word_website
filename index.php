<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="style.css">
        <title> 랜덤 단어 생성기</title>
    </head>

    <body>
        <?php include 'server_init.php'; ?>
        <div class = "site-main">
            <?php include 'head.php'; ?>
            <div class = "site-content">
                <div class = "content-name">
                    <h5> 랜덤 단어 보기 <h5>
                </div>

                <div class = "content-main">
                    <form name="seed" method = "POST" action = "api/see_word.php">
                        <!--<input type="text" name = "name" placeholder = "당신의 이름을 입력해주세요.">-->
                        <button> 단어 보기! </button>
                        <h5> 랜덤 단어는 시간마다 달라집니다. </h5>
                    </form> 
                </div>

                <div class = "content-name"> 
                    <h5> 최근 추가된 단어 보기 </h5>
                </div>
                
                <div class = "content-main">
                    <form name="seed" method = "POST" action = "api/see_recent_word.php">
                        <button> 최근 추가 단어 보기 </button>
                    </form>
                </div>

                <div class = "content-name">
                    <h5> 랜덤 단어 추가<h5>
                </div>

                <div class = "content-main">
                    <form name="add_word" method = "POST" action = "api/add_word.php">
                        <input type="text" name = "word" maxlength = "20">
                        <button> 단어 추가! </button>
                    </form> 
                </div>
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