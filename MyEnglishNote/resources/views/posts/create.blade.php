@extends('layouts.app_original') 
{{-- layoutのなかのapp_original.bladeファイルを参照するという意味 --}}
@section('content')
{{-- どこかどこまでを参照するか --}}

<div class="container mt-5">
  <div class="row justify-content-center">
      <div class="col-md-8">


  <form action="{{  route('posts.store') }}" method="POST">
    @csrf
      {{-- サニタイジング防止 --}}
    
      <div class="form-group">
          <label>What did you learn?</label>
          <textarea class="form-control" rows="5" name="body"></textarea>
      </div>
  
      <button type="submit" class="btn btn-primary">Create Note</button>
        
   
  </form>

      </div>
  </div>
</div>
@endsection