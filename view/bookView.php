<main class="container my-5">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Disponibilité</th>
        <th scope="col">Emprunté par</th>
        <th scope="col">Titre</th>
        <th scope="col">Auteur</th>
        <th scope="col">Genre</th>
        <th scope="col">Edition</th>
        <th scope="col">Nombre de page</th>
        <th scope="col">Résumé</th>
        </tr>
    </thead>
    <tbody><?php foreach($getBooks as $data):?>
        <tr>
        <th scope="row"></th>
        <td><?php echo $data->getUser_id();?></td>
        <td><?php echo $data->getTitle();?></td>
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



