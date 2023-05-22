<?php
include('header.php'); 
include "config.php";

try {
    // Requête pour récupérer tous les enregistrements de la table "aventure"
    $sql = "SELECT * FROM aventure";
    $stmt = $conn->query($sql);
    $adventures = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Une erreur s'est produite lors de la récupération des données : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>





<div class="container-fluid">
     <img src="images/mountains-mobile.jpeg" width="1240" alt="">
     <br>
     <h3>Upcoming Adventures</h3>
     <hr style="color:black;">

     <?php if (isset($adventures) && !empty($adventures)) : ?>
     <?php foreach ($adventures as $adventure) : ?>
     <h4 style=color:green><?php echo $adventure['heading']; ?></h2>
     <p>Date : <?php echo $adventure['tripDate']; ?>  </p>
     <p>Duration : <?php echo $adventure['duration']; ?> </p>
     <p>Sumary <br>
     <?php echo $adventure['summary']; ?>
     </p>
    

     <?php endforeach; ?>
    
     <?php else : ?>
            <p>Aucune aventure n'a été trouvée.</p>
        <?php endif; ?>
             
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include('footer.php'); ?>