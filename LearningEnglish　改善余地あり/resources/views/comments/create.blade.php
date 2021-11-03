{{-- @extends('layouts.app_original')
@section('content')
<div class="container">

  <div class="row justify-content-center my-5">
    <div class="col-md-8">
      <h2>以下のノートにコメントします</h2>
        <div class='card mt-3'>
          <p class="card-text">{{ $note->body }}</p>
    </div>
    </div>
  </div>
  <div class="row justify-content-center my-5">
    <div class="col-md-8">
      <form action="{{  route('comments.store') }}" method="post">
        @csrf
        <input type="hidden" name="note_id" value="{{ $note->id }}">
        <div class="form-group">
          <label>コメント</label>
          <textarea class="form-control" placeholder="内容" rouws="5" name="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-3">コメントする</button>
      </form>
        <div class='card mt-3'>
          <p class="card-text">{{ $note->body }}</p>
    </div>
    </div>
  </div>
</div> --}}

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  comments
</body>
</html>