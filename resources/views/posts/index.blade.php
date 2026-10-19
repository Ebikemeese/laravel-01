<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Posts Page</h1>

  <a href="{{ route('posts.create') }}">Create New Post</a>

  @foreach($posts as $post)
    <div>
      <h2>{{ $post->title }}</h2>
      <p>{{ $post->content }}</p>

      <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
      <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf

        @method('DELETE') <!-- spoofs a DELETE request because html form only supports 2 methods (POST and GET) -->
        <button type="submit" onclick="return confirm('Are you sure you want to delete this POST')">Delete</button>
      </form>
    </div>
  @endforeach
</body>
</html>