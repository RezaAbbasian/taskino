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
        <form action="/storeTask" method="POST">
            @csrf
            <div>Title</div>
            <div><input type="text" name="title"></div>
            <div>Description</div>
            <div><textarea name="description" id="" cols="30" rows="10"></textarea></div>
            <div><input type="submit"></div>
        </form>
    </body>
</html>
