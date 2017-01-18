<<<<<<< HEAD
﻿<?php

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


if ($action == "add") {
        if(!empty($_POST)){
            articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        //include shablon
    	include("../views/article_admin.php");
    } else {
        //if not return all articles in blog

      //quiery DB and return data from DB
	    $articles = articles_all($link);
        //include shablon
    	include("../views/articles_admin.php");
    }



/**
 * if($action == "add"){
 *     if(!empty($_POST)){
 *         articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
 *         header("Location: index.php");
 *     }
 *     //include shablon
 *     include("../views/article_admin.php");
 * }
 * else(
 *     //if not return all articles in blog

 *     //quiery DB and return data from DB
 *     $articles = articles_all($link);
 *     //include shablon
 *     include("../views/articles_admin.php");
 * )
 */
=======
<?php
>>>>>>> parent of 996d599... lesson 12 add edit admin panel

