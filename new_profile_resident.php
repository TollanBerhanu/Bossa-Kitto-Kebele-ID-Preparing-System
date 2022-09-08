<!DOCTYPE html>
<html>
<head>
	<title>New Resident's Profile</title>
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
		/*main{
			position: absolute;
			overflow: hidden;
			top: 10px;
			margin-top: 35px;
			padding: 15px;
			height: 110%;
		}*/
	</style>
</head>
<body>
  <?php
  include 'mysqli_connect.php';
  ?>
 <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark shadow" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top">Bossa Kitto Kebele</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
            	<li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php"><i class="fa fa-home"></i> Home</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" id="current" href="#"><i class="fa fa-address-book"></i> New Profile</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger"href="search_profile.php"><i class="fa fa-search"></i> Search Profile</a></li>
				<li class="nav-item"><a class="nav-link js-scroll-trigger" href="selected_ids.php"><i class="fa fa-vcard"></i> Selected IDs</a></li>
				<!--<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#"><i class="fa fa-edit"></i> Register</a>
			        <div class="drpdown">
			        	<a id="curr" href="#">Resident</a>
			        	<a href="#new_profile_house">House/Residence</a>
			        	<a href="new_profile_employee.php">Kebele Employee</a>
			        </div>
			    </li>-->
			    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="statistics.php"><i class="fa fa-newspaper-o"></i> Statistics</a></li>
            </ul>
        </div>
    </div>
</nav>
<main class="new_resident_profile">
	<h1 class="create_profile_title">RESIDENT PROFILE REGISTRATION FORM</h1>
