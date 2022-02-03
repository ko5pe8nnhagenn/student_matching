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
        <div class=post>
            <h1>*投稿詳細*</h1>
                <h3 class="title">
                     {{ $post->title }}
                 </h3>
                <small>
                    <投稿者>{{ $post->user->name }}
                </small>
            <div class="content">
                <div class="content__post">
                        <h4>〇本文</h4>
                        <p>{{ $post->content}}</p>    
                </div>
                <div class="meeting_place">
                    <div class="meeting_place__post">
                        <h4>〇集合場所</h4>
                        <p>{{ $post->meeting_place}}</p>    
                    </div>
                    <div class="meeting_time">
                        <div class="meeting_time__post">
                        <h4>〇集合時間</h4>
                        <p>{{ $post->meeting_time}}</p>    
                    </div>
            
                    <a href="">{{ $post->category->name }}</a>
                    <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集する</a>]</p>
            <form action="/posts/{{ $post->id }}" id="form_delete" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button onclick="deletePost()">delete</button> 
            </form>
        </div>
        
        <div class='comments'>
                    <h2>*コメント一覧*</h2>
                     @foreach ($comments as $comment)
                        <div class='comment'>
                            <h2 class='comment'>{{ $comment->comments }}</h2>
                            <p> <投稿者>{{ $comment->user->name }}</p>
                       </div>
                     @endforeach
                </div>
        
            <h2>*コメント作成*</h2>
            <form action="/comments/{{ $post->id }}" method="POST">
                @csrf
                    <div class="body">
                    <textarea name="comment[comments]" placeholder="今日も1日お疲れさまでした。"></textarea>
                    </div>
                    <input type="submit" value="コメントする"/>
            </form>
        </div>
        
        <div class="footer">
            <a href="/">【トップに戻る】</a>
        </div>
        <script>
            function deletePost(e)
            {
                'use strict';　
                event.preventDefault();
                 if (confirm( '削除すると複元できません。\n本当に削除しますか？')) 
                 {
                    document.getElementById ('form_delete').submit();
                }
            }
        </script>
    </body>
</html>