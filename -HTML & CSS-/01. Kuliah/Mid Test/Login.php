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
	<title>Form Login</title>
	<link href="BS5/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
	<div class="container rounded p-5 my-5 border border-dark text-light bg-primary">
		<center>
			<h3>UTS Pemrograman Web</h3>
			<h3>Nama : Satrio Mukti Prayoga</h3>
			<h3>NIM	: 211351137</h3>
		</center>
	</div>

	<div class="container p-5 my-5 bg-info">
		<form action="validasi.php" method="POST">
			<div class="row">
		    	<div class="col">
					<center><img src="wastu.png" class="img-fluid" width="260" height="260" alt="Logo_STT_WASTUKANCANA"></center>
			    </div>
		    	<div class="col-5">
					<h4>FORM LOGIN</h4>
					<div class="form-floating my-3" placeholder="Default input">
						<input type="text" class="form-control" id="user" placeholder="Username" name="USER">
						<label for="user">User</label>
					</div>
					<div class="form-floating mt-3 mb-3" placeholder="Default input">
						<input type="password" class="form-control" id="pwd" placeholder="Password" name="PASS">
						<label for="pwd">Password</label>
					</div>
					<button type="submit" class="btn btn-primary">
						Login
					</button>
				</div>
				<div class="col-2">
				</div>
				<div class="col-2">
				</div>
		    </div>
		</form>
	</div>
	<script src="BS5/js/bootstrap.bundle.min.js"></script>
</body>
</html>