<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', "resources/scss/app.scss",'resources/js/app.js'])

    </head>
    <body class="antialiased">
                <main>
                        <h1>ToDo List</h1>
                        
                        <form action="{{route('saveItem')}}"  method="post">
                                {{csrf_field()}}
                                <label for="listItem">New Todo Item </label>
                                <br>
                                <input type="text" name="listItem">
                                <br>
                                <button>Save Item</button>
                        </form>


                </main>
    </body>
</html>
