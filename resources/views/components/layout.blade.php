<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Library</title>
    </head>
    <body>
        <div class="h-full">
            {{$slot}}
        </div>
    </body>
</html>