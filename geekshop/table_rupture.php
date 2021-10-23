<div class="main">
<h2>LISTES DES PRODUITS</h2>
   <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th>référence</th>
                <th>libéllé</th>
                <th>quantité minimale</th>
                <th>quantité en stock</th>
                
                
                
            </tr>
        </thead>
        <tbody>
            <?php
                $i=1;
                while ($row = $select_produit_rupture -> fetch()){
                    echo "<tr>"; 
                        echo "<td>$row[reference]</td>";
                        echo "<td>$row[libelle]</td>";
                        echo "<td>$row[quantite_minimale]</td>";
                        echo "<td>$row[quantite_en_stock]</td>";
                    echo " </tr>";
                    $i++;
                } 
            ?>
        </tbody>
    </table>
</div>
