<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<table style="width:100%">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created at</th>
        <th>Action</th>
    </tr>
    <div>
        @foreach($users as $user )
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>
                    <a href="{{ route('users.edit', [$user->id]) }}" class="btn btn-danger">Редактировать</a>
                    <form action="{{ route('users.destroy', [$user->id])}}" method="post">
                        @csrf
                        @method('Delete')
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </div>
</table>
<div><a href="{{ route('users.create')  }}">Создать</a></div>
<br>
{{ $users->links() }}
</body>
</html>
