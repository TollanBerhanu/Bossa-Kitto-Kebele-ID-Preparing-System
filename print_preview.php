<!DOCTYPE html>
<html>
<head>
	<title>Print Preview</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			padding: 0 120px;
			background-color: #82868a;
		}
		main{
			background-color: #FFF;
			margin: 20px auto; 
			width: 100%;
		}
		div.sel_id{
			width: 48%;
			display: inline-block;
			border: 1px solid #333;
			border-radius: 5px;
			padding: 5px;
			margin: 5px 0.5%;
		}
		div.sel_id table{
			width: 100%;
			font-size: 0.7em;
			border-collapse: collapse;
			text-transform: capitalize;
		}
		#font_sm{
			/*font-size: 0.8em;*/
		}
		table tr td{border: 0px solid black;}
		table tr th{
			padding-bottom: 5px;
			font-size: 0.4cm;
		}
		div.sel_id table label, span{
			margin: 0;
			padding: 0;
		}
		div.sel_id table label{
			font-weight: bold;
			margin-right: 0.3em;
		}
		div.sel_id table span{
			text-decoration: underline;
		}
	@media print{
		@page{
			size: a4;
		}
		@page:left{
			margin-left: 0;
		}
		@page:right{
			margin-left: 0;
		}
		@page:first{
			size: a4;
			margin: 0;
			padding: 0;
		}
		main{
			page: cover;
			content: normal;
			width: 100%
			height: 100%;
			padding: 0;
			
			background-color: #FFF;
			margin: auto;
			padding: 0;
		}
		div.sel_id{
			display: inline-block;
			border: 1px solid #333;
			border-radius: 5px;
			padding: 5px;
			margin: 1% 1%;
			width: 48%;
		}
		div.sel_id table{
			width: 100%;
			height: 100%;
			font-size: 0.8em;
			border-collapse: collapse;
			text-transform: capitalize;
		}
	}
	</style>
</head>
<body>
<main>
<?php
	include 'mysqli_connect.php';
for($i=1; $i<=8; $i++){ 
	if(!isset($_COOKIE['mod_id'.$i])) continue;
	$mod_id = $_COOKIE['mod_id'.$i];
	$sql = "SELECT MAX(res_id_number) FROM resident;";
	$row = mysqli_fetch_array(mysqli_query($conn, $sql));

	$sql = "UPDATE resident SET res_date_given=NOW(), res_id_number=".++$row[0]." WHERE res_id=".$mod_id.";";
	mysqli_query($conn, $sql);

	
	$sql = "SELECT res_hou_num,res_id,res_photo_name,res_fname,res_mname,res_lname,res_mom_fname,res_mom_lname,res_pob,res_gender,res_dob,res_nationality,res_tel1_num,res_work,res_emcon_fname,res_emcon_lname,res_emcon_tel_num,res_emp_name,DAY(res_date_given),MONTH(res_date_given),YEAR(res_date_given),res_id_number FROM resident WHERE res_id=".$mod_id.";";
    	$res[$i]=mysqli_query($conn, $sql);
    		
	
	if(!isset($_COOKIE['mod_id'.$i])) continue; 
	$row = mysqli_fetch_array($res[$i]);
	echo '<div class="sel_id">
		
		<table>
			<tr style="border-bottom: 1px solid #333; text-align:center;">
				<th colspan="3">Bossa Kitto Kebele\'s Resident Identification Card</th>
			</tr>

			<tr>
				<td style="padding-top: 5px; width:30%;"><label>ID Number: </label><span>'.$row["res_id_number"].'</span></td>
				<td style="padding-top: 5px;"><label>House Number: </label><span>'.$row["res_hou_num"].'</span></td>
				<td style="padding-top: 5px;"><label>&nbsp;&nbsp;Resident ID: </label><span>'.$row["res_id"].'</span></td>
			</tr>
			<tr>
				<td rowspan="5" style="text-align:center;"><img src="'.$row["res_photo_name"].'" alt="Profile Photo" style="width:3cm; height:3cm; border-radius:5px; border:1px solid #DDD; margin-bottom: 5px; margin-right:5px;"></td>
				<td colspan="2"><label>Full Name: </label><span>'.$row["res_fname"].' '.$row["res_mname"].' '.$row["res_lname"].'</span></td>
			</tr>
			<tr>
				<td colspan="2"><label>Mother\'s Full Name: </label><span>'.$row["res_mom_fname"].' '.$row["res_mom_lname"].'</span></td>
			</tr>
			<tr>
				<td><label>Place of Birth: </label><span>'.$row["res_pob"].'</span></td>
				<td><label>Sex: </label><span>'.$row["res_gender"].'</span></td>
			</tr>
			<tr>
				<td><label>Date of Birth: </label><span>'.$row["res_dob"].'</span></td>
				<td><label>Nationality: </label><span>'.$row["res_nationality"].'</span></td>
			</tr>
			<tr id="font_sm">
				<td><label>Phone N<span>o</span>: </label><span>'.$row["res_tel1_num"].'</span></td>
				<td><label>Work: </label><span>'.$row["res_work"].'</span></td>
			</tr>
			<tr style="border-top: 1px solid #333;">
				<th colspan="3"><label style="font-size: 0.8em;">Emergency Contact</label></th>
			</tr>
			<tr style="border-bottom: 1px solid #333;">
				<td colspan="3" style="padding-left: 0.4cm;"><label>Name: </label><span>'.$row["res_emcon_fname"].' '.$row["res_emcon_lname"].'</span>
				<label style="margin-left:0.7cm;">Phone N<span>o</span>: </label><span>'.$row["res_emcon_tel_num"].'</span></td>
			</tr>
			<tr>
				<td colspan="3"><label>Date Issued: </label><span>'.$row["DAY(res_date_given)"].'/'.$row["MONTH(res_date_given)"].'/'.$row["YEAR(res_date_given)"].'</span>
				<label style="margin-left:0.7cm;">Date of Expiry: </label><span>'.$row["DAY(res_date_given)"].'/'.$row["MONTH(res_date_given)"].'/'.($row["YEAR(res_date_given)"]+2).'</span></td>
			</tr>
			<tr>
				<td colspan="3"><label>ID Given By: </label><span>'.$row["res_emp_name"].'</span>
				<label style="margin-left:0.7cm;">Signature: </label><span>_______________</span></td>
				<td></td>
			</tr>
		</table>

		
	</div>';
}
?>

</main>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>

</body>
</html>