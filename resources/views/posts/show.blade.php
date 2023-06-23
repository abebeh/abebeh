<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
           {{ $post->title }}
        </h1>
        <div class='context'>
                <div class="content__post">
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <h3>本文</h3>
                    <p>{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
    </body>
</html>