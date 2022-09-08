<!DOCTYPE html>
<html>
<head>
	<title>ቦሳ ኪቶ ቀበሌ ዳታቤዝ ማኔጅመንት ሲስተም</title>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
	<style type="text/css">
	.bg-dark {
    	background-color: rgba(200,200,200,0.2)!important;/*#348a40!important;*/
	}
	section#title{
		border-radius: 5px;
		background-color: rgba(200,200,200,0);
		padding: 0px;
		padding-top: 15px; 
	}




    /* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 20px;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container.sp {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover, .close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
p#pass_err, p#user_err, p#change_pass_err{
  color: tomato;
  font-style: italic;
  font-size: 15px;
  margin-left: 30px;
}





/*------------------------NOT USED--------------------*/
main div div.search_profile{
  /*#f4e5b2(previous) #fff0be(light orange) 
  #ffefb8 (input focus) #ffd74f (bright orange)*/
  background-color: #f9fec4;/*#ffefb8#ffd74f*/
  margin: 20px 0px 0px 7px;
  width: 98%;
  padding: 5px;
  border-radius: 0px;
  box-shadow: 1px 8px 8px 1px rgba(0,0,0,0.2); 
}
main div div.search_profile:hover{
  box-shadow: 1px 8px 8px 1px rgba(0,100,255,0.4);
}
/*main div div.search_profile:hover{ display: none;}*/
main div div.search_profile table#search_result_table{
  width: 100%;
  border: 1px solid #333;
}
table#search_result_table label{
  font-weight: bold;
  margin: 3px 10px;
}
table#search_result_table span{
  padding: 3px 5px;
  background-color: #FFF;
  color: #333;
}
table#search_result_table img.search_result_img{
  max-width: 80px; max-height: 100px; 
  border-radius: 5px;
  border: 1px solid #DDD;
}
/****************************UP TO HERE**************************/

table.view_emp_profile{
  text-align: center;
  border-collapse: collapse;
  width: 100%;
  margin-top: 5px;
  padding: 0;
}
table.view_emp_profile th, table.view_emp_profile td{
  border: 1px solid #ddd;
  padding: 8px;
}
table.view_emp_profile tr:nth-child(odd){
  background-color: #f2f2f2;
}
table.view_emp_profile tr:hover {background-color: #ddd;}
table.view_emp_profile th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}





/* The View Profile Modal*/
    div.modal_sel_id_view {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
    }
    /* Modal Content */
    div.modal_sel_id_view div.modal-content_view {
      position: fixed;
      overflow-y: scroll;
      text-transform: uppercase;
      background-color: #f2f2f2;
      margin-left: 20%;
      padding: 0px;
      border: 1px solid #888;
      width: 60%;
    }
    /* The Close Button */
    div.modal_sel_id_view span.modal_close_view {
      display: inline-block;
      color: #333;/*#aaaaaa;
      border-left: 1px solid #CCC;*/
      float: right;
      padding: 0px 55px;
      text-align: right;
      height: 35px;
      font-size: 25px;
      font-weight: bold;
    }
    div.modal_sel_id_view span.modal_close_view:hover, span.modal_close_view:focus {
      background-color: #333;
      color: tomato;
      text-decoration: none;
      cursor: pointer;
    }
    div.modal_sel_id_view span.modal_close_view:active{
      background-color: tomato;
      color: #333;
    }
    div.modal_sel_id_view div.modal_sel_id_header_view{
      position: fixed;
      z-index: 1;
      width: 59%;
      height: 35px;
      background-color: #4CAF50;
      border: 1px solid #CCC;
      box-shadow: 0 0 8px 0 rgba(0,0,0,0.4);
    }
    div.modal_sel_id_view div.modal_view{
      height: auto;
      padding: 0px 0px;
    }
    div.modal_sel_id_view div.modal_sel_id_header_view h3{
      display: inline;
      position: relative;
      top: 5px;
      left: 15px;
      font-size: 23px;
      letter-spacing: 3px;
      text-transform: none;
      font-variant: small-caps;
    }







