<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<?php

session_start();
include('header.php');
include('datacon.php');
include('navbar.php');
?>
<?php

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

<?php


?>





<section id="hpfrsSct">
    <div class="container" id="salut">
        <div class="row ">
            <div class="col-3" id="pinkCol">
                    <div class="wrapper">
                        <div class="typing-demo">
                        <h3> <?php echo "Salut" . " " . $data['prenom'] ; ?></h3>
                        </div>
                    </div>
                
                <p>Recevez des offres de vendeurs pour votre projet</p>
                <button id="offerBut" type="button"  class="btn btn-3">Toute catégorie</button>
            </div>
            <div class="col-7" id="salut2">
                <h2>Voici ce que vous <br> devez créer</h2>

            </div>

        </div>
    </div>
</section>






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




<section class="container" id="caresolHpage">
   <!--Carousel Wrapper-->

        <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
        <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
        <li data-target="#multi-item-example" data-slide-to="1"></li>
        </ol> 
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
        <div class="col-md-4" style="float:left">

        <div class="card mb-3">
        <img class="card-img-top"src="https://fiverr-res.cloudinary.com/t_gig_cards_web_x2,q_auto,f_auto/gigs/107518560/original/667ca24630ee96ffc458663444007d14d0a666ec.png" alt="Card image cap"></div>
        </div>
        <div class="col-md-4" style="float:left">
        <div class="card mb-3"><img class="card-img-top"src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto,w_400,dpr_1.0/attachments/delivery/asset/b3eff28fe2bc3be4baa0fbe4b18fef6d-1594071157/lovetate21_1/colourful-digital-illustrations-character-in-the-interior.png" alt="Card image cap"></div>
        </div>
        <div class="col-md-4" style="float:left">
        <div class="card mb-3"><img class="card-img-top"src="https://fiverr-res.cloudinary.com/images/q_auto,f_auto,w_400,dpr_1.0/attachments/delivery/asset/f023f068fc8987bfda53204b7777f5ae-1594943083/1b/illustrate-something-witty-for-you.png" alt="Card image cap"></div>
        </div>
        </div>
        <!--/.First slide-->

        <!--Second slide-->
        <div class="carousel-item">
        <div class="col-md-4" style="float:left">

        <div class="card mb-3">
        <img class="card-img-top"src="https://fiverr-res.cloudinary.com/t_gig_cards_web_x2,q_auto,f_auto/gigs/179242631/original/963e3771ef9ee15c95dd81aeca6d62f6f5d48477.jpg" alt="Card image cap"></div>
        </div>
        <div class="col-md-4" style="float:left">
        <div class="card mb-3"><img class="card-img-top"src="https://fiverr-res.cloudinary.com/t_gig_cards_web_x2,q_auto,f_auto/gigs/179092272/original/084d7b5bae567d5efb3d0e1d837a05a5da07911c.jpg" alt="Card image cap"></div>
        </div>
        <div class="col-md-4" style="float:left">
        <div class="card mb-3"><img class="card-img-top"src="https://fiverr-res.cloudinary.com/video/upload/t_gig_cards_web/bt4izyhmb1ej5kjdp8ft.png" alt="Card image cap"></div>
        </div>
        <!--/.Second slide-->
        </div>
        <!--/.Slides-->

        </div>

</section>



<section class="container" id="projectsSecti">
    <div id="proRow1" class="row">
                <div class="col">
                    <h2>Digital Marketing</h2>
                </div>
                <div class="col">
                    <a class="lnkCompts" href="marketingPage.php">Voir tout <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>


            
            <div class="card-deck">
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Digital Mark' ORDER BY RAND () LIMIT 4";
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
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Design' ORDER BY RAND () LIMIT 4";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                                $id = $row['numProj'];
                            echo "
                            <div class='col'>
                            <div id='cards' class='card'>
                            <a href='projets_details.php?id=$id'> <img class='card-img-top' src=". $row['imageProj'] ." alt='Card image cap'></a>
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
                            $_SESSION["id_projet"] = $row["numProj"];
                        }
                    }

                    }

            ?>
   </div>
   </div>
</div>


<div id="proRow3" class="row">
                <div class="col">
                    <h2>Programmation</h2>
                </div>
                <div class="col">
                    <a class="lnkCompts" href="programPage.php">Voir tout <i class="fa-solid fa-angle-right"></i></a>
                </div>
            </div>


            
            <div class="card-deck">
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Programmation' ORDER BY RAND () LIMIT 4";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                                $id = $row['numProj'];
                            echo "
                            <div class='col'>
                            <div id='cards' class='card'>
                            <a href='projets_details.php?id=$id'>  <img class='card-img-top' src=". $row['imageProj'] ." alt='Card image cap'></a>
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
                            $_SESSION["id_projet"] = $row["numProj"];
                        }
                    }

                    }



            ?>
   </div>
   </div>
</div>
</section>
</section>

</section>
<?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Programmation' ORDER BY RAND () LIMIT 4";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){}
                        }
                    }
                                ?>


