<!-- body内だけを表示しています。 -->
<body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__content'>
                <h2>本文</h2>
                <input type='text' name='post[content]' value="{{ $post->content }}">
            </div>
             <div class='content__m'>
                <h2>集合場所</h2>
                <input type='text' name='post[meeting_place]' value="{{ $post->meeting_place }}">
            </div>
             <div class='content__m'>
                <h2>集合時間</h2>
                <input type='text' name='post[meeting_time]' value="{{ $post->meeting_time }}">
            </div>
            <input type="submit" value="保存">
        </form>
        <div class ="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </div>
</body>