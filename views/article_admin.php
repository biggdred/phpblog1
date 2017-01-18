<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="../style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
</head>
<body>
<div  class="container">
    <h1>Мой первый блог</h1>

    <div>
<<<<<<< HEAD
        <form method="post" action="index.php?action=add">
            <label>
                Название
                <input type="text" name="title" value="" class="form-item" autofocus required>
            </label>
            <label>
                Дата
                <input type="date" name="date" value="" class="form-item" required>
            </label>
            <label>
                Содержание
                <textarea class="form-item" name="content" required>
=======
          <!--====form===-->      
        <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">
            <label>
                Название
                <input type="text" name="title" value="<?=$article['title'];?>" class="form-item" autofocus required>
            </label>
            <label>
                Дата
                <input type="date" name="date" value="<?=$article['date'];?>" class="form-item" required>
            </label>
            <label>
                Содержание
                <textarea class="form-item" name="content" required><?=$article['content'];?>
>>>>>>> master
                </textarea>
            </label>
            <input type="submit" value="Сохранить" class="bin">
        </form>

<<<<<<< HEAD

=======
>>>>>>> master
    </div>
    <footer>
        <p>Мой первый блог<br>
            Copyright &copy; 2016
        </p>
    </footer>
</div>
</body>
</html>

