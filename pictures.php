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
    <a href="restaurant.html" class="navbar-brand text-uppercase fw-bolder mx-4 py-3" href="#"> Brasserie "Le Schkeel"</a>
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
          <a href="restaurant.html"  class="btn-order nav-link" aria-current="page" href="#">Acceuil</a>
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
</div>
</nav>






	<section id="gallerie">

		<div class="container">
			<h2 class="text-center pt-5">Gallerie</h2>
			<p class="tetxt-center pb-5">Nos réalisations</p>
			<div class="row justify-conntent-center">
				<div class="col md-10">
					<div class="row mb-3">
						<img src="assets/img/carbo.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/moule.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/banner1.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/gal1.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/gal2.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                       
                        
                        


                        


                    </div>
                       <div class="row mb-3">
                       	<img src="assets/img/gal4.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/gal5.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/jumbo1.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/jumbo2.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                        <img src="assets/img/jumbo3.jpg" alt="img1" class="gal col-sm-4 img-fluid">
                       </div>
						
					</div>
				</div>
			</div>
		</div>

<!--nabbarpagination-->


		 <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-5 mb-5">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
        </nav>











<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
   
   
   <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</html>