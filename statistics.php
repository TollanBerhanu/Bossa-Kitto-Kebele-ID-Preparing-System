<!DOCTYPE html>
<html>
<head>
	<title>Statistics</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			background-color: #82868a;
		}
		div.sel_id{
			display: inline-block;
			border: 1px solid #333;
			border-radius: 5px;
			padding: 10px;
		}
		div.sel_id table{
			border-collapse: collapse;
		}
	</style>
</head>
<body>
<!--<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark common" id="mainNav">
    <div class="container">
	<h1>Bossa Kitto Kebele</h1>
	<ul>
		<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Home</a></li>
		<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">New Profile</a></li>
		<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Search Profile</a></li>
		<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Selected IDs</a></li>
		<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#">Register</a>
	        <div class="drpdown">
	        	<a href="#">Resident</a>
	        	<a href="#">House/Residence</a>
	        	<a href="#">Kebele Employee</a>
	        </div>
	    </li>

	    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Statistics</a></li>
	</ul>
</div>
</nav>-->
 <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top" onload="load_pg();">Bossa Kitto Kebele</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
            	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><i class="fa fa-home"></i> Home</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger"  href="new_profile_resident.php"><i class="fa fa-address-book"></i> New Profile</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="search_profile.php"><i class="fa fa-search"></i> Search Profile</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="selected_ids.php"><i class="fa fa-vcard"></i> Selected IDs</a></li>
				<!--<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#"><i class="fa fa-edit"></i> Register</a>
			        <div class="drpdown">
			        	<a href="new_profile_resident.php">Resident</a>
			        	<a href="new_profile_resident.php#new_profile_house">House/Residence</a>
			        	<a href="new_profile_employee.php">Kebele Employee</a>
			        </div>
			    </li>-->
			    <li class="nav-item"><a class="nav-link js-scroll-trigger" id="current" href="#"><i class="fa fa-newspaper-o"></i> Statistics</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="selected_ids">
<div class="stats">
	
</div>

</main>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>

</body>
</html>