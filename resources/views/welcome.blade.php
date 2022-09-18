<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>
        <link rel="icon" href={{ asset('images/logo.png') }}>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', "resources/scss/app.scss",'resources/js/app.js'])

    </head>
    <body class="antialiased">
                <main>
                        <header>
                                <img class="todo_icon"  src={{ asset('images/Icon.png')}} alt="Todo Icon"/>
                                <h1>ToDo List</h1>
                        </header>
                                
                        <form action="{{route('saveItem')}}"  method="post">
                                {{csrf_field()}}

                                <label for="listItem">~Today I need to?~ </label>
                                <br>
                                <input class="listInput " type="text" name="listItem" required>
                                <br>
                                <button class="listsubmit "><span>Submit</span></button>
                        </form>

                        <x-display-items :listItems="$listItems"/>
                </main>
    </body>
</html>
