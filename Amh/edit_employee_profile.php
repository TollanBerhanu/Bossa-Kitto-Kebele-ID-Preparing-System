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
			background-color: #FFF;
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
      color: #47ca7f;
      margin:30px 40px;
    }
    span.profile_form_info_number{
      background-color: #47ca7f;
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
      background-color: #F7F7F7;
      color: #000;
    }
    form input.profile_ip:focus{
      border: 1px solid #47ca7f;
      background-color: #F7F7F7;/*#f4e5b2;*/
      border-radius: 0px;
      color: #222;
      border-left: 3px solid #47ca7f;
    }
    div.profile_moreinfo{
      background-color: #DFD;
      border-radius: 5px;
      margin-left: 30px;
      padding: 15px 30px;
      padding-bottom: 1px;
    }
    div.upload_photo, input._photo{
      right: 6%;
    }
	</style>
</head>
<body>
<?php
  include 'mysqli_connect.php';
  $sql = "SELECT *,DAY(emp_dob),MONTH(emp_dob),YEAR(emp_dob),DAY(emp_unemp_date),MONTH(emp_unemp_date),YEAR(emp_unemp_date) FROM employee WHERE emp_id=".$_COOKIE['index_mod_id'].";";

        if($res=mysqli_query($conn, $sql)) echo "";
        else echo "Couldn't retrieve profile information: ".mysqli_error($conn);

        $row = mysqli_fetch_array($res);

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


  $sql = "UPDATE employee SET emp_fname='$emp_fname',emp_mname='$emp_mname',emp_lname='$emp_lname',emp_gender='$emp_gender',emp_dob='$emp_dob',emp_tel1_type='$emp_tel1_type',emp_tel1_num='$emp_tel1_num',emp_tel2_type='$emp_tel2_type',emp_tel2_num='$emp_tel2_num',emp_marital='$emp_marital',emp_spouse_fname='$emp_spouse_fname',emp_spouse_lname='$emp_spouse_lname',emp_spouse_tel_type='$emp_spouse_tel_type',emp_spouse_tel_num='$emp_spouse_tel_num',emp_num_ch='$emp_num_ch',emp_init_position='$emp_init_position',emp_contract='$emp_contract',emp_init_salary='$emp_init_salary',emp_cur_position='$emp_cur_position',emp_status='$emp_status',emp_cur_salary='$emp_cur_salary',emp_unemp_date='$emp_unemp_date',emp_unemp_reason='$emp_unemp_reason',emp_pass='$emp_pass' WHERE emp_id=".$_COOKIE['index_mod_id'].";";
   

  if(mysqli_query($conn, $sql)) echo "<p style='text-align:center; font-weight:bold; background-color:#47a8ca; margin-top:10px; font-size:20px;'>Profile Edited</p>";
  else echo 'Error: '.mysqli_error($conn);
  
