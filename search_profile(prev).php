<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search Profile</title>
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
		main{
			position: absolute;
			overflow: hidden;
			top: 10px;
			margin-top: 35px;
			padding: 15px;
			height: 110%;
		}

		/* The Modal (background) */
		div.modal_sel_id {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 100px; /* Location of the box */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}
		/* Modal Content */
		div.modal_sel_id div.modal-content {
			background-color: #fefefe;
			margin: auto;
			padding: 0px 10px;
			border: 1px solid #888;
			width: 60%;
		}
		/* The Close Button */
		div.modal_sel_id span.modal_close {
			display: inline-block;
			color: #CCC;/*#aaaaaa;*/
			border-left: 1px solid #CCC;
			float: right;
			padding: 0px 30px;
			text-align: right;
			font-size: 28px;
			font-weight: bold;
		}
		div.modal_sel_id span.modal_close:hover, span.modal_close:focus {
			background-color: #3B3;
			border-radius: 0px 0px 5px 0px;
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
		div.modal_sel_id div.modal_sel_id_header{
			background-color: #47ca7f;
			border-radius: 0px 0px 5px 5px;
		}
		div.modal_sel_id div.modal_sel_id_header h3{
			display: inline;
			position: relative;
			top: 5px;
			left: 30px;
			font-size: 25px;
			font-variant: small-caps;
		}
		div.modal_sel_id div.modal_table{
			padding: 0px 25px;
		}
		div.modal_sel_id div.modal_table table{
			width: 100%;
		}
		div.modal_sel_id div.modal_table table tr td{
			border: 0px solid #333;
		}
		div.modal_sel_id div.modal_table table label{
			font-weight: bold;
			font-size: 15px;
			margin-right: 10px;
			margin-left: 25px;
		}
		div.modal_table table td.modal_content_different{
			background-color: #DFD;
			border-radius: 5px;
			padding: 5px 20px;
		}




		div.modal_sel_id_edit {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			padding-top: 70px; /* Location of the box */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		}
		/* Modal Content */
		div.modal_sel_id_edit div.modal-content_edit {
			background-color: #47a8ca;
			margin: auto;
			padding: 0px 0px;
			border: 1px solid #888;
			width: 65%;
			height: 85%;
		}
		/* The Close Button */
		div.modal_sel_id_edit span.modal_close_edit {
			display: inline-block;
			color: #CCC;/*#aaaaaa;*/
			border-left: 1px solid #CCC;
			float: right;
			padding: 0px 30px;
			text-align: right;
			font-size: 28px;
			font-weight: bold;
		}
		div.modal_sel_id_edit span.modal_close_edit:hover, span.modal_close_edit:focus {
			background-color: #47cabb;
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
		div.modal_sel_id_edit div.modal_sel_id_header_edit h3{
			display: inline;
			position: relative;
			top: 5px;
			left: 30px;
			font-size: 25px;
			font-variant: small-caps;
		}
		iframe{
			border: none;
			width: 100%;
			height: 100%;
		}








		/* The Delete Modal*/
		div.modal_sel_id_delete {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0,0.4);
		}
		/* Modal Content */
		div.modal_sel_id_delete div.modal-content_delete {
			background-color: #fefefe;
			margin: auto;
			padding: 0px 10px;
			border: 1px solid #888;
			width: 55%;
		}
		/* The Close Button */
		div.modal_sel_id_delete span.modal_close_delete {
			display: inline-block;
			color: #CCC;/*#aaaaaa;*/
			border-left: 1px solid #CCC;
			float: right;
			padding: 0px 30px;
			text-align: right;
			font-size: 28px;
			font-weight: bold;
		}
		div.modal_sel_id_delete span.modal_close_delete:hover, span.modal_close_delete:focus {
			background-color: #d55;
			border-radius: 0px 0px 5px 0px;
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
		div.modal_sel_id_delete div.modal_sel_id_header_delete{
			height: 42px;
			background-color: tomato;
			border-radius: 0px 0px 5px 5px;
		}
		div.modal_sel_id_delete div.modal_question_delete, div.modal_ans_delete{
			height: 140px;
			padding: 20px 0px 0px 50px;
		}
		div.modal_sel_id_delete div.modal_question_delete a, a#delete_ok{
			float: right;
			padding: 7px 35px;
			margin: 10px;
			border-radius: 4px;
			text-decoration: none;
			color: #333;
			font-weight: bolder;
			font-size: 20px;
		}
		div.modal_ans_delete{
			padding-left: 20px;
			text-align: center;
			display: none;
		}
		a#delete_yes{
			background-color: tomato;/*#e66#e04141*/
		}
		a#delete_no, a#delete_ok{
			background-color:#47ca7f;
			margin-right: 40px;
		}
		a#delete_yes:hover{
			background-color:#da3838;/*#d55*/
		}
		a#delete_no:hover, a#delete_ok:hover{
			background-color:#47ba7f;
		}















		/* The Modal (background) */
		div.modal_sel_id_del {
			display: none;
			position: fixed;
			z-index: 1;
			padding-top: 100px;
			left: 0;
			top: 0;
			width: 100%;
			height: 100%;
			overflow: auto;
			background-color: rgb(0,0,0);
			background-color: rgba(0,0,0,0.4);
		}
		/* Modal Content */
		div.modal_sel_id_del div.modal-content_del {
			background-color: #fefefe;
			margin: auto;
			padding: 0px 10px;
			border: 1px solid #888;
			width: 55%;
		}
		/* The Close Button */
		div.modal_sel_id_del span.modal_close_del {
			display: inline-block;
			color: #CCC;/*#aaaaaa;*/
			border-left: 1px solid #CCC;
			float: right;
			padding: 0px 30px;
			text-align: right;
			font-size: 28px;
			font-weight: bold;
		}
		div.modal_sel_id_del span.modal_close_del:hover, span.modal_close_del:focus {
			background-color: #d55;
			border-radius: 0px 0px 5px 0px;
			color: #000;
			text-decoration: none;
			cursor: pointer;
		}
		div.modal_sel_id_del div.modal_sel_id_header_del{
			height: 42px;
			background-color: tomato;
			border-radius: 0px 0px 5px 5px;
		}
		div.modal_sel_id_del div.modal_question_del, div.modal_ans_del{
			height: 140px;
			padding: 20px 0px 0px 50px;
		}
		div.modal_sel_id_del div.modal_question_del a, a#del_ok{
			float: right;
			padding: 7px 35px;
			margin: 10px;
			border-radius: 4px;
			text-decoration: none;
			color: #333;
			font-weight: bolder;
			font-size: 20px;
		}
		div.modal_ans_del{
			padding-left: 20px;
			text-align: center;
			display: none;
		}
		a#del_yes{
			background-color: tomato;/*#e66#e04141*/
		}
		a#del_no, a#del_ok{
			background-color:#47ca7f;
			margin-right: 40px;
		}
		a#del_yes:hover{
			background-color:#da3838;/*#d55*/
		}
		a#del_no:hover, a#del_ok:hover{
			background-color:#47ba7f;
		}
	</style>
