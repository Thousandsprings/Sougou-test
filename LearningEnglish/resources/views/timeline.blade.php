<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <title>English Note</title>
</head>
<body>
    <div class="wrapper">
        <form action="/timeline" method='post'>
            @csrf
            <div class="post-box">
                <input type="text" name='note' placeholder='What did you learn?'>
                <button type="submit" class='submit-btn'>create note</button>
            </div>
        </form>
        <div class="note-wrapper">
            @foreach($notes as $note)
                <div class="note-box">
                    <div class="user-nickname">{{ $note->user->nickname }}</div>
                    <div class="note-content">{{ $note->note }}</div>
                        <form>
                        <input type="submit" value='Comment'>
                        </form>
                    <div class="destroy-btn">
                      @if($note->user_id == Auth::user()->id)
                        <form action="{{ route('destroy', [$note->id]) }}" method='post'>
                             @csrf
                         <input type="submit" value='delete'>
                        </form>
                      @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>