//echo "<script>window.location.assign('edit_employee_profile.php');</script>";
}
?>
<main class="new_resident_profile">
<div class="container">
	
	<h3 class="profile_form_info"><span class="profile_form_info_number">1</span> የግል ገለጻ</h3>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
  	<!--<div class="upload_photo">
    <input type="file" name="emp_photo_name" class="_photo" style="opacity: 0;  width: 160px; height:140px; z-index: 1; right: 0;">
    	<img src="img/NoPicMale.jpg" alt="Residence Photo" accept="image/gif, image/jpeg, image/jpg, image/png, image/ico" style="width: 140px; max-height: 120px;">
    	<div class="img_overlay" style="font-size:15px; font-weight:bold;">Upload Photo</div>
    </div>-->
  	<div class="form-group">
  		<span class="profile_la req" style="width:100%">ሙሉ ስም:</span>
  		<input type="text" name="emp_fname" value="<?php echo $row['emp_fname'];?>" class="form-control profile_ip" placeholder="የራስ *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  		<input type="text" name="emp_mname" value="<?php echo $row['emp_mname'];?>" class="form-control profile_ip" placeholder="የአባት *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  		<input type="text" name="emp_lname" value="<?php echo $row['emp_lname'];?>" class="form-control profile_ip" placeholder="የአያት *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  	</div>
  	<div class="form-group">
  		<span class="profile_la req">ፆታ:</span>
	  	<div class="profile_radio">
	  		<div class="custom-control custom-radio">
			  <input type="radio" value="Male" class="custom-control-input" id="EmployeeRadioMale" name="emp_gender" required>
			  <label class="custom-control-label" for="EmployeeRadioMale">ወንድ</label>
			</div> 
			<div class="custom-control custom-radio">
			  <input type="radio" value="Female" class="custom-control-input" id="EmployeeRadioFemale" name="emp_gender">
			  <label class="custom-control-label" for="EmployeeRadioFemale">ሴት</label>
			</div> 
		</div>
	</div>
	<div class="form-group">
		<span class="profile_la req">የትዉልድ ቀን:</span>
		<input type="number" name="emp_dob_day" value="<?php echo $row['DAY(emp_dob)'];?>" class="form-control profile_dob" placeholder="ቀን" autocomplete="off" style="width: 10%;" required>
	    <select name="emp_dob_month" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 28%;" required>
	      	<option value="" style="display: none;">ወር</option>
		    <option value="1">መስከረም</option>
		    <option value="2">ጥቅምት</option>
		    <option value="3">ህዳር</option>
		    <option value="4">ታህሳስ</option>
		    <option value="5">ጥር</option>
		    <option value="6">የካቲት</option>
		    <option value="7">መጋቢት</option>
		    <option value="8">ሚያዝያ</option>
		    <option value="9">ግንቦት</option>
		    <option value="10">ሰኔ</option>
		    <option value="11">ሐምሌ</option>
		    <option value="12">ነሃሴ</option>
		    <option value="13">ጳጉሜ</option>
	    </select>
	    <input type="number" name="emp_dob_year" value="<?php echo $row['YEAR(emp_dob)'];?>" class="form-control profile_dob" placeholder="ዓመት" autocomplete="off" style="width: 15%;" required>
  		<!--<input type="date" name="">-->
  	</div>
    <div class="form-group">
    	<span class="profile_la req">ስልክ ቁጥር  &nbsp;1:</span>
    	<select name="emp_tel1_type" class="form-control profile_select phone_select">
  			<option value="Mobile" id="mob1">ሞባይል</option>
  			<option value="Home" id="hom1">የቤት ስልክ</option>
  			<option value="Work" id="wor1">የመስሪያ ቤት ስልክ</option>
  			<option value="Alternate" id="alt1">ተጨማሪ ስልክ</option>
  		</select>
    	<input type="tel" name="emp_tel1_num" value="<?php echo $row['emp_tel1_num'];?>" class="form-control profile_ip" id="phone_input1" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input1');" placeholder="1ኛ ስልክ ቁጥር *" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''" required>
    </div>
    <div class="form-group">
    	<span class="profile_la" style="margin-left: 105px; margin-right: 25px;"> &nbsp;2:</span>
    	<select name="emp_tel2_type" class="form-control profile_select phone_select">
  			<option value="Mobile" id="mob2">ሞባይል</option>
        <option value="Home" id="hom2">የቤት ስልክ</option>
        <option value="Work" id="wor2">የመስሪያ ቤት ስልክ</option>
        <option value="Alternate" id="alt2">ተጨማሪ ስልክ</option>
  		</select>
    	<input type="tel" name="emp_tel2_num" value="<?php echo $row['emp_tel2_num'];?>" class="form-control profile_ip" id="phone_input2" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input2');" placeholder="2ኛ ስልክ ቁጥር" maxlength="16" autocomplete="off" style="width:35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
    <div class="form-group">
    <span class="profile_la req">የሰራተኛዉ የጋብቻ ሁኔታ:</span>
    <select name="emp_marital" class="form-control profile_select" onclick="if(this.value=='Married')document.getElementById('spouse').style.display='block'; else document.getElementById('spouse').style.display='none'" style="width:24%;" required>
      <option value="" style="display: none;"></option>
      <option id="nmar" value="Not Married">ያላገባ/ች</option>
      <option id="mar" value="Married">ያገባ/ች</option>
      <option id="div" value="Divorced">እጮኛዉን/ዋን የፈታ/ች</option>
      <option id="wid" value="Widowed">እጮኛዉ/ዋ ያረፈበት/ባት</option>
    </select>
    </div>
    <div class="profile_moreinfo nodisp" id="spouse">
    <div class="form-group">
      <span class="profile_la">የእጮኛ ሙሉ ስም:</span>
      <input type="text" name="emp_spouse_fname" value="<?php echo $row['emp_spouse_fname'];?>" class="form-control profile_ip" placeholder="የራስ"  autocomplete="off" style="width: 29%;"onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
      <input type="text" name="emp_spouse_lname" value="<?php echo $row['emp_spouse_lname'];?>" class="form-control profile_ip" placeholder="የአባት"  autocomplete="off" style="width: 29%; float: left;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
    </div>
    <div class="form-group">
      <span class="profile_la">የእጮኛ ስልክ ቁጥር: </span>
      <select name="emp_spouse_tel_type" class="form-control profile_select phone_select">
        <option value="Mobile"  id="mob3">ሞባይል</option>
        <option value="Home" id="hom3">የቤት ስልክ</option>
        <option value="Work" id="wor3">የመስሪያ ቤት ስልክ</option>
        <option value="Alternate" id="alt3">ተጨማሪ ስልክ</option>
      </select>
      <input type="tel" name="emp_spouse_tel_num" value="<?php echo $row['emp_spouse_tel_num'];?>" class="form-control profile_ip" id="phone_input4" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input4');" placeholder="ስልክ ቁጥር" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
  </div>
    <br />
    <div class="form-group">
      <span class="profile_la req">አሁን ያልዎት የልጅ ብዛት:</span>
      <select name="emp_num_ch" class="form-control profile_select" style="width:9%;" required>
        <option value="0">0</option>
        <option id="ch1" value="1">1</option>
        <option id="ch2" value="2">2</option>
        <option id="ch3" value="3">3</option>
        <option id="ch4" value="4">4</option>
        <option id="ch5" value="5">5</option>
        <option id="chgt5" value=">5">&gt;5</option>
      </select>
    </div>
    <h3 class="profile_form_info clearfix"><span class="profile_form_info_number">2</span> የስራዎ ገለጻ</h3>
    <div class="form-group">
  		<span class="profile_la req">የመጀመሪያ የስራ ደረጃ / ርዕስ:</span>
  		<input type="text" name="emp_init_position" value="<?php echo $row['emp_init_position'];?>" class="form-control profile_ip" id="init_emp_pos" placeholder="የስራ ርዕስ *" autocomplete="off" style="width: 35%; margin-right: 30px;" onfocus="this.style.width='40%';" onblur="this.style.width='35%';" required>
  	</div>
  	<div class="form-group">
    	<span class="profile_la req">የመጀመሪያ ደሞዝ (ብር): </span>
      <input type="text" name="emp_init_salary" value="<?php echo $row['emp_init_salary'];?>" class="form-control profile_ip" id="init_emp_sal" placeholder="ደሞዝ *" autocomplete="off" style="width: 20%; margin-right: 30px;" onfocus="this.style.width='23%';" onblur="this.style.width='20%'; if(this.value!='' && this.value.search('ETB')==-1)this.value+=' ETB'" required>

      <span class="profile_la">ተቀጥሮ ለመስራት የተዋዋሉት የጊዜ ገደብ:</span>
      <select name="emp_contract" class="form-control profile_select" style="width:20%;">
          <option value="Unknown">አልተወሰነም</option>
          <option value="1 - 3 months">ከ1 - 3 ወር</option>
          <option value="4 - 6 months">ከ4 - 6 ወር</option>
          <option value="6 - 12 months">ከ6 - 12 ወር</option>
          <option value="2 - 3 years">ከ2 - 3 ዓመት</option>
          <option value="4 - 5 years">ከ4 - 5 ዓመት</option>
          <option value="6 - 10 years">ከ6 - 10 ዓመት</option>
      </select>
    </div>
    <h3 class="profile_form_info clearfix"><span class="profile_form_info_number">3</span> አሁን ያሉበት የስራ ሁኔታ</h3>
    <div class="form-group">
      <span class="profile_la req">አሁን ያሉበት የስራ ደረጃ / ርዕስ:</span>
      <input type="text" name="emp_cur_position" value="<?php echo $row['emp_cur_position'];?>" class="form-control profile_ip" placeholder="የስራ ርዕስ *"  autocomplete="off" style="width: 35%; margin-right: 30px;"onfocus="this.style.width='40%'; this.value=document.getElementById('init_emp_pos').value" onblur="this.style.width='35%';" required>
  	</div>
    <div class="form-group">
      <span class="profile_la req">አሁን ያልዎት ደሞዝ (ብር): </span>
      <input type="text" name="emp_cur_salary" value="<?php echo $row['emp_cur_salary'];?>" class="form-control profile_ip" placeholder="ደሞዝ *" autocomplete="off" style="width: 20%; margin-right: 30px;" onfocus="this.style.width='23%'; this.value=document.getElementById('init_emp_sal').value" onblur="this.style.width='20%'; if(this.value!='' && this.value.search('ETB')==-1)this.value+=' ETB'" required>

      <span class="profile_la req">የስራ ሁኔታ:</span>
      <select name="emp_status" class="form-control profile_select" style="width:20%;" onclick="if(this.value=='Unemployed')document.getElementById('unemployment_info').style.display='block'; else document.getElementById('unemployment_info').style.display='none';">
          <option value="Employed">በስራ ላይ</option>
          <option value="Unemployed">ስራዉን የለቀቀ/ች</option>
       </select>
    </div>
    <div class="profile_moreinfo nodisp" id="unemployment_info">
    <!--<div class="form-group">
      <span class="profile_la">Date of Unemployment:</span>
      <input type="date" class="profile_ip" style="border: 1px solid #DDD; border-radius: 5px; color: #495057;">
    </div>-->
    <div class="form-group">
    <span class="profile_la">ስራዉን የለቀቀበት / የለቀቀችበት ቀን:</span>
    <input type="number" name="emp_unemp_day" value="<?php echo $row['DAY(emp_unemp_date)'];?>" class="form-control profile_dob" placeholder="ቀን" autocomplete="off" style="width: 10%;">
      <select name="emp_unemp_month" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 28%;">
      <option value="" style="display: none;">ወር</option>
      <option value="1">መስከረም</option>
      <option value="2">ጥቅምት</option>
      <option value="3">ህዳር</option>
      <option value="4">ታህሳስ</option>
      <option value="5">ጥር</option>
      <option value="6">የካቲት</option>
      <option value="7">መጋቢት</option>
      <option value="8">ሚያዝያ</option>
      <option value="9">ግንቦት</option>
      <option value="10">ሰኔ</option>
      <option value="11">ሐምሌ</option>
      <option value="12">ነሃሴ</option>
      <option value="13">ጳጉሜ</option>
      </select>
      <input type="number" name="emp_unemp_year" value="<?php echo $row['YEAR(emp_unemp_date)'];?>" class="form-control profile_dob" placeholder="ዓመት" autocomplete="off" style="width: 15%;">
      <!--<input type="date" name="">-->
    </div>
    <div class="form-group">
      <span class="profile_la" style="clear: left;">ስራዉን የለቀቀበት / የለቀቀችበት ምክንያት:</span>
      <textarea name="emp_unemp_reason" class="form-control" placeholder="ምክንያት ..." style="background-color: #F7F7F7; width: 55%; height: 100px; margin-left: 30px; transition: width 0.4s;" onfocus="this.style.width='60%';" onblur="this.style.width='55%';"><?php echo $row['emp_unemp_reason'];?></textarea>
    </div>
    </div>
  	
    <h3 class="profile_form_info"><span class="profile_form_info_number">4</span> የሶፍትዌሩ አገልግሎት ተጠቃሚነት ሥልጣን ማረጋገጫ</h3>
    <div class="profile_moreinfo">
    <div class="form-group">
    	<span class="profile_la req">የሰራተኛዉ ፓስወርድ: </span>
    	<input type="text" class="form-control profile_ip" placeholder="ፓስወርድ *" autocomplete="off" style="width: 40%; text-transform:none;" onfocus="this.style.width='40%';" onblur="this.style.width='30%'; if(this.value!='<?php echo $row['emp_pass'];?>'){this.value='';document.getElementById('emp_pass_msg').innerHTML='የተሳሳተ ፓስወርድ';} else document.getElementById('emp_pass_msg').innerHTML='';" required>
      <p id="emp_pass_msg" style="color:tomato;font-style:italic;font-size:15px;margin-left:15px;display:inline;"></p>
    </div>
    <div class="form-group">
      <span class="profile_la req">ፓስወርዶን መቀየር ይፈልጋሉ?</span>
      <div class="profile_radio">
        <div class="custom-control custom-radio">
        <input type="radio" value="yes" class="custom-control-input" id="ChangePassYes" name="change_pass" onclick="document.getElementById('change_password').style.display='block';document.getElementById('reg_emp_pass').value='';document.getElementById('reg_emp_confirm').value='';" required>
        <label class="custom-control-label" for="ChangePassYes">አዎ</label>
      </div> 
      <div class="custom-control custom-radio">
        <input type="radio" value="No" class="custom-control-input" id="ChangePassNo" name="change_pass" onclick="document.getElementById('change_password').style.display='none';document.getElementById('reg_emp_pass').value='<?php echo $row['emp_pass'];?>';document.getElementById('reg_emp_confirm').value='<?php echo $row['emp_pass'];?>';" checked>
        <label class="custom-control-label" for="ChangePassNo">አይ</label>
      </div> 
    </div>
  </div>
    <div id="change_password" style="display:none;">
  		<div class="form-group">
      <span class="profile_la req" style="margin-left:50px;">አዲስ ፓስወርድ: </span>
      <input type="password" name="emp_pass" id="reg_emp_pass" value="<?php echo $row['emp_pass'];?>" class="form-control profile_ip" placeholder="ፓስወርድ *" autocomplete="off" style="width: 40%; text-transform:none;" required>
    </div>
    <div class="form-group">
      <span class="profile_la req" style="margin-left:25px;">ፓስወርዱን ያረጋግጡ: </span>
      <input type="password" id="reg_emp_confirm" value="<?php echo $row['emp_pass'];?>" class="form-control profile_ip" placeholder="ፓስወርድ *" autocomplete="off" style="width: 40%; text-transform:none;" onblur="if(document.getElementById('reg_emp_pass').value != this.value){ document.getElementById('reg_emp_pass_msg').innerHTML='ፓስወርዶቹ አይመሳሰሉም'; this.value='';} else document.getElementById('reg_emp_pass_msg').innerHTML='';" required><p id="reg_emp_pass_msg" style="color:tomato;font-style:italic;font-size:15px;margin-left:15px;display:inline;"></p>
    </div>
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
	    <button class="btn btn-primary btn-lg profile_save" type="submit" name="emp_submit"><span><i class="fa fa-save"></i> &nbsp;ገጽታዉን መዝግብ </span></button>
	    <!--<button class="btn btn-primary btn-lg profile_review" type="submit"><span><i class="fa fa-window-close"></i> &nbsp;Cancel </span></button>-->

	    <button class="btn btn-primary btn-lg profile_reset" type="reset" onclick="document.getElementById('emp_pass_msg').innerHTML=''; document.getElementById('ChangePassNo').checked='';document.getElementById('change_password').style.display='none';"><span>ሁሉንም መልስ&nbsp; <i class="fa fa-undo"></i></span></button>
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



  if("<?php echo($row['emp_gender']);?>" == 'Male')
    document.getElementById('EmployeeRadioMale').checked="checked";
  else
    document.getElementById('EmployeeRadioFemale').checked="checked";

  document.getElementById('m'+<?php echo $row['MONTH(emp_dob)']?>).selected="selected";

  function telType(str, i){
    if(str == 'Mobile')
      document.getElementById('mob'+i).selected="selected";
    if(str == 'Home')
      document.getElementById('hom'+i).selected="selected";
    if(str == 'Work')
      document.getElementById('wor'+i).selected="selected";
    if(str == 'Alternate')
      document.getElementById('alt'+i).selected="selected";
  }
  telType("<?php echo $row['emp_tel1_type']; ?>", 1);
  telType("<?php echo $row['emp_tel2_type']; ?>", 2);
  telType("<?php echo $row['emp_spouse_tel_type']; ?>", 3);

  function empMarital(str){
    if(str == "Not Married")
      document.getElementById('nmar').selected="selected";
    if(str == "Married")
      document.getElementById('mar').selected="selected";
    if(str == "Divorced")
      document.getElementById('div').selected="selected";
    if(str == "Widowed")
      document.getElementById('wid').selected="selected";
  }
  empMarital("<?php echo $row['emp_marital']?>");

  function empNumCh(str){
    for(var i=1; i<=5; i++)
     if(str == (""+i))
        document.getElementById('ch'+i).selected="selected";
    if(str == ">5")
      document.getElementById('chgt5').selected="selected";
  }
  empNumCh("<?php echo $row['emp_num_ch']?>");

   function empJobContract(str){
    if(str == "1 - 3 months")
      document.getElementById('1_3m').selected="selected";
    if(str == "4 - 6 months")
      document.getElementById('4_6m').selected="selected";
    if(str == "6 - 12 months")
      document.getElementById('6_12m').selected="selected";
    if(str == "2 - 3 years")
      document.getElementById('2_3y').selected="selected";
    if(str == "4 - 5 years")
      document.getElementById('4_5y').selected="selected";
    if(str == "6 - 10 years")
      document.getElementById('6_10y').selected="selected";
  }
  empJobContract("<?php echo $row['emp_contract']?>");
 
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>

</body>
</html>