</head>
<body onload="checkOL();">

<?php
include 'mysqli_connect.php';
	if (($_SERVER["REQUEST_METHOD"] == "POST") and isset($_POST['ser_submit'])) {
	//if(isset($_POST['ser_submit'])){
	

	$numand = 0;
	if($_POST['ser_res_fname']!="") $numand++;
	if($_POST['ser_res_mname']!="") $numand++;
	if($_POST['ser_res_lname']!="") $numand++;
	if($_POST['ser_res_gender']!="none") $numand++;
	if($_POST['ser_res_dob_day']!="") $numand++;
	if($_POST['ser_res_dob_month']!="") $numand++;
	if($_POST['ser_res_dob_year']!="") $numand++;
	if($_POST['ser_res_tel_type']!="") $numand++;
	//if($_POST['ser_res_tel_num']!="") $numand++;
	if($_POST['ser_res_hou_num']!="") $numand++;

	for($i=0; $i<10; $i++)
	{
		if($i<$numand-1) $ands[$i] = " AND ";
		else $ands[$i] = "";
	}
	//for($j=0; $j<100; $j++)
	//echo $numand.'<br>';
	$i=0;
	$cond = " WHERE ";
	if($numand == 0) $cond="";
	if($_POST['ser_res_fname']!="")
		$cond .= "res_fname='".$_POST['ser_res_fname']."'".$ands[$i++];
	if($_POST['ser_res_mname']!="")
		$cond .= "res_mname='".$_POST['ser_res_mname']."'".$ands[$i++];
	if($_POST['ser_res_lname']!="")
		$cond .= "res_lname='".$_POST['ser_res_lname']."'".$ands[$i++];
	if($_POST['ser_res_gender']!="none")
		$cond .= "res_gender='".$_POST['ser_res_gender']."'".$ands[$i++];
	if($_POST['ser_res_dob_day']!="") 
		$cond .= "DAY(res_dob)=".$_POST['ser_res_dob_day'].$ands[$i++];
	if($_POST['ser_res_dob_month']!="") 
		$cond .= "MONTH(res_dob)=".$_POST['ser_res_dob_month'].$ands[$i++];
	if($_POST['ser_res_dob_year']!="") 
		$cond .= "YEAR(res_dob)=".$_POST['ser_res_dob_year'].$ands[$i++];

	if($_POST['ser_res_tel_type']!=""){
		$cond .= "((res_tel1_type='".$_POST['ser_res_tel_type']."' AND res_tel1_num='".$_POST['ser_res_tel_num']."') OR (res_tel2_type='".$_POST['ser_res_tel_type']."' AND res_tel2_num='".$_POST['ser_res_tel_num']."'))".$ands[$i++];
	}

	if($_POST['ser_res_hou_num']!=""){
		$cond .= "res_hou_num='".$_POST['ser_res_hou_num']."'".$ands[$i++];
	}
	echo $cond.'<br>';
	$sql = "SELECT res_id,res_photo_name,res_fname,res_mname,res_lname,res_gender,YEAR(res_dob),res_tel1_num FROM resident".$cond.";";
	echo $sql;
	if($res=mysqli_query($conn,$sql))
		echo "Search Successful!<br>";
	else echo "Couldn't execute search operation: ".mysqli_error($conn);



//*****************************************************
	
	/*$row = mysqli_fetch_array($res);

	echo '<br>'.$row['res_photo_name']." ".$row['res_fname']." ".$row['res_mname']." ".$row['res_lname']." ".$row['res_gender']." ".$row['YEAR(res_dob)']." ".$row['res_tel1_num'];
	
	$cur_year = date("Y");
	$res_age = ($cur_year - $row['YEAR(res_dob)']);
	echo '<br>'.$res_age;*/
	}
	if($_SESSION['ooo'] == 1){
		$_SESSION['ccc'] = $cond;
		$_SESSION['sss'] = $sql;
	}
	$sql = "SELECT res_id,res_photo_name,res_fname,res_mname,res_lname,res_gender,YEAR(res_dob),res_tel1_num FROM resident".$_SESSION['ccc'].";";
	echo $sql;
	$res=mysqli_query($conn,$sql);
	//$_SESSION['ooo'] = 0;
	?>

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
    <div class="container"><a class="navbar-brand" href="#page-top" >Bossa Kitto Kebele</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
            	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html"><i class="fa fa-home"></i> Home</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger"  href="new_profile_resident.html"><i class="fa fa-address-book"></i> New Profile</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#" id="current"><i class="fa fa-search"></i> Search Profile</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="selected_ids.html"><i class="fa fa-vcard"></i> Selected IDs</a></li>
				<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#"><i class="fa fa-edit"></i> Register</a>
			        <div class="drpdown">
			        	<a href="new_profile_resident.html">Resident</a>
			        	<a href="new_profile_resident.html#new_profile_house">House/Residence</a>
			        	<a href="new_profile_employee.html">Kebele Employee</a>
			        </div>
			    </li>
			    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="statistics.html"><i class="fa fa-newspaper-o"></i> Statistics</a></li>
            </ul>
        </div>
    </div>
