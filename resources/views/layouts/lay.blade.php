<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   <link rel="stylesheet" href="/css/style.css"> 
    <script src="/js/scripts.js"></script>

</head>
    
<body>
    <header>
        <h2>@yield('content')</h2>
    </header>
    <footer>
        <p>&copy; Curso Laravel</p>
    </footer>
</body>
</html>