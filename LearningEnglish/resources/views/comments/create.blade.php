<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <header>
    <div class="header-left">
            <img class="logo" src="./logo.png" alt="">
        </div>
        <div class="header-right">
            <ul class="nav">
                <li><a href="#">ユーザA</a></li>
            </ul>
        </div>
  </header>
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card mt-3">
                  <div class="card-header">
                      <h5>タイトル：{{ $note->note }}</h5>
                  </div>
                  <div class="card-body">
                  <p class="card-text">内容：</p>
  
                  <a href="#" class="btn btn-primary">編集する</a>
                  <form action="{{ route ('comments.store')}} method='post'>
                    @csrf
                      <input type='submit' value='削除' class="btn btn-danger" onclick='return confirm("本当に削除しますか？");'>
                  </form>
                  </div>
              </div>
          </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
                <button type="button" class="btn btn-primary" onclick="location.href={{  route('comments.create', $note->id) }}">コメントする</button>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
          コメント一覧
          @foreach($note->comments as $comment)
            <div class="card mt-3">
                <h5 class="card-header">投稿者：{{ $comment->user->nickname }}</h5>
                <div class="card-body">
                    <h5 class="card-title">投稿日時：{{$comment->created_at }}</h5>
                    <p class="card-text">内容：{{ $comment->body }}</p>
                </div>
            </div>
          @endforeach
        </div>
      </div>
  </div>
  <footer>
    Copyright &copy; Seedkun Inc.
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
