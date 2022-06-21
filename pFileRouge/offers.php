<?php

session_start();

include('header.php');
include('datacon.php');
include('navbar.php');


$titleErr = $categoriesErr = $prixErr = $dateErr  = $imageErr=$linkErr=$descriptErr="";
$nomProj = $categorieProj = $prixPro = $date= $imageProj= $linkProj = $descriPro="";



$data = "";
if (isset($_SESSION['id_free']) && $_SESSION['id_free'] != "") {

    // $requet="SELECT * FROM client WHERE email='$email' AND passwords='$pass'";
    //   $result=mysqli_query($conn,$requet);

    $idFreelancer = $_SESSION["id_free"];
    $data = mysqli_fetch_assoc(
        mysqli_query($conn, "SELECT * FROM freelancers WHERE  idFreelancer = $idFreelancer")
    );
   
    ?>
    
    <?php
}
if (isset($_SESSION['id_cli']) && $_SESSION['id_cli'] != "") {
    $idClient = $_SESSION["id_cli"];
    $data = mysqli_fetch_assoc(
        mysqli_query($conn, "SELECT * from client WHERE  idclient = $idClient")
    );
   
    ?>
    
    <?php
}
if($_SERVER['REQUEST_METHOD']== 'POST'){
 
    if (empty($_POST["nomProj"])) {
        $titleErr = '<span class="redi">Le titre est requis</span>';
       
     }
     if (empty($_POST["categorieProj"])) {
        $categoriesErr = '<span class="redi">La categorie est requis</span>';
        
      }
      if (empty($_POST["date"])) {
        $dateErr = '<span class="redi">Le date est requis</span>';
        
      }
      if (empty($_POST["prixPro"])) {
        $prixErr = '<span class="redi">Le prix est requis</span>';
        
      }
      if (empty($_POST["imageProj"])) {
        $imageErr = '<span class="redi">limage est requis</span>';
        
      }
      if (empty($_POST["descriPro"])) {
        $descriptErr = '<span class="redi">Le description est requis</span>';
        
      }
      if (empty($_POST["linkProj"])) {
        $linkErr = '<span class="redi">Le link est requis</span>';
        
      }
  
    
   


if(isset($_POST['submits'])){
 

  

 $nomProj =$_POST['nomProj'];
 $categorieProj=$_POST['categorieProj'];
 $date =$_POST['date'];
 $imageProj =$_POST['imageProj'];
$descriPro = $_POST['descriPro'];
$idClient = $_SESSION["id_cli"];
 // select where field name=email


if($titleErr == ""  && $categoriesErr == ""  &&  $imageErr== "" && $descriptErr == "" && $imageErr=="")
 {
     $insert="INSERT INTO `publication`(`idclient`, `nomPost`, `categorie`, `imageOffer`, `date`, `description`)
         VALUES ('$idClient','$nomProj','$categorieProj','$imageProj','$date','$descriPro')";
         
     $query2=mysqli_query($conn,$insert) or die('query failed, '.$insert);
     

    echo '<script>alert("Le processus d inscription s est terminé avec succès")</script>';
}
else
{
    echo '<script>alert("errooooooooooooooooooooooooooooor")</script>';
   }
 
 
}

}
// }
?>






<style>

#offersBack{
    width: 100%;
    marg
}





</style>













<section >
<div >
    <div class=" row "  id="offersBack2">
    <div class="col-5" id="backImgs">
            <div id="movementImaes">
                <img id="image1" src="images/jobOffer4.png" alt="">
            </div>
            <div>
                <img id="image2" src="images/JobOffer1.png" alt="">
            </div>
            <div>
                <img id="image3" src="images/jobOffer3.png" alt="">
            </div>
            <div>
                <img id="image3" src="images/jobOffer2.png" alt="">
            </div>
            <div>
                <img id="image3" src="images/jobOffer5.png" alt="">
            </div>
            <div>
                <img id="image3" src="images/jobOffer6.png" alt="">
            </div>

        </div>
        
        <div class="col" id="addPro_section2">    
            <h1>Ajouter un offre pour trouver un talent</h1>
            <hr>
            <form action="offers.php" method="POST" id="formValid">
            <div class="mb-3 mt-3">

            <label for="nomPro" class="form-label">Nome d'offre</label>
                <input id="nomPro" class="form-control" type="text" placeholder="Freelance Plateforme" name="nomProj" aria-label="default input example">
                
            </div>
            <?php echo $titleErr; ?>
            <div class="mb-3 mt-3">
                <label for="categPro" class="form-label">Categorie</label>
                <input id="categPro" class="form-control" type="text" placeholder="Digital Marketing" name="categorieProj" aria-label="default input example">
                
            </div>
            <?php echo $categoriesErr; ?>
            <div class="mb-3 mt-3">
                <label for="datePro" class="form-label">Date de création</label>
                <input id="datePro" class="form-control" type="date" placeholder="15/06/2022" name="date" aria-label="default input example">
                
            </div>
            <?php echo $dateErr; ?>
            
            
            
            <div class="mb-3 mt-3">
            <label for="imagelProj" class="form-label">Image</label>
                <input  id="imagelProj" class="form-control " type="text" placeholder="image.png" name="imageProj" aria-label="default input example">
                
            </div>
            <?php echo $imageErr; ?>
           
        
            <div class="mb-3 mt-3 ">
            <label for="descriPro" class="form-label">Description</label>
                <textarea  id="descriPro" class="form-control" type="text" placeholder="ce project est un plateforme..." name="descriPro" aria-label="default input example"></textarea>
                
            </div>
            <?php echo $descriptErr; ?>
            <div class="row">
            <div class="col-5 d-flex justify-content-end">
                
                </div>
                <div class="col d-flex justify-content-end">
                    <input class="form-control" id="cancels" type="reset" name="cancel" value="Annuler" />
                </div>
                <div class="col">
                    <input class="form-control" id="saves" type="submit" name="submits" value="Ajouter" />
                </div>
                
            </div> 
     
        


   
        
      
      

</form>
</section>



<footer id="footer2">
        <?php
       include('footer.php');

       ?>


       </footer> 
      