</nav>
<main>
<div class="search_form">
<div class="search_title">SEARCH PROFILE FORM
</div>
  <div class="container">
  	<!--<form method="post" action="searchphp.php" enctype="multipart/form-data">-->
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">
  	<div class="form-group">
  		<select class="form-control search_sel" placeholder="">
  			<option value="Resident">Resident</option>
  			<option value="Employee">Employee</option>
  			<option value="Residence">House/Residence</option>
  		</select>
  	</div>
  	<div class="form-group">
  		<span class="search_la" style="display: block;">Full Name:</span>
  		<!--<input class="form-control search_ip" type="text" placeholder="Full Name *"  autocomplete="off" required="" style="width: 80%" onfocus="this.style.width='90%';" onblur="this.style.width='80%';">-->
  		<input type="text" name="ser_res_fname" class="form-control search_ip" placeholder="First"  autocomplete="off" style="width: 29%; float: left; margin-right: 10px;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
  		<input type="text" name="ser_res_mname" class="form-control search_ip" placeholder="Middle"  autocomplete="off" style="width: 29%; float: left; margin-right: 10px;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
  		<input type="text" name="ser_res_lname" class="form-control search_ip" placeholder="Last"  autocomplete="off" style="width: 29%; float: left;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
  	</div>
  	<div class="form-group">
  		<span class="search_la" style="display: inline-block; float: left;">Gender:</span>
	  	<div class="search_rb">
	  		<div class="custom-control custom-radio">
			  <input type="radio" name="ser_res_gender" value="Male" class="custom-control-input" id="RadioMale">
			  <label class="custom-control-label" for="RadioMale">Male</label>
			</div> 
			<div class="custom-control custom-radio">
			  <input type="radio" name="ser_res_gender" value="Female" class="custom-control-input" id="RadioFemale">
			  <label class="custom-control-label" for="RadioFemale">Female</label>
			</div> 
			<input type="radio" name="ser_res_gender" value="none" style="display:none;" checked>
		</div>
	</div>
	<div class="form-group">
		<span class="search_la" style="display: inline-block; padding-right: 10px; float: left;">Date of Birth:</span>
		<input type="number" name="ser_res_dob_day" class="form-control search_dob" placeholder="Day" autocomplete="off" style="width: 13%;">
	    <select name="ser_res_dob_month" class="custom-select custom-select-sm mb-3 search_dob" id="monthOption" style="width: 28%; float: left; margin-right: 10px;">
	      	<option value="" style="display: none;">Month</option>
			<option value="1">January</option>
			<option value="2">February</option>
			<option value="3">March</option>
			<option value="4">April</option>
			<option value="5">May</option>
			<option value="6">June</option>
			<option value="7">July</option>
			<option value="8">August</option>
			<option value="9">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
	    </select>
	    <input type="number" name="ser_res_dob_year" class="form-control search_dob" placeholder="Year" autocomplete="off" style="width: 16%;">
  		<!--<input type="date" name="">-->
  	</div>
    <div class="form-group">
    	<span class="search_la" style="float: left; margin-right: 10px;">Phone Number:</span>
    	<select name="ser_res_tel_type" id="ser_tel_sel" class="form-control search_phone" style="font-size: 14px; height: 25px; width: 15%; float: left; padding: 2px; margin-right: 5px;" onblur="if(document.getElementById('phone_input').value!='' && this.value=='')document.getElementById('opt').selected='true'">
    		<option id="opt_null" value=""></option>
  			<option id="opt" value="Mobile">Mobile</option>
  			<option value="Home">Home</option>
  			<option value="Work">Work</option>
  			<option value="Alternate">Alternate</option>
  		</select>
  		<input type="tel" name="ser_res_tel_num" class="form-control search_ip" id="phone_input" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change();" placeholder="Phone Number" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%'; if(document.getElementById('ser_tel_sel').value=='')document.getElementById('opt').selected='true';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''; if(this.value=='')document.getElementById('opt_null').selected='true'; ser_Phone_Requirement();">
    </div>
    <div class="form-group">
    	<?php echo '<span class="search_la" style="float: left; margin-right: 10px;">House Number:</span>';?>
    	<input type="text" name="ser_res_hou_num" class="form-control search_ip" placeholder="House Number" autocomplete="off" style="float: left; width: 28%;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
    </div>

    <div class="col-lg-12">
    <button class="btn btn-primary btn-lg search_submit" type="submit" name="ser_submit"><span>Search <i class="fa fa-search"></i> </span></button>
	</div>
	<div class="col-lg-12">
    <button class="btn btn-primary btn-lg search_reset" type="reset"><span>Reset All</span></button>
	</div>
    </form>
	</div>
