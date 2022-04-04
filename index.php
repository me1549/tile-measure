<html lang='ja'>
  <head>
    <meta charset="utf-8">
    <title>タイル計測</title>
  </head>
  <body>
    <h1>タイル計測</h1>
    <form class="formula" action="calculate.php" method="post">
      タイルの長さ:<input type="string" name="number1">mm<br>
      目地の幅:<input type="string" name="number2" value="">mm<br>
      <input type="submit">
    </form>
    <h2>答え:
      <?php for($i = 1; $i<=50; $i++) {
      echo $_GET['answer'] * $i.PHP_EOL;
    }?>
    </h2>
    <h2><?php echo $_GET['message']?></h2>
    <a href="/tile-measure/index.php"><input type="submit" value="リセット" ></a>
  </body>
</html>