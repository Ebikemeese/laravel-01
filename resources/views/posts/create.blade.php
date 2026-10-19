<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Create Post Page</h1>

  <form action="{{ route('posts.store') }}" method="POST">
    @csrf  

    <label>Title</label>
    <input type="text" name="title" placeholder="Enter Title" value="{{ old('title') }}" required />

    <br>

    <label>Content</label>
    <textarea type="text" name="content" required>{{ old('content') }}</textarea>

    <br>

    <button type="submit">Continue</button>
  </form>

  @if ($errors->any())
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  @endif
</body>
</html>