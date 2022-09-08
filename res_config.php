<?php
include 'mysqli_connect.php'.

$res_photo_name = "";
$res_fname = $_POST['res_fname'];
$res_mname = $_POST['res_mname'];
$res_lname = $_POST['res_lname'];
$res_gender = $_POST['res_gender'];
$res_dob = $_POST['res_dob_year'].'-'.$_POST['res_dob_month'].'-'.$_POST['res_dob_day'];
$res_pob = $_POST['res_pob'];
$res_nationality = $_POST['res_nationality'];
$res_tel1_type = $_POST['res_tel1_type'];
$res_tel1_num = $_POST['res_tel1_num'];
$res_tel2_type = $_POST['res_tel2_type'];
$res_tel2_num = $_POST['res_tel2_num'];
$res_work = $_POST['res_work'];
$res_mom_fname = $_POST['res_mom_fname'];
$res_mom_lname = $_POST['res_mom_lname'];
$res_mom_tel_type = $_POST['res_mom_tel_type'];
$res_mom_tel_num = $_POST['res_mom_tel_num'];
$res_marital = $_POST['res_marital'];
$res_spouse_fname = $_POST['res_spouse_fname'];
$res_spouse_lname = $_POST['res_spouse_lname'];
$res_spouse_tel_type = $_POST['res_spouse_tel_type'];
$res_spouse_tel_num = $_POST['res_spouse_tel_num'];
$res_num_ch = $_POST['res_num_ch'];
$res_ch1_fname = $_POST['res_ch1_fname'];
$res_ch1_lname = $_POST['res_ch1_lname'];
$res_ch1_gender = $_POST['res_ch1_gender'];
$res_ch1_age = date("Y") - $_POST['res_ch1_age'];
$res_ch1_pob = $_POST['res_ch1_pob'];
$res_ch1_relation = $_POST['res_ch1_relation'];
$res_ch2_fname = $_POST['res_ch2_fname'];
$res_ch2_lname = $_POST['res_ch2_lname'];
$res_ch2_gender = $_POST['res_ch2_gender'];
$res_ch2_age = date("Y") - $_POST['res_ch2_age'];
$res_ch2_pob = $_POST['res_ch2_pob'];
$res_ch2_relation = $_POST['res_ch2_relation'];
$res_ch3_fname = $_POST['res_ch3_fname'];
$res_ch3_lname = $_POST['res_ch3_lname'];
$res_ch3_gender = $_POST['res_ch3_gender'];
$res_ch3_age = date("Y") - $_POST['res_ch3_age'];
$res_ch3_pob = $_POST['res_ch3_pob'];
$res_ch3_relation = $_POST['res_ch3_relation'];
$res_ch4_fname = $_POST['res_ch4_fname'];
$res_ch4_lname = $_POST['res_ch4_lname'];
$res_ch4_gender = $_POST['res_ch4_gender'];
$res_ch4_age = date("Y") - $_POST['res_ch4_age'];
$res_ch4_pob = $_POST['res_ch4_pob'];
$res_ch4_relation = $_POST['res_ch4_relation'];
$res_ch5_fname = $_POST['res_ch5_fname'];
$res_ch5_lname = $_POST['res_ch5_lname'];
$res_ch5_gender = $_POST['res_ch5_gender'];
$res_ch5_age = date("Y") - $_POST['res_ch5_age'];
$res_ch5_pob = $_POST['res_ch5_pob'];
$res_ch5_relation = $_POST['res_ch5_relation'];
$res_emcon_fname = $_POST['res_emcon_fname'];
$res_emcon_lname = $_POST['res_emcon_lname'];
$res_emcon_tel_type = $_POST['res_emcon_tel_type'];
$res_emcon_tel_num = $_POST['res_emcon_tel_num'];
$res_emcon_relation = $_POST['res_emcon_relation'];
$res_hou_num = $_POST['res_hou_num'];
$res_hou_loc = $_POST['res_hou_loc'];
$res_hou_area = $_POST['res_hou_area'];
$res_hou_relation = $_POST['res_hou_relation'];
$res_hou_desc = $_POST['res_hou_desc'];
$res_emp_name = $_POST['res_emp_name'];

