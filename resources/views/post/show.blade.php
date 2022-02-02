<!DOCTYPE HTML>

<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>投稿詳細</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <button onclick="deletePost()">delete</button> 
        </form>
         <h2 class="title">
            {{ $post->title }}
        </h2>
        <small>{{ $post->user->name }}</small>
         <div class="content">
            <div class="content__post">
                <h3>本文</h3>
                <p>{{ $post->content}}</p>    
                    
            </div>
             <div class="meeting_place">
            <div class="meeting_place__post">
                <h3>集合場所</h3>
                <p>{{ $post->meeting_place}}</p>    
                    
            </div>
             <div class="meeting_time">
            <div class="meeting_time__post">
                <h3>集合時間</h3>
                <p>{{ $post->meeting_time}}</p>    
                    
            </div>
            
            <a href="">{{ $post->category->name }}</a>
        </div>
                   <div class='comments'>
            @foreach ($comments as $comment)
                <div class='comment'>
                    <h2 class='comment'>{{ $comment->comments }}</h2>
                   
                    
                                 投稿者:
                <h2 >{{ $comment->user->name }}</h2>
                      
                    </p>
                </div>
            @endforeach
        </div>
        
            </div>
        
        <h1>コメント作成</h1>
        <form action="/comments/{{ $post->id }}" method="POST">
            @csrf
            
            <div class="body">
                <h2>本文</h2>
                <textarea name="comment[comments]" placeholder="今日も1日お疲れさまでした。"></textarea>
            </div>
            <input type="submit" value="コメントする"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    
    </div>
        
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        <script>
            function deletePost(e) {
                'use strict';　
                event.preventDefault();

                if (confirm( '削除すると複元できません。\n本当に削除しますか？')) {
                    document.getElementById ('form_delete').submit();
                }
                
            }
        </script>
    </body>
</html>