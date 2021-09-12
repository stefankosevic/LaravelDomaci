<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Clothes' }}</title>
</head>
<body background="./clothes.jpg">
<header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                <li class="nav-item ">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/clothes">Clothes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">Categories</a>
                    </li>
                   
                </ul>
            </div>
        </nav>
    </header>
   
   {{ $slot }}
   
</body>
</html>