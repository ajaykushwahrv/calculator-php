
^!1::
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\all-data\silver-category.php
Clipboard := fileContent
Send, ^v
return



^!2::
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\all-data\gold-category.php
Clipboard := fileContent
Send, ^v
return



^!3::
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\all-data\platinum-category.php
Clipboard := fileContent
Send, ^v
return



^!4::
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\all-data\all-cal.php
Clipboard := fileContent
Send, ^v
return


^!5:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\all-data\singal-cal.php
Clipboard := fileContent
Send, ^v
return


^!6::
Clipboard =
(
 calculator.php?tools=fund-performance
)
Send, ^v
return

^!7::
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\singal\fund-performance.php
Clipboard := fileContent
Send, ^v
return



^+1:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\singal\popular-news.php
Clipboard := fileContent
Send, ^v
return


^+2:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\singal\ipo-news.php
Clipboard := fileContent
Send, ^v
return



^+3:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\singal\market-news.php
Clipboard := fileContent
Send, ^v
return


^+4:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\singal\all-news.php
Clipboard := fileContent
Send, ^v
return


^+5:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\data\singal\tickers.php
Clipboard := fileContent
Send, ^v
return


^+6:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\script.html
Clipboard := fileContent
Send, ^v
return


^+7:: 
FileRead, fileContent, E:\xampp\htdocs\ajay-data\NEW-data\calculator\login-page.php
Clipboard := fileContent
Send, ^v
return




^#1::
Clipboard =
(
 justify-content-center
)
Send, ^v
return


^#2::
Clipboard :="
(
<link type=""text/css"" rel=""stylesheet"" href=""<?= $userinfo['base_url']; ?>/assets/css/calculator-style.css""/>
)"
Send, ^v
return

^#3::
Clipboard :="
(
<script src=""<?= $userinfo['base_url']; ?>/assets/js/jquery-3.6.0.min.js""></script>
)"
Send, ^v
return