div.modal_sel_id_new {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 95px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    /* Modal Content */
    div.modal_sel_id_new div.modal-content_new {
      background-color: #fed136;
      margin: auto;
      padding: 0px 0px;
      border: 1px solid #888;
      width: 60%;
      height: 85%;
    }
    /* The Close Button */
    div.modal_sel_id_new span.modal_close_new {
      display: inline-block;
      color: #333;/*#aaaaaa;*/
      border-left: 1px solid #555;
      float: right;
      padding: 0px 30px;
      text-align: right;
      font-size: 28px;
      font-weight: bold;
    }
    div.modal_sel_id_new span.modal_close_new:hover, span.modal_close_new:focus {
      background-color: #ffefb8;
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    div.modal_sel_id_new div.modal_sel_id_header_new h3{
      display: inline;
      position: relative;
      top: 5px;
      left: 30px;
      font-size: 25px;
      font-variant: small-caps;
    }
    iframe{
      border: none;
      width: 100%;
      height: 100%;
    }







    div.modal_sel_id_edit {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      padding-top: 95px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    /* Modal Content */
    div.modal_sel_id_edit div.modal-content_edit {
      background-color: #47ca7f;
      margin: auto;
      padding: 0px 0px;
      border: 1px solid #888;
      width: 60%;
      height: 85%;
    }
    /* The Close Button */
    div.modal_sel_id_edit span.modal_close_edit {
      display: inline-block;
      color: #CCC;/*#aaaaaa;*/
      border-left: 1px solid #CCC;
      float: right;
      padding: 0px 30px;
      text-align: right;
      font-size: 28px;
      font-weight: bold;
    }
    div.modal_sel_id_edit span.modal_close_edit:hover, span.modal_close_edit:focus {
      background-color: #3B3;
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    div.modal_sel_id_edit div.modal_sel_id_header_edit h3{
      display: inline;
      position: relative;
      top: 5px;
      left: 30px;
      font-size: 25px;
      font-variant: small-caps;
    }
    iframe{
      border: none;
      width: 100%;
      height: 100%;
    }





    /* The Delete Modal*/
    div.modal_sel_id_delete {
      display: none;
      position: fixed;
      z-index: 1;
      padding-top: 100px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0,0,0);
      background-color: rgba(0,0,0,0.4);
    }
    /* Modal Content */
    div.modal_sel_id_delete div.modal-content_delete {
      background-color: #fefefe;
      margin: auto;
      padding: 0px 10px;
      border: 1px solid #888;
      width: 55%;
    }
    /* The Close Button */
    div.modal_sel_id_delete span.modal_close_delete {
      display: inline-block;
      color: #CCC;/*#aaaaaa;*/
      border-left: 1px solid #CCC;
      float: right;
      padding: 0px 30px;
      text-align: right;
      font-size: 28px;
      font-weight: bold;
    }
    div.modal_sel_id_delete span.modal_close_delete:hover, span.modal_close_delete:focus {
      background-color: #d55;
      border-radius: 0px 0px 5px 0px;
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    div.modal_sel_id_delete div.modal_sel_id_header_delete{
      height: 42px;
      background-color: tomato;
      border-radius: 0px 0px 5px 5px;
    }
    div.modal_sel_id_delete div.modal_question_delete, div.modal_ans_delete{
      height: 140px;
      padding: 20px 0px 0px 50px;
    }
    div.modal_sel_id_delete div.modal_question_delete a, a#delete_ok{
      float: right;
      padding: 7px 35px;
      margin: 10px;
      border-radius: 4px;
      text-decoration: none;
      color: #333;
      font-weight: bolder;
      font-size: 20px;
    }
    div.modal_ans_delete{
      padding-left: 20px;
      text-align: center;
      display: none;
    }
    a#delete_yes{
      background-color: tomato;/*#e66#e04141*/
    }
    a#delete_no, a#delete_ok{
      background-color:#47ca7f;
      margin-right: 40px;
    }
    a#delete_yes:hover{
      background-color:#da3838;/*#d55*/
    }
    a#delete_no:hover, a#delete_ok:hover{
      background-color:#47ba7f;
    }
