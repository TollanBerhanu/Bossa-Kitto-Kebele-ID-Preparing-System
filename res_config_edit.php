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
$res_ch1_age = $_POST['res_ch1_age'];
$res_ch1_pob = $_POST['res_ch1_pob'];
$res_ch1_relation = $_POST['res_ch1_relation'];
$res_ch2_fname = $_POST['res_ch2_fname'];
$res_ch2_lname = $_POST['res_ch2_lname'];
$res_ch2_gender = $_POST['res_ch2_gender'];
$res_ch2_age = $_POST['res_ch2_age'];
$res_ch2_pob = $_POST['res_ch2_pob'];
$res_ch2_relation = $_POST['res_ch2_relation'];
$res_ch3_fname = $_POST['res_ch3_fname'];
$res_ch3_lname = $_POST['res_ch3_lname'];
$res_ch3_gender = $_POST['res_ch3_gender'];
$res_ch3_age = $_POST['res_ch3_age'];
$res_ch3_pob = $_POST['res_ch3_pob'];
$res_ch3_relation = $_POST['res_ch3_relation'];
$res_ch4_fname = $_POST['res_ch4_fname'];
$res_ch4_lname = $_POST['res_ch4_lname'];
$res_ch4_gender = $_POST['res_ch4_gender'];
$res_ch4_age = $_POST['res_ch4_age'];
$res_ch4_pob = $_POST['res_ch4_pob'];
$res_ch4_relation = $_POST['res_ch4_relation'];
$res_ch5_fname = $_POST['res_ch5_fname'];
$res_ch5_lname = $_POST['res_ch5_lname'];
$res_ch5_gender = $_POST['res_ch5_gender'];
$res_ch5_age = $_POST['res_ch5_age'];
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


$sql =  "SELECT res_photo_name FROM resident WHERE res_id=".$_COOKIE['mod_id'];
$photoName = mysqli_fetch_array(mysqli_query($conn, $sql));
if($photoName['res_photo_name'] != 'img/NoPicMale.jpg')
	unlink($photoName['res_photo_name']);


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
	else{
		$sql = "SELECT res_photo_name FROM resident WHERE res_id=".$_COOKIE['mod_id'].";";
		$row = mysqli_fetch_array(mysqli_query($conn, $sql));
		$res_photo_name = $row['res_photo_name'];
	}



$sql = "UPDATE resident SET res_photo_name='$res_photo_name',res_fname='$res_fname',res_mname='$res_mname',res_lname='$res_lname',res_gender='$res_gender',res_dob='$res_dob',res_pob='$res_pob',res_nationality='$res_nationality',res_tel1_type='$res_tel1_type',res_tel1_num='$res_tel1_num',res_tel2_type='$res_tel2_type',res_tel2_num='$res_tel2_num',res_work='$res_work',res_mom_fname='$res_mom_fname',res_mom_lname='$res_mom_lname',res_mom_tel_type='$res_mom_tel_type',res_mom_tel_num='$res_mom_tel_num',res_marital='$res_marital',res_spouse_fname='$res_spouse_fname',res_spouse_lname='$res_spouse_lname',res_spouse_tel_type='$res_spouse_tel_type',res_spouse_tel_num='$res_spouse_tel_num',res_num_ch='$res_num_ch',res_ch1_fname='$res_ch1_fname',res_ch1_lname='$res_ch1_lname',res_ch1_gender='$res_ch1_gender',res_ch1_age='$res_ch1_age',res_ch1_pob='$res_ch1_pob',res_ch1_relation='$res_ch1_relation',res_ch2_fname='$res_ch2_fname',res_ch2_lname='$res_ch2_lname',res_ch2_gender='$res_ch2_gender',res_ch2_age='$res_ch2_age',res_ch2_pob='$res_ch2_pob',res_ch2_relation='$res_ch2_relation',res_ch3_fname='$res_ch3_fname',res_ch3_lname='$res_ch3_lname',res_ch3_gender='$res_ch3_gender',res_ch3_age='$res_ch3_age',res_ch3_pob='$res_ch3_pob',res_ch3_relation='$res_ch3_relation',res_ch4_fname='$res_ch4_fname',res_ch4_lname='$res_ch4_lname',res_ch4_gender='$res_ch4_gender',res_ch4_age='$res_ch4_age',res_ch4_pob='$res_ch4_pob',res_ch4_relation='$res_ch4_relation',res_ch5_fname='$res_ch5_fname',res_ch5_lname='$res_ch5_lname',res_ch5_gender='$res_ch5_gender',res_ch5_age='$res_ch5_age',res_ch5_pob='$res_ch5_pob',res_ch5_relation='$res_ch5_relation',res_emcon_fname='$res_emcon_fname',res_emcon_lname='$res_emcon_lname',res_emcon_tel_type='$res_emcon_tel_type',res_emcon_tel_num='$res_emcon_tel_num',res_emcon_relation='$res_emcon_relation',res_hou_num='$res_hou_num',res_hou_loc='$res_hou_loc',res_hou_area='$res_hou_area',res_hou_relation='$res_hou_relation',res_hou_desc='$res_hou_desc',res_emp_name='$res_emp_name' WHERE res_id=".$_COOKIE['mod_id'];
if (mysqli_query($conn, $sql))
		echo "Table Updated!<br>";
	else 
		echo "Couldn't Update table: ". mysqli_error($conn)."<br>";


mysqli_close($conn);
echo "<script>window.location.assign('edit_resident_profile.php');</script>";
?>
