<?php

require_once("../database.php");
require_once("../models/articles.php");

//link database
$link = db_connect();

if(isset($_GET['action'])){
    $action = $_GET['action'];
}
else{
    $action = "";
}
// or $action = isset($_GET['action']) ? $_GET['action'] : "";

//if articles add (если  входящий параметр action = add)
if ($action == "add") {
        //проверяем если параметр POST не пустой
        if(!empty($_POST)){
            //если данные не пустые
            //вызываем функцию articles_edit и предаем ей
            articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);//после того как данные будут сохранены в базе делаем переадресацию на главную страницу
            //$link - соединение с базой
            //делаем переадресацию на главную страницу
            header("Location:index.php");
        }

        //ечли данные пустые
        //include shablon
    	include("../views/article_admin.php");

    }
        //if articles edit(если  входящий параметр action = edit)
        else if($action == "edit"){
            //если не установлен параметр id (мы не знаем какую статью открывать для редоктирования)
            if(!isset($_GET['id']))

                   //то мы перенаправляем пользователя на index.php(на главную страницу админки)
                   header("Location:index.php");

            //если параметр задан ,конвертируем его в int и присваеваем его переменной $id(если параметр = строковому типу то параметр id = 0 )
            $id = (int)$_GET['id'];

            //проверяем если параметр POST не пустой и если id > 0 значит необходимо сохранить данную статью
            if(!empty($_POST) && $id > 0){
                //если данные не пустые
                //вызываем функцию articles_edit и предаем ей
                articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);//после того как данные будут сохранены в базе делаем переадресацию на главную страницу
                //делаем переадресацию на главную страницу
                header("Location:index.php");
            }

            //ечли данные пустые нам надо отобразить страницу с содержимым статьи для редоктирования
            $article = articles_get($link, $id);


            //получаем статью из базы
            //подключаем страницу
            include("../views/article_admin.php");
    }
        else {
        //if not return all articles in blog

      //quiery DB and return data from DB
	    $articles = articles_all($link);
        //include shablon
    	include("../views/articles_admin.php");
    }