</div>





<!--*************************************************************-->



<div class="search_result">
	<div class="search_title">SEARCH RESULT
	</div>
	<div class="search_result_count" style="text-align: center;"><span>2</span> results found.</div>
	<!--<iframe src="search_result.html"></iframe>-->
	<!--<div class="container search_profile">
		<table id="search_result_table">
			<tr>
				<td rowspan="3" style="width: 130px; text-align: center;"><img src="img/NoPicMale.jpg" class="search_result_img" alt="Profile Picture"></td>
				<td colspan="2" style="border-bottom: 1px solid #333;"><label>Name: </label><span>Your Name Here</span></td>
				<td rowspan="3" style="text-align: center; padding: 15px;">
					<div class="search_table_icons">
						<i class="fa fa-plus" style="color:green;"></i>
						<i class="fa fa-drivers-license-o" style="color:orange;"></i>
						<i class="fa fa-pencil" style="color:blue;"></i>
						<i class="fa fa-trash-o" style="color:red;"></i>
					</div>
				</td>
			</tr>
			<tr style="border-bottom: 1px solid #333;">
				<td><label>Sex: </label><span>Male</span></td>
				<td><label>Age: </label><span>22</span></td>
			</tr>
			<tr>
				<td colspan="2"><label>Phone number: </label><span>+251-123-456-789</span></td>
			</tr>
		</table>
	</div>-->
	<?php
	$i=0;
	while($row = mysqli_fetch_array($res)){
	$cur_year = date("Y");
	$res_age = ($cur_year - $row['YEAR(res_dob)']);
	echo '<div class="container search_profile">
		<table id="search_result_table">
			<tr>
				<td rowspan="3" style="width: 130px; text-align: center;"><img src="'.$row["res_photo_name"].'" class="search_result_img" alt="Profile Picture"></td>
				<td colspan="2" style="border-bottom: 1px solid #333;"><label>Name: </label><span>'.$row["res_fname"].' '.$row["res_mname"].' '.$row["res_lname"].'</span></td>
				<td rowspan="3" style="text-align: center; padding: 15px;">
					<div class="search_table_icons">
					
						<a href="#"><i class="fa fa-plus ico_plus" style="color:green;" onclick="openModalDel('.$row["res_id"].',1);"></i></a>
						<a href="#"><i class="fa fa-drivers-license-o ico_drivlic" style="color:orange;" onclick="openModalDel('.$row["res_id"].',3);"></i></a>
						<a href="#"><i class="fa fa-pencil ico_pencil" style="color:blue;" onclick="openModalDel('.$row["res_id"].',2);"></i></a>
						<a href="" id="linkT"><i class="fa fa-trash-o ico_trash" style="color:red;" onclick="openModalDel('.$row["res_id"].');"></i></a>
					</div>
				</td>
			</tr>
			<tr style="border-bottom: 1px solid #333;">
				<td><label>Sex: </label><span>'.$row["res_gender"].'</span></td>
				<td><label>Age: </label><span>'.$res_age.'</span></td>
			</tr>
			<tr>
				<td colspan="2"><label>Phone number: </label><span>'.$row["res_tel1_num"].'</span></td>
			</tr>
		</table>
	</div>';
	$cur_tbl_id[$i++] = $row["res_id"];
	}
	?>
