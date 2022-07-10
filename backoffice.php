<?php 
  include 'connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

  <!-- CSS du resto/perso-->
	<link rel="stylesheet" href="assets/css/restaurant.css">

  <!--titre et barre de nav -->

	<title>Brasserie  Le Schkeel</title>

</head>
<body>
						<nav class="rp-navbar navbar navbar-expand-lg navbar-dark position-fixed w-100">
   <div class="container-fluid">
    <a href="restaurant.php" class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="#"> Brasserie "Le Schkeel"</a>
    <button
    class="navbar-toggler" 
    type="button" 
    data-bs-toggle="collapse" 
    data-bs-target="#navbarText" 
    aria-controls="navbarText" 
    aria-expanded="false" 
    aria-label="Toggle navigation">

     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item pe-4">
          <a href="restaurant.php"  class="btn-order nav-link" aria-current="page" href="#">Acceuil</a>
        </li>
        <li class="nav-item pe-4">
          <a href="menu.php" class="btn-order nav-link" href="#">Nos Menus</a>
        </li>
        <li class="nav-item pe-4">
          <a href="pictures.php" class="btn-order nav-link" href="#">Photos</a>
        </li>
        <li class="nav-item  pe-4">
          <a href="guestbook.php" class="btn-order nav-link" href="#">Avis</a>

        </li>
      </ul>
      <span class="navbar-item pe-4">
        <a href="contact.php" class="btn btn-order rounded -8" href="#">Contact</a>
      </span>
    </div>
   </div>
 </nav>


 <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-12 col-md-12">
        <h1 class="display-5 mt-4 text-center">Messages</h1>
        <ul class="list-group m-4 w-auto gap-2">
          <?php
            $sql = "select * from `contact_messages`";
            
            $result = $conn -> query($sql);
            
            $values = $result -> fetchAll(PDO::FETCH_ASSOC);
            
            foreach($values as $row){
              
              $id=$row['id'];
              $date=$row['Date'];
              $name=$row['Name'];
              $email=$row['Email'];
              $message=$row['Message'];

              echo '<li class="backOfficeContainer list-group-item d-flex justify-content-between align-items-start">
                      <div class="ms-2 me-auto text-white">
                        <p class="mb-0"><strong>N° : '. $id .'</strong></p> 
                        <p class="mb-0"><strong>Date : '. $date .'</strong></p> 
                        <h4>Name : '. $name .'</h4>
                        <h5>Email : '. $email .'</h5>
                        <p class="text-break">Message : '. $message .'</p>
                        <button type="button" class="btn text-white submitbtn"><a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-white"><span class="submitbtnhover">Delete</span></a></button>
                      </div>
                    </li>';
            }
          ?>
        </ul>
      </div>
    </div>
  </div>


  <!-- js bootstrap -->
 <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
   
   <!-- live server subl text -->
   <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</html>