@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        
       <DIV class="col">
       
        
        <form action="{{route('post.store')}}" method="POST">
          @csrf
          @method('POST')
        <div class="form-floating">
            <textarea class="form-control"  name="content" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
            @error('content')
            <div class="text-danger">
              {{$message}}
           
            </div>
                
            @enderror
            <label for="floatingTextarea2">Comments</label>
          </div>
          <button type="submit" class ="btn btn-primary mt-3">POST</button>
        </div>
      </form>
          <div class="col">
            @if($posts->count()==0)
              <div class="p-3 text-white">
                There are no posts yet
              </div>
            @endif

            @if($posts->count() > 0)

              @foreach ($posts as $post)
              <div class="card">
                <div class="card-header">
                  Quote
                </div>
                <div class="card-body">
                  <blockquote class="blockquote mb-0">
                    <p>{{ $post->content }}</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                  </blockquote>
                  <hr>
                  <button class="btn btn-outline-primary">like <span CLASS="bddge text-bj-primary">2</span></button>
                  
                  
<form action="{{ route('post.destroy', $post) }}" method="POST">
  @csrf
  @method('DELETE')
  <button class="btn btn-outline-primary">delete</button>
</form>
                 
                  <form method="POST" action="{{ route('post.update', $post->id) }}">
                    @csrf
                    @method('PUT')
                    <textarea class="form-control"  name="content" placeholder="write your update" id="floatingTextarea2" style="height: 100px"></textarea>
                    <button class="btn btn-outline-primary">update</button>
                    <div class="col">
                </form>
                 

                 
                </div>
              </div>
              @endforeach

            @endif
        
                
            </div>
        </div>
      
@endsection 