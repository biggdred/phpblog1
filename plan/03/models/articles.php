<?php
/**
 * для работы со статьями
 *
 */


/**
 * вывод всех статей
 * @param $link
 * @return array
 */
function articles_all($link){
    //запрос
    $query = "SELECT * FROM articles
    ORDER BY  id DESC";
    $result = mysqli_query($link, $query);

    if(! $result)
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

    return $article;

}

//создание статьи
function articles_new($title, $date, $content){

}

//редактирование статьи
function articles_edit($id, $title, $date, $content){

}

//удаление статьи ,@param $id статьи
function articles_delete($id){

}
