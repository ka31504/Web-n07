<!DOCTYPE html>
<html>
<head>
    <title>Create Post</title>
</head>
<body>
    <h1>Create a New Post</h1>
    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" required>
        <br>
        <label>Content:</label>
        <textarea name="content" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
