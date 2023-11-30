<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title")</title>
        @vite(["resources/css/app.css", "resources/js/app.ts"])
    </head>
    <body>
        <div>
            <a href="{{route("index", [], false)}}">Index</a><br>
            <a href="{{route("search", [], false)}}">Search</a>
        </div>
        <div>@yield("content")</div>
    </body>
</html>
