<?php
/*   
выводим необходимую информацию по статье
*/

//подключаем базу
require_once("database.php") ;

require_once("models/articles.php");

//соединение с базой
$link = db_connect();
    
$article = articles_get($link, $_GET['id']);
//$link -дескриптор соединения

include("views/article.php");
