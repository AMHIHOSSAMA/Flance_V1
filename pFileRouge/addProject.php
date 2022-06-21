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
 $prixPro=$_POST['prixPro'];
 $date =$_POST['date'];
 $imageProj =$_POST['imageProj'];
 $linkProj = $_POST['linkProj'];
$descriPro = $_POST['descriPro'];
$idFreelancer = $_SESSION["id_free"];
 // select where field name=email


if($titleErr == ""  && $categoriesErr == ""  && $prixErr == ""  && $imageErr== "" && $linkErr =="" && $descriptErr == "" && $imageErr=="")
 {
     $insert="INSERT INTO `projets_profss`(`idFreelancer`, `titre`, `descriProj`, `urlProjet`, `imageProj`, `categorie`, `prix`)
         VALUES ('$idFreelancer','$nomProj','$descriPro','$linkProj','$imageProj','$categorieProj', $prixPro)";
         
     $query2=mysqli_query($conn,$insert) or die('query failed, '.$insert);
    

    echo '<script>alert("Le processus d inscription s est terminé avec succès")</script>';
}
else
{
    echo '<script>alert("Le projet est pas ajouter")</script>';
   }
 
 
}

}
// }
?>




















<section >
<div >
    <div class="row container" >

        
        <div class="col-6" id="addPro_section">    
            <h1>Ajouter un projet à votre portfolio</h1>
            <hr>
            <form action="addProject.php" method="POST" id="formValid">
            <div class="mb-3 mt-3">

            <label for="nomPro" class="form-label">Nome de projet</label>
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
                <label for="prixPro" class="form-label">Prix de projet</label>
                <input id="prixPro" class="form-control" type="number" placeholder="500 Dh" name="prixPro" aria-label="default input example">
                
            </div>
            <?php echo $prixErr; ?>
            <div class="mb-3 mt-3">
            <label for="imagelProj" class="form-label">Image</label>
                <input  id="imagelProj" class="form-control " type="text" placeholder="image.png" name="imageProj" aria-label="default input example">
                
            </div>
            <?php echo $imageErr; ?>
            <div class="mb-3 mt-3">
            <label for="imagelProj" class="form-label">Linke de projet</label>
                <input  id="linkProj" class="form-control " type="text" placeholder="https://" name="linkProj" aria-label="default input example">
                
            </div>
            <?php echo $linkErr; ?>
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
        </div>
        <div class="col" id="backImgs">
            <div>
                <img id="image1" src="https://assets.website-files.com/61f9082050036c5b7a4899f5/6283c87ccedbf963f88c893a_img-2-min-p-800.png" alt="">
            </div>
            <div>
                <img id="image2" src="https://assets.website-files.com/61f9082050036c5b7a4899f5/6284a3958ebdd4c3192fbd2a_improve%20your%20design%20skills%20with%20interactive%20learning-p-800.png" alt="">
            </div>
            <div>
                <img id="image3" src="https://assets.website-files.com/61f9082050036c5b7a4899f5/6283c935f863dd262a489295_img-3-min-p-800.png" alt="">
            </div>

        </div>


     </div>
        
      
      
</div>
</form>
</section>




      
<footer id="footer2">
        <?php
       include('footer.php');

       ?>


       </footer> 