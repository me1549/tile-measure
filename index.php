<html lang='ja'>

<head>
  <meta charset="utf-8">
  <title>タイル計測</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container" align="center">
    <br>
    <h1>タイル計測</h1>
    <div class="row">
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body pt-3">
            <div class="card-text">
              <form class="formula" action="calculate.php" method="post">
                <div class="row g-3 align-items-center">
                  <div class="col-auto">
                    <label for="number1" class="col-form-label">タイルの長さ</label>
                  </div>
                  <div class="col-auto">
                    <input class="form-control" type="string" name="number1">
                  </div>
                  <div class="col-auto">
                    <span class="form-text">
                      mm
                    </span>
                  </div>
                </div>
                <br>
                <div class="row g-3 align-items-center">
                  <div class="col-auto">
                    <label for="number2" class="col-form-label">目地の幅</label>
                  </div>
                  <div class="col-auto">
                    <input class="form-control" type="string" name="number2">
                  </div>
                  <div class="col-auto">
                    <span class="form-text">
                      mm
                    </span>
                  </div>
                </div>
                <div class="text-center">
                  <br>
                  <button type="submit" class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">計測する</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <h2>
      <?php for ($i = 1; $i <= 50; $i++) {
        echo $i.'枚目'.'<br/>'.$_GET['answer'] * $i .'mm'.'<br/>';
      } ?>
    </h2>
    <h2><?php echo $_GET['message'] ?></h2>
    <a href="/tile-measure/index.php"><input type="submit" value="リセット"></a>
    </div>
  </div>
</body>

</html>