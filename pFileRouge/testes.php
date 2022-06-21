if (isset($_SESSION['freelancer'])) {
        $idFreelancer = $_SESSION['freelancer']['idFreelancer'];
        $data = mysqli_fetch_assoc(
            mysqli_query($conn, "select * from freelancers WHERE  idFreelancer = $idFreelancer")
        );
        echo $data['nom']; echo"<br>";
    echo $data['prenom']; echo"<br>";
    echo $data['email']; echo"<br>";

        ?>