$sql = "CREATE TABLE resident(
		res_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		res_photo_name VARCHAR(100) NULL,
		res_fname VARCHAR(80) NOT NULL,
		res_mname VARCHAR(80) NOT NULL,
		res_lname VARCHAR(80) NOT NULL,
		res_gender VARCHAR(10) NOT NULL,
		res_dob DATE NOT NULL,
		res_pob VARCHAR(90) NULL,
		res_nationality VARCHAR(25) NOT NULL,
		res_tel1_type VARCHAR(30) NULL,
		res_tel1_num VARCHAR(30) NOT NULL,
		res_tel2_type VARCHAR(30) NULL,
		res_tel2_num VARCHAR(30) NULL,
		res_work VARCHAR(40) NULL,
		res_mom_fname VARCHAR(30) NULL,
		res_mom_lname VARCHAR(30) NULL,
		res_mom_tel_type VARCHAR(30) NULL,
		res_mom_tel_num VARCHAR(30) NULL,
		res_marital VARCHAR(30) NULL,
		res_spouse_fname VARCHAR(30) NULL,
		res_spouse_lname VARCHAR(30) NULL,
		res_spouse_tel_type VARCHAR(30) NULL,
		res_spouse_tel_num VARCHAR(30) NULL,
		res_num_ch VARCHAR(3) NULL,
		res_ch1_fname VARCHAR(30) NULL,
		res_ch1_lname VARCHAR(30) NULL,
		res_ch1_gender VARCHAR(10) NULL,
		res_ch1_age VARCHAR(5) NULL,
		res_ch1_pob VARCHAR(40) NULL,
		res_ch1_relation VARCHAR(20) NULL,
		res_ch2_fname VARCHAR(30) NULL,
		res_ch2_lname VARCHAR(30) NULL,
		res_ch2_gender VARCHAR(10) NULL,
		res_ch2_age VARCHAR(5) NULL,
		res_ch2_pob VARCHAR(40) NULL,
		res_ch2_relation VARCHAR(20) NULL,
		res_ch3_fname VARCHAR(30) NULL,
		res_ch3_lname VARCHAR(30) NULL,
		res_ch3_gender VARCHAR(10) NULL,
		res_ch3_age VARCHAR(5) NULL,
		res_ch3_pob VARCHAR(40) NULL,
		res_ch3_relation VARCHAR(20) NULL,
		res_ch4_fname VARCHAR(30) NULL,
		res_ch4_lname VARCHAR(30) NULL,
		res_ch4_gender VARCHAR(10) NULL,
		res_ch4_age VARCHAR(5) NULL,
		res_ch4_pob VARCHAR(40) NULL,
		res_ch4_relation VARCHAR(20) NULL,
		res_ch5_fname VARCHAR(30) NULL,
		res_ch5_lname VARCHAR(30) NULL,
		res_ch5_gender VARCHAR(10) NULL,
		res_ch5_age VARCHAR(5) NULL,
		res_ch5_pob VARCHAR(40) NULL,
		res_ch5_relation VARCHAR(20) NULL,
		res_emcon_fname VARCHAR(40) NULL,
		res_emcon_lname VARCHAR(40) NULL,
		res_emcon_tel_type VARCHAR(20) NULL,
		res_emcon_tel_num VARCHAR(20) NULL,
		res_emcon_relation VARCHAR(60) NULL,
		res_hou_num VARCHAR(30) NOT NULL,
		res_hou_loc VARCHAR(30) NULL,
		res_hou_area VARCHAR(30) NULL,
		res_hou_relation VARCHAR(40) NULL,
		res_hou_desc VARCHAR(1000) NULL,
		res_emp_name VARCHAR(60) NULL,
		res_date_given date NULL,
		res_id_number INT UNSIGNED NULL DEFAULT '0',
		PRIMARY KEY(res_id)
		);";
		if(mysqli_query($conn, $sql))
		echo "Table successfully created!<br>";
		else
		echo "Error creating table: ". mysqli_error($conn). "<br>";

