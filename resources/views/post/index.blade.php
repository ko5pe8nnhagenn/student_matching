@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')


<h1>投稿一覧</h1>
[<a href='/posts/create'>create</a>]
<div class='posts row'>
    

   
  

    @foreach ($posts as $post)
        <div class='post col-4'>
            <h2 class='title'>
             <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
           <p> {{ $post->category->category_name }}</p>
             
                <p>投稿者:{{ $post->user->name }}</p>
            
            <p class='content'>{{ $post->content }}</p>
            <p class='meeting_time'>{{ $post->meeting_place }}</p>
            <p class='meeting_time'>{{ $post->meeting_time }}</p>
        </div>
    @endforeach
    
      
</div>  

<div class='paginate'>
    {{ $posts->links() }}
</div>
 @endsection   


