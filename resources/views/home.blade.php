<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body>
  <h1>Home</h1>
  <a href="{{ route('testpage') }}">Test page</a>

  <form action="{{ route('sign-in') }}" method="post">
    @csrf  

    <label for="email">Enter Email</label>
    <input type="text" name="email" id="email" placeholder="example@gmail.com" required />

    <br>

    <label for="password">enter Password</label>
    <input type="password" placeholder="Enter Password" required />

    <br>

    <button type="submit">Continue</button>
  </form>
</body>
</html>