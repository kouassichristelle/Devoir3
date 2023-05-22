<?php
include('header.php'); 
// Connexion à la base de données
include "config.php";

// Récupération des données du formulaire
$titre = $_POST['titre'];
$dateDeVoyage = $_POST['dateDeVoyage'];
$durée = $_POST['durée'];
$résumé = $_POST['résumé'];

try {
    // Requête pour insérer les données dans la base de données
    $sql = "INSERT INTO aventure (heading, tripDate, duration, summary) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(1, $titre);
    $stmt->bindParam(2, $dateDeVoyage);
    $stmt->bindParam(3, $durée);
    $stmt->bindParam(4, $résumé);
    $stmt->execute();

    $message = "Data has added successfully to DB.<br>";
    
} catch (PDOException $e) {
    $erreurs = "Une erreur s'est produite lors de l'ajout des données dans la base de données : " . $e->getMessage();
}

// Fermeture de la connexion à la base de données
$conn = null;
?>




<h3 style="text-align:center;">Admin - confirm</h3>
<div class="container">
     <div class="jumbotron">
            <section class="login-block">
                <!-- Container-fluid starts -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Authentication card start -->




                            
                          
                        <?php 
                        if (isset($message))
                            {
                            echo '<p class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$message."</p>";
                            }
                            echo "<a href='all-adventures.php'>View All Adventures</a> <br>";
                            echo "<a href='admin-add.php'>Retour</a>";
                        ?>
    
                        <?php 
                        if (isset($erreurs))
                        {
                        echo '<p class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'.$erreurs."</p>";
                        }
                        ?>



                                <!-- end of form -->
                        </div>
                        <!-- end of col-sm-12 -->

                      

                    </div>
                    <!-- end of row -->
                </div>
                <!-- end of container-fluid -->
            </section>
     </div>
             
</div>


<?php include('footer.php'); ?>