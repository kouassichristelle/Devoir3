<?php 
include('header.php'); 
include('config.php')
?>

<h3 style="text-align:center;">Admin - Add adventure</h3>
<div class="container">
     <div class="jumbotron">
            <section class="login-block">
                <!-- Container-fluid starts -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Authentication card start -->

                            <form method="post" action="admin-confirm.php">
                                
                             
                                <div class="form-group form-primary">   
                                    <label for="titre">heading :</label>
                                    <input type="text" class="form-control" id="titre" name="titre" required><br><br>
                                </div>
                                
                               
                               
                                <div class="form-group form-primary">
                                    <label for="dateDeVoyage">Trip Date :</label>
                                    <input type="date" class="form-control" id="dateDeVoyage" name="dateDeVoyage" required><br><br>
                                </div>
                        


                                <div class="form-group form-primary">
                                    <label for="durée">Duration :</label>
                                    <input type="number" class="form-control" id="durée" name="durée" required><br><br>
                                </div>

                                <div class="form-group form-primary">
                                    <label for="résumé">Summary :</label>
                                    <textarea id="résumé" class="form-control" name="résumé" required></textarea><br><br>
                                </div>

                                <div class="col-md-2">
                                    <button type="submit" value="Ajouter" onclick="showAlert()" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">submit</button>
                                </div>

                               
                            </form>

                            <!-- <p>Appuyez sur les liens ci-dessous pour afficher des alertes :</p>
                            <a href="#" onclick="alert('Alerte 1')">Alerte 1</a>
                            <a href="#" onclick="alert('Alerte 2')">Alerte 2</a> -->
                    
        
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