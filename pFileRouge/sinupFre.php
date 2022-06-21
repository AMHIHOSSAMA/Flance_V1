<?php



include('header.php');
include('datacon.php');

session_start();

 if(isset($_SESSION['freelancer'])) header('location: login.php');

    
?>
<?php
$nameErr = $prenomErr = $emailErr = $teleErr  = $passwordErr=$validpass=$emailExist=$passConfErr=$imageErr="";
$nom = $prenom = $email = $pass= $telephone= $date = $passconf= $image="";




if($_SERVER['REQUEST_METHOD']== 'POST'){
 
  if (empty($_POST["nom"])) {
     $nameErr = '<span class="redi">Le nom est requis</span>';
     
   } else {
     $nom = $_POST["nom"];
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
       $nameErr = "<span class='redi'>Seules les lettres et les espaces blancs sont autorisés</span>";
     }
   }
  



   if (empty($_POST["prenom"])) {
    $prenomErr = "<span class='redi'> Le prenom est requis</span>";
  } else {
    $prenom = $_POST["prenom"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$prenom)) {
      $prenomErr = '<span class="redi">Seules les lettres et les espaces blancs sont autorisés</span> ';
    }
  }
  if(empty($_POST['telph'])){

    $teleErr ='<span class="redi">veuillez entrer votre téléphone</span>';
    
   
}else{
    if(!preg_match("/^[0-9]{10,}$/",$_POST['telph'])){
       $teleErr ='<span class="redi"> invalid number phone</span>';
       
    }
}  




   if (empty($_POST["email"])) {
    $emailErr = '<span class="redi">Le-mail est requis</span>';
  } else {
    $email = $_POST["email"];
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = '<span class="redi">Format demail invalide</span>';
    }
  }
  if (empty($_POST["image"])) {
    $imageErr = '<span class="redi">Ajouter votre image SVP</span>';
  } 



      $pass=$_POST['password'];
    $number = preg_match('@[0-9]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    if(strlen($pass)<= 5 || !$lowercase  || !$number ) {
      $passwordErr=' <span class="redi"> Le mot de passe doit comporter au moins 5 caractères et doit contenir au moins un chiffre, une lettre majuscule, une lettre minuscule et un caractère spécial.</span>';
      } else {
        $validpass= '<span class="valid">Votre mot de passe est fort.</span>';
      }
      if ( $_POST['passconf'] != $_POST['password'] )
      {
        $passConfErr = '<span class="redi">Les 2 mots de passe sont différents</span>';
           
      }

  } 
  function validateInput($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


if(isset($_POST['submits'])){
 

  

  $nom =$_POST['nom'];
  $prenom=$_POST['prenom'];
  $pass=$_POST['password'];
  $telephone=$_POST['telph'];
  $email=$_POST['email'];
  $date =$_POST['date'];
  $passconf =$_POST['passconf'];
  $date = $_POST['date'];
 $image = $_POST['image'];

  // select where field name=email
  $select="SELECT * from freelancers where email='$email'";
  $query=mysqli_query($conn,$select) or die('query failed, '.$select);

  if(mysqli_num_rows($query)>0){
      $emailExist = "email already exists pliz sign in";
  }
  elseif($nameErr == ""  && $prenomErr == ""  && $teleErr == ""  && $emailErr== "" && $passwordErr =="" && $passConfErr == "" && $imageErr=="") {
      $insert="INSERT INTO `freelancers`(`nom`, `prenom`, `date`, `telnumber`, `email`,`image`,`passwords`)
          VALUES ('$nom','$prenom','$date','$telephone','$email','$image','$pass')";
          
      $query2=mysqli_query($conn,$insert) or die('query failed, '.$insert);
      $_SESSION['freelancer']=$query2;


      

      echo '<script>alert("Le processus d inscription s est terminé avec succès")</script>';
      header("Location:login.php");
      
    }
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
    <p id="navspara" class="d-flex justify-content-center">Ici pour embaucher des talents?<a href="singupCln.php">&nbsp; en tant que client</a> </p>
      </div> 
    
  </div>
 
</nav>
<hr id="hrnav">
<section class="container " id="cartcontner">
    <h3 class="d-flex justify-content-center">Inscrivez-vous pour trouver le travail  que vous aimez</h3>
    <button  type="button" id="applic" class="btn btn-outline d-flex justify-content-center brand-icons"><i class="fa-brands fa-apple"></i> Créer un compte</button>
    <button type="button" id="googlic" class="btn btn-outline  brand-icons"><i class="fa-brands fa-google d-flex justify-content-start"></i> Créer un compte</button>
    <h6 class="d-flex justify-content-center" id="ouline">OU</h6>
    <form action="sinupFre.php" method="POST" id="formValid">
      <div class="d-flex justify-content-center">


          <input id="nomSty" class="form-control forms" type="text" placeholder="Nom" name="nom" aria-label="default input example">
          
      </div>
      <?php echo $nameErr; ?>
      <div class="d-flex justify-content-center">
          <input  id="prenomSty" class="form-control forms" type="text" placeholder="Prenom" name="prenom" aria-label="default input example">
          
      </div>
      <?php echo $prenomErr; ?>
      <div class="d-flex justify-content-center">
          <input  id="emailSty" class="form-control forms" type="eamil" placeholder="Email" name="email" aria-label="default input example">
          
      </div>
      <?php echo $emailErr; ?>
      <div class="d-flex justify-content-center">
          <input  id="telSty" class="form-control forms" type="tel" placeholder="Téléphone" name="telph" aria-label="default input example">
          
      </div>
      <?php echo $teleErr; ?>
      <div class="d-flex justify-content-center">
          <input class="form-control forms" type="date" placeholder="Date de naissance" name="date" aria-label="default input example">
          
      </div>
      <div class="d-flex justify-content-center">
          <input  id="imagelSty" class="form-control forms" type="text" placeholder="Image URL" name="image" aria-label="default input example">
          
      </div>
      
      <?php echo $imageErr; ?>
      <div class="d-flex justify-content-center">
          <input  id="passSty" class="form-control forms" type="password" placeholder="Mot de passe" name="password" aria-label="default input example">
          
      </div>
      <?php echo $passwordErr; ?>
      <div class="d-flex justify-content-center">
          <input  id="confSty" class="form-control forms" type="password" placeholder="Confirmer le mot de passe" name="passconf" aria-label="default input example">
      </div>
      <?php echo $passConfErr; ?>

      

      <div class="container" id="radiosmgn">




      <?php
    $i =0;
    $sql = "SELECT * FROM categories";
    $query = mysqli_query($conn, $sql);

      while($row = mysqli_fetch_array($query)){

       echo '<div id="checkradio" class="form-check ">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault '.  $i++ .'">
        ' .$row['nom'].'
        </label>
        </div>';
      }
          
          
              ?>




          </div>
      </div>
      <div class="row" id="checkid">
        <div calss="col">
            <input type="checkbox">
        </div>
         <div class="col">
              <P id="condtion">Oui, je comprends et j'accepte <a href="#">les conditions d'utilisation de Fralanc </a> e y compris <a href="">les conditions d'utilisation et la politique de confidentialité.</a> </P>
         </div>
      </div>
     
        <div>
            <input class="form-control" id="crees" type="submit" name="submits" value="Créer un compte" />
        </div> 
      
</form>
    <p id="lastlnk">Vous avez déjà un compte? <a href="login.php">Connexion</a> </p>
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