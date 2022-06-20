<?php

session_start();


include('header.php');
include('datacon.php');
include('navbar.php');

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


if (isset($_SESSION['freelancer'])) {
    $idFreelancer = $_SESSION['freelancer']['idFreelancer'];
    $data = mysqli_fetch_assoc(
        mysqli_query($conn, "select * from freelancers WHERE  idFreelancer = $idFreelancer")
    );
   
    ?>
    
    <?php

}



?>

<section id="videSect">
    vide section
</section>
<section id="hpsndSct">
    <div class="container   treefrms">
        <div class="row">
            <div class="col-4">
            <select class="form-select form-control-lg" aria-label="Default select example">
           
            <!-- Geting the 3 categoris from database to selecte chois -->

           <?php
            $i =0;
            $sql = "SELECT * FROM categories";
            $query = mysqli_query($conn, $sql);

            while($row = mysqli_fetch_array($query)){

            echo '
            
            <option value='.$row['nom'].'>' .$row['nom'].'</option>
            ';
            }
        ?>
        
        <!-- end  -->
        </select>

            </div>
            <div class="col-4">
            <input class="form-control form-control-lg" type="text" placeholder="Rechercher">
            </div>
            <div class="col-4">
                <button class="btn Searchhmpbtn" type="button" id="Searchhmpbtn" >Recherche Avancée</button>
            </div>

        </div>

    </div>

</section>


<section class="container" id="projectsSecti">
            
            <div class="card-deck">
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer ";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                                $id = $row['numProj'];
                            echo "
                            <div class='col'>
                            <div id='cards' class='card'>
                            <a href='projets_details.php?id=$id'><img class='card-img-top' src=". $row['imageProj'] ." alt='Card image cap'></a>
                            <div class='card-body'>
                              <h5 id='titlePro' class='card-title'>". $row['titre'] ."</h5>
                              <div class='row persInf'>
                                <div class='col-3'>
                                <a href=''><img id='hmpHero' class='card-img-top' src=". $row['image'] . " alt='Card image cap'></a>
                                </div>
                                 <div class='col-8'>
                                    <h6>". $row['nom'] . " " . $row['prenom'] ."</h6>
                                </div>
                            </div>
                              <p class='card-text prProj'>". $row['descriProj'] ."</p>
                              <i id='star' class='fa-solid fa-star'>&nbsp;5.0</i>
                            </div>
                            <div class='card-footer'>
                            <span class='text-muted spanPrice'>À PARTIR DE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row['prix'] ."&nbsp;Dh</span>
                            </div>
                          </div>
                          </div>
                            ";
                            $_SESSION["id_projet"] = $row["numProj"];
                        }
                    }

                    }
            ?>
   </div>
   </div>
</div>
</section>


<footer id="footer2">
        <?php
       include('footer.php');

       ?>


       </footer> 