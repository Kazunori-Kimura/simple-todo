<!DOCTYPE html>
<html lang="ja">
  <!-- http://getbootstrap.com/getting-started/ -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ToDo</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    body {
      margin-top: 80px;
    }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header class="navbar navbar-inverse navbar-fixed-top">
      <a href="#" class="navbar-brand">Simple ToDo Application</a>
    </header>

    <form action="index.php" method="post" class="container">
      <!-- 新規登録 -->
      <div class="form-horizontal">
        <div class="form-group">
          <label for="inputCreateContent" class="col-xs-1 control-label">ToDo</label>
          <div class="col-xs-11">
            <input type="text" class="form-control" id="inputCreateContent" placeholder="Content">
          </div>
        </div>
        <div class="form-group">
          <label for="inputCreateDate" class="col-xs-1 control-label">期限</label>
          <div class="col-xs-2">
            <input type="date" class="form-control col-xs-2" id="inputCreateDate" placeholder="期限">
          </div>
        </div>
        <div class="form-group">
          <label class="col-xs-1 control-label">操作</label>
          <div class="col-xs-2">
            <button type="submit" class="btn btn-primary" id="submitCreate">登録</button>
            <button type="reset" class="btn btn-default">クリア</button>
          </div>
        </div>
      </div>
      <hr>
      <!--一覧-->
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th class="col-xs-1">完了</th>
            <th class="col-xs-7">内容</th>
            <th class="col-xs-2">期限</th>
            <th class="col-xs-2">操作</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><input type="checkbox" id="inputUpdateStatus1"></td>
            <td><input type="text" class="form-control" id="inputUpdateContent1" placeholder="Content"></td>
            <td><input type="date" class="form-control" id="inputUpdateDate1" placeholder="期限"></td>
            <td>
              <button type="submit" id="submitUpdate1" class="btn btn-primary">更新</button>
              <button type="submit" id="submitDelete1" class="btn btn-danger">削除</button>
            </td>
          </tr>
        </tbody>
      </table>
    </form>

  </body>
</html>