<section id="sect3Free" class="container justify-content-center">
                    <h2 id="creFree" class="d-flex justify-content-center">Créative Freelancers</h2>
                    <p id="paragFree100" class="d-flex justify-content-center">Trouvez les talents nécessaires pour faire croître votre entreprise.</p>
        <div class="row d-flex justify-content-between" id="freeCards">
        <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Programmation' ORDER BY RAND () LIMIT 1";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                echo "
                    <div id='freeCards1' class='col  freeCards'>
                    
                    <img class='d-flex justify-content-center' src=". $row['image'] ." alt=''>
                    <h5 class='d-flex justify-content-center'>". $row['titleFree'] ."</h5>
                    <div  class='row pricE'>
                        <div class='col'>
                        <i class='fa-solid fa-sack-dollar grinCls'></i>
                        </div>
                        <div class='col'>
                            <P>". $row['prix'] ."&nbsp;Dh</P>
                        </div>
                        <div class='col'>
                            <p class='grinCls'>/Par projet</p>
                        </div>
                    </div>
                    <div class='row pricE'>
                        <div class='col-3'>
                        <i class='fa-solid fa-heart hrtIco'></i>
                        </div>
                        <div class='col-6'>
                        <button  type='button' id='btnSpeatial'    class='btn btn-outline btnAddproject2'><a class='voirPlusB' href='#'>Voir plus</a></button>
                        </div>
                    </div>
                </div> ";
                         }
                        }
                    }
                                ?>
                                <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Design' ORDER BY RAND () LIMIT 1";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                echo "
                    <div id='freeCards2' class='col  freeCards'>
                    
                    <img class='d-flex justify-content-center' src=". $row['image'] ." alt=''>
                    <h5 class='d-flex justify-content-center'>". $row['titleFree'] ."</h5>
                    <div class='row pricE'>
                        <div class='col'>
                        <i class='fa-solid fa-sack-dollar grinCls'></i>
                        </div>
                        <div class='col'>
                            <P>". $row['prix'] ."&nbsp;Dh</P>
                        </div>
                        <div class='col'>
                            <p class='grinCls'>/Par projet</p>
                        </div>
                    </div>
                    <div class='row pricE'>
                        <div class='col-3'>
                        <i class='fa-solid fa-heart hrtIco'></i>
                        </div>
                        <div class='col-6'>
                        <button  type='button' id='btnSpeatial'    class='btn btn-outline btnAddproject2'><a class='voirPlusB' href='#'>Voir plus</a></button>
                        </div>
                    </div>
                    
                </div> ";
                         }
                        }
                    }
                                ?>
                                    <?php
                    $sql = "SELECT * FROM projets_profss   INNER JOIN freelancers ON projets_profss.idFreelancer = freelancers.idFreelancer WHERE categorie='Digital Mark' ORDER BY RAND () LIMIT 1";
                    if ($result = mysqli_query($conn, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)){
                echo "
                    <div  id='freeCards2' class='col  freeCards'>
                    
                    <img class='d-flex justify-content-center' src=". $row['image'] ." alt=''>
                    <h5 class='d-flex justify-content-center'>". $row['titleFree'] ."</h5>
                    <div class='row pricE'>
                        <div class='col'>
                        <i class='fa-solid fa-sack-dollar grinCls'></i>
                        </div>
                        <div class='col'>
                            <P>". $row['prix'] ."&nbsp;Dh</P>
                        </div>
                        <div class='col'>
                            <p class='grinCls'>/Par projet</p>
                        </div>
                    </div>
                    <div class='row pricE'>
                        <div class='col-3 heartIcon'>
                        <i class='fa-solid fa-heart hrtIco'></i>
                        </div>
                        <div class='col-6'>
                        <button  type='button' id='btnSpeatial'class='btn btn-outline btnAddproject2'><a class='voirPlusB' href='#'>Voir plus</a></button>
                        </div>
                    </div>
                </div> ";
                         }
                        }
                    }
                                ?>
           
            

        </div>

</section>

    
    <Section class="row" id="buildProj_Sec">
        <div class="col-2">
            <img src="https://assets.website-files.com/61f9082050036c5b7a4899f5/6283cd10e5e9524d81c8c7a1_start-1-min-p-800.png" alt="">
        </div>
        <div class="col-8" id="Commencez">
        <h1 class="col d-flex justify-content-center">Commencez à construire votre projet</h1>
        <p class="col d-flex justify-content-center">Construisez et partagez vos projets pour trouver des clients qui le recherchent</p>
        <button  type="button" class="btn btn-primary d-flex justify-content-center"><a href="addProject.php">Construire votre projet</a> </button>
        </div>
        <div class="col-2" id="Commencez2">
            <img id="buildProj_Img2" class="col d-flex justify-content-end" src="https://assets.website-files.com/61f9082050036c5b7a4899f5/6283cd7422db9d7369ca7efa_start-2-min.png" alt="">
        </div>

    
    </Section>


    
     <section>

     
     <footer id="footer2">
        <?php
       include('footer.php');

       ?>


       </footer>

     </section>   
       