<?php
define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'blog');

function db_connect(){
    //link - дескриптор соелинения
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        //если соединение не произошло
        or die("Error: " . mysqli_error($link));
    //устанавливаем кодировку
    if(! mysqli_set_charset($link, "utf8")){
        printf("Eror: " . mysqli_error($link));
    }
    return $link;
}


