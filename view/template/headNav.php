

<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/css/main.css" rel="stylesheet">
    <title>Book ' In</title>
  </head>
  <body>
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom border-dark">
    <div class="container-fluid">
        <a class="navbar-brand" id="nav-title" href="index.php">Book'in</a>
        <img src="doc/book.webp" id="book" width="70vw">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto mx-5 my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item mx-5">
            <a class="nav-link active" aria-current="page" href="book.php">Les livres</a>
            </li>
            <li class="nav-item mx-5">
            <a class="nav-link active" href="users.php">Les utilisateurs</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Ajout / Suppression
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="addBook.php">Ajouter un livre</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="deleteBook.php">Supprimer un livre</a></li>
            </ul>
            </li>
        </ul>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>

     