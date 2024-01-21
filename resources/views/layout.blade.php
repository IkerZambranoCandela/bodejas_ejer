<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bodegas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" defer crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <header class="row">
            <div class="col">
                <h1 class="text-center">Gestion de bodegas</h1>
                <p class="text-center">
                    Este proyecto muestra como hacer una aplicaion web MVC con Laravel. <br>
                    El objetivo es mostrar como se realiza una aplicaion con este patron de diseño.
                </p>
            </div>
        </header>
        <main class="row">
            @yield('content')
        </main>
    </div>
</body>
</html>