</div>

</main>
<div class="clearfix" style="margin-top: 575px; margin-left: 460px;">
	<!--<form>
		<div class="col-lg-12">
        <button class="btn btn-primary btn-lg search_btn" type="submit"><span>Search </span></button>
    	</div>
	</form>-->
</div>




<!-- The Modal -->
<div id="Modal_ID" class="modal_sel_id">

  <!-- Modal content -->
  <div class="modal-content">
  	<div class="modal_sel_id_header">
  		<h3>Resident's Profile</h3>
    	<span class="modal_close">&times;</span>
	</div>
    <div class="modal_table">
    	<hr>
    	<table>
    		<tr>
    			<td><label style="margin-left: 0px;">House Number: </label><span>1234</span></td>
    			<td><label>Full Name: </label><span>Your Name Here</span></td>
    			<td><label style="margin-left:50px;">Resident ID: </label><span>1</span></td>
    		</tr>
    		<tr>
    			<td rowspan="5" style="text-align: center;"><img src="img/img_avatar1.png" alt="Profile Photo" style="max-width:180px; max-height:140px; border-radius:5px; border:1px solid #DDD; margin-bottom: 5px;"></td>
    			<td colspan="2"><label>Mother's Name: </label><span>Mothers Name Here</span></td>
    		</tr>
    		<tr>
    			<td><label>Place of Birth: </label><span>Somewhere</span></td>
    			<td><label style="margin-left:50px;">Sex: </label><span>Male</span></td>
    		</tr>
    		<tr>
    			<td><label>Date of Birth: </label><span>Some Date</span></td>
    			<td><label style="margin-left:50px;">Nationality: </label><span>Mongolian</span></td>
    		</tr>
    		<tr>
    			<td><label>Phone No: </label><span>+251-557-324-987</span></td>
    			<td><label style="margin-left:50px;">Occupation: </label><span>Some job</span></td>
    		</tr>
    		<tr>
    			<td colspan="3"></td>
    		</tr>
    		<tr>
    			<td colspan="3" class="modal_content_different"><label style="margin-left:0px; font-size: 16px; font-style: italic;">Emergency Contact</label><br/>
    			<label style="margin-left:20px;">Name: </label><span>Emergency Name</span><label style="margin-left:50px;">Phone: </label><span>+911-557-632-410</span></td>
    		</tr>
    		<tr>
    			<td colspan="3" style="text-align:right; letter-spacing: 7px; padding-top: 10px;">
    				<a href="#"><i class="fa fa-plus ico_plus" style="color:green;"></i></a>
					<a href="#"><i class="fa fa-pencil ico_pencil" style="color:blue;"></i></a>
					<a href="#"><i class="fa fa-trash-o ico_trash" style="color:red;"></i></a>
    			</td>
    		</tr>
    	</table>
    	<?php $abc=0;
    		echo '<p id="temp" value="'.$abc.'">'.$abc++.'</p>';
    	 ?>
    	<script>
    	for(var j=1; j<=5; j++){
    		<?php $abc++; ?>
    	}
    	document.getElementById("temp").value='5';
    	</script>
    <?php
    echo "COOKIE: ".$_COOKIE['curID13'].'<br> ONCE:'.$_SESSION['ooo'];
    ?>
    <p id="demo"></p>
    </div>
  </div>
