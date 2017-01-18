<?php
/**
 * для работы со статьями
 *
 */


<<<<<<< HEAD
<<<<<<< HEAD
/**
 * вывод всех статей
 * @param $link
 * @return array
 */
function articles_all($link){
    //запрос
    $query = "SELECT * FROM articles ORDER BY  id DESC";
    $result = mysqli_query($link, $query);
=======
=======
<<<<<<< Updated upstream
>>>>>>> master
//получение конкретной статьи по id
function articles_get($id){
>>>>>>> parent of 996d599... lesson 12 add edit admin panel

    if(!$result)
        die(mysqli_error($link));

    //извлечение из базы
    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i=0;$i<$n;$i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;

}

<<<<<<< HEAD
/**
 * получение конкретной статьи по id
 * @param $link
 * @param $id_article
 * @return array|null
 */
function articles_get($link, $id_article)
{
    //запрос
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));


    $article = mysqli_fetch_assoc($result);

<<<<<<< HEAD
=======
=======
/**
 * получение конкретной статьи по id
 * @param $link
 * @param $id_article
 * @return array|null
 */
function articles_get($link, $id_article)
{
    //запрос
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    //где %d - integer
    
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));


    $article = mysqli_fetch_assoc($result);

>>>>>>> master
    return $article;

}

/**
 * создание статьи
 * @param $link
 * @param $title
 * @param $date
 * @param $content
 * @return bool
 */
<<<<<<< HEAD
=======
 
>>>>>>> master
function articles_new($link, $title, $date, $content){
    //подготовка
    $title = trim($title);
    $content = trim($content);

    //проверка
    if($title == "") return false;

    //query
    $template_add = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
<<<<<<< HEAD
=======
    //где %s - string 
>>>>>>> master

    $query = sprintf($template_add, mysqli_real_escape_string($link, $title),
                     mysqli_real_escape_string($link, $date),
                     mysqli_real_escape_string($link, $content));
    echo $query;
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    return true;
<<<<<<< HEAD
=======
>>>>>>> parent of 996d599... lesson 12 add edit admin panel
=======
>>>>>>> Stashed changes
>>>>>>> master
}

//редактирование статьи
function articles_edit($link, $id, $title, $date, $content){
    //Подготовка
    $title = trim($title);
    $content = trim($content);
    $date = trim($date);
    $id = trim($id);

    //проверка
    if($title = "")
        return false;

    //запрос
    $template_update = "UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'";

    $query = sprintf($template_update,
        mysqli_real_escape_string($link, $title),
        mysqli_real_escape_string($link, $content),
        mysqli_real_escape_string($link, $date),
        $id);


    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    return mysqli_affected_rows($link);
    
}

//удаление статьи ,@param $id статьи
function articles_delete($id){

}
