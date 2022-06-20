<?php

session_start();

include('header.php');
include('datacon.php');
include('navbar.php');


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



?>
<!-- la recherche dans la page avec PHP -->

<section id="hpsndSct">
<form action="search.php" class="" method="GET">
    <div class="container treefrms">
        <div class="row">
            <div class="col-4">
            <select class="form-select form-control-lg" aria-label="Default select example" name="selects" value="<?php if (isset($_GET['selects'])) {
                        echo $_GET['search2'];
                    } ?>">
           
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
        <form action="search.php" class="" method="POST">
            
            <div class="col-4">
            <input class="form-control form-control-lg" type="text" value="<?php if (isset($_GET['search1'])) {
                        echo $_GET['search1'];
                    } ?>"  name="search1" placeholder="Rechercher">
            </div>
            <div class="col-4">
                <button class="btn Searchhmpbtn" type="submit" id="Searchhmpbtn" name="search2" >Recherche Avancée</button>
            
                
            </div>

        </div>
        </form>
    </div>
    </form>
</section>

<section class="container" id="projectsSecti">
    <div id="proRow1" class="row">
                <div class="col">
                    <h2> <i class="fa-solid fa-arrow-right"></i>&nbsp;Vous résultats de recherche</h2>
                </div>
            </div>

            <div class="card-deck">
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                   if (isset($_GET['search2'])) {
                    $filter = $_GET['search1'];
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie= '$filter'";
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
                }elseif (isset($_GET['selects'])) {
                    if (isset($_GET['selects'])) {
                        $filter = $_GET['selects'];
                        $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie= '$filter'";
                        if ($result = mysqli_query($conn, $sql)) {
                            if (mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)){
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
                    }else {
                    echo  " <tr>
                            <td colspan='4'>No Record Found</td>
                        </tr>";
                    }
                }
            }
        }
            ?>
   </div>
   </div>


   <footer id="footer2">
        <?php
       include('footer.php');

       ?>


       </footer>  