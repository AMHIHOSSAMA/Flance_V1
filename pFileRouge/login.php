<?php

session_start();

// if(isset($_SESSION['freelancer'])) header('location: homePage.php');
// if(isset($_SESSION['client'])) header('location: homePage.php');



include('header.php');
include('datacon.php');


$errorpass="";
if(isset($_POST['submits'])){

  $email=$_POST['email'];
  $pass=$_POST['password'];
  $radios = "true";
  $id = "";


  if(!empty($_POST['fav_language'])) {
      
  
  $radioVal = $_POST['fav_language'];
    if( $radioVal == "freela")
    {
     
      $requet="SELECT * FROM freelancers WHERE email='$email' AND passwords='$pass'";
      $result=mysqli_query($conn,$requet);
  if($result->num_rows > 0)
  {
    $row=mysqli_fetch_assoc($result);

    $requet_1="SELECT * FROM freelancers WHERE email='$email'";
    $result_1=mysqli_query($conn,$requet_1);
    $row_1=mysqli_fetch_assoc($result_1);

    $_SESSION["id_free"] = $row_1["idFreelancer"];
    
    $_SESSION['id_cli'] = "";

    // $_SESSION['eamilFree']=$email;

    // $_SESSION['freelancer']=$row;


    header("Location:homePage.php");
    echo "login success";
  }

  else
  {
      $errorpass=' <span id="spanerror" class="error">le mot de passe est incorrecte !!</span>';
      
    
  }

  }

  else if($radioVal == "clientes")
  {


      $requet="SELECT * FROM client WHERE email='$email' AND passwords='$pass'";
      $result=mysqli_query($conn,$requet);
  if($result->num_rows > 0)
  {
    $row=mysqli_fetch_assoc($result);

    // $_SESSION['eamilFree']=$email;

    $_SESSION['id_free']="";
    $_SESSION['id_cli'] = $row['idclient'];


    header("Location:homePage.php");
    echo "login success";
  }

  else
  {
      $errorpass=' <span id="spanerror" class="error">le mot de passe est incorrecte !!</span>';
      
    
  }
   
      
  }

} 

else 
{
  echo '<script>alert("CHOISIR DABORD VOTRE RÔLE")</script>';
}
  
  //die($requet);
  // $result=mysqli_query($conn,$requet);
  // if($result->num_rows > 0){
  //   $row=mysqli_fetch_assoc($result);

  //   // $_SESSION['eamilFree']=$email;

  //   $_SESSION['freelancer']=$row;


  //   header("Location:homePage.php");
  //   echo "login success";
  // }else{
  //     $errorpass=' <span id="spanerror" class="error">le mot de passe est incorrecte !!</span>';
      
    
  // }
}

?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<nav id="navbar2" class="navbar navbar-expand-lg navbar-light ">
  <div class="container-fluid">
    <a class="navbar-brand" href="landPage2.php"><img id="logo" src="images/logoV.png" alt="logo flance "></a>
    <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="d-flex justify-content-end">
    <button type="button" id="btnlogin" class="btn btn-outline"><a id="uplnk" href="selection.php"> Sing up</a></button>

      </div> 
    
  </div>
 
</nav>
<hr id="hrnav">
<section class="container " id="cartcontner">

<form action="" method="POST" >
    <h3 class="d-flex justify-content-center">Connectez-vous à Flance</h3>
    <div class="row d-flex justify-content-center" id="radios2">
        <div class="col">
          <input type="radio" id="client" name="fav_language" value="clientes" checked>
          <label for="clientRadio">Client</label>
        </div>

        <div class="col">
          <input type="radio" id="freelancer" name="fav_language" value="freela">
          <label name="" for="freelancerRadio">Freelance</label>
        </div>
    </div>
      </div>
    
    
    
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="eamil" name="email" placeholder="Email" aria-label="default input example">
      </div>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="password" name="password" placeholder="Mot de passe" aria-label="default input example">
      </div>
      <?php echo $errorpass ?>
      <div>
            <input class="form-control" id="crees" type="submit" name="submits" value="Connectez-vous" />
        </div>
      
        
      <h6 class="d-flex justify-content-center" id="ouline">OU</h6>
      <button  type="button" id="applic" class="btn btn-outline d-flex justify-content-center brand-icons"><i class="fa-brands fa-apple"></i> Créer un compte</button>
    <button type="button" id="googlic" class="btn btn-outline  brand-icons"><i class="fa-brands fa-google d-flex justify-content-start"></i> Créer un compte</button>
   
    </form>
    <p id="lastlnk2">Vous n'avez pas de compte Flance ?<a href="#">&nbsp; Connectez-vous</a> </p>
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