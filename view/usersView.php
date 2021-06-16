<main class="container my-5">
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Numéro de carte</th>
        <th scope="col">Nom</th>
        <th scope="col">Prénom</th>
        <th scope="col">email</th>
        <th scope="col">Ville</th>
        <th scope="col">Adresse</th>
        <th scope="col">Code postal</th>
        <th scope="col">Date de naissance</th>
        
        <th scope="col">Numéro de livre emprunté</th>

        </tr>
    </thead>
    <tbody><?php foreach($getUsers as $data):?>
        <tr>
        <th scope="row"></th>
        <td><?php echo $data->getUser_id();?></td>
        <td><?php echo $data->getFirstname();?></td>
        <td><?php echo $data->getLastname();?></td>
        <td><?php echo $data->getEmail();?></td>
        <td><?php echo $data->getCity();?></td>
        <td><?php echo $data->getCity_code();?></td>
        <td><?php echo $data->getAdress();?></td>
        <td><?php echo $data->getBirth_date();?></td>
        <td><?php echo $data->getBook_id();?></td>
        <?php endforeach?>

        </tr>
    </tbody>
    </table>
</main>


