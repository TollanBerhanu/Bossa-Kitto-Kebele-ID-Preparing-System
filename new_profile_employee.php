<!DOCTYPE html>
<html>
<head>
	<title>Employee's Profile</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		body{
			margin: 0;
			background-color: #fff;
		}
     main.new_resident_profile{
      width: 100%;
      background-color: #FFF;
      margin: auto;
      margin-bottom: 30px;
      padding: 0px;
      box-shadow: none;/*5px 8px 10px 10px rgba(0,0,0,0.2); */
    }
    h1.create_profile_title{
      font-size:28px; 
      color:#333; 
      text-shadow: 2px 2px rgba(0,0,0,0.3);
      padding: 15px 80px;
      margin-left: 30px;
      width: 100%;
      background-color: #47a8ca;/*#EEE*/
      border-radius: 0px 0px 5px 5px;
    }
    h3.profile_form_info{
      font-size:25px;
      color:#fed136;
      margin:30px 40px;
    }
    span.profile_form_info_number{
      background-color: #fed136;
      color: #F7F7F7;
      padding: 2px 7px;
      border-radius: 5px;
    }
    form input.profile_ip,form .profile_dob,form select.profile_select{
      float: left;
      margin-right: 5px;
      height: 30px;
      text-transform: capitalize;
      border-color: #FFF;
      background-color: #F1F1F1;
      color: #000;
    }
    div.profile_moreinfo{
      background-color: #ffefb8;
      border-radius: 5px;
      margin-left: 30px;
      padding: 15px 30px;
      padding-bottom: 1px;
    }
    form input.profile_ip:focus{
      border: 1px solid #999;
      background-color: #F7F7F7;/*#f4e5b2;*/
      border-radius: 0px;
      color: #222;
      border-left: 3px solid #333;
    }
    div.upload_photo, input._photo{
      right: 6%;
    }
	</style>
</head>
<body>
<?php
  include 'mysqli_connect.php';
if (($_SERVER["REQUEST_METHOD"] == "POST") and isset($_POST['emp_submit'])) {
  $emp_fname = $_POST['emp_fname'];
  $emp_mname = $_POST['emp_mname'];
  $emp_lname = $_POST['emp_lname'];
  $emp_gender = $_POST['emp_gender'];
  $emp_dob = $_POST['emp_dob_year'].'-'.$_POST['emp_dob_month'].'-'.$_POST['emp_dob_day'];
  $emp_tel1_type = $_POST['emp_tel1_type'];
  $emp_tel1_num = $_POST['emp_tel1_num'];
  $emp_tel2_type = $_POST['emp_tel2_type'];
  $emp_tel2_num = $_POST['emp_tel2_num'];
  $emp_marital = $_POST['emp_marital'];
  $emp_spouse_fname = $_POST['emp_spouse_fname'];
  $emp_spouse_lname = $_POST['emp_spouse_lname'];
  $emp_spouse_tel_type = $_POST['emp_spouse_tel_type'];
  $emp_spouse_tel_num = $_POST['emp_spouse_tel_num'];
  $emp_num_ch = $_POST['emp_num_ch'];
  $emp_init_position = $_POST['emp_init_position'];
  $emp_contract = $_POST['emp_contract'];
  $emp_init_salary = $_POST['emp_init_salary'];
  $emp_cur_position = $_POST['emp_cur_position'];
  $emp_status = $_POST['emp_status'];
  $emp_cur_salary = $_POST['emp_cur_salary'];
  $emp_unemp_date = $_POST['emp_unemp_year'].'-'.$_POST['emp_unemp_month'].'-'.$_POST['emp_unemp_day'];
  $emp_unemp_reason = $_POST['emp_unemp_reason'];
  //$emp_user = $_POST['emp_user'];
  $emp_pass = $_POST['emp_pass'];

  $sql = "CREATE TABLE employee(
          emp_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
          emp_fname VARCHAR(40) NOT NULL,
          emp_mname VARCHAR(40) NULL,
          emp_lname VARCHAR(40) NULL,
          emp_gender VARCHAR(10) NOT NULL,
          emp_dob DATE NULL,
          emp_tel1_type VARCHAR(20) NULL,
          emp_tel1_num VARCHAR(25) NULL,
          emp_tel2_type VARCHAR(20) NULL,
          emp_tel2_num VARCHAR(25) NULL,
          emp_marital VARCHAR(20) NULL,
          emp_spouse_fname VARCHAR(50) NULL,
          emp_spouse_lname VARCHAR(50) NULL,
          emp_spouse_tel_type VARCHAR(20) NULL,
          emp_spouse_tel_num VARCHAR(25) NULL,
          emp_num_ch VARCHAR(5) NULL,
          emp_init_position VARCHAR(60) NULL,
          emp_contract VARCHAR(50) NULL,
          emp_init_salary VARCHAR(30) NULL,
          emp_cur_position VARCHAR(60) NULL,
          emp_status VARCHAR(20) NULL,
          emp_cur_salary VARCHAR(30) NULL,
          emp_unemp_date DATE NULL,
          emp_unemp_reason VARCHAR(700) NULL,
          #emp_user VARCHAR(50) NOT NULL,
          emp_pass VARCHAR(50) NOT NULL,
          emp_reg_date DATE NULL
          );";

  if(mysqli_query($conn, $sql)) echo"Table created";
  else echo "";
  $sql = "INSERT INTO employee (emp_fname,emp_mname,emp_lname,emp_gender,emp_dob,emp_tel1_type,emp_tel1_num,emp_tel2_type,emp_tel2_num,emp_marital,emp_spouse_fname,emp_spouse_lname,emp_spouse_tel_type,emp_spouse_tel_num,emp_num_ch,emp_init_position,emp_contract,emp_init_salary,emp_cur_position,emp_status,emp_cur_salary,emp_unemp_date,emp_unemp_reason,emp_pass,emp_reg_date) VALUES 
  ('$emp_fname','$emp_mname','$emp_lname','$emp_gender','$emp_dob','$emp_tel1_type','$emp_tel1_num','$emp_tel2_type','$emp_tel2_num','$emp_marital','$emp_spouse_fname','$emp_spouse_lname','$emp_spouse_tel_type','$emp_spouse_tel_num','$emp_num_ch','$emp_init_position','$emp_contract','$emp_init_salary','$emp_cur_position','$emp_status','$emp_cur_salary','$emp_unemp_date','$emp_unemp_reason','$emp_pass',NOW());";

  if(mysqli_query($conn, $sql)) echo "<p style='text-align:center; font-weight:bold; background-color:#47ca7f; margin-top:10px; font-size:20px;'>Data Entered</p>";
  else echo 'Error: '.mysqli_error($conn);
  mysqli_close($conn);
}
?>
 
