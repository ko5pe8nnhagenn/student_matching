@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')


<h1>投稿一覧</h1>
 <h2 class='edit'><a href='/posts/create'>投稿を作成する</a></h2>
    <div class='posts row'>

     @foreach ($posts as $post)
        <div class='post col-4'>
            <h2 class='title'>
                <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
            </h2>
            <p> {{ $post->category->category_name }}</p>
                <p><投稿者>{{ $post->user->name }}</p>
             <h4>〇本文</h4>
                 <p class='content'>{{ $post->content }}</p>
             <h4>〇集合場所</h4>
                <p class='meeting_place'>{{ $post->meeting_place }}</p>
           <h4>〇集合時間</h4>
                <p class='meeting_time'>{{ $post->meeting_time }}</p>
        </div>
        @endforeach
    
      
</div>  
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
 @endsection   


