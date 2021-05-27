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
          <form action="/todo/create" method="post" class="create__form">
            @csrf
            <input type="text" name="content" placeholder="Todoを記入" class="create__form-text">
            <button type="submit" class="create__form-btn">追加</button>
          </form>
          <table class="todo__table">
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            @foreach ($items as $item)
            <tr>
              <td class="date__cell">
                {{$item->created_at}}
              </td>
              <form action="/todo/update" method="post">
                <td class="text__cell">
                  @csrf
                  <input type="text" name="content" value="{{$item->content}}" class="update__form-text">
                </td>
                <td>
                  @csrf
                  <input type="hidden" name="id" value="{{$item->id}}">
                  <button type="submit" class="update__form-btn">更新</button>
                </td>
              </form>
              <td>
                <form action="/todo/delete" method="post" class="delete__form">
                  @csrf
                  <input type="hidden" name="id" value="{{$item->id}}">
                  <button type="submit" class="delete__form-btn">削除</button>
                </form>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>