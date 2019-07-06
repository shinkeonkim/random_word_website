<html>
    <head>
        <link rel = "stylesheet" type = "text/css" href="style.css">
        <title> 랜덤 단어 생성기</title>
    </head>

    <body>
        <div class = "site">
            <div id = "title">
                <hr width=70%>
                <h1> 랜덤 단어 생성기</h1>
                <hr width=70%>
            </div>

            <div id = "describe">
                <h4> 창작 활동을 할 때, 아이디어가 떠오르게 도와줍니다! </h4>
                <h5> 제작자: 국민대학교 19학번 김신건 </h5>
                <?php include_once('api/see_word_cnt.php'); ?>
                <hr width=70%>
            </div>
        </div>

        <div id = "subject">
            <div id = "name">
                <h5> 랜덤 단어 보기 <h5>
            </div>

            <div id = "content">
                <form name="seed" method = "POST" action = "api/see_word.php">
                    <!--<input type="text" name = "name" placeholder = "당신의 이름을 입력해주세요.">-->
                    <button> 단어 보기! </button>
                    <h5> 랜덤 단어는 시간마다 달라집니다. </h5>
                </form> 
            </div>

            <div id = "name"> 
                <h5> 최근 추가된 단어 보기 </h5>
            </div>
            
            <div id = "content">
                <form name="seed" method = "POST" action = "api/see_recent_word.php">
                    <button> 최근 추가 단어 보기 </button>
            </div>

            <div id = "name">
                <h5> 랜덤 단어 추가<h5>
            </div>

            <div id = "content">
                <form name="add_word" method = "POST" action = "api/add_word.php">
                    <input type="text" name = "word" maxlength = "20">
                    <button> 단어 추가! </button>
                </form> 
            </div>
        </div>  

    </body>
</html>