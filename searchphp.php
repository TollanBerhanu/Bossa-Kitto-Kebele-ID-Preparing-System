<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


 <?php $_SESSION['ooo'] = 1;
 echo $_SESSION['ooo'] . '<br>';?>

<?php
	include 'mysqli_connect.php';

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
	echo $numand.'<br>';
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
	$sql = "SELECT res_photo_name,res_fname,res_mname,res_lname,res_gender,YEAR(res_dob),res_tel1_num FROM resident".$cond.";";
	echo $sql;
	if($res=mysqli_query($conn,$sql))
		echo "Search Successful!<br>";
	else echo "Couldn't execute search operation: ".mysqli_error($conn);

	$row = mysqli_fetch_array($res);

	echo '<br>'.$row['res_photo_name']." ".$row['res_fname']." ".$row['res_mname']." ".$row['res_lname']." ".$row['res_gender']." ".$row['YEAR(res_dob)']." ".$row['res_tel1_num'];
	
	$cur_year = date("Y");
	$res_age = $cur_year - $row['YEAR(res_dob)'];
	//echo '<br>'.$res_age;

	while($row = mysqli_fetch_array($res))
	echo '<div class="container search_profile">
		<table id="search_result_table">
			<tr>
				<td rowspan="3" style="width: 130px; text-align: center;"><img src="'.$row["res_photo_name"].'" class="search_result_img" alt="Profile Picture"></td>
				<td colspan="2" style="border-bottom: 1px solid #333;"><label>Name: </label><span>'.$row["res_fname"].' '.$row["res_mname"].' '.$row["res_lname"].'</span></td>
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
				<td><label>Sex: </label><span>'.$row["res_gender"].'</span></td>
				<td><label>Age: </label><span>'.$res_age.'</span></td>
			</tr>
			<tr>
				<td colspan="2"><label>Phone number: </label><span>'.$row["res_tel1_num"].'</span></td>
			</tr>
		</table>
	</div>';






	mysqli_close($conn);
	?>
















<!--To pass the 'Show ID, Edit Profile' query to php

<?php
	/*//$cur_tbl_id=1;
	//echo '<p id="cur_tbl_id">'.$cur_tbl_id.'</p>';
	//$cur_tbl_id = $myService->getValue();
	//$cur_tbl_id = $_POST['cur_tbl_id'];
	$sql = "SELECT res_id,res_photo_name,res_fname,res_mname,res_lname,res_mom_fname,res_mom_lname,res_hou_num,res_pob,res_gender,res_dob,res_nationality,res_tel1_num FROM resident WHERE res_id=1";
	//$cur_tbl_id.";";
	//$sql=$_POST['cur_tbl_id'];
	echo $sql;
	if($res=mysqli_query($conn,$sql))
		echo "Search Successful!<br>";
	else echo "Error Message: ".mysqli_error($conn);

	$row = mysqli_fetch_array($res);




echo '<!-- The Modal -->';
	mysqli_close($conn);
*/
?>-->
	</body>
</html>