</div>

<!-- The Other Modal -->
<div id="Modal_ID_edit" class="modal_sel_id_edit">
  <div class="modal-content_edit">
    <div class="modal_sel_id_header_edit">
    	<h3>Edit Resident's Profile</h3>
    	<span class="modal_close_edit">&times;</span>
  	</div><!---->
 	 <iframe src="edit_resident_profile.php" name="frm"></iframe>
	</div>
</div>




<!-- The Delete Modal -->
<div id="Modal_ID_delete" class="modal_sel_id_delete">
  <!-- Modal content -->
  <div class="modal-content_delete">
  	<div class="modal_sel_id_header_delete">
    	<span class="modal_close_delete">&times;</span>
	</div>
    <div class="modal_question_delete">
    	<h3>Are you sure you want to delete this profile?</h3>
    	<a href="#" id="delete_no">No</a>
    	<a href="#" id="delete_yes">Yes</a>
    </div>
    
    <div class="modal_ans_delete">
    	
    	<h3>Profile Deleted!</h3>
    	<a href="#" id="delete_ok">OK</a>
    </div>
  </div>
</div>





<!-- The Modal -->
<div id="Modal_ID_del" class="modal_sel_id_del">
  <!-- Modal content -->
  <div class="modal-content_del">
  	<div class="modal_sel_id_header_del">
    	<span class="modal_close_del">&times;</span>
	</div>
    <div class="modal_question_del">
    	<h3>Are you sure you want to delete this profile?</h3>
    	<a href="#" id="del_no">No</a>
    	<a href="#" id="del_yes">Yes</a>
    </div>
    
    <div class="modal_ans_del">
    	
    	<h3>Profile Deleted!</h3>
    	<a href="#" id="del_ok">OK</a>
    </div>
  </div>
