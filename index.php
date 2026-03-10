<?php
$nothing = "<h1 style='color: red'>Nothing</h1>";
$to ="<h2 style='color: orange'>to</h2>";
$see ="<h3 style='color: green'>see</h3>";
$here ="<h4 style='color: purple'>here.</h4>";   

$color = 'blue' ;

$text = "<h1 style='color:$color'>";    
// . == +  "" 사용해서 . 연산자 필요없음.
$text .= "Nothing to see here.";  // (.=) 연결 할당 연산자 새로운 텍스트 추가
$text .= "</h1>";
//변수에 대입이 계속돼서 안보였던거임 결합하고 싶으면  '.='하면됨 문자열 결합 연산자

echo $text;    
echo $nothing.$to.$see.$here; 
//<h>태그는 줄바꿈이라 띄어쓰기 필요없음.  
//나중에 <p> 더할때는 "' '." 해줘야함
// Nothing to see here. 주석 처리시 로컬호스트에서 디렉토리 못보게 하는 거임
/* echo > PHP의 출력문 함수 */
//$변수 선언
?>
<!DOCTYPE html>
<hyml>
    <head>
        <title>😊Aaron's PHP Pafe</title>
    </head>
    <body>
        <h1 style="font-size: 48pt">
            Nothing to see here!
            <?=$text?>
        </h1>
    </body>
</hyml>