$sql = "SELECT COUNT(*) FROM resident";
$num = mysqli_fetch_array(mysqli_query($conn,$sql));
//$num[0]++;
echo $_FILES['res_photo']['name'].'<br>';
echo $_FILES['res_photo']['size'].'<br>';
$imgNameandExtension = $_FILES['res_photo']['name'];
$imgsize = $_FILES['res_photo']['size'];
echo basename($_FILES['res_photo']['name']). '<br>';
$imgName=$res_fname.'_'.$res_mname.'_'.$res_lname.'_'.++$num[0];
$targetdir = "Profile Photo/Resident/".$imgName."/";
$targetfile = $targetdir . basename($_FILES['res_photo']['name']);
echo $targetfile .'<br>';
$imgExtension = strtolower(pathinfo($imgNameandExtension, PATHINFO_EXTENSION));
echo $imgExtension .'<br>';

	$upload = true;
	echo $_FILES['res_photo']['tmp_name'].'<br>';
	$check_array = getimagesize($_FILES['res_photo']['tmp_name']);
	echo $check_array['mime'].'<br>'; // tells  us whether the file is an image or not
	if(empty($check_array)){
		echo "it's empty (not an image)". '<br>';
		$upload = false;
	}
	else echo "It's NOT empty(is an img)". '<br>';
	if($check_array !== false) echo "it's Not false(is an img)". '<br>';
	else {
		echo "It's False (not an image)". '<br>';
		$upload = false;
	}
	if(file_exists($targetfile)){ // not likely because the file will be renamed
		echo "File already exists". '<br>';
		$upload = false;
	}
	//if($imgsize > 500000){
	//	echo "File too large". '<br>';
	//	$upload = false;
	//}
	if($imgExtension!='jpg'and $imgExtension!="png"&&$imgExtension!='jpeg'){
		echo "Unsupported file format". '<br>';
		$upload = false;
	}
	
	if($upload){
		$res_photo_name = $targetdir.$imgName.".".$imgExtension;
		echo $res_photo_name;
		@mkdir("Profile Photo/");
		@mkdir("Profile Photo/Resident/");
		mkdir($targetdir); // ("Uploaded Image/Name/".$imgName."/");
		if(move_uploaded_file($_FILES['res_photo']['tmp_name'], $targetfile))
		{
			echo "File Uploaded". '<br>';
			rename($targetfile,$res_photo_name);
			//"Uploaded Image/Name: ".$imgName."/".$imgName.".".$imgExtension);
		} 
		else echo "An error occured while uploading file". '<br>';
	}
	else $res_photo_name = "img/NoPicMale.jpg";



$sql = "INSERT INTO resident (res_photo_name,res_fname,res_mname,res_lname,res_gender,res_dob,res_pob,res_nationality,res_tel1_type,res_tel1_num,res_tel2_type,res_tel2_num,res_work,res_mom_fname,res_mom_lname,res_mom_tel_type,res_mom_tel_num,res_marital,res_spouse_fname,res_spouse_lname,res_spouse_tel_type,res_spouse_tel_num,res_num_ch,res_ch1_fname,res_ch1_lname,res_ch1_gender,res_ch1_age,res_ch1_pob,res_ch1_relation,res_ch2_fname,res_ch2_lname,res_ch2_gender,res_ch2_age,res_ch2_pob,res_ch2_relation,res_ch3_fname,res_ch3_lname,res_ch3_gender,res_ch3_age,res_ch3_pob,res_ch3_relation,res_ch4_fname,res_ch4_lname,res_ch4_gender,res_ch4_age,res_ch4_pob,res_ch4_relation,res_ch5_fname,res_ch5_lname,res_ch5_gender,res_ch5_age,res_ch5_pob,res_ch5_relation,res_emcon_fname,res_emcon_lname,res_emcon_tel_type,res_emcon_tel_num,res_emcon_relation,res_hou_num,res_hou_loc,res_hou_area,res_hou_relation,res_hou_desc,res_emp_name)
VALUES ('$res_photo_name','$res_fname','$res_mname','$res_lname','$res_gender','$res_dob','$res_pob','$res_nationality','$res_tel1_type','$res_tel1_num','$res_tel2_type','$res_tel2_num','$res_work','$res_mom_fname','$res_mom_lname','$res_mom_tel_type','$res_mom_tel_num','$res_marital','$res_spouse_fname','$res_spouse_lname','$res_spouse_tel_type','$res_spouse_tel_num','$res_num_ch','$res_ch1_fname','$res_ch1_lname','$res_ch1_gender','$res_ch1_age','$res_ch1_pob','$res_ch1_relation','$res_ch2_fname','$res_ch2_lname','$res_ch2_gender','$res_ch2_age','$res_ch2_pob','$res_ch2_relation','$res_ch3_fname','$res_ch3_lname','$res_ch3_gender','$res_ch3_age','$res_ch3_pob','$res_ch3_relation','$res_ch4_fname','$res_ch4_lname','$res_ch4_gender','$res_ch4_age','$res_ch4_pob','$res_ch4_relation','$res_ch5_fname','$res_ch5_lname','$res_ch5_gender','$res_ch5_age','$res_ch5_pob','$res_ch5_relation','$res_emcon_fname','$res_emcon_lname','$res_emcon_tel_type','$res_emcon_tel_num','$res_emcon_relation','$res_hou_num','$res_hou_loc','$res_hou_area','$res_hou_relation','$res_hou_desc','$res_emp_name');";
if (mysqli_query($conn, $sql))
		echo "Insertion to table successful!<br>";
	else 
		echo "Couldn't Insert to table: ". mysqli_error($conn)."<br>";


mysqli_close($conn);
echo "<script>window.location.assign('new_profile_resident.php');</script>";
?>