</style>
</head>
<body onload="loadIndex();">
  <?php
  include 'mysqli_connect.php';
  $sql = "CREATE TABLE admin(
          admin_user VARCHAR(50),
          admin_password VARCHAR(50),
          admin_type VARCHAR(10)
          );";
  @mysqli_query($conn, $sql);

  $sql = "SELECT COUNT(*) FROM admin";
  if($row=mysqli_fetch_array(mysqli_query($conn, $sql)) and $row[0]==0){
    $sql = "INSERT INTO admin (admin_user,admin_password,admin_type) VALUES ('JU-CBTP-G1','G1-CBTP-JU','Master'),('username','password','Normal');";
    @mysqli_query($conn, $sql);
  }
  $sql = "SELECT admin_user, admin_password FROM admin WHERE admin_type='Normal'";
  if($admin = mysqli_fetch_array(mysqli_query($conn, $sql))) echo "";
  else echo "Error: ".mysqli_error($conn);
  ?>
 <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
    <div class="container"><a class="navbar-brand" href="#page-top">ቦሳ ኪቶ ቀበሌ</a><a data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto text-uppercase">
            	<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#"><i class="fa fa-globe"></i> ቋንቋ</a>
                    <div class="drpdown">
                    	<a href="#">English</a>
                    	<a href="#">አማርኛ</a>
                    	<a href="#">Afan Oromo</a>
                    </div>
                </li>
                <li class="nav-item dropdown" style="text-transform:none;"><a class="dropdown-toggle nav-link" href="#"><i class="fa fa-lock" id="admin_lock_icon"></i><i class="fa fa-unlock" id="admin_unlock_icon" style="display:none;"></i> አስተዳደር</a>
                    <div class="drpdown" id="admin_unlock" style="visibility:hidden; width:220px;">
                    	<a href="#" onclick="newEmployeeProfile();">አዲስ ሰራተኛ መዝግብ</a>
                    	<a href="#" onclick="viewEmployeeProfiles();">የሰራተኞችን ገጽታ አሳይ</a>
                    	<!--<a href="#">Change Software Title/Logo</a>-->
                    	<a href="#" onclick="document.getElementById('change_login_admin').style.display='block'; document.getElementById('Modal_ID_view').style.display='none'; document.getElementById('Modal_ID_new').style.display='none'; document.getElementById('Modal_ID_edit').style.display= 'none';">የአስተዳደር ፓስወርድ ቀይር</a>
                      <a href="#" onclick="lockAdmin();"><i class="fa fa-lock"></i> ቆልፍ</a>
                    </div>

                    <div class="drpdown" id="admin_lock">
                      <a href="#" onclick="document.getElementById('login_admin').style.display='block';"><i class="fa fa-unlock"></i> አትቆልፍ / ክፈት</a>
                    </div>
                </li>
                 <!--<li>Register Employee</li>
                    <li>View Eployee Profile</li>
                    <li>Edit employee Profile</li>                   
                    <li>Remove Employee Profile</li>-->
                <!--<li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Theme</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Light</a><a class="dropdown-item" role="presentation" href="#">Dark</a><a class="dropdown-item" role="presentation" href="#">Colored</a></div>
                    </li>-->
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#"><i class="fa fa-question-circle-o"></i> ስለሶፍትዌሩ</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><i class="fa fa-phone"></i> የሶፍትዌሩን ሰሪዎች አግኝ</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead" style="background-image: url('img/Moto Themes 12.png');">
    <div class="container">
        <div class="intro-text" style="padding-top: 230px;">
        	<section id="title">
            <div class="intro-lead-in"><span style="font-size: 35px;">ዳታቤዝ ማኔጅመንት ሲስተም</span></div>
            <div class="intro-heading text-uppercase" style="font-size: 40px;"><span style="font-size: 50px;">ቦሳ ኪቶ ቀበሌ አስተዳደር ቢሮ</span></div>
        	</section>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" role="button" href="search_profile.php">ጀምር</a>
        </div>
    </div>
</header>







