<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
  
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/template/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/template/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/template/admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/resources/main.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="title"><p>TODO</p></div>
    <div class="todo-main">
        <form action="{{route('store')}}" method="POST" class="form-input-value" autocomplete="off">
            @csrf
            <input class="input-value" name="description" type="text" placeholder="Create a new todo...">
            <button type="submit" class="btn btn-success">lưu</button>
        </form>
        @if (count($todos))
        <ul id="todos">
            @foreach ($todos as $todo)
            <li class="completed">
                <form action="{{route('destroy',$todo->id)}}" method="POST">
                    {{$todo->description}}
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-link btn-sm">X</button>
                </form>
                {{-- <span>test
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </span> --}}
            </li>
            @endforeach
        </ul>
        @endif
        
        <div class="footer">
            <span>5 Items</span>
            <span>Clear Complete</span>
        </div>
    </div>
</body>
</html>