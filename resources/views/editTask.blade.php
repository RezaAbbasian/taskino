<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <form action="/updateTask" method="POST">
            @csrf
            <input type="hidden" name="task_id" value="{{$task->id}}">
            <div>Title</div>
            <div><input type="text" name="title" value="{{$task->title}}"></div>
            <div>Is Done?</div>
            <div>
                <select name="is_done" id="">
                <option @if ($task->is_done==0)
                        SELECTED
                        @endif
                        value="0">انجام نشده</option>
                <option value="1"

                    @if ($task->is_done==1)
                    SELECTED
                    @endif
                    >انجام شده</option>
                </select>
            <div>Description</div>
            <div><textarea name="description" id="" cols="30" rows="10">{{$task->description}}</textarea></div>
            <div><input type="submit"></div>
        </form>
    </body>
</html>
