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


// get id of post client


if (isset($_SESSION['id_post'])) {

    
    // $sql = "SELECT * FROM publication INNER JOIN client ON publication.idclient = client.idclient "; 

    $id = $_GET['id'];
    $data = mysqli_fetch_assoc(
        mysqli_query($conn, "SELECT * FROM publication INNER JOIN client ON publication.idclient = client.idclient  WHERE  id_post = $id")
    );
   
    ?>
    
    <?php
}



?>
<body>
<style>
body {background-color: #fbfbffb2;}
</style>

<section  class="container">


<div class="container row">
    <div class="col-7" id="offerInfo">
    
        <h6><?php echo $data['nom']. " " .$data['prenom']; ?><span class="col d-flex justify-content-end">Crée le <?php echo $data['date'] ?></span></h6>
        <h3><?php echo $data['nomPost'] ;?></h3>
        <h5><?php echo $data['categorie'] ?></h5>
        <div class="row">
            <div class="col">
            <button class="btn btn-primary" type="submit"><a href="#"><i class="fa-solid fa-bolt"></i>&nbsp;Postuler</a> </button>
            </div>
           
            
            <div id="offerSocial" class="col d-flex justify-content-end" >
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
                     </div>
            </div>
            <img id="imageOffer_Client" class="d-flex justify-content-centre" src="<?php echo $data['imageOffer'] ;?>">
            <p><?php echo $data['description'] ;?></p>

        </div>
 
    <div  class="col-4" >
        <div id="clientInfo">
            <img src="<?php echo $data['image'] ;?>" alt="">           
            <div class="row">
                <div class="col-10">
                <h4><?php echo $data['nom']. " " .$data['prenom']; ?></h4>
                
                </div>
                <div class="col">
                <i class="fa-solid fa-globe"></i>
                </div>
            </div>
            <p>Kinetik développe une application d'entraînement pour rendre le CrossFit plus social et amusant. Dans un effort pour démarrer une entreprise sociale, les fondateurs ont découvert que leur passion pour le fitness et la technologie pouvaient être combinées pour aider des millions de personnes à améliorer leur vie à la fois physiquement et mentalement. L'entreprise en est encore à ses débuts de développement et est située à la fois à San Francisco 🇺🇸 et à Taipei 🇹🇼. ☝️Ce poste est affiché par une entreprise partenaire d'Uxcel, dans le cadre des services Uxcel Recruit.</p>
            <div class="d-flex justify-content-end">
                 <button id="lastBtn_Contact" class="btn btn-primary" type="submit"><a href="#">Contacter</a> </button>
            </div>
        </div>
        <div id="callTacti">
           <h5><?php echo $data['nomPost'] ;?></h5>
           <h6><?php echo $data['categorie'] ?></h5>
           <span class="">Crée le <?php echo $data['date'] ?></span>
           <div class="col">
            <button class="btn btn-primary" type="submit"><a href="#"><i class="fa-solid fa-bolt"></i>&nbsp;Postuler</a> </button>
            </div>
        </div>
    </div>
 

</div>
</section>



</body>

<footer id="footer2">
        <?php
       include('footer.php');

       ?>


       </footer> 