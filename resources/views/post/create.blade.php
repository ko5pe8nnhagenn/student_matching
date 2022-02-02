@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
    </head>
    <body>
        <h1>学校掲示板</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="タイトル">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title')}}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="コンテンツ">
                <h2>コンテンツ</h2>
                <textarea name="post[content]" placeholder="宿題一緒にやりませんか。">{{ old('post.content') }}</textarea>
                <p class="content__error" style="color:red">{{ $errors->first('post.content') }}</p>
            </div>
            <div class="meeting_place">
                <h2>集合場所</h2>
                <input type="text" name="post[meeting_place]" placeholder="校門前" value="{{ old('post.meeting_place')}}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.meeting_place') }}</p>
            </div>
            <div class="meeting_place">
                <h2>集合時間</h2>
                <input type="datetime-local" name="post[meeting_time]" placeholder="1６時" value="{{ old('post.meeting_time')}}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.meeting_time') }}</p>
            </div>
                <div class="category">
    <h2>Category</h2>
    <select name="post[category_id]">
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
        @endforeach
    </select>
    </div>
            <input type="submit" value="保存"/>
        
        <div class="back">[<a href="/">back</a>]</div>
       
    </form>
    
    </body>
</html>

@endsection 