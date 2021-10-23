<div>
<h2>LISTES DES PRODUITS</h2>
   <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>référence</th>
                <th>libéllé</th>
                <th>quantité minimale</th>
                <th>quantité en stock</th>
                <th>action</th>
                
                
            </tr>
        </thead>
        <tbody>
            <?php
                $i=1;
                while ($row = $select_produit -> fetch()){
                    echo "<tr>"; 
                        echo "<td>$row[reference]</td>";
                        echo "<td>$row[libelle]</td>";
                        echo "<td>$row[quantite_minimale]</td>";
                        echo "<td>$row[quantite_en_stock]</td>";
                        echo "<td><a href=\"?sup=$row[reference]\">supprimer</a> 
                        | <a href=\"?modif=$row[reference]\">modifier</a> </td> ";
                    echo " </tr>";
                    $i++;
                } 
            ?>
        </tbody>
    </table>
</div>
