<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

        <title>Laravel & Vue 3</title>

    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                <div class="container">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">Comentarios</a>
                            </li>
                            <li class="nav-item">
                                <a href="/create" class="nav-link">Añadir nuevos comentarios</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                <div class="antialiased" id="app">
                    @vite('resources/js/app.js')
                </div>
            </main>
        </div>
        <script></script>
       
    </body>
</html>