<div id="login_admin" class="modal">
  
  <form class="modal-content animate" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login_admin').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container sp">
      <label for="admin_user"><b>የተጠቃሚ ስም</b></label>
      <input type="text" placeholder="የተጠቃሚ ስም *" autocomplete="off" onblur="if(this.value!='') this.style.backgroundColor='#e8f0fe';" name="admin_login_user" required><p id="user_err"></p>

      <label for="admin_pass"><b>ፓስወርድ</b></label>
      <input type="password" placeholder="ፓስወርድ *" autocomplete="off" onblur="if(this.value!='') this.style.backgroundColor='#e8f0fe';" id="login_pass1" name="admin_login_pass" required><i class="fa fa-eye" onmousedown="peekPassword(1);" onmouseup="unpeekPassword(1);" title="አሳይ"></i><p id="pass_err"></p>
        
      <button type="submit" name="admin_submit" value="admin_submit" onclick="document.cookie='index_selected_modal=3';">ግባ</button>
      <!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
    </div>
    <!--<div class="container sp" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login_admin').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
</div>







<div id="change_login_admin" class="modal">
  
  <form class="modal-content animate"  method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onclick="document.getElementById('change_login_admin').style.display='none'" class="close" title="Close Modal">&times;</span>
      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
    </div>

    <div class="container sp">
      <label for="admin_user"><b>አዲስ የተጠቃሚ ስም</b></label>
      <input type="text" placeholder="የተጠቃሚ ስም *" name="change_admin_user" autocomplete="off" onblur="if(this.value!='') this.style.backgroundColor='#e8f0fe';" required>

      <label for="admin_pass"><b>አዲስ ፓስወርድ</b></label>
      <input type="password" id="login_pass2" placeholder="ፓስወርድ *" name="change_admin_pass" autocomplete="off" onblur="if(this.value!='') this.style.backgroundColor='#e8f0fe';" required>
      <i class="fa fa-eye" onmousedown="peekPassword(2);" onmouseup="unpeekPassword(2);" title="አሳይ"></i>

      <label for="admin_pass"><b>ፓስወርዱን ያረጋግጡ</b></label>
      <input type="password" id="login_pass3" placeholder="ፓስወርድ *" name="change_admin_pass" autocomplete="off" onblur="if(this.value!='') this.style.backgroundColor='#e8f0fe'; if(this.value != document.getElementById('login_pass2').value) this.style.borderColor='tomato'; else this.style.borderColor='#ccc';" required>
      <i class="fa fa-eye" onmousedown="peekPassword(3);" onmouseup="unpeekPassword(3);" title="አሳይ"></i><p id="change_pass_err"></p>
        
      <button type="submit" name="admin_change_submit" onclick="if(document.getElementById('login_pass2').value != document.getElementById('login_pass3').value){this.type='button'; document.getElementById('change_pass_err').innerHTML='ፓስወርዶቹ አይመሳሰሉም';} else this.type='submit';">ጨርስ</button>
      <!--<label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>-->
      <?php
      if(isset($_POST['admin_change_submit'])){
        $change_admin_user = $_POST['change_admin_user'];
        $change_admin_pass = $_POST['change_admin_pass'];

        $sql = "UPDATE admin SET admin_user='$change_admin_user', admin_password='$change_admin_pass' WHERE admin_type='Normal';";
        mysqli_query($conn, $sql);
      }
      ?>
    </div>
    <!--<div class="container sp" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login_admin').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
  </form>
</div>












<main>


