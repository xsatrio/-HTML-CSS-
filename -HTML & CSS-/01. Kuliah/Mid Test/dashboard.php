<!DOCTYPE html>
<html>

    <!--
        Name    : Satrio Mukti Prayoga
        NIM     : 211351137
        Class   : IF Malam B
    -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="BS5/css/bootstrap.min.css" rel="stylesheet">
	<title>Tugas 3</title>
</head>

<body>
	<div class="w-full d-flex align-items-center flex-column py-4 bg-primary text-light">
		<h1 class="fs-1 fw-semibold">DASHBOARD ADMIN</h1>
	</div>

	<nav class="navbar navbar-expand-sm navbar-dark bg-dark" aria-label="Third navbar example">
	    <div class="container-fluid">
	    	<div class="collapse navbar-collapse" id="navbarsExample03">
	        	<ul class="navbar-nav me-auto mb-2 mb-sm-0">
	          		<li class="nav-item">
	            		<a class="nav-link active" aria-current="page" href="#">Active</a>
	        		</li>
	          		<li class="nav-item">
	            		<a class="nav-link" href="#">Link</a>
	          		</li>
	          		<li class="nav-item">
	            		<a class="nav-link" href="#">Link</a>
	          		</li>
			  		<li class="nav-item">
	            		<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
	          		</li>
	        	</ul>
	        	<a class="btn btn-primary d-flex flex-row-reverse bd-highlight" href="login.php">Logout</a>
	      	</div>
	    </div>
	</nav>
	
 	<div class="container mt-5 mb-4">
		<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="1.jpeg" class="d-block w-100 img-fluid" alt="Landscape">
					<div class="position-absolute top-0 start-50 translate-middle-x text-light">
						<p>xsat93</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="2.jpg" class="d-block w-100 img-fluid" alt="Landscape">
				</div>
				<div class="carousel-item">
					<img src="3.jpg" class="d-block w-100 img-fluid" alt="Landscape">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>

	<div class="container">
		<div class="row">
	  		<div class="col-4">
	  			<h2>Menu</h2>
	  			<ul class="nav flex-column nav-pills">
					<li class="nav-item">
						<a class="nav-link active bg-primary" aria-current="page" href="#">Active</a>
				  	</li>
				  	<li class="nav-item">
				  		<a class="nav-link" href="#">Link</a>
				  	</li>
				  	<li class="nav-item">
				  		<a class="nav-link" href="#">Link</a>
				  	</li>
				  	<li class="nav-item">
				  		<a class="nav-link disabled" href="#">Disabled</a>
				  	</li>
				</ul>
	  		</div>
	  		<div class="col-8">
				<h1>Biodata Admin</h1>
				<p>Nama : Satrio Mukti Prayoga</p>
				<p>NIM : 211351137</p>
				<p>Hobi : Bersepeda, Fotografi, Otomotif, Gadget</p>
			</div>
	  	</div>
	</div>
	<script src="BS5/js/bootstrap.bundle.min.js"></script>
</body>
</html>