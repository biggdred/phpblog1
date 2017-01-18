<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Мой Первый Блог</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Мой Первый Блог</h1>
        <div>
          <article>
            <h3>
              <?=$article['title']?>
            </h3>
            <em>Опубликовано: <?=$article['date']?></em>
            <p><?=$article['content']?></p>
          </article>
        </div>
        <footer>
          <p>
            Мой Первый Блог <br>Copiryte &copy 2016;
          </p>
        </footer>
     </div>
  </body>
</html>