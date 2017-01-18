<?php
/**
для работы со статьями
*/
//вывод всех статей
function articles_all(){
    //запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    //sql запрос
    $result = mysqli_query($link, $query);
    
    //если произошла ошибка преостановить работу скрипта и вывести эту ошибку
    if(!$result)
        die(mysqli_error($link));
        
    //извлечение из базы
    $n = mysqli_num_rows($result);//количество строк которіе нам вернула база
    $articles = array();//создаем пустой массив
    
    //проходимся по каждой страке нашей таблиці
    for($i=0;$i<$n;$i++){
        //заводим в ассоциативній массив
        $row = mysqli_fetch_assoc($result);
        //добавляем ассоциативній массив в массив articles
        $articles[] = $row;
    }
    //возвращаем результат
    return $articles;

}
//получение конкретной статьи по id
function articles_get($link, $id_article){
    return  array(
        //запрос из таблицы где id = id_artcle
        //sprintf — Возвращает отформатированную строку
        //% - символ процента. Аргумент не используется.
        //d - аргумент трактуется как целое и выводится в виде десятичного числа со знаком.
         $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query($link, $query);

    //если запрос не выполнился
    if(! $result)
        die(mysqli_error($link));//собщаем об ошибке

    //получаем результат в виде ассоциативного массива
    $article = mysqli_fetch_assoc($result);

    //возвращаем массив
    return $article;
    
    
    
}
//создание статьи
function articles_new($title,$date,$content){
    
}
//редактирование статьи
function articles_edit($id,$title,$date,$content){
    
}
  
//удаление статьи ,@param $id статьи
function articles_delete($id){
    
}    