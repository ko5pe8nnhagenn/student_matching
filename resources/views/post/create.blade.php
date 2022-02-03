@extends('layouts.app')　　　　　　　　　　　　　　　　　　
@section('content')
    
 <body>
        <h1>学校掲示板</h1>
    <form action="/posts" method="POST">
            @csrf
            <div class="タイトル">
                <h4>タイトル</h4>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title')}}"/>
                        <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="コンテンツ">
                <h4>コンテンツ</h4>
                    <textarea name="post[content]" placeholder="宿題一緒にやりませんか。">{{ old('post.content') }}</textarea>
                        <p class="content__error" style="color:red">{{ $errors->first('post.content') }}</p>
            </div>
            <div class="meeting_place">
                <h4>集合場所</h4>
                    <input type="text" name="post[meeting_place]" placeholder="校門前" value="{{ old('post.meeting_place')}}"/>
                         <p class="title__error" style="color:red">{{ $errors->first('post.meeting_place') }}</p>
            </div>
            <div class="meeting_place">
                <h4>集合時間</h4>
                    <input type="datetime-local" name="post[meeting_time]" placeholder="1６時" value="{{ old('post.meeting_time')}}"/>
                        <p class="title__error" style="color:red">{{ $errors->first('post.meeting_time') }}</p>
            </div>
             <div class="category">
                <h4>カテゴリー</h4>
                     <select name="post[category_id]">
                        @foreach($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
            </div>
                <input type="submit" value="保存"/>
        
            <div class="back">[<a href="/">トップに戻る</a>]</div>
       
    </form>
    
</body>


@endsection 