<div class="container">
	
	<h3 class="profile_form_info"><span class="profile_form_info_number">1</span> Personal Information</h3>

  <form method="post" action="res_config.php" enctype="multipart/form-data">
  	<div class="upload_photo">
    <input type="file" name="res_photo" class="_photo" style="opacity: 0;  width: 210px; height:200px; z-index: 1; right: 0;" onchange="changePic(this);">
    	<img src="img/NoPicMale.jpg" id="pro_pic" alt="Residence Photo" accept="image/gif, image/jpeg, image/jpg, image/png, image/ico" style="width: 200px; max-height: 180px;">
    	<div class="img_overlay">Upload Photo</div>
    </div>
    <script>
          function changePic(input) 
          {
                if (input.files && input.files[0]) 
                {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#pro_pic')
                          .attr('src', e.target.result)
                          //.height(200);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
          }
        </script>
  	<div class="form-group">
  		<span class="profile_la req" style="width:100%">Full Name:</span>
  		<input type="text" name="res_fname" class="form-control profile_ip" placeholder="First *" autocomplete="off" style="width: 23%;" onfocus="this.style.width='30%';" onblur="this.style.width='23%';" required>
  		<input type="text" name="res_mname" class="form-control profile_ip" placeholder="Middle *" autocomplete="off" style="width: 23%;" onfocus="this.style.width='30%';" onblur="this.style.width='23%';" required>
  		<input type="text" name="res_lname" class="form-control profile_ip" placeholder="Last *" autocomplete="off" style="width: 23%;" onfocus="this.style.width='29%';" onblur="this.style.width='23%';" required>
  	</div>
  	<div class="form-group">
  		<span class="profile_la req">Gender:</span>
	  	<div class="profile_radio">
	  		<div class="custom-control custom-radio">
			  <input type="radio" name="res_gender" value="Male" class="custom-control-input" id="ResidentRadioMale" required>
			  <label class="custom-control-label" for="ResidentRadioMale">Male</label>
			</div> 
			<div class="custom-control custom-radio">
			  <input type="radio" name="res_gender" value="Female" class="custom-control-input" id="ResidentRadioFemale">
			  <label class="custom-control-label" for="ResidentRadioFemale">Female</label>
			</div> 
		</div>
	</div>
	<div class="form-group">
		<span class="profile_la req">Date of Birth:</span>
    <input type="number" name="res_dob_day" class="form-control profile_dob" placeholder="Day" autocomplete="off" style="width: 10%;" required>
		<!--<select class="custom-select custom-select-sm mb-3 profile_dob" id="dayOption" style="width: 13%;">
	      	<option style="display: none;">Day</option>
	    </select>-->
	   <select name="res_dob_month" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 28%;" required>
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
	    <!--<select class="custom-select custom-select-sm mb-3 profile_dob" id="yearOption" style="width: 18%;">
	    	<option style="display: none;">Year</option>
	    </select>-->
    <input type="number" name="res_dob_year" class="form-control profile_dob" placeholder="Year" autocomplete="off" style="width: 15%;" required>
  		<!--<input type="date" name="">-->
  	</div>
	 <div class="form-group">
    	<span class="profile_la req">Birth Place: </span>
    	<input type="text" name="res_pob" class="form-control profile_ip" placeholder="Birth Place *" autocomplete="off" style="width: 28%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';" required>
		<span class="profile_la req">Nationality:</span>
	    <select name="res_nationality" class="form-control profile_select" style="width:20%;">
	      	<option value="Ethiopian">Ethiopian</option>
			<option value="Other">Other</option>
	    </select>
  	</div>
    
  	<br />
    <div class="form-group">
    	<span class="profile_la req">Phone Number  &nbsp;1:</span>
    	<select name="res_tel1_type" class="form-control profile_select phone_select">
  			<option value="Mobile">Mobile</option>
  			<option value="Home">Home</option>
  			<option value="Work">Work</option>
  			<option value="Alternate">Alternate</option>
  		</select>
    	<input type="tel" name="res_tel1_num" class="form-control profile_ip" id="phone_input1" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input1');" placeholder="Phone Number 1*" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''"required>
    </div>
    <div class="form-group">
    	<span class="profile_la" style="margin-left: 103px; margin-right: 25px;"> &nbsp;2:</span>
    	<select name="res_tel2_type" class="form-control profile_select phone_select">
  			<option value="Mobile">Mobile</option>
        <option value="Home" selected>Home</option>
        <option value="Work">Work</option>
        <option value="Alternate">Alternate</option>
  		</select>
    	<input type="tel" name="res_tel2_num" class="form-control profile_ip" id="phone_input2" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input2');" placeholder="Phone Number 2" maxlength="16" autocomplete="off" style="width:35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
    <div class="form-group">
    <span class="profile_la">Occupation: </span>
    <select name="res_work" class="form-control profile_select" style="width:24%;">
      <option value="-"> &nbsp;-</option>
      <option value="Student">Student</option>
      <option value="Government Worker">Government Worker</option>
      <option value="NGO Worker">NGO Worker</option>
      <option value="Private Worker">Private Worker</option>
      </select>
    </div>
    <h3 class="profile_form_info clearfix"><span class="profile_form_info_number">2</span> Family Information</h3>
    <div class="form-group">
  		<span class="profile_la req">Mother's Name:</span>
  		<input type="text" name="res_mom_fname" class="form-control profile_ip" placeholder="First *" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  		<input type="text" name="res_mom_lname" class="form-control profile_ip" placeholder="Last *"  autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';" required>
  	</div>
  	<div class="form-group">
    	<span class="profile_la">Mother's Phone Number: </span>
    	<select name="res_mom_tel_type" class="form-control profile_select phone_select">
  			<option value="Mobile">Mobile</option>
        <option value="Home">Home</option>
        <option value="Work">Work</option>
        <option value="Alternate">Alternate</option>
  		</select>
    	<input type="tel" name="res_mom_tel_num" class="form-control profile_ip" id="phone_input3" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input3');" placeholder="Phone Number" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
    <br />
    <div class="form-group">
		<span class="profile_la req">Marital Status of Resident: </span>
		<select name="res_marital" class="form-control profile_select" onclick="if(this.value=='Married')document.getElementById('spouse').style.display='block'; else document.getElementById('spouse').style.display='none'" style="width:24%;" required>
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
  		<input type="text" name="res_spouse_fname" class="form-control profile_ip" placeholder="First"  autocomplete="off" style="width: 29%;"onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
  		<input type="text" name="res_spouse_lname" class="form-control profile_ip" placeholder="Last"  autocomplete="off" style="width: 29%; float: left;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
  	</div>
  	<div class="form-group">
    	<span class="profile_la">Spouse's Phone Number: </span>
    	<select name="res_spouse_tel_type" class="form-control profile_select phone_select">
  			<option value="Mobile">Mobile</option>
        <option value="Home">Home</option>
        <option value="Work">Work</option>
        <option value="Alternate">Alternate</option>
  		</select>
    	<input type="tel" name="res_spouse_tel_num" class="form-control profile_ip" id="phone_input4" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input4');" placeholder="Phone Number" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''">
    </div>
	</div>
    <br />


<!--*************************************************************-->




    <div class="form-group">
    	<span class="profile_la req">Current Number of Children:</span>
    	<!--<input type="text" class="form-control profile_ip" autocomplete="off" style="float: left; width: 15%;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';" required>-->
    	<select name="res_num_ch" class="form-control profile_select" style="width:9%;" onclick="childrenProfile(this.value);">
    		<option value="0">0</option>
  			<option value="1">1</option>
  			<option value="2">2</option>
  			<option value="3">3</option>
  			<option value="4">4</option>
  			<option value="5">5</option>
  			<!--<option value="6">6</option>
  			<option value="7">7</option>
  			<option value="8">8</option>
  			<option value="9">9</option>
  			<option value="10">10</option>-->
  			<option value="5.5">&gt;5</option>
  		</select>
    </div>

    <div class="profile_moreinfo nodisp" id="child1">
    <div class="form-group">
  		<span class="profile_la profile_moreinfo_title">First Child's Information</span>
  		<span class="profile_la">Child's Name:</span>
  		<input type="text" name="res_ch1_fname" class="form-control profile_ip" placeholder="First" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
  		<input type="text" name="res_ch1_lname" class="form-control profile_ip" placeholder="Last" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
  	</div>
  	<div class="form-group">
  		<span class="profile_la">Child's Gender: </span>
	  	<div class="profile_radio" style="margin-right: 60px;">
	  		<div class="custom-control custom-radio">
			  <input type="radio" name="res_ch1_gender" value="Male" class="custom-control-input" id="ChildRadioMale1">
			  <label class="custom-control-label" for="ChildRadioMale1" required>Male</label>
			</div> 
			<div class="custom-control custom-radio">
			  <input type="radio" name="res_ch1_gender" value="Female" class="custom-control-input" id="ChildRadioFemale1">
			  <label class="custom-control-label" for="ChildRadioFemale1">Female</label>
			</div>
      <input type="radio" name="res_ch1_gender" style="display:none;" checked>
		</div>
		<span class="profile_la">Child's Age:</span>
		<input type="text" name="res_ch1_age" class="form-control profile_ip" placeholder="Age" autocomplete="off" style="width: 8%;" onfocus="this.style.width='10%';" onblur="this.style.width='8%';">
	</div>
	<div class="form-group">
    	<span class="profile_la">Child's Birth Place:</span>
    	<input type="text" name="res_ch1_pob" class="form-control profile_ip" placeholder="Birth Place" autocomplete="off" style="width: 28%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
    	<span class="profile_la">Relation to Child:</span>
	    <select name="res_ch1_relation" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 20%;">
	       <option value="By Blood">By Blood</option>
			   <option value="Step Child">Step Child</option>
			   <option value="Adopted">Adopted</option>
			   <option value="Other Relative">Other Relative</option>
	    </select>
    </div>
  </div>

  <div class="profile_moreinfo nodisp" id="child2">
    <div class="form-group">
      <span class="profile_la profile_moreinfo_title">Second Child's Information</span>
      <span class="profile_la">Child's Name:</span>
      <input type="text" name="res_ch2_fname" class="form-control profile_ip" placeholder="First" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
      <input type="text" name="res_ch2_lname" class="form-control profile_ip" placeholder="Last" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
    </div>
    <div class="form-group">
      <span class="profile_la">Child's Gender: </span>
      <div class="profile_radio" style="margin-right: 60px;">
        <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioMale2" name="res_ch2_gender" value="Male">
        <label class="custom-control-label" for="ChildRadioMale2" required>Male</label>
      </div> 
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioFemale2" name="res_ch2_gender" value="Female">
        <label class="custom-control-label" for="ChildRadioFemale2">Female</label>
      </div>
      <input type="radio" name="res_ch2_gender" style="display:none;" checked> 
    </div>
    <span class="profile_la">Child's Age:</span>
    <input type="text" name="res_ch2_age" class="form-control profile_ip" placeholder="Age" autocomplete="off" style="width: 8%;" onfocus="this.style.width='10%';" onblur="this.style.width='8%';">
  </div>
  <div class="form-group">
      <span class="profile_la">Child's Birth Place:</span>
      <input type="text" name="res_ch2_pob" class="form-control profile_ip" placeholder="Birth Place" autocomplete="off" style="width: 28%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
      <span class="profile_la">Relation to Child:</span>
      <select name="res_ch2_relation" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 20%;">
         <option value="By Blood">By Blood</option>
         <option value="Step Child">Step Child</option>
         <option value="Adopted">Adopted</option>
         <option value="Other Relative">Other Relative</option>
      </select>
    </div>
  </div>

  <div class="profile_moreinfo nodisp" id="child3">
    <div class="form-group">
      <span class="profile_la profile_moreinfo_title">Third Child's Information</span>
      <span class="profile_la">Child's Name:</span>
      <input type="text" name="res_ch3_fname" class="form-control profile_ip" placeholder="First" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
      <input type="text" name="res_ch3_lname" class="form-control profile_ip" placeholder="Last" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
    </div>
    <div class="form-group">
      <span class="profile_la">Child's Gender: </span>
      <div class="profile_radio" style="margin-right: 60px;">
        <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioMale3" name="res_ch3_gender" value="Male">
        <label class="custom-control-label" for="ChildRadioMale3" required>Male</label>
      </div> 
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioFemale3" name="res_ch3_gender" value="Female">
        <label class="custom-control-label" for="ChildRadioFemale3">Female</label>
      </div>
      <input type="radio" name="res_ch3_gender" style="display:none;" checked>
    </div>
    <span class="profile_la">Child's Age:</span>
    <input type="text" name="res_ch3_age" class="form-control profile_ip" placeholder="Age" autocomplete="off" style="width: 8%;" onfocus="this.style.width='10%';" onblur="this.style.width='8%';">
  </div>
  <div class="form-group">
      <span class="profile_la">Child's Birth Place:</span>
      <input type="text" name="res_ch3_pob" class="form-control profile_ip" placeholder="Birth Place" autocomplete="off" style="width: 28%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
      <span class="profile_la">Relation to Child:</span>
      <select name="res_ch3_relation" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 20%;">
         <option value="By Blood">By Blood</option>
         <option value="Step Child">Step Child</option>
         <option value="Adopted">Adopted</option>
         <option value="Other Relative">Other Relative</option>
      </select>
    </div>
  </div>

  <div class="profile_moreinfo nodisp" id="child4">
    <div class="form-group">
      <span class="profile_la profile_moreinfo_title">Fourth Child's Information</span>
      <span class="profile_la">Child's Name:</span>
      <input type="text" name="res_ch4_fname" class="form-control profile_ip" placeholder="First" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
      <input type="text" name="res_ch4_lname" class="form-control profile_ip" placeholder="Last" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
    </div>
    <div class="form-group">
      <span class="profile_la">Child's Gender: </span>
      <div class="profile_radio" style="margin-right: 60px;">
        <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioMale4" name="res_ch4_gender" value="Male">
        <label class="custom-control-label" for="ChildRadioMale4" required>Male</label>
      </div> 
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioFemale4" name="res_ch4_gender" value="Female">
        <label class="custom-control-label" for="ChildRadioFemale4">Female</label>
      </div>
      <input type="radio" name="res_ch4_gender" style="display:none;" checked>
    </div>
    <span class="profile_la">Child's Age:</span>
    <input type="text" name="res_ch4_age" class="form-control profile_ip" placeholder="Age" autocomplete="off" style="width: 8%;" onfocus="this.style.width='10%';" onblur="this.style.width='8%';">
  </div>
  <div class="form-group">
      <span class="profile_la">Child's Birth Place:</span>
      <input type="text" name="res_ch4_pob" class="form-control profile_ip" placeholder="Birth Place" autocomplete="off" style="width: 28%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
      <span class="profile_la">Relation to Child:</span>
      <select name="res_ch4_relation" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 20%;">
         <option value="By Blood">By Blood</option>
         <option value="Step Child">Step Child</option>
         <option value="Adopted">Adopted</option>
         <option value="Other Relative">Other Relative</option>
      </select>
    </div>
  </div>

  <div class="profile_moreinfo nodisp" id="child5">
    <div class="form-group">
      <span class="profile_la profile_moreinfo_title">Fifth Child's Information</span>
      <span class="profile_la">Child's Name:</span>
      <input type="text" name="res_ch5_fname" class="form-control profile_ip" placeholder="First" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
      <input type="text" name="res_ch5_lname" class="form-control profile_ip" placeholder="Last" autocomplete="off" style="width: 29%;" onfocus="this.style.width='35%';" onblur="this.style.width='29%';">
    </div>
    <div class="form-group">
      <span class="profile_la">Child's Gender: </span>
      <div class="profile_radio" style="margin-right: 60px;">
        <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioMale5" name="res_ch5_gender" value="Male">
        <label class="custom-control-label" for="ChildRadioMale5" required>Male</label>
      </div> 
      <div class="custom-control custom-radio">
        <input type="radio" class="custom-control-input" id="ChildRadioFemale5" name="res_ch5_gender" value="Female">
        <label class="custom-control-label" for="ChildRadioFemale5">Female</label>
      </div>
      <input type="radio" name="res_ch5_gender" style="display:none;" checked>
    </div>
    <span class="profile_la">Child's Age:</span>
    <input type="text" name="res_ch5_age" class="form-control profile_ip" placeholder="Age" autocomplete="off" style="width: 8%;" onfocus="this.style.width='10%';" onblur="this.style.width='8%';">
  </div>
  <div class="form-group">
      <span class="profile_la">Child's Birth Place:</span>
      <input type="text" name="res_ch5_pob" class="form-control profile_ip" placeholder="Birth Place" autocomplete="off" style="width: 28%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
      <span class="profile_la">Relation to Child:</span>
      <select name="res_ch5_relation" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 20%;">
         <option value="By Blood">By Blood</option>
         <option value="Step Child">Step Child</option>
         <option value="Adopted">Adopted</option>
         <option value="Other Relative">Other Relative</option>
      </select>
    </div>
  </div>




<!--*************************************************************-->

    

    <h3 class="profile_form_info"><span class="profile_form_info_number">3</span> Emergency Contact</h3>
    <div class="profile_moreinfo">
    <div class="form-group">
      <span class="profile_la req">Emergency Contact's Name: </span>
      <input type="text" name="res_emcon_fname" class="form-control profile_ip" placeholder="First Name *" autocomplete="off" style="width: 25%;" onfocus="this.style.width='32%';" onblur="this.style.width='25%';" required>
      <input type="text" name="res_emcon_lname" class="form-control profile_ip" placeholder="Last Name *" autocomplete="off" style="width: 25%;" onfocus="this.style.width='32%';" onblur="this.style.width='25%';" required>
    </div>
    <div class="form-group">
      <span class="profile_la req">Phone Number: </span>
      <select name="res_emcon_tel_type" class="form-control profile_select phone_select">
        <option value="Mobile">Mobile</option>
        <option value="Home">Home</option>
        <option value="Work">Work</option>
        <option value="Alternate">Alternate</option>
      </select>
      <input type="tel" name="res_emcon_tel_num" class="form-control profile_ip" id="phone_input5" onclick="(this.value=='')?this.value='+251-':true;" onkeypress="phone_change('phone_input5');" placeholder="Phone Number *" maxlength="16" autocomplete="off" style="width: 35%;" onfocus="this.style.width='45%';" onblur="this.style.width='35%'; if(this.value=='+251-')this.value=''" required>
    </div>
    <div class="form-group">
      <span class="profile_la">Relation to Emergency Contact: </span>
      <input type="text" name="res_emcon_relation" class="form-control profile_ip" placeholder="Relation" style="width: 30%;" onfocus="this.style.width='35%';" onblur="this.style.width='30%';">
    </div>
    </div>


    <h3 class="profile_form_info" id="new_profile_house"><span class="profile_form_info_number">4</span> Residence Information</h3>
    <div class="form-group">
    	<span class="profile_la req">House Number:</span>
    	<input type="text" name="res_hou_num" class="form-control profile_ip" placeholder="House Number *" autocomplete="off" style="width: 25%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';" required>
    	<span class="profile_la">House Location:</span>
    	<input type="text" name="res_hou_loc" class="form-control profile_ip" placeholder="House Location" autocomplete="off" style="width: 28%;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
    </div>
    <div class="form-group">
    	<span class="profile_la">Area of Land (m<sup>2</sup>):</span>
    	<input type="text" name="res_hou_area" class="form-control profile_ip" placeholder="Area of Land" autocomplete="off" style="width: 25%; margin-right: 30px;" onfocus="this.style.width='35%';" onblur="this.style.width='28%';">
    	<span class="profile_la">Relation to Asset:</span>
	    <select name="res_hou_relation" class="custom-select custom-select-sm mb-3 profile_dob" style="width: 22%;">
	      	<option style="display: none;"></option>
			<option value="Owner">Owner</option>
			<option value="Resident">Resident</option>
			<option value="Tenant">Tenant</option>
	    </select>
    </div>
	<span class="profile_la">House Description:</span>
    <div class="form-group">
    	<textarea name="res_hou_desc" class="form-control" placeholder="Description ..." style="background-color: #F7F7F7; width: 65%; height: 100px; margin-left: 30px; transition: width 0.4s;" onfocus="this.style.width='80%';" onblur="this.style.width='65%';"></textarea>
    </div>
    <h3 class="profile_form_info"><span class="profile_form_info_number">5</span> Verification</h3>
    <div class="profile_moreinfo">
    <div class="form-group">
    	<span class="profile_la req" style="margin-left:28px;">Employee's Name: </span>
    	<select id="select_emp" onclick="empName();" class="form-control profile_select" style="width: 35%; margin-right: 30px;">
    		<option value="" style="display: none;"></option>
        <?php
        $sql = "SELECT emp_fname,emp_mname,emp_lname,emp_pass FROM employee WHERE emp_status='Employed';";
        $result = mysqli_query($conn, $sql);
        while($emp = mysqli_fetch_array($result))
        {
          $empName = $emp['emp_fname'].' '.$emp['emp_mname'].' '.$emp['emp_lname'];
          $empPass = $emp['emp_pass'];
          echo '<option class="empNameOpt" value="'.$empPass.'">'.$empName.'</option>';
        }

        $sql = "SELECT COUNT(*) FROM employee WHERE emp_status='Employed';";
        $numEmp = mysqli_fetch_array(mysqli_query($conn, $sql));
        ?>
  		</select>
    </div>
    <script>
      function empName(){
        for(var i=0; i<Number(<?php echo $numEmp[0];?>); i++)
          if(document.getElementsByClassName('empNameOpt')[i].selected)
            document.getElementById('empNameTxt').value=document.getElementsByClassName('empNameOpt')[i].innerHTML;
      }
    </script>
    <input type="text" name="res_emp_name" id="empNameTxt" style="display:none;">
    <div class="form-group">
  		<span class="profile_la req">Employee's Password: </span>
  		<input type="password" name="res_emp_pass" class="form-control profile_ip" placeholder="Password *" autocomplete="off" style="width: 35%;" onfocus="this.style.width='40%';" onblur="this.style.width='35%'; if(this.value != document.getElementById('select_emp').value){this.value='';document.getElementById('emp_pass_err').innerHTML='Incorrect Password';} else document.getElementById('emp_pass_err').innerHTML='';" required>
      <p id="emp_pass_err" style="color:tomato;font-style:italic;font-size:15px;margin-left:15px;display:inline;"></p>
    </div>
    <div class="form-group">
      <div class="custom-control custom-checkbox mb-3" style="margin-right: 60px;">
      <input type="checkbox" class="custom-control-input" id="ResRegCheck" required>
      <label class="custom-control-label" for="ResRegCheck"><span class="profile_la req"></span>I Employee Name vreify the validity of this persons profile to be accurate. If by any chance this profile be false or inaccurate, I will take full responsibility.</label>
    </div>
    </div>

	</div>
    <br /><br />
    <div class="col-lg-12">
	    <button class="btn btn-primary btn-lg profile_save" type="submit" name="res_submit"><span><i class="fa fa-save"></i> &nbsp;Save Profile </span></button>
	    <button class="btn btn-primary btn-lg profile_review" type="button" onclick="window.location.assign('new_profile_resident.php');"><span><i class="fa fa-window-close"></i> &nbsp;Cancel </span></button>

	    <button class="btn btn-primary btn-lg profile_reset" type="reset"><span>Reset All&nbsp; <i class="fa fa-undo"></i></span></button>
	</div>
    </form>
	</div>

</main>

<script>
	/*var i=0;
	for (i=2022; i>1900; i--)
	{
		var opt = document.createElement('option');
		opt.value = i;
		opt.innerHTML = i;
		document.getElementById('yearOption').appendChild(opt);
		document.getElementById('yearOption').options[2023-i].value = i;
	}
	for (i=1; i<=31; i++)
	{
		var opt = document.createElement('option');
		opt.value = i;
		opt.innerHTML = i;
		document.getElementById('dayOption').appendChild(opt);
		document.getElementById('dayOption').options[i].value = i;
	}
	var i=0;*/
	var phone_id="";
	function phone_change(phone_id){
		ph = document.getElementById(phone_id);
		var s=""+ph.value;
		if(s.length==8 || s.length==12) ph.value+="-";
    if(ph.value=="+251-0") ph.value="+251-";
	}
  var child_no="";
  function childrenProfile(child_no){
    child_no = + child_no;//casting to integer
    for(var i=1; i<=5; i++){
      document.getElementById("child"+i).style.display="none";
    }
    for(var i=1; i<=child_no; i++){
      document.getElementById("child"+i).style.display="block";
    }
  }
</script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>

</body>
</html>