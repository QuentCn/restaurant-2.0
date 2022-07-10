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
          <a class="btn-order nav-link" aria-current="page" href="#">Acceuil</a>
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

<div class="container py-4">


<!-- for de contact -->

  <form id="contactForm">

    <div class="mb-3">
      <label class="form-label" for="name">Name</label>
      <input class="form-control" id="name" type="text" placeholder="Name" />
    </div>

    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
    </div>

    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
    </div>

    <div class="d-grid">
      <button class="btn btn-primary btn-lg" type="submit">Submit</button>
    </div>

  </form>

</div>


 <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
   
   
   <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</html>