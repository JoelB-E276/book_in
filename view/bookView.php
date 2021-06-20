<main class="container my-5">
<table class="table table-striped">
    <h2>Liste des emprunteurs<h2>
    <thead>
        <tr>        
        <th scope="col">N° de carte</th>
        <th scope="col">Prénom</th>
        <th scope="col">Nom</th>        
        <th scope="col">N° du livre</th>
        <th scope="col">email</th>
        <th scope="col">Ville</th>
       </tr>
    </thead>
    <tbody><?php foreach($getUserByBook as $data):?>
        <tr>  
        <td class="table-primary"><?php echo $data->getId();?></td>
        <td><?php echo $data->getFirstname();?></td>
        <td><?php echo $data->getLastname();?></td>     
        <th scope="row" class="table-danger"><?php echo $data->getBook_id();?></th>
        <td><?php echo $data->getEmail();?></td>
        <td><?php echo $data->getCity();?></td>
        <?php endforeach?>
        </tr>
    </tbody>
    </table>
    <h3>Liste des livres</h3>
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Disponible</th>
        <th scope="col">N° carte emprunteur</th>
        <th scope="col">Titre</th>
        <th scope="col">N° du livre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Genre</th>
        <th scope="col">Edition</th>
        <th scope="col">Nombre de page</th>
        <th scope="col">Résumé</th>
        </tr>
    </thead>
    <tbody><?php foreach($getBooks as $data):?>
        <tr>

        <th scope="row"><?php echo $data->getAvailability();?></th>
        <td class="table-primary"><?php echo $data->getUser_id();?></td>
        <td><?php echo $data->getTitle();?></td>
        <td class="table-danger"><?php echo $data->getBook_id();?></td>
        <td><?php echo $data->getAuthor();?></td>
        <td><?php echo $data->getGenre();?></td>
        <td><?php echo $data->getEdition();?></td>
        <td><?php echo $data->getNumber_pages();?></td>
        <td><?php echo substr($data->getResume(),0,250)."...";?></td>
        <?php endforeach?>

        </tr>
    </tbody>
    </table>
</main>



