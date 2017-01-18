<?php

require_once("../database.php");
require_once("../models/articles.php");

//link database
$link = db_connect();

//qurery DB and return data from DB
$articles = articles_all($link);

//include shablon
include("../views/articles_admin.php");