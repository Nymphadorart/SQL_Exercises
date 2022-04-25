<?php
    try
    {
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=weather-app;charset=utf8', 'root', 'root');
    }
    catch(Exception $e)
    {
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }

        $resultat = $bdd->query('SELECT * FROM météo');


      /*  while ($donnees = $resultat -> fetch()) {
            echo "<pre>";
            print_r ($donnees['Ville']);
            echo "</pre>";
            echo "<pre>";
            print_r ($donnees ['Haut']);
            echo "</pre>";
            echo "<pre>";
            print_r ($donnees ['Bas']);
            echo "</pre>";
        }
        $resultat->closeCursor(); */
    
?>


<table>
    <thead>
        <tr>
            <th>Ville</th>
            <th>Haut</th>
            <th>Bas</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = $resultat -> fetch()):?>
        <tr>
            <td><?php echo($row['Ville']); ?></td>
            <td><?php echo($row['Haut']); ?> </td>
            <td><?php echo ($row['Bas']); ?></td>
        </tr>
        <?php 
            endwhile;
            $resultat -> closeCursor(); 
        ?>
    </tbody>
</table>
<br>
<br>

<form action="" method="get">
    <div>
        <label for="Ville">Ajoute une ville</label>
        <input type="" name="Ville">
    </div>
    <br>
    <div>
        <label for="haut">Température max</label>
        <input type="" name="Haut">
        <label for="Bas">Température min</label>
        <input type="" name="Bas">
    </div>
    <input type="submit" name="valid" value="valid">
</form>

