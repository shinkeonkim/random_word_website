<?php
    /*include 'server_init.php';
    $url = "https://ko.wiktionary.org/wiki/%EB%B6%80%EB%A1%9D:%EC%9E%90%EC%A3%BC_%EC%93%B0%EC%9D%B4%EB%8A%94_%ED%95%9C%EA%B5%AD%EC%96%B4_%EB%82%B1%EB%A7%90_5800";
    $html = file_get_contents($url);
    if ($html !== false) 
    {
        $html = str_get_html($html);
    }

    $word_list = array();
    $error_word_list = array();

    foreach($html->find('table[class=prettytable]',0)->find('a') as $element)
    {
        $word = $element;
        $created_at = date("Y-m-d H:i:s");
        
        $sql="SELECT * from `word` where word_str= '{$word}';";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if(empty($row))
        {
            $sql =  "INSERT INTO `word` (`word_str`,`created_at`) VALUES ('$word', '$created_at')";
            $result = mysqli_query($conn,$sql);
        
            if(!$result) {

                array_push($error_word_list,$word);
            }
            else {
                array_push($word_list,$word);
            }    
        }
   
    }
    echo "에러가 발생한 단어: ";
    print_r($error_word_list)
    */  
?>