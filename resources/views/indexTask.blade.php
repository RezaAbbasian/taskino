<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <table class="table">
        <thead>
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Description</td>
                <td>Created at</td>
                <td>Is done</td>
                <td>Edit</td>
            </tr>
        </thead>
        <tbody>
@foreach(\App\Task::get() as $task)
            <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->title}}</td>
                <td>{{$task->description}}</td>
                <td>{{$task->created_at}}</td>
                <td>
                    @if($task->is_done==0)
                    <span class="badge badge-danger">انجام نشده</span>
                @else
                    <span class="badge badge-success">انجام شده</span>
                @endif
                </td>
                <td>
                    <a class="btn btn-primary" href="/editTask?id={{$task->id}}">
                        Edit</a>
                    </td>
                <td>
                    <form action="/deleteTask?task_id={{$task->id}}" method="post">
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
@endforeach
        </tbody>
        </table>
    </body>
</html>
