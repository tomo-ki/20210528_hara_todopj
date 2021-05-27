<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Document</title>
</head>

<body>
  <div class="back-ground">
    <div class="content__wrapper">
      <div>
        <div class="content">
          <div class="content__title">
            Todo List
          </div>
          <form action="" class="create__form">
            <input type="text" class="create__form-text">
            <button class="create__form-btn">追加</button>
          </form>
          <table class="">
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>