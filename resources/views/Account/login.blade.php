<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('Login_user') }}" method="POST">
        @csrf
        <label for="">email</label>
        <input type="text" name="email">
        <label for="">password</label>
        <input type="text" name="password">
        <button type="submit">Login</button>
    </form>
    <br>
    <br>
    <br>
    <br>
    <form action="{{ route('Register') }}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name">

        <label for="">phone</label>
        <input type="number" name="phone">

        <label for="">email</label>
        <input type="text" name="email">

        <label for="">password</label>
        <input type="text" name="password">

        <button>sigh in</button>
    </form>
</body>
</html>