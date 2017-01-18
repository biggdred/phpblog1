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

//получение конкретной статьи по id
function articles_get($id){

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