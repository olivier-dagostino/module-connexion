<?php require 'header.php'?>
<?php

            $bdd = mysqli_connect("localhost:3336","olivier","moduleconnexion","olivier-d-agostino_moduleconnexion");  // je me connecte a la base de données


            $req= mysqli_query($bdd,"SELECT * FROM utilisateurs");  // Execution de la requette

            $res= mysqli_fetch_all($req, MYSQLI_ASSOC);  //on stock le résultat de la requette dans la $res (MYSQLI_ASSOC pour récup le nom des colonnes)


           // var_dump($res); // affiche le contenu de la $res

        ?>
        

        <h1>Tableau</h1>
        <table>
            <thead>
                
                    <?php
                    echo '<tr>';                            // Ligne
                    foreach($res[0] as $key => $value){        // Pour chaque valeurs qui se trouve dans le tableau $res[0]
                       
                            echo "<th>$key</th>";              // j'affiche la $key qui correspond ici à l' (ID+NOM+NAISSANCE....  au nom de la colonne)
                        
                    }
                    echo '</tr>';
                    ?>
            </thead>
            <tbody>
                <tr>
            <?php
                
                foreach($res as $key => $value){        // pour chaque valeur qui se trouve dans la $res (pour chaques étudiants) 

                    echo '<tr>'; //on echo une ligne

                    foreach ($value as $key1 => $value1) //Pour chaque info de l'étudiant on écho une case
                    {
                        echo "<td>$value1</td>";  // j'echo l'info
                    }
                   
                        echo '</tr>'; 
                }
            ?>
            </tbody>
        </table>
    </body>
</html>

<style>
    table,
td {
    border: 2px solid #333;

    color: black;

}

th {
    border: 2px solid #333;
    background-color : yellow;
}
</style>

<?php require 'footer.php' ?>