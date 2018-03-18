<!DOCTYPE html>
<html>
<head>
  <title>Laravel Exercise</title>
</head>
<body>
  <form method="post" action="/updateview/{{ $user->id }}">
    {{csrf_field()}}
    <input type="text" name="name" placeholder="name" value="{{$user->name}}" required><br>
    <input type="text" name="email" placeholder="email" value="{{$user->email}}"><br>
    <input type="password" name="password" placeholder="password" value="{{$user->password}}" required><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>
