<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
</body>
</html>
