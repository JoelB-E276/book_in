<p></p>

<form action="" method="post" class="container" >
    <h2 class="mt-5 text-center">Enregistrer un emprunt</h2>

    <table class="table">
  <thead>
    <tr>
      <th scope="col-2">Titre</th>
      <th scope="col-2">Auteur</th>
      <th scope="col-2">Code livre</th>
      <th scope="col-2">Nom de l'emprunteur</th>
      <th scope="col-2">Prénom de l'emprunteur</th>
      <th scope="col-2">Identifiant</th>

    </tr>
  </thead>
  <tbody>
           <?php foreach($borrowingBook as $data):?>
    <tr>
      <th scope="row"><?php echo $data->getTitle();?></th>
      <td><?php echo $data->getAuthor();?></td>
      <td><?php echo $data->getBook_id();?></td>
                <?php endforeach?>
       <?php foreach($borrower as $data):?>
      <td><?php echo $data->getLastname();?></td>
      <td><?php echo $data->getFirstname();?></td>
      <td><?php echo $data->getId();?></td>
        <?php endforeach?>
    </tr>
    <td></td>
    <td></td>
    <td></td>
    <td><?php if(isset($borrowingBook) && isset($borrower)):
           echo '<button class="btn btn-danger mt-2" value="" type="submit">Enregistrer l\'emprunt</button></td>';

    else: echo '<class="alert alert-warning"> Veuillez vérifier l\'enregistrement, des incohérences subsistent</td> ';
           
      endif;?>


  </tbody>
</table>

    <div class="row justify-content-around mt-5">
                   
        <div class="card col-4 my-5" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Numéro du livre </h5>
            <input class="form-control me-2"  placeholder="4587" aria-label="Search" name="book">
          </div>
        </div>


     <div class="card col-4 my-5" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Numéro de l'adhérent</h5>
            <input class="form-control me-2" placeholder="ex : 75-42-39" aria-label="Search" name="user">
            <button class="btn btn-outline-primary mt-2" value="borrowing" type="submit">Vérifiez la Disponibilité</button>
          </div>
        </div>

    </div>
</form>
 