<!-- The View Profile Modal -->
<div id="Modal_ID_view" class="modal_sel_id_view">
  <!-- Modal content -->
  <div class="modal-content_view">
    <div class="modal_sel_id_header_view">
      <h3>የሰራተኞች ገጽታ</h3>
      <span class="modal_close_view">&times;</span>
  </div>
    <div class="modal_view">
      <div class="modal-content" style="margin:0px;padding:20px 0px; height:480px;width:100%; border:none;">
      <table id="search_result_table" class="view_emp_profile">
        <tr>
          <th>ሙሉ ስም</th>
          <th>ፆታ</th>
          <th>ስልክ ቁጥር</th>
          <th>የስራ ደረጃ / ርዕስ</th>
          <th>አስተካክል</th>
        </tr>
      <?php
      $sql = "SELECT emp_id,emp_fname,emp_mname,emp_lname,emp_gender,emp_tel1_num,emp_cur_position FROM employee ORDER BY emp_fname ASC, emp_mname ASC, emp_lname ASC;";

      if($res=mysqli_query($conn, $sql)) echo "";
      else echo "Unable to retrieve profile info: ".mysqli_error($conn);
      while($row = mysqli_fetch_array($res))
        echo '<tr>
              <td>'.$row["emp_fname"].' '.$row["emp_mname"].' '.$row["emp_lname"].'</td>
              <td>'.$row["emp_gender"].'</td>
              <td>'.$row["emp_tel1_num"].'</td>
              <td>'.$row["emp_cur_position"].'</td>
              <td><div class="search_table_icons">
                        <a href="#"><i class="fa fa-pencil ico_pencil" style="color:#0040d8;" onclick="openModal('.$row["emp_id"].',1);" title="Edit Profile"></i></a>
                        <a href="#" id="linkT"><i class="fa fa-trash-o ico_trash" style="color:red;" onclick="openModal('.$row["emp_id"].',2);" title="Delete Profile"></i></a>
                    </div></td>
              </tr>';
      /*echo '<div class="container search_profile">
        <table id="search_result_table">
            <tr>
                <td rowspan="3" style="width: 100px; text-align: center;"><img src="" class="search_result_img" alt="Profile Picture"></td>
                <td colspan="2" style="border-bottom: 1px solid #333;"><label>Name: </label><span>'.$row["emp_fname"].' '.$row["emp_mname"].' '.$row["emp_lname"].'</span></td>
                <td rowspan="3" style="width: 130px; text-align: center; padding: 15px;">
                    <div class="search_table_icons">
                        <a href="#"><i class="fa fa-pencil ico_pencil" style="color:#0040d8;" onclick="openModal('.$row["emp_id"].',1);" title="Edit Profile"></i></a>
                        <a href="" id="linkT"><i class="fa fa-trash-o ico_trash" style="color:red;" onclick="openModal('.$row["emp_id"].',2);" title="Delete Profile"></i></a>
                    </div>
                </td>
            </tr>
            <tr style="border-bottom: 1px solid #333;">
                <td><label>Sex: </label><span>'.$row["emp_gender"].'</span></td>
                <td><label>Phone N<emp style="text-decoration: underline;">o</emp>: </label><span>'.$row["emp_tel1_num"].'</span></td>
            </tr>
            <tr>
                <td colspan="2"><label>Position/Title: </label><span>'.$row["emp_cur_position"].'</span></td>
            </tr>
        </table>
         </div>';*/
      ?>
    </table>
  </div>
    </div>
  </div>
</div>



<!-- The New Modal -->
<div id="Modal_ID_new" class="modal_sel_id_new">
  <div class="modal-content_new">
    <div class="modal_sel_id_header_new">
      <h3>አዲስ ሰራተኛ መመዝገቢያ ቅጽ</h3>
      <span class="modal_close_new">&times;</span>
    </div>
   <iframe src="new_profile_employee.php" name="frm"></iframe>
  </div>
</div>



<!-- The Edit Modal -->
<div id="Modal_ID_edit" class="modal_sel_id_edit">
  <div class="modal-content_edit">
    <div class="modal_sel_id_header_edit">
      <h3>የሰራተኛ ገጽታ ማስተካከያ ቅጽ</h3>
      <span class="modal_close_edit">&times;</span>
    </div>
   <iframe src="edit_employee_profile.php" name="frm"></iframe>
  </div>
</div>




<!-- The Delete Modal -->
<div id="Modal_ID_delete" class="modal_sel_id_delete">
  <!-- Modal content -->
  <div class="modal-content_delete">
    <div class="modal_sel_id_header_delete">
      <span class="modal_close_delete">&times;</span>
  </div>
    <div class="modal_question_delete">
      <h3>የዚህን ሰራተኛ የተመዘገበ ገጽታ ማጥፋት ትፈልጋለህ?</h3>
      <a href="#" id="delete_no">አይ</a>
      <a href="#" id="delete_yes">አዎ</a>
    </div>
    
    <div class="modal_ans_delete">
      <?php
        if(isset($_COOKIE['index_delete_modal'])){
          $sql =  "DELETE FROM employee WHERE emp_id=".$_COOKIE['index_mod_id'];
          if(mysqli_query($conn, $sql))
            echo "Profile Deleted";
          echo '<script>document.cookie = "index_delete_modal=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";
          window.location.reload();</script>';
          //setcookie("index_delete_modal", "0");
        }
      ?>
      <h3>ገጽታዉ ጠፍቷል!</h3>
      <a href="#" id="delete_ok">እሺ</a>
    </div>
  </div>
