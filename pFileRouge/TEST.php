<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link rel="stylesheet" href="recherche.css">

</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container" id="allnav">
            <a class="navbar-brand"><img id="logo" src="logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link" href="table.php">Les employés</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">L’entreprise</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Recherche</a>
                    </li>
                </ul>
                <button id="btnajout" type="button" class="btn btn-outline-light"><a href="ajouter.php">Ajouter</a></button>

            </div>
        </div>
    </nav>



  <div class="container" >
    <div class="row" id="search">
        <div class="col-sm">
        <form action="" class="" method="GET">
        <div class="input-group mb-3" id="selectId">
            <select class="select" data-mdb-filter="true" name="selects" value="<?php if (isset($_GET['selects'])) {
                        echo $_GET['search2'];
                    } ?>">
                <option selected>Département</option>
                <option value="Ressources humaines">Ressources humaines</option>
                <option value="Finances">Finances</option>
                <option value="Département légal">Département légal</option>
                <option value="Recherche & Développement">Recherche & Développement</option>
                <option value="Marketing">Marketing</option>
                <option value="Contrôle de qualité">Contrôle de qualité</option>
                <option value="Gestion">Gestion</option>
                <option value="IT">IT</option>
            </select>
            <button id="selectBut" type="submit" class="input-group-text "><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
        </div>
        <div class="col-sm">
            <form action="" class="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg" value="<?php if (isset($_GET['search'])) {
                        echo $_GET['search'];
                    } ?>" placeholder="Recherche par Nom" name="search">
                    <button type="submit" class="input-group-text "><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
             </form>
        </div>
        <div class="col-sm">
            <form action="" class="">
                <div class="input-group mb-3">
                    <input type="number" class="form-control form-control-lg" placeholder="Recherche par Matricul"  value="<?php if (isset($_GET['search2'])) {
                        echo $_GET['search2'];
                    } ?>" name="search2">
                    <button type="submit" class="input-group-text "><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <table id="tables" class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Matricul</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Date</th>
                <th scope="col">Departement</th>
                <th scope="col">Salaire</th>
                <th scope="col">Fonction</th>
                <th scope="col">Photo</th>
            </tr>
        </thead>
        <tbody>
                <?php
                    $db = new mysqli('localhost','root','','gestion des employes') or die(mysqli_error($dbname));

                    if (isset($_GET['search'])) {
                        $filter = $_GET['search'];
                        $query = "SELECT * FROM `employers` WHERE Nom = '$filter'";
                        $query_run = mysqli_query($db,$query);

                        if (mysqli_num_rows($query_run)>0) {
                            foreach ($query_run as $items ) {
                                ?>
                                <tr>
                                        <td><?=$items['Matricul']?></td>
                                        <td><?=$items['Nom']?></td>
                                        <td><?=$items['Prénom']?></td>
                                        <td><?=$items['Date de naissance']?></td>
                                        <td><?=$items['Département']?></td>
                                        <td><?=$items['Salaire']?></td>
                                        <td><?=$items['Fonction']?></td>
                                        <td><?=$items['Photo']?></td>
                                 </tr>
                                 <?php
                            }
                        }else {
                         echo  " <tr>
                                 <td colspan='4'>No Record Found</td>
                            </tr>";
                        }
                    }
                    ?>
                     <?php

                    if (isset($_GET['search2'])) {
                        $filter = $_GET['search2'];
                        $query = "SELECT * FROM `employers` WHERE Matricul = '$filter'";
                        $query_run = mysqli_query($db,$query);

                        if (mysqli_num_rows($query_run)>0) {
                            foreach ($query_run as $items ) {
                                ?>
                                <tr>
                                        <td><?=$items['Matricul']?></td>
                                        <td><?=$items['Nom']?></td>
                                        <td><?=$items['Prénom']?></td>
                                        <td><?=$items['Date de naissance']?></td>
                                        <td><?=$items['Département']?></td>
                                        <td><?=$items['Salaire']?></td>
                                        <td><?=$items['Fonction']?></td>
                                        <td><?=$items['Photo']?></td>
                                 </tr>
                                 <?php
                            }
                        }else {
                         echo  " <tr>
                                 <td colspan='4'>No Record Found</td>
                            </tr>";
                        }
                    }
                    ?>
                     <?php

                    if (isset($_GET['search2'])) {
                        $filter = $_GET['search2'];
                        $query = "SELECT * FROM `employers` WHERE Matricul = '$filter'";
                        $query_run = mysqli_query($db,$query);

                        if (mysqli_num_rows($query_run)>0) {
                            foreach ($query_run as $items ) {
                                ?>
                                <tr>
                                        <td><?=$items['Matricul']?></td>
                                        <td><?=$items['Nom']?></td>
                                        <td><?=$items['Prénom']?></td>
                                        <td><?=$items['Date de naissance']?></td>
                                        <td><?=$items['Département']?></td>
                                        <td><?=$items['Salaire']?></td>
                                        <td><?=$items['Fonction']?></td>
                                        <td><?=$items['Photo']?></td>
                                 </tr>
                                 <?php
                            }
                        }else {
                         echo  " <tr>
                                 <td colspan='4'>No Record Found</td>
                            </tr>";
                        }
                    }
                    ?>
                    <?php

                    if (isset($_GET['selects'])) {
                        $filter = $_GET['selects'];
                        $query = "SELECT * FROM `employers` WHERE Département = '$filter'";
                        $query_run = mysqli_query($db,$query);

                        if (mysqli_num_rows($query_run)>0) {
                            foreach ($query_run as $items ) {
                                ?>
                                <tr>
                                        <td><?=$items['Matricul']?></td>
                                        <td><?=$items['Nom']?></td>
                                        <td><?=$items['Prénom']?></td>
                                        <td><?=$items['Date de naissance']?></td>
                                        <td><?=$items['Département']?></td>
                                        <td><?=$items['Salaire']?></td>
                                        <td><?=$items['Fonction']?></td>
                                        <td><?=$items['Photo']?></td>
                                </tr>
                                <?php
                            }
                        }else {
                        echo  " <tr>
                                <td colspan='4'>No Record Found</td>
                            </tr>";
                        }
                    }
                    ?>
                
        </tbody>
    </div>
</div>
    
    
  

  
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
<!-- <?php
    $db = new mysqli('localhost','root','','gestion des employes') or die(mysqli_error($dbname));
    if (isset($_POST["submit"])) {
        $str = $_POST["search"];
        $sth = $db->prepare("SELECT * FROM `employers` WHERE Nom = '$str'");

        $sth->setFetchMode(PDO:: FETCH_OBJ);
        $sth-> execute();

        
    }

?> -->