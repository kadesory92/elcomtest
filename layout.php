<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
</head>
<body>
    
    <header class="mb-5">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="/" aria-current="page"
                    >Home <span class="visually-hidden">(current)</span></a
                >
                <a class="nav-item nav-link" href="/file1.php">File 1</a>
                <a class="nav-item nav-link" href="/file2.php">File 2</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-3" style="Height:400px;">
            <?= $content; ?>
        </div>
    </main>
    <footer class="text-center">&#169; Елком-Тест</footer>
</body>
</html>