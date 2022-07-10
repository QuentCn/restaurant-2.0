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
    <a class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="#"> Brasserie "Le Schkeel"</a>
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
          <a href="restaurant.html" class="btn-order nav-link" aria-current="page" href="#">Acceuil</a>
        </li>
        <li class="nav-item pe-4">
          <a href="menu.html" class="btn-order nav-link" href="#">Nos Menus</a>
        </li>
        <li class="nav-item pe-4">
          <a href="pictures.html" class="btn-order nav-link" href="#">Photos</a>
        </li>
      </ul>
      <span class="navbar-item pe-4">
        <a href="contact.html" class="btn btn-order rounded -8" href="#">Contact</a>
      </span>
    </div>
   </div>
 </nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/menu1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/menu3.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/menu4.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/menu5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/menu6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/menu7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/menu8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/menu9.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>




 <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
   
   <!-- live server subl text -->
   <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</html>