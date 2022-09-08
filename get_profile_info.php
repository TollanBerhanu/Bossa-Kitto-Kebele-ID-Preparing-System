<!--<?php
/*include 'mysqli_connect.php'.

$sql = "SELECT (res_photo_name,res_fname,res_mname,res_lname,res_gender,res_dob,res_pob,res_nationality,res_tel1_type,res_tel1_num,res_tel2_type,res_tel2_num,res_mom_fname,res_mom_lname,res_mom_tel_type,res_mom_tel_num,res_marital,res_spouse_fname,res_spouse_lname,res_spouse_tel_type,res_spouse_tel_num,res_num_ch,res_ch1_fname,res_ch1_lname,res_ch1_gender,res_ch1_age,res_ch1_pob,res_ch1_relation,res_ch2_fname,res_ch2_lname,res_ch2_gender,res_ch2_age,res_ch2_pob,res_ch2_relation,res_ch3_fname,res_ch3_lname,res_ch3_gender,res_ch3_age,res_ch3_pob,res_ch3_relation,res_ch4_fname,res_ch4_lname,res_ch4_gender,res_ch4_age,res_ch4_pob,res_ch4_relation,res_ch5_fname,res_ch5_lname,res_ch5_gender,res_ch5_age,res_ch5_pob,res_ch5_relation,res_hou_num,res_hou_loc,res_hou_area,res_hou_relation,res_hou_desc,res_emp_name) FROM resident WHERE res_id=2";
//$row = mysqli_fetch_array(mysqli_query($conn, $sql));












mysqli_close($conn);*/
?>-->
<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php $_SESSION['sth'] = "false"; 
	echo $_SESSION['ccc'] .'<br>';
	echo $_SESSION['sss'] .'<br>';
	echo $_SESSION['ooo'] .'<br>';
		//$_SESSION['ooo'] = 1;
		?>
<div id="content"></div>

<script>
	$(document).ready(function(){
		var url = window.location.href;
		var params = url.split('?ID=');
		var id = (params[1]);
		$.ajax({
			type: "POST",
			url: "get_profile_info.php",
			data: {id:id},
			success: function(result){
				$("#content").html(result);
			}
		});
	});


</script>
<?php
	//$random = $_POST["id"];
	echo $_SESSION['ooo'];
?>
</body>
</html>