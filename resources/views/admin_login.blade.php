<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin login</title>
</head>
<body>

<form action="{{ route('admin.loginData') }}" method="post">
    @csrf
    <div>
        <input type="email" name="email" placeholder="Введите имя пользователя" id="name">
    </div>
    <div>
        <input type="password" name="password" placeholder="Введите пароль" id="password">
    </div>

    <button type="submit" name="button">Авторизироватся</button>
</form>

</body>
</html>
