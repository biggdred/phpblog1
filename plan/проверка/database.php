<?php
/**

 * define('MYSQL_SERVER', 'localhost');
 * define('MYSQL_USER', 'root');
 * define('MYSQL_PASSWORD', '');
 * define('MYSQL_DB', 'blog');

 * //подключение
 * function db_connect(){
 *     $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB );
 *     or die("Error: " . mysqli_error($link)); //=======sintaxis error
 *     
 *     if(! mysqli_set_charset($link, "utf8")){
 *         printf("Error: " . mysqli_error($link));
 *     }
 *     
 *     return $link;
 * }
 */




      define('MYSQL_SERVER', 'localhost');
      define('MYSQL_USER', 'root');
      define('MYSQL_PASSWORD', '');
      define('MYSQL_DB', 'blog');
     
//подключаемся к базе
      function db_connect(){
          $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
              //соединение не установленно, выводится ошибка
              or die("Error: " . mysqli_error($link));
          //выставляем рабочую кодировку
          if(! mysqli_set_charset($link, "utf8")){
              //если что то не так выводим ошибку
              printf("Error: " . mysqli_error($link));
          }
          //если все прошло успешно то возвращает созданный дескриптор ($link)
          return $link;
      }
 

























