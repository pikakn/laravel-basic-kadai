<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの作成機能とバリデーションを実装しよう</title>
</head>
<body>
    <h1>投稿作成</h1>
    @if ($errors)
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    @endif
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label>タイトル<input type="text" name="title"></label><br>
        <label >本文<textarea name="content" id=""></textarea></label><br>
        <input type="submit" value="投稿">
    </form>
</body>
</html>