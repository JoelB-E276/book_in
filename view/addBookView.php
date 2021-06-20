<main class="container my-5">

 <h2 class="text-center my-5">Ajouter un livre <br> à la collection<h2>

 <form class="row g-3 was-validated" action="" method="post">

    <div class="row">
        <div class="input-group mb-3 col-2">
        <span class="input-group-text col-2">Titre</span>
        <input type="text" class="form-control" name="title" required>
        </div>
        <div class="input-group mb-3 col-2">
        <span class="input-group-text col-2">Auteur</span>
        <input type="text" class="form-control" placeholder="Prénom Nom" name="author" required>
        </div>
        <div class="input-group mb-3 col-2">
        <span class="input-group-text col-2">Édition</span>
        <input type="text" class="form-control"name="edition" required>
        </div>

        <div class="input-group mb-3 col-2">
        <span class="input-group-text col-2">Nombre de page</span>
        <input type="number" class="form-control" placeholder="123" name="number_pages" required>
        </div>
        <div class="input-group mb-3 col-2">
        <span class="input-group-text col-2">Genre</span>
        <input type="text" class="form-control" placeholder="Poésie Littérature Roman etc." name="genre" required>
        </div>
        <div class="input-group mb-3 col-2">
        <span class="input-group-text col-2">Date de publication</span>
        <input type="date" class="form-control" placeholder="YYYY/MM/DD" name="release_date" required>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Résumé</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="500 mots maximum..." name="resume" required></textarea>
        </div>
    </div>

    <div class="col-12">
     <button class="btn btn-danger mb-4" name="addbook" type="submit">Ajouter le livre</button>
    </div>
    
 </form>
 </main>