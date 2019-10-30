<h1>Test des Modeles</h1>
<div class="row col-md-12 centered">
    <h3>Utilisateur</h3>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Collectivité</th>
                <th>Email</th>
                <th>Type Utilisateur</th>
                <th>Actif</th>
                <th>Notifier</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($utilisateurs as $utilisateur)
                {
                    echo "<tr>";
                    echo "<td>".$utilisateur['idUtilisateur']."</td>";
                    echo "<td>".$utilisateur['nomUtilisateur']."</td>";
                    echo "<td>".$utilisateur['collectivite']."</td>";
                    echo "<td>".$utilisateur['email']."</td>";
                    echo "<td>".$utilisateur['libelle']."</td>";
                    if($utilisateur['actif']==1)
                        echo "<td><span class='badge badge-success'>Oui</span></td>";
                    else
                        echo "<td><span class='badge badge-danger'>Non</span></td>";
                    if($utilisateur['notifier']==1)
                        echo "<td><span class='badge badge-success'>Oui</span></td>";
                    else
                        echo "<td><span class='badge badge-danger'>Non</span></td>";
                    echo "</tr>";
                }

                echo "<tr>";
                echo "<td>".$utilisateurID[0]['idUtilisateur']."</td>";
                echo "<td>".$utilisateurID[0]['nomUtilisateur']."</td>";
                echo "<td>".$utilisateurID[0]['collectivite']."</td>";
                echo "<td>".$utilisateurID[0]['email']."</td>";
                echo "<td>".$utilisateurID[0]['libelle']."</td>";
                if($utilisateurID[0]['actif']==1)
                    echo "<td><span class='badge badge-success'>Oui</span></td>";
                else
                    echo "<td><span class='badge badge-danger'>Non</span></td>";
                if($utilisateurID[0]['notifier']==1)
                    echo "<td><span class='badge badge-success'>Oui</span></td>";
                else
                    echo "<td><span class='badge badge-danger'>Non</span></td>";
                 echo "</tr>";


            ?>
        </tbody>
    </table>
</div>
