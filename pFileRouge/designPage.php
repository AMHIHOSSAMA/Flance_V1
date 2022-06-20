<?php

session_start();

include('header.php');
include('datacon.php');
include('navbar.php');

?>
<section class="container">


<div id="proRow2" class="row">
                <div class="col">
                    <h2>Design</h2>
                </div>
                <div class="col">
                    <a class="lnkCompts" href="designPage.php">Voir tout <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>


            
            <div class="card-deck">
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Design'";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                            echo "
                            <div class='col'>
                            <div id='cards' class='card'>
                            <a href=''> <img class='card-img-top' src=". $row['imageProj'] ." alt='Card image cap'></a>
                            <div class='card-body'>
                              <h5 id='titlePro' class='card-title'>". $row['titre'] ."</h5>
                              <div class='row persInf'>
                                <div class='col-3'>
                                <a href=''>  <img id='hmpHero' class='card-img-top' src=". $row['image'] . " alt='Card image cap'></a>
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
                        }
                    }

                    }

            ?>
   </div>
   </div>
</div>

</section>