</div>






</main>





<footer style="padding: 5px;">
    <div class="container" style="text-align: center; color: #222;">
    	<span class="copyright">Copyright&nbsp;&copy; 2020  |  All Rights Reserved</span>
    	<!--<ul class="list-inline quicklinks">
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            <li class="list-inline-item"><a href="#">Terms of Use</a></li>
        </ul>-->
    </div>
</footer>


<script>
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    var modal_login = document.getElementById('login_admin');
    if (event.target == modal_login) {
        modal_login.style.display = "none";
    }
    var modal_change = document.getElementById('change_login_admin');
    if (event.target == modal_change) {
      modal_change.style.display = "none";
    }
}
function lockAdmin(){
  document.cookie = 'admin_lock=lock';
  window.location.assign("index.php");
}
function unlockAdmin(){
  <?php
    if(isset($_POST['admin_submit'])){
      for($j=1; $j<=2; $j++){// the second run is to check the master user and password
      if($_POST['admin_login_user'] == $admin['admin_user'] && $_POST['admin_login_pass'] == $admin['admin_password']){
          echo "
          document.getElementById('admin_lock').style.visibility = 'hidden';
          document.getElementById('admin_lock_icon').style.display = 'none';
          document.getElementById('admin_unlock').style.visibility = 'visible';
           document.getElementById('admin_unlock_icon').style.display = 'inline-block';

           var d = new Date();
           d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
           document.cookie = 'admin_lock=unlock;expires='+d.toUTCString()+';';

           document.cookie = 'index_selected_modal=0';
           window.location.assign('index.php');
           ";
           break;
      }
      else if($_POST['admin_login_user'] != $admin['admin_user'] && $_POST['admin_login_pass'] == $admin['admin_password']){
        echo "
          document.getElementById('user_err').innerHTML = 'የተሳሳተ የተጠቃሚ ስም ነዉ';
           ";
           break;
      }
      else if($_POST['admin_login_user'] == $admin['admin_user'] && $_POST['admin_login_pass'] != $admin['admin_password']){
        echo "
          document.getElementById('pass_err').innerHTML = 'የተሳሳተ ፓስወርድ ነዉ';
           ";
           break;
      }
      else{
        echo "
          document.getElementById('user_err').innerHTML = 'የተሳሳተ የተጠቃሚ ስም ነዉ';
          document.getElementById('pass_err').innerHTML = 'የተሳሳተ ፓስወርድ ነዉ';
           ";
      }
      //echo "window.location.assign('index.php');";

      //set $admin to the master user and password
      $sql = "SELECT admin_user, admin_password FROM admin WHERE admin_type='Master'";
      if($admin = mysqli_fetch_array(mysqli_query($conn, $sql))) echo "";
    }
    }

    if(isset($_COOKIE['admin_lock']) and $_COOKIE['admin_lock']=='unlock'){
      echo "
      document.getElementById('admin_lock').style.visibility = 'hidden';
      document.getElementById('admin_lock_icon').style.display = 'none';
      document.getElementById('admin_unlock').style.visibility = 'visible';
      document.getElementById('admin_unlock_icon').style.display = 'inline-block';";
    }
    else{
      echo "
      document.getElementById('admin_lock').style.visibility = 'visible';
      document.getElementById('admin_lock_icon').style.display = 'inline-block';
      document.getElementById('admin_unlock').style.visibility = 'hidden';
      document.getElementById('admin_unlock_icon').style.display = 'none';";
    }
  ?>
  /*document.getElementById('admin_lock').style.visibility = 'hidden';
  document.getElementById('admin_lock_icon').style.display = 'none';
  document.getElementById('admin_unlock').style.visibility = 'visible';
   document.getElementById('admin_unlock_icon').style.display = 'inline-block';*/
}
function peekPassword(i){
  document.getElementById('login_pass'+i).type="text";
}
function unpeekPassword(i){
  document.getElementById('login_pass'+i).type="password";
}
//*****************************************************

