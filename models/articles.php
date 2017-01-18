<?php
/**
 * для работы со статьями
 *
 */

//вывод всех статей
function articles_all(){
    //статья 1
    $art1 =  [  'id'      => 1 ,
                'title'   => 'Title1',
                'date'    => '2015-12-17',
                'content' => 'Content1'  ];
    //статья 2
    $art2 =  [  'id'      => 2 ,
                'title'   => 'Title2',
                'date'    => '2015-12-17',
                'content' => 'Content1'];

    $arr[0] = $art1;
    $arr[1] = $art2;

    return $arr;//возвращаем 2 статьи
}

<<<<<<< Updated upstream
//получение конкретной статьи по id
function articles_get($id){

}

//создание статьи
function articles_new($title, $date, $content){

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
 
function articles_new($link, $title, $date, $content){
    //подготовка
    $title = trim($title);
    $content = trim($content);

    //проверка
    if($title == "") return false;

    //query
    $template_add = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
    //где %s - string 

    $query = sprintf($template_add, mysqli_real_escape_string($link, $title),
                     mysqli_real_escape_string($link, $date),
                     mysqli_real_escape_string($link, $content));
    echo $query;
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));
    return true;
>>>>>>> Stashed changes
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