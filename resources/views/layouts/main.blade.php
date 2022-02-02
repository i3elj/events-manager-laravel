<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fontes do Google --!>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet"> 
    <!-- Bootstrap --!>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS --!>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/main.js"></script>
</head>
<body class="antialiased">
    @yield('content')
    <footer>
        <p>HDC Events &copy; 2020</p>
    </footer>
</body>
</html>

