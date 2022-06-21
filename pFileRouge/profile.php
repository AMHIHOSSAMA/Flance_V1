<?php
session_start();

include('header.php');
include('datacon.php');
include('navbar.php');

$data = "";
 if (isset($_SESSION['id_free']) && $_SESSION['id_free'] != "") {
 
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
 if (isset($_POST['delet_btn'])) {

    $idProjet = $_SESSION["id_Proj"];

    $sql="DELETE FROM projets_profss WHERE numProj='$idProjet'";
    mysqli_query($conn,$sql);
    echo '<script>alert("Vous voulez supprimer ce projet?")</script>';
 }
 
 
 ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<section id="ProflFrst">
    <div class="container " id="prfCont1">
        <div  class="row d-flex justify-content-center">
            <div class="col-5 lesCols" id="prfstRow">
                <div id="coverImg">
                    <div class="d-flex justify-content-end">
                         <button id="btnEdite1" type="button" class="btn btn d-flex justify-content-center"><i class="fa-solid fa-pen-to-square"></i></button>
                    </div>
                </div>
                        <div id="proImg_Back" class="d-flex justify-content-center">
                        <img class="d-flex justify-content-center" id="prleImge"  src="<?php echo $data['image']; ?>" alt="">
                            
                        </div>
                    
                    <h4 id="imgDiv" class="d-flex justify-content-center"><?php echo  $data['nom'] . " " . $data['prenom']; ?></h4>
                    
                    <div class="row sousRow">
                        <div class="col">
                           <span class="editeProfIcon"><i class="fa-solid fa-calendar iconsInf"></i>&ensp; Date de naissance</span> 
                        </div>
                        <div class="col d-flex justify-content-end">
                        <span> <?php echo $data['date']; ?></span>
                        </div>
                    </div>
                    <div class="row sousRow">
                        <div class="col">
                        <span><i class="fa-solid fa-phone iconsInf"></i>&ensp;Téléphone</span>  
                        </div>
                        <div class="col d-flex justify-content-end">
                        <span><?php echo $data['telnumber']; ?></span> 
                        </div>
                    </div>
                    <div class="row sousRow">
                        <div class="col">
                        <span><i class="fa-solid fa-envelope-circle-check iconsInf"></i>&ensp; Email</span> 
                        </div>
                        <div class="col d-flex justify-content-end">
                        <span><?php echo $data['email']; ?></span>
                        </div>
                    </div>
                    <div id="iconsProf" class="d-flex justify-content-center" >
                        <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="" class="me-4 text-reset">
                         <i class="fab fa-github"></i>
                         </a>
                     </div>
            </div>
            <div class="col lesCols">
                    <div id="addProRow" class="row d-flex justify-content-end classPre">
                            <div class="col-8">
                                <p id="prepYou">Préparez vos projets pour réussir avec des pigistes experts et des outils avancés.</p>
                            </div>
                            <div class="col">
                            <button id="addPid3" type="button"  class="btn btn-3"><i class="fa-solid fa-plus"> </i>&ensp;<a href="addProject.php"> Ajouter un Projet</a></button>
                            </div>
                    </div>
                    <div id="addProRow" class="row">
                        <div class="row">
                               <div class="col">
                                <span id="descrSpans"> <i class="fa-solid fa-file-pen"></i>&ensp;Description</span> 
                               </div>
                               <div  class="col editeBtn">
                                   <button id="btnEdite1" type="button" class="btn btn"><i class="fa-solid fa-pen-to-square "></i></button>
                               </div>
                        </div>
                        <div class="row ">
                               <p><?php echo $data['desription']; ?></p>
                        </div>
                           
                    </div>
                <form action="" method="POST">
                    <div id="addProRow" class="row">
                        <span id="compSpan" ><i class="fa-solid fa-laptop-file"></i>&ensp;Ajouter votre compétences</span>
                       <div class="row row-cols-4" id="compRow1">
                                
                                    <?php
                            $i =0;
                            $sql = "SELECT * FROM competences";
                            $query = mysqli_query($conn, $sql);

                            while($row = mysqli_fetch_array($query)){

                            echo '
                            <div class="form-check col" id="compCheck">
                                    <input class="form-check-input"  type="checkbox" name="flexCheckDefault" id="flexCheckDefault '.  $i++ .'">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    ' .$row['nomCompetence'].'
                                    </label>
                                    </div> ';
                            }
                            
                            
                                
                            ?>
                         </div>
                    
                            <div class="container d-flex justify-content-end">
                            <input name="ajouter" type="submit" id="btnlogin"  value="Ajouter" class="btn btn-outline btnAddproject">
                            </div>
                        </div>
                     </div>
                </form>

        </div>


        <div>
        <div class="col-5 lesCols" id="prfstRow">
                
            </div>

    </div>
</section>


<section id="personnelProjects">
<div class="card-deck container" >
            <div id="personCard10" class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE projets_profss.idFreelancer='$idFreelancer'";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                            echo "
                            <div class='col' id='profCarts'>
                            <div id='cards' class='card'>
                            <a href=''><img class='card-img-top' src=". $row['imageProj'] ." alt='Card image cap'></a>
                            <div class='card-body'>
                              <h5 id='titlePro' class='card-title'>". $row['titre'] ."</h5>
                              <h6 id='categH6'>". $row['categorie'] ."</h6>
                              <p id='para_Prof' class='card-text '>". $row['descriProj'] ."</p>
                              <div class='row'>
                                <div class='col-7'>
                                
                                
                                </div>
                                <div class='col'>
                                    <form method='POST'>
                                        <button  id='btn_Delete' type='submit' name='delet_btn' class='btn btn-light'><i id='deleteIcon' class='fa-regular fa-trash-can'></i></button>
                                            
                                    </form>
                                </div>

                            </div>
                            </div>
                            
                          </div>
                          </div>
                            ";
                            $_SESSION['id_Proj'] = $row['numProj'];
                        }
                    }

                    }
            ?>
   </div>
   </div>
</section>


<footer id="smallft">
<hr id="hrfooter" >
    <div class="container">
        <div class="row">
            <div class="col">
                <p>© Flance International Ltd. 2022</p>
            </div>
            <div class="col">
                <p>Conditions d'utilisation</p>
            </div>
            <div class="col">
                <p>Politique de confidentialité</p>
            </div>
        </div>

    </div>
</footer>