</div>




<script>
	
function openModal(cur_tbl_id){
//document.getElementById('cur_tbl_id').value=cur_tbl_id;
//alert("Val: "+document.getElementById('cur_tbl_id').value);
		/*value="SELECT res_id,res_photo_name,res_fname,res_mname,res_lname,res_mom_fname,res_mom_lname,res_hou_num,res_pob,res_gender,res_dob,res_nationality,res_tel1_num FROM resident WHERE res_id="+cut_tbl_id;*/
	//alert("hello"+cur_tbl_id);
	//openModalDel();
	var modal = document.getElementById('Modal_ID');
	modal.style.display = "block";
	var span = document.getElementsByClassName("modal_close")[0];
	span.onclick = function() {
	  modal.style.display = "none";
	}
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
}
function openModalEdit(cur_tbl_id){
	var modal = document.getElementById('Modal_ID_edit');
	modal.style.display = "block";
	var span = document.getElementsByClassName("modal_close_edit")[0];
	span.onclick = function() {
	  modal.style.display = "none";
	}
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
}
function openModalDelete(cur_tbl_id){
	//alert('hello'+cur_tbl_id);
	var modal_del = document.getElementById('Modal_ID_delete');
	modal_del.style.display = "block";
	document.getElementsByClassName("modal_close_delete")[0].onclick = function() {
	  modal_del.style.display = "none";
	}
	window.onclick = function(event) {
	  if (event.target == modal_del) {
	    modal_del.style.display = "none";
	  }
	}
	document.getElementById('delete_no').onclick = function(){
		modal_del.style.display = "none";
	}
	document.getElementById('delete_yes').onclick = function(){
		document.getElementsByClassName("modal_question_delete")[0].style.display = "none";
		document.getElementsByClassName("modal_ans_delete")[0].style.display = "block";
		document.getElementsByClassName("modal-content_delete")[0].style.width = '45%';
	}
	document.getElementById('delete_ok').onclick = function(){
		document.getElementsByClassName("modal-content_delete")[0].style.width = '55%';
		document.getElementsByClassName("modal_question_delete")[0].style.display = "block";
		document.getElementsByClassName("modal_ans_delete")[0].style.display = "none";
		modal_del.style.display = "none";
	}
}

