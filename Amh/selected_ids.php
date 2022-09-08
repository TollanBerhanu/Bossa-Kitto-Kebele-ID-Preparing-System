<!DOCTYPE html>
<html>
<head>
	<title>ለመታተም የተመረጡ መታወቂያዎች</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			padding: 0;
			background-color: #82868a;
		}
		main.selected_ids{
			margin-top: 130px;
			padding: 15px;
			height: 1300px;
		}
		aside{
			position: fixed;
			left: 0;
			top: 200px;
		}
		aside ul{ list-style-type: none; }
		aside ul li{
			display: block;
			padding: 20px;
			background-color: #333;
			color: #fed136;
			font-weight: bold;
			box-shadow: 0 5px 8px 0 rgba(0,0,0,0.4);
		}
		aside ul li:hover{
			background-color: #fed136;
			color: #333;
		}
		div.sel_id, div.notice{
			display: inline-block;
			border: 1px solid #333;
			border-radius: 5px;
			padding: 5px;
			margin: 15px;
		}
		div.sel_id table{
			width: 10.5cm;
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
		span#remove{
			text-decoration: none;
			display: inline-block;
			padding: 0px 5px;
			position: relative;
			left:15px;
			bottom: 6px;
			font-size: 1.2em;
			color: tomato;
			cursor: pointer;
			border-top-right-radius: 4px;
		}
		div.sel_id:hover{
			box-shadow: 1px 5px 6px 1px rgba(0,0,0,0.3);
		}
		table:hover span#remove{
			box-shadow: 1px 5px 6px 1px rgba(0,0,0,0.3);
			background-color: tomato;
			color: #333;
		}
		table span#remove:hover{
			background-color: #333;
			color: tomato;
		}
		table span#remove:active{
			background-color: tomato;
			color: #333;
		}


		div._notice{
			width: 10cm;
			z-index: 1;
			position: absolute;
		}
		div._notice h1{
			font-size: 1.3em;
			margin-top: 10px;
			text-align: center;
			text-decoration: underline;
		}
		div._notice ol{
			font-size: 0.8em;
		}
		div._notice p{
			text-align: center;
			font-size: 0.9em;
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
		main.selected_ids{
			page: cover;
			box-sizing: border-box;
			content: normal;
			width: 100%;
			height: 100%;
			padding: 5px;
			margin: 0;
			background-color: #FFF;
		}
		div.sel_id{
			float: left;
			width: 49%;
			display: inline-block;
			border: 1px solid #333;
			border-radius: 5px;
			padding: 5px;
			margin: 1%;
			width: 48%;
		}
		div.sel_id table{
			width: 100%;
			height: 100%;
			font-size: 0.8em;
			border-collapse: collapse;
			text-transform: capitalize;
		}
		div._notice{
			width: 11.5cm;
			margin: auto;
		}
		table span#remove{display: none;}
		aside{ display: none; }
		nav { display: none; }
	}
	</style>
</head>
<body>
<?php
	include 'mysqli_connect.php';
for($i=1; $i<=8; $i++){ 
	if(!isset($_COOKIE['mod_id'.$i])) continue;
	$mod_id = $_COOKIE['mod_id'.$i];
	$sql = "SELECT MAX(res_id_number) FROM resident;";
	$row = mysqli_fetch_array(mysqli_query($conn, $sql));

	$sql = "UPDATE resident SET res_date_given=NOW(), res_id_number=".++$row[0]." WHERE res_id=".$mod_id.";";
	if(mysqli_query($conn, $sql)) echo "";
	else "Error: ".mysqli_error($conn);

	
	$sql = "SELECT res_hou_num,res_id,res_photo_name,res_fname,res_mname,res_lname,res_mom_fname,res_mom_lname,res_pob,res_gender,res_dob,res_nationality,res_tel1_num,res_work,res_emcon_fname,res_emcon_lname,res_emcon_tel_num,res_emp_name,DAY(res_date_given),MONTH(res_date_given),YEAR(res_date_given),res_id_number FROM resident WHERE res_id=".$mod_id.";";
    		if($res[$i]=mysqli_query($conn, $sql)) echo '';
    		else echo "Couldn't retrieve profile information: ".mysqli_error($conn);
		}
    		//$row = mysqli_fetch_array($res[1]);
    	
?>

 <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top">ቦሳ ኪቶ ቀበሌ</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
            	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><i class="fa fa-home"></i> ዋና ገፅ</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger"  href="new_profile_resident.php"><i class="fa fa-address-book"></i> አዲስ ነዋሪ መዝግብ</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="search_profile.php"><i class="fa fa-search"></i> የነዋሪዎችን ገጽታ ፈልግ</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#" id="current"><i class="fa fa-vcard"></i> የተመረጡ መታወቂያዎች</a></li>
				<!--<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#"><i class="fa fa-edit"></i> Register</a>
			        <div class="drpdown">
			        	<a href="new_profile_resident.php">Resident</a>
			        	<a href="new_profile_resident.php#new_profile_house">House/Residence</a>
			        	<a href="new_profile_employee.php">Kebele Employee</a>
			        </div>
			    </li>-->
			    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="statistics.php"><i class="fa fa-newspaper-o"></i> ስታትስቲክስ / ተጨማሪ መረጃ</a></li>
            </ul>
        </div>
    </div>
</nav>
<aside>
	<ul>
		<li id="front_pg" onclick="frontPage();">የፊት ገጽ</li>
		<li id="back_pg" onclick="backPage();">የጀርባ ገጽ</li>
	</ul>
</aside>
<main class="selected_ids">

