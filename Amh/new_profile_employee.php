<!DOCTYPE html>
<html>
<head>
	<title>የሰራተኛ ገጽታ</title>
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
	
	<h3 class="profile_form_info"><span class="profile_form_info_number">1</span> የግል ገለጻ</h3>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
  	<!--<div class="upload_photo">
    <input type="file" name="emp_photo_name" class="_photo" style="opacity: 0;  width: 160px; height:140px; z-index: 1; right: 0;">
    	<img src="img/NoPicMale.jpg" alt="Residence Photo" accept="image/gif, image/jpeg, image/jpg, image/png, image/ico" style="width: 140px; max-height: 120px;">
    	<div class="img_overlay" style="font-size:15px; font-weight:bold;">Upload Photo</div>
    </div>-->
  	<div class="form-group">
  		<span class="profile_la req" style="width:100%">ሙሉ ስም:</span>
  		<input type="text" name="emp_fname" class="form-control profile_ip" placeholder="የራስ *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  		<input type="text" name="emp_mname" class="form-control profile_ip" placeholder="የአባት *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  		<input type="text" name="emp_lname" class="form-control profile_ip" placeholder="የአያት *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  	</div>
  	<div class="form-group">
  		<span class="profile_la req">ፆታ:</span>
	  	<div class="profile_radio">
	  		<div class="custom-control custom-radio">
			  <input type="radio" value="Male" class="custom-control-input" id="ResidentRadioMale" name="emp_gender" required>
			  <label class="custom-control-label" for="ResidentRadioMale">ወንድ</label>
			</div> 
			<div class="custom-control custom-radio">
			  <input type="radio" value="Female" class="custom-control-input" id="ResidentRadioFemale" name="emp_gender">
			  <label class="custom-control-label" for="ResidentRadioFemale">ሴት</label>
			</div> 
		</div>
	</div>
	<div class="form-group">
		<span class="profile_la req">የትዉልድ ቀን:</span>
		<input type="number" name="emp_dob_day" class="form-control profile_dob" placeholder="ቀን" autocomplete="off" style="width: 10%;" required>
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
	    <input type="number" name="emp_dob_year" class="form-control profile_dob" placeholder="ዓመት" autocomplete="off" style="width: 15%;" required>
  		<!--<input type="date" name="">-->
  	</div>
    <div class="form-group">
    	<span class="profile_la req">ስልክ ቁጥር &nbsp;1:</span>
    	<select name="emp_tel1_type" class="form-control profile_select phone_select">
  			<option value="Mobile">ሞባይል</option>
			<option value="Home">የቤት ስልክ</option>
			<option value="Work">የመስሪያ ቤት ስልክ</option>
			<option value="Alternate">ተጨማሪ ስልክ</option>
  		</select>
    	<input type="tel" name="emp_tel1_num" class="form-control profile_ip" id="phone_input1" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input1');" placeholder="1ኛ ስልክ ቁጥር *" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='40%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''" required>
    </div>
    <div class="form-group">
    	<span class="profile_la" style="margin-left: 105px; margin-right: 25px;"> &nbsp;2:</span>
    	<select name="emp_tel2_type" class="form-control profile_select phone_select">
  			<option value="Mobile">ሞባይል</option>
			<option value="Home" selected>የቤት ስልክ</option>
			<option value="Work">የመስሪያ ቤት ስልክ</option>
			<option value="Alternate">ተጨማሪ ስልክ</option>
  		</select>
    	<input type="tel" name="emp_tel2_num" class="form-control profile_ip" id="phone_input2" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input2');" placeholder="2ኛ ስልክ ቁጥር" maxlength="16" autocomplete="off" style="width:35%;" onfocus="this.style.width='40%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
    <div class="form-group">
    <span class="profile_la req">የሰራተኛዉ የጋብቻ ሁኔታ:</span>
    <select name="emp_marital" class="form-control profile_select" onclick="if(this.value=='Married')document.getElementById('spouse').style.display='block'; else document.getElementById('spouse').style.display='none'" style="width:24%;" required>
      <option value="" style="display: none;"></option>
      <option value="Not Married">ያላገባ/ች</option>
      <option value="Married">ያገባ/ች</option>
      <option value="Divorced">እጮኛዉን/ዋን የፈታ/ች</option>
      <option value="Widowed">እጮኛዉ/ዋ ያረፈበት/ባት</option>
    </select>
    </div>
    <div class="profile_moreinfo nodisp" id="spouse">
    <div class="form-group">
      <span class="profile_la">የእጮኛ ሙሉ ስም:</span>
      <input type="text" name="emp_spouse_fname" class="form-control profile_ip" placeholder="የራስ"  autocomplete="off" style="width: 29%;"onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
      <input type="text" name="emp_spouse_lname" class="form-control profile_ip" placeholder="የአባት"  autocomplete="off" style="width: 29%; float: left;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
    </div>
    <div class="form-group">
      <span class="profile_la">የእጮኛ ስልክ ቁጥር: </span>
      <select name="emp_spouse_tel_type" class="form-control profile_select phone_select">
        <option value="Mobile">ሞባይል</option>
		<option value="Home">የቤት ስልክ</option>
		<option value="Work">የመስሪያ ቤት ስልክ</option>
		<option value="Alternate">ተጨማሪ ስልክ</option>
      </select>
      <input type="tel" name="emp_spouse_tel_num" class="form-control profile_ip" id="phone_input4" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input4');" placeholder="ስልክ ቁጥር" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
  </div>
    <br />
    <div class="form-group">
      <span class="profile_la req">አሁን ያልዎት የልጅ ብዛት:</span>
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
    <h3 class="profile_form_info clearfix"><span class="profile_form_info_number">2</span> የስራዎ ገለጻ</h3>
    <div class="form-group">
  		<span class="profile_la req">የመጀመሪያ የስራ ደረጃ / ርዕስ:</span>
  		<input type="text" name="emp_init_position" class="form-control profile_ip" id="init_emp_pos" placeholder="የስራ ርዕስ *" autocomplete="off" style="width: 35%; margin-right: 30px;" onfocus="this.style.width='40%';" onblur="this.style.width='35%';" required>
  	</div>
  	<div class="form-group">
    	<span class="profile_la req">የመጀመሪያ ደሞዝ (ብር): </span>
      <input type="text" name="emp_init_salary" class="form-control profile_ip" id="init_emp_sal" placeholder="ደሞዝ *" autocomplete="off" style="width: 20%; margin-right: 30px;" onfocus="this.style.width='23%';" onblur="this.style.width='20%'; if(this.value!='' && this.value.search('ETB')==-1)this.value+=' ETB'" required>

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
      <input type="text" name="emp_cur_position" class="form-control profile_ip" placeholder="የስራ ርዕስ *"  autocomplete="off" style="width: 35%; margin-right: 30px;"onfocus="this.style.width='40%'; this.value=document.getElementById('init_emp_pos').value" onblur="this.style.width='35%';" required>
  	</div>
    <div class="form-group">
      <span class="profile_la req">አሁን ያልዎት ደሞዝ (ብር): </span>
      <input type="text" name="emp_cur_salary" class="form-control profile_ip" placeholder="ደሞዝ *" autocomplete="off" style="width: 20%; margin-right: 30px;" onfocus="this.style.width='23%'; this.value=document.getElementById('init_emp_sal').value" onblur="this.style.width='20%'; if(this.value!='' && this.value.search('ETB')==-1)this.value+=' ETB'" required>

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
    <input type="text" name="emp_unemp_day" class="form-control profile_dob" placeholder="ቀን" autocomplete="off" style="width: 10%;">
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
      <input type="text" name="emp_unemp_year" class="form-control profile_dob" placeholder="ዓመት" autocomplete="off" style="width: 15%;">
      <!--<input type="date" name="">-->
    </div>
    <div class="form-group">
      <span class="profile_la" style="clear: left;">ስራዉን የለቀቀበት / የለቀቀችበት ምክንያት:</span>
      <textarea name="emp_unemp_reason" class="form-control" placeholder="ምክንያት ..." style="background-color: #F7F7F7; width: 55%; height: 100px; margin-left: 30px; transition: width 0.4s;" onfocus="this.style.width='60%';" onblur="this.style.width='55%';"></textarea>
    </div>
    </div>
  	
    <h3 class="profile_form_info"><span class="profile_form_info_number">4</span> የሶፍትዌሩ አገልግሎት ተጠቃሚነት ሥልጣን መስጫ</h3>
    <div class="profile_moreinfo">
   <!--<div class="form-group">
    	<span class="profile_la req">Employee's User Name: </span>
    	<input type="text" name="emp_user" class="form-control profile_ip" placeholder="Username *" autocomplete="off" style="width: 30%; text-transform:none;" onfocus="this.style.width='40%';" onblur="this.style.width='30%';" required>
    </div>-->
    <div class="form-group">
  		<span class="profile_la req">የሰራተኛዉ ፓስወርድ: </span>
  		<input type="password" name="emp_pass" id="reg_emp_pass" class="form-control profile_ip" placeholder="ፓስወርድ *" autocomplete="off" style="width: 40%; text-transform:none;" required>
    </div>
    <div class="form-group">
      <span class="profile_la req" style="margin-left:22px;">ፓስወርዱን ያረጋግጡ: </span>
      <input type="password" class="form-control profile_ip" placeholder="ፓስወርድ *" autocomplete="off" style="width: 40%; text-transform:none;" onblur="if(document.getElementById('reg_emp_pass').value != this.value){ document.getElementById('reg_emp_pass_msg').innerHTML='ፓስወርዶቹ አይመሳሰሉም'; this.value='';} else document.getElementById('reg_emp_pass_msg').innerHTML='';" required><p id="reg_emp_pass_msg" style="color:tomato;font-style:italic;font-size:15px;margin-left:15px;display:inline;"></p>
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
	    <button class="btn btn-primary btn-lg profile_save" type="submit" name="emp_submit"><span><i class="fa fa-save"></i> &nbsp;ገጽታዉን መዝግብ</span></button>
	   <!-- <button class="btn btn-primary btn-lg profile_review" type="button" onclick="window.location.assign('new_profile_employee.php');"><span><i class="fa fa-window-close"></i> &nbsp;Cancel </span></button>-->

	    <button class="btn btn-primary btn-lg profile_reset" type="reset" onclick="document.getElementById('reg_emp_pass_msg').innerHTML=''"><span>ሁሉንም መልስ&nbsp; <i class="fa fa-undo"></i></span></button>
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