</script>

<script>
//****************************************************************
function reload(){
	 window.location.assign("search_profile.php");
}
//var select_modal = 1;
function checkOL(){
	var select_modal = "<?php echo $_COOKIE['selected_modal'];?>";
	//do this for all modals
	//if( //echo ($_SESSION['ooo'] == 3);
		//echo 'true';)
	if(select_modal == '1'){
		openModal(<?php echo $_SESSION['rrr'];?>);
		document.cookie = "selected_modal="+0;
	}
	if(select_modal == '2'){
		openModalEdit(<?php echo $_SESSION['rrr'];?>);
		document.cookie = "selected_modal="+0;
	}
	if(select_modal == '3'){
		openModalDelete(<?php echo $_SESSION['rrr'];?>);
		document.cookie = "selected_modal="+0;
	}
}

function openModalDel(cur_tbl_id, select_modal){
	document.cookie = "selected_modal="+select_modal;
	alert('hello'+cur_tbl_id);
	//Set COOKIE--------------------
	document.cookie = "curID13="+cur_tbl_id;
	var x = document.cookie;
	document.getElementById('demo').innerHTML="COOKIE:"+x;

	if(<?php echo ($_SESSION['ooo'] == 1); ?>){
		<?php 
		//$_SESSION['ooo'] = 3;
		$_SESSION['rrr'] = $row["res_id"];
		?>
		window.location.assign("search_profile.php");
	}
	//-------------------------------
	/*var modal = document.getElementById('Modal_ID_del');
	modal.style.display = "block";
	var span = document.getElementsByClassName("modal_close_del")[0];
	span.onclick = function() {
	  modal.style.display = "none";
	}
	window.onclick = function(event) {
	  if (event.target == modal) {
	    modal.style.display = "none";
	  }
	}
	document.getElementById('del_no').onclick = function(){
		modal.style.display = "none";
	}
	document.getElementById('del_yes').onclick = function(){
		document.getElementsByClassName("modal_question_del")[0].style.display = "none";
		document.getElementsByClassName("modal_ans_del")[0].style.display = "block";
		document.getElementsByClassName("modal-content_del")[0].style.width = '45%';
	}
	document.getElementById('del_ok').onclick = function(){
		document.getElementsByClassName("modal-content_del")[0].style.width = '55%';
		document.getElementsByClassName("modal_question_del")[0].style.display = "block";
		document.getElementsByClassName("modal_ans_del")[0].style.display = "none";
		modal.style.display = "none";
	}*/
}

</script>


















<script>
	window.addEventListener("load", function load_pg(){
		//document.getElementById("aaaa1").innerHTML = "a"+window.pageYOffset;
	  if (window.pageYOffset < 100 ) {
			window.scrollBy(0, 140);
			//alert("pageXOffset: " + window.pageXOffset + ", pageYOffset: " + window.pageYOffset);
			//document.getElementById('aaa').innerHTML = ""+window.pageYOffset;
	}
	});
	window.addEventListener("scroll", function load_pg(){
	  if (window.pageYOffset < 101) 
	  	while (window.pageYOffset < 101)
	  		window.scrollBy(0, 1);
	});
	/*function phone_zip(){
		if(document.getElementById('phone_input').value == "")
		document.getElementById('phone_input').value = "+251-";
	}*/
	var phone_id=""
	function phone_change(){
		ph = document.getElementById('phone_input');
		var s=""+ph.value;
		if(s.length==8 || s.length==12) ph.value+="-";
    if(ph.value=="+251-0") ph.value="+251-";
	}

	//var abc;
	//function openModal(abc){
	//	alert(abc);
	//}
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>

</body>
</html>