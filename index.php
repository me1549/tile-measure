<html lang='ja'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>タイル計測</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
  <div class="container" align="center">
    <br>
    <h1>タイル割り計測</h1>
    <h5>メジャーは100mmを起点としてください。</h5>
    <h5>測定し直す場合はリセットを押してから入力してください。</h5>
    <div class="row">
      <div class="col-12">
        <div class="card mt-5">
          <div class="card-body pt-3">
            <div class="card-text">
              <form class="formula" action="calculate.php" method="post">
              <div class="row g-3 align-items-center">
                  <div class="col-auto">
                    <label for="width" class="col-form-label">全幅</label>
                  </div>
                  <div class="col-auto">
                    <input class="form-control" type="string" name="width">
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
                    <label for="tile" class="col-form-label">タイル</label>
                  </div>
                  <div class="col-auto">
                    <input class="form-control" type="string" name="tile">
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
                    <label for="joint" class="col-form-label">目地</label>
                  </div>
                  <div class="col-auto">
                    <input class="form-control" type="string" name="joint">
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
      <a href="/"><input type="submit" value="リセット"></a>
      <h1>全幅<?php echo $_GET['width'] ?>mm</h1>
      <h1>タイル<?php echo $_GET['tile'] ?>mm</h1>
      <h1>目地<?php echo $_GET['joint'] ?>mmの場合</h1>
      <br><br><br><br>
      <h2>タイル<?php echo $_GET['floor'] ?>枚</h2>
      <br><h2>と</h2><br>
      <h2>切れ物<?php echo $_GET['cat'] ?>mm</h2>
      <h2><?php echo $_GET['message'] ?></h2>
      <br><br><br>
      <h1>印の位置</h1>
      <h2>
        <?php
        for ($i = 1; $i <= $_GET['floor']; $i++) {
          $answer = $_GET['answer'] * $i + 100;
          echo $i . '枚目' . '<br/>' . $answer . 'mm' . '<br/>';
        } ?>
      </h2>
      <a href="/"><input type="submit" value="リセット"></a>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>