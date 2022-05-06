<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{ route('users.update', [$user->id]) }}" method="POST">
    @csrf
    @method('PATCH')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div>
        <input value= "{{ $user->name }}" type="text" name="name" placeholder="Введите имя пользователя" id="name">
    </div>
    <div>
        <input value= "{{ $user->email }}" type="email" name="email" placeholder="Введите email" id="email">
    </div>
    <button type="submit" name="button">Сохранить</button>
</form>
</body>
</html>