<?php
for($i=1; $i<=8; $i++){
	if(!isset($_COOKIE['mod_id'.$i])) continue; 
	$row = mysqli_fetch_array($res[$i]);
	echo '<div class="sel_id">
		<div class="_notice" style="display: none;">
		<h1>ማሳሰቢያ</h1>
			<ol>
				<li>ይህ የመታወቂያ ደብተር ወድቆ ቢገኝ ከላይ በተመለከተው አድራሻ ወይም ለሚከተለው ከተማ አስተዳደር አካል በመስጠት ይተባበሩን፡፡</li>
				<li>ነዋሪው ይህንን የመታወቂያ ደብተር ሁል ጊዜ መያዝ አለበት፡፡</li>
				<li>ነዋሪው ቀበሌውን ለቆ ሲሄድ ይህን የመታወቂያ ደብተር መመለሰስ አለበት፡፡</li>
				<li>ይህ መታወቂያ የሚያገለግለው ከተሰጠበት ቀን አንስቶ እስከ ሁለት ዓመት ድረስ ብቻ ነው</li>
			</ol>
			<p>የባለመታወቂያው ፊርማ ______________</p>
		</div>
		<table class="sel_id_tbl">
			<tr style="border-bottom: 1px solid #333; text-align:center;">
				<th colspan="3">የቦሳ ኪቶ ቀበሌ ነዋሪዎች የመታወቂያ ካርድ
				<span id="remove" onclick="removeID('.$i.');">&times;</span></th>

			</tr>

			<tr>
				<td style="padding-top: 5px; width:30%;"><label>የመታወቂያ ቁጥር: </label><span>'.$row["res_id_number"].'</span></td>
				<td style="padding-top: 5px;"><label>የቤት ቁጥር: </label><span>'.$row["res_hou_num"].'</span></td>
				<td style="padding-top: 5px;"><label>&nbsp;&nbsp;የነዋሪ መለያ: </label><span>'.$row["res_id"].'</span></td>
			</tr>
			<tr>
				<td rowspan="5" style="text-align:center;"><img src="'.$row["res_photo_name"].'" alt="Profile Photo" style="width:3cm; height:3cm; border-radius:5px; border:1px solid #DDD; margin-bottom: 5px; margin-right:5px;"></td>
				<td colspan="2"><label>ሙሉ ስም: </label><span>'.$row["res_fname"].' '.$row["res_mname"].' '.$row["res_lname"].'</span></td>
			</tr>
			<tr>
				<td colspan="2"><label>የእናት ሙሉ ስም: </label><span>'.$row["res_mom_fname"].' '.$row["res_mom_lname"].'</span></td>
			</tr>
			<tr>
				<td><label>የትዉልድ ቦታ: </label><span>'.$row["res_pob"].'</span></td>
				<td><label>ፆታ: </label><span>'.$row["res_gender"].'</span></td>
			</tr>
			<tr>
				<td style="width: 40%;"><label>የትዉልድ ቀን: </label><span>'.$row["res_dob"].'</span></td>
				<td><label>ዜግነት: </label><span>'.$row["res_nationality"].'</span></td>
			</tr>
			<tr id="font_sm">
				<td><label>ስልክ ቁጥር: </label><span>'.$row["res_tel1_num"].'</span></td>
				<td><label>ስራ: </label><span>'.$row["res_work"].'</span></td>
			</tr>
			<tr style="border-top: 1px solid #333;">
				<th colspan="3"><label style="font-size: 0.8em;">የአደገጋ ግዜ ተጠሪ</label></th>
			</tr>
			<tr style="border-bottom: 1px solid #333;">
				<td colspan="3" style="padding-left: 0.4cm;"><label>ስም: </label><span>'.$row["res_emcon_fname"].' '.$row["res_emcon_lname"].'</span>
				<label style="margin-left:0.7cm;">ስልክ ቁጥር: </label><span>'.$row["res_emcon_tel_num"].'</span></td>
			</tr>
			<tr>
				<td colspan="3"><label>የተሰጠበት ቀን: </label><span>'.$row["DAY(res_date_given)"].'/'.$row["MONTH(res_date_given)"].'/'.$row["YEAR(res_date_given)"].'</span>
				<label style="margin-left:0.7cm;">የሚያበቃበት ጊዜ: </label><span>'.$row["DAY(res_date_given)"].'/'.$row["MONTH(res_date_given)"].'/'.($row["YEAR(res_date_given)"]+2).'</span></td>
			</tr>
			<tr>
				<td colspan="3"><label>መተታወቂያውን የሰጠው ሰው ስም: </label><span>'.$row["res_emp_name"].'</span>
				<label style="margin-left:0.7cm;">ፊርማ: </label><span>_______________</span></td>
				<td></td>
			</tr>
		</table>
		
	</div>';
}
?>
</main>

<script>
	function removeID(str){
		var select_id = Number("<?php echo $_COOKIE['sel_id'];?>");
		document.cookie = "sel_id="+(select_id-1);
		document.cookie = "mod_id"+str+"=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
		window.location.reload("selected_ids.php");
	}
	function frontPage(){
		for(var i=0; i<8; i++){
		document.getElementsByClassName('sel_id_tbl')[i].style.visibility='visible';
		document.getElementsByClassName('_notice')[i].style.display='none';
		document.getElementsByClassName('sel_id')[i].style.float='left';
		}
	}
	function backPage(){
		for(var i=0; i<8; i++){
		document.getElementsByClassName('_notice')[i].style.display='inline-block';
		document.getElementsByClassName('sel_id_tbl')[i].style.visibility='hidden';
		document.getElementsByClassName('sel_id')[i].style.float='right';
		}
	}
</script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>

</body>
</html>