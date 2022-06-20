<?php



include('header.php');
include('datacon.php');

?>

    <?php  


//getting inputs values

if(isset($_POST['submit'])){
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$numtel = $_POST['numtel'];
$image = $_POST['image'];
$email = $_POST['email'];
$date = $_POST['date'];
$passwrd = $_POST['pass'];






// form input >> database
$sql = "INSERT INTO client (`nom`, `prenom`, `numtel`, `email`, `dateinscription`, `passwords`, `image`) VALUES ('$nom', '$prenom', '$numtel','$email',  '$date', '$passwrd','$image')";

$rs = mysqli_query($conn, $sql);
    
    if($rs)
    {
        echo '<script>alert("Le client est ajouté")</script>';
    }
    
//connection closed.

}
if (isset($_POST['submitFre'])) {

    // freelancer vriables

$nameFre = $_POST['nomfre'];
$prenomfre = $_POST['prenomfre'];
$description = $_POST['description'];
$numtelfre = $_POST['numtelfre'];
$imagefre = $_POST['imagefre'];
$emailfre = $_POST['emailfre'];
$datefre = $_POST['datefre'];
$passwrdFre = $_POST['passfre'];

// form input >> database
$sql = "INSERT INTO freelancers (`nom`, `prenom`, `date`, `telnumber`, `email`, `desription`, `image`, `passwords`) 
VALUES ('$nameFre','$prenomfre','$datefre ','$numtelfre','$emailfre','$description','$imagefre','$passwrdFre')";

$rss = mysqli_query($conn, $sql);
    
    if($rss)
    {
        echo '<script>alert("Le client est ajouté")</script>';
    }
    
    mysqli_close($conn);
}



?>

<div class="container">
 <form action="admin.php" method="POST" enctype="multipart/form-data" >

    <label >nom</label>
    <input name="nom"  class="label form-control" type="text" placeholder="Enter the Last Name" value="" required>
    <label >prenom</label>
    <input name="prenom" class="price form-control" type="text" value="" required> 
   
    <label >numtel</label>
    <input name="numtel" class="price form-control" type="tel" value="" required> 
    <label >image</label>
    <input name="image" class="price form-control" type="text" value="" required> 

    <label >email</label>
    <input name="email" class="price form-control" type="email" value="" required> 
    <label >date</label>
    <input name="date" class="price form-control" type="date" value="" required> 
    <label >password</label>
    <input name="pass" class="price form-control" type="password" value="" required> 
    <input type="submit" name="submit" class="btn btn-dark" value="submit"> 

<!-- Save a freelancer -->

   


</form>

<div class="container">
     <form action="admin.php" method="POST" enctype="multipart/form-data" >
        <label >nom</label>
        <input name="nomfre"  class="label form-control" type="text" placeholder="Enter the Last Name" value="" required>
        <label >prenom</label>
        <input name="prenomfre" class="price form-control" type="text" value="" required> 
        <label >Description</label>
    <input name="description" class="price form-control" type="text" value="" required> 
        <label >numtel</label>
        <input name="numtelfre" class="price form-control" type="tel" value="" required> 
        <label >image</label>
        <input name="imagefre" class="price form-control" type="text" value="" required> 
        <label >email</label>
        <input name="emailfre" class="price form-control" type="email" value="" required> 
        <label >date</label>
        <input name="datefre" class="price form-control" type="date" value="" required> 
        <label >password</label>
        <input name="passfre" class="price form-control" type="password" value="" required> 
        <input type="submit" name="submitFre" class="btn btn-dark" value="submit"> 
    </form>
</div>