@extends('layouts.app_original') 
@section('content')

<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-8">
            <div class="card text-center">
          <div class="card-header">
              投稿一覧
          </div>
          @foreach($posts as $post)
          <div class="card-body">
              <p class="card-text">
                内容 : {{Str::limit($post->body, 10, '(…)' )}}
              </p>
              <div style="padding:10px 40px">
                @if($post->likedBy(Auth::user())->count()>0)
                {{-- いいねを取り消す --}}
                <a href="/likes/{{ $post->likedBy(Auth::user())->firstOrfail()->id }}"><i class="fas fa-grin-hearts"></i></a>
                @else
                {{-- いいね --}}
                <a href="/posts/{{ $post->id }}/likes"><i class="far fa-meh-blank"></i></a>
                @endif
                {{ $post->likes->count() }}
              </div>
              <p class="card-text">投稿者：{{ $post->user->name }}</p>
              <a href="{{  route('posts.show', $post->id) }}" class="btn btn-primary">詳細へ</a>
          </div>
          <div class="card-footer text-muted">
              投稿日時 : {{ $post->created_at }}
          </div>
          @endforeach
          {{ $posts->links() }}
      </div>
      </div>
      <div class="col-md-2">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
          新規投稿
        </a>
      </div>
  </div>
</div>
@endsection