<main class="new_resident_profile">
<div class="container">
	
	<h3 class="profile_form_info"><span class="profile_form_info_number">1</span> Personal Information</h3>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
  	<!--<div class="upload_photo">
    <input type="file" name="emp_photo_name" class="_photo" style="opacity: 0;  width: 160px; height:140px; z-index: 1; right: 0;">
    	<img src="img/NoPicMale.jpg" alt="Residence Photo" accept="image/gif, image/jpeg, image/jpg, image/png, image/ico" style="width: 140px; max-height: 120px;">
    	<div class="img_overlay" style="font-size:15px; font-weight:bold;">Upload Photo</div>
    </div>-->
  	<div class="form-group">
  		<span class="profile_la req" style="width:100%">Full Name:</span>
  		<input type="text" name="emp_fname" class="form-control profile_ip" placeholder="First *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  		<input type="text" name="emp_mname" class="form-control profile_ip" placeholder="Middle *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  		<input type="text" name="emp_lname" class="form-control profile_ip" placeholder="Last *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  	</div>
  	<div class="form-group">
  		<span class="profile_la req">Gender:</span>
	  	<div class="profile_radio">
	  		<div class="custom-control custom-radio">
			  <input type="radio" value="Male" class="custom-control-input" id="ResidentRadioMale" name="emp_gender" required>
			  <label class="custom-control-label" for="ResidentRadioMale">Male</label>
			</div> 
			<div class="custom-control custom-radio">
			  <input type="radio" value="Female" class="custom-control-input" id="ResidentRadioFemale" name="emp_gender">
			  <label class="custom-control-label" for="ResidentRadioFemale">Female</label>
			</div> 
		</div>
	</div>
	<div class="form-group">
		<span class="profile_la req">Date of Birth:</span>
		<input type="number" name="emp_dob_day" class="form-control profile_dob" placeholder="Day" autocomplete="off" style="width: 10%;" required>
	    <select name="emp_dob_month" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 28%;" required>
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
	    <input type="number" name="emp_dob_year" class="form-control profile_dob" placeholder="Year" autocomplete="off" style="width: 15%;" required>
  		<!--<input type="date" name="">-->
  	</div>
    <div class="form-group">
    	<span class="profile_la req">Phone Number  &nbsp;1:</span>
    	<select name="emp_tel1_type" class="form-control profile_select phone_select">
  			<option>Mobile</option>
  			<option>Home</option>
  			<option>Work</option>
  			<option>Alternate</option>
  		</select>
    	<input type="tel" name="emp_tel1_num" class="form-control profile_ip" id="phone_input1" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input1');" placeholder="Phone Number 1*" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='40%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''" required>
    </div>
    <div class="form-group">
    	<span class="profile_la" style="margin-left: 105px; margin-right: 25px;"> &nbsp;2:</span>
    	<select name="emp_tel2_type" class="form-control profile_select phone_select">
  			<option>Mobile</option>
  			<option selected>Home</option>
  			<option>Work</option>
  			<option>Alternate</option>
  		</select>
    	<input type="tel" name="emp_tel2_num" class="form-control profile_ip" id="phone_input2" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input2');" placeholder="Phone Number 2" maxlength="16" autocomplete="off" style="width:35%;" onfocus="this.style.width='40%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
    <div class="form-group">
    <span class="profile_la req">Marital Status of Employee:</span>
    <select name="emp_marital" class="form-control profile_select" onclick="if(this.value=='Married')document.getElementById('spouse').style.display='block'; else document.getElementById('spouse').style.display='none'" style="width:24%;" required>
      <option value="" style="display: none;"></option>
      <option value="Not Married">Not Married</option>
      <option value="Married">Married</option>
      <option value="Divorced">Divorced</option>
      <option value="Widowed">Widowed</option>
    </select>
    </div>
    <div class="profile_moreinfo nodisp" id="spouse">
    <div class="form-group">
      <span class="profile_la">Spouse's Name:</span>
      <input type="text" name="emp_spouse_fname" class="form-control profile_ip" placeholder="First"  autocomplete="off" style="width: 29%;"onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
      <input type="text" name="emp_spouse_lname" class="form-control profile_ip" placeholder="Last"  autocomplete="off" style="width: 29%; float: left;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
    </div>
    <div class="form-group">
      <span class="profile_la">Spouse's Phone Number: </span>
      <select name="emp_spouse_tel_type" class="form-control profile_select phone_select">
        <option>Mobile</option>
        <option>Home</option>
        <option>Work</option>
        <option>Alternate</option>
      </select>
      <input type="tel" name="emp_spouse_tel_num" class="form-control profile_ip" id="phone_input4" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input4');" placeholder="Phone Number" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
  </div>
    <br />
    <div class="form-group">
      <span class="profile_la req">Current Number of Children:</span>
      <select name="emp_num_ch" class="form-control profile_select" style="width:12%;" required>
        <option>0</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option value=">5">&gt;5</option>
      </select>
    </div>
    <h3 class="profile_form_info clearfix"><span class="profile_form_info_number">2</span> Job Information</h3>
    <div class="form-group">
  		<span class="profile_la req">Initial Job Title / Position:</span>
  		<input type="text" name="emp_init_position" class="form-control profile_ip" id="init_emp_pos" placeholder="Position *" autocomplete="off" style="width: 35%; margin-right: 30px;" onfocus="this.style.width='40%';" onblur="this.style.width='35%';" required>
  	</div>
  	<div class="form-group">
    	<span class="profile_la req">Initial Job Salary (birr): </span>
      <input type="text" name="emp_init_salary" class="form-control profile_ip" id="init_emp_sal" placeholder="Salary *" autocomplete="off" style="width: 20%; margin-right: 30px;" onfocus="this.style.width='23%';" onblur="this.style.width='20%'; if(this.value!='' && this.value.search('ETB')==-1)this.value+=' ETB'" required>

      <span class="profile_la">Job Contract Period:</span>
      <select name="emp_contract" class="form-control profile_select" style="width:20%;">
          <option>Unknown</option>
          <option>1 - 3 months</option>
          <option>4 - 6 months</option>
          <option>6 - 12 months</option>
          <option>2 - 3 years</option>
          <option>4 - 5 years</option>
          <option>6 - 10 years</option>
      </select>
    </div>
   <div class="form-group">
      <span class="profile_la">Previous Employee at this Position: </span>
      <select class="form-control profile_select" style="width:30%;">
          <option> - </option>
          <?php
          $sql = "SELECT emp_fname,emp_mname,emp_lname FROM employee WHERE emp_status='Employed';";
          $result = mysqli_query($conn, $sql);
          while($emp = mysqli_fetch_array($result))
          {
            $empName = $emp['emp_fname'].' '.$emp['emp_mname'].' '.$emp['emp_lname'];
            echo '<option value="'.$empName.'">'.$empName.'</option>';
          }
        ?>
      </select>
    </div>
    <h3 class="profile_form_info clearfix"><span class="profile_form_info_number">3</span> Current Employment Status</h3>
    <div class="form-group">
      <span class="profile_la req">Recent Job Title / Position:</span>
      <input type="text" name="emp_cur_position" class="form-control profile_ip" placeholder="Position *"  autocomplete="off" style="width: 35%; margin-right: 30px;"onfocus="this.style.width='40%'; this.value=document.getElementById('init_emp_pos').value" onblur="this.style.width='35%';" required>
  	</div>
    <div class="form-group">
      <span class="profile_la req">Recent Job Salary (birr): </span>
      <input type="text" name="emp_cur_salary" class="form-control profile_ip" placeholder="Salary *" autocomplete="off" style="width: 20%; margin-right: 30px;" onfocus="this.style.width='23%'; this.value=document.getElementById('init_emp_sal').value" onblur="this.style.width='20%'; if(this.value!='' && this.value.search('ETB')==-1)this.value+=' ETB'" required>

      <span class="profile_la req">Employment Status:</span>
      <select name="emp_status" class="form-control profile_select" style="width:20%;" onclick="if(this.value=='Unemployed')document.getElementById('unemployment_info').style.display='block'; else document.getElementById('unemployment_info').style.display='none';">
          <option value="Employed">Employed</option>
          <option value="Unemployed">Unemployed</option>
       </select>
    </div>
    <div class="profile_moreinfo nodisp" id="unemployment_info">
    <!--<div class="form-group">
      <span class="profile_la">Date of Unemployment:</span>
      <input type="date" class="profile_ip" style="border: 1px solid #DDD; border-radius: 5px; color: #495057;">
    </div>-->
    <div class="form-group">
    <span class="profile_la">Date of Unemployment:</span>
    <input type="text" name="emp_unemp_day" class="form-control profile_dob" placeholder="Day" autocomplete="off" style="width: 10%;">
      <select name="emp_unemp_month" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 28%;">
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
      <input type="text" name="emp_unemp_year" class="form-control profile_dob" placeholder="Year" autocomplete="off" style="width: 15%;">
      <!--<input type="date" name="">-->
    </div>
    <div class="form-group">
      <span class="profile_la" style="clear: left;">Reason for Unemployment:</span>
      <textarea name="emp_unemp_reason" class="form-control" placeholder="Reason ..." style="background-color: #F7F7F7; width: 55%; height: 100px; margin-left: 30px; transition: width 0.4s;" onfocus="this.style.width='60%';" onblur="this.style.width='55%';"></textarea>
    </div>
    </div>
  	
    <h3 class="profile_form_info"><span class="profile_form_info_number">4</span> Software Access Authorization</h3>
    <div class="profile_moreinfo">
   <!--<div class="form-group">
    	<span class="profile_la req">Employee's User Name: </span>
    	<input type="text" name="emp_user" class="form-control profile_ip" placeholder="Username *" autocomplete="off" style="width: 30%; text-transform:none;" onfocus="this.style.width='40%';" onblur="this.style.width='30%';" required>
    </div>-->
    <div class="form-group">
  		<span class="profile_la req">Employee's Password: </span>
  		<input type="password" name="emp_pass" id="reg_emp_pass" class="form-control profile_ip" placeholder="Password *" autocomplete="off" style="width: 40%; text-transform:none;" required>
    </div>
    <div class="form-group">
      <span class="profile_la req" style="margin-left:22px;">Confirm Password: </span>
      <input type="password" class="form-control profile_ip" placeholder="Confirm Password *" autocomplete="off" style="width: 40%; text-transform:none;" onblur="if(document.getElementById('reg_emp_pass').value != this.value){ document.getElementById('reg_emp_pass_msg').innerHTML='Passwords don\'t match'; this.value='';} else document.getElementById('reg_emp_pass_msg').innerHTML='';" required><p id="reg_emp_pass_msg" style="color:tomato;font-style:italic;font-size:15px;margin-left:15px;display:inline;"></p>
    </div>
    <div class="form-group">
    	<div class="custom-control custom-checkbox mb-3" style="margin-right: 60px;">
      <input type="checkbox" class="custom-control-input" id="EmpRegCheck" required>
		  <label class="custom-control-label" for="EmpRegCheck">I Employee Name am willing to use my access authorization fairly and effectively.</label>
		</div>
    </div>

	</div>
    <br /><br />
    <div class="col-lg-12">
	    <button class="btn btn-primary btn-lg profile_save" type="submit" name="emp_submit"><span><i class="fa fa-save"></i> &nbsp;Save Profile </span></button>
	   <!-- <button class="btn btn-primary btn-lg profile_review" type="button" onclick="window.location.assign('new_profile_employee.php');"><span><i class="fa fa-window-close"></i> &nbsp;Cancel </span></button>-->

	    <button class="btn btn-primary btn-lg profile_reset" type="reset" onclick="document.getElementById('reg_emp_pass_msg').innerHTML=''"><span>Reset All&nbsp; <i class="fa fa-undo"></i></span></button>
	</div>
    </form>
	</div>

</main>

<script>
	var phone_id=""
	function phone_change(phone_id){
		ph = document.getElementById(phone_id);
		var s=""+ph.value;
		if(s.length==8 || s.length==12) ph.value+="-";
    if(ph.value=="+251-0") ph.value="+251-";
	}
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>

</body>
</html>