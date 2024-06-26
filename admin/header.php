<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yangilik.uz</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<?php
session_start();
if(isset($_SESSION['logIn'])){
    header("location: /RegisterAdmin/Login/logout.php");
}
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/admin"><b>Yanglik.uz</b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/CategoryPage/category.php">Turkumlar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/NewsPage/news.php">Yangiliklar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/TagPage/tag.php">Teglar</a>
                </li>
            </ul>
        </div>
        <div class="ml-auto">
            <a class='btn btn-dark' href="/index.php">Chiqish</a>

        </div>
    </div>
</nav>

</body>
</html>