function newEmployeeProfile(){
  document.getElementById('Modal_ID_view').style.display="none";
  document.getElementById('change_login_admin').style.display="none";
  document.getElementById('Modal_ID_edit').style.display = "none";

  var modal = document.getElementById('Modal_ID_new');
  modal.style.display = "block";
  var span = document.getElementsByClassName("modal_close_new")[0];
  span.onclick = function() {
    modal.style.display = "none";
    window.location.reload();
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    window.location.reload();
    }
  }
}

function viewEmployeeProfiles(){
  document.getElementById('Modal_ID_new').style.display="none";
  document.getElementById('change_login_admin').style.display="none";
  document.getElementById('Modal_ID_edit').style.display = "none";

  var modal = document.getElementById('Modal_ID_view');
  modal.style.display = "block";
  var span = document.getElementsByClassName("modal_close_view")[0];
  span.onclick = function() {
    modal.style.display = "none";
    window.location.reload();
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    window.location.reload();
    }
  }
}

function editEmployeeProfile(){
  var modal = document.getElementById('Modal_ID_edit');
  modal.style.display = "block";
  var span = document.getElementsByClassName("modal_close_edit")[0];
  span.onclick = function() {
    modal.style.display = "none";
    window.location.reload("index.php");
  }
  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    window.location.reload("index.php");
    }
  }
}

function deleteEmployeeProfile(){
  var modal_del = document.getElementById('Modal_ID_delete');
  modal_del.style.display = "block";
  document.getElementsByClassName("modal_close_delete")[0].onclick = function() {
    modal_del.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal_del) {
      modal_del.style.display = "none";
    }
  }
  document.getElementById('delete_no').onclick = function(){
    modal_del.style.display = "none";
  }
  document.getElementById('delete_yes').onclick = function(event){ 
    document.cookie = "index_delete_modal=delete";
    window.onclick = function(event) {
      if (event.target != document.getElementById('delete_yes')) {
        modal_del.style.display = "none";
        window.location.reload("index.php");
      }
    }
    document.getElementsByClassName("modal_question_delete")[0].style.display = "none";
    document.getElementsByClassName("modal_ans_delete")[0].style.display = "block";
    document.getElementsByClassName("modal-content_delete")[0].style.width = '45%';
  }
  document.getElementById('delete_ok').onclick = function(){
    //window.location.reload("index.php");
    document.getElementsByClassName("modal-content_delete")[0].style.width = '55%';
    document.getElementsByClassName("modal_question_delete")[0].style.display = "block";
    document.getElementsByClassName("modal_ans_delete")[0].style.display = "none";
    modal_del.style.display = "none";
  }
}



function loadIndex(){
   unlockAdmin();
  //window.scrollBy(0, 140);
  var select_modal = "<?php if(isset($_COOKIE['index_selected_modal']))echo $_COOKIE['index_selected_modal'];?>";
  if(select_modal == '1'){
    editEmployeeProfile();
    document.cookie = "index_selected_modal="+0;
  }
  if(select_modal == '2'){
    viewEmployeeProfiles();
    deleteEmployeeProfile();
    document.cookie = "index_selected_modal="+0;
  }
  if(select_modal == '3'){
    document.cookie = "index_selected_modal="+0;
    document.getElementsByClassName('animate')[0].style.animation='none';
    document.getElementById('login_admin').style.display='block';
  }
}

function openModal(cur_emp_id, select_modal){
  //SET COOKIE to the selected icon(modal)
  document.cookie = "index_selected_modal="+select_modal;
  //Set COOKIE to the selected profile's res_id--------------
  document.cookie = "index_mod_id="+cur_emp_id;
  //var x = document.cookie;
  //document.getElementById('demo').innerHTML="ALL COOKIES:"+x;
  window.location.reload();
  //--------------------------------------------------------
}

</script>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="assets/js/agency.js"></script>
</body>
</html>