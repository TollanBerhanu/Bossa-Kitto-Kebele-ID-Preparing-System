<?php
  include 'mysqli_connect.php';
if (($_SERVER["REQUEST_METHOD"] == "POST")) {
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
  $emp_user = $_POST['emp_user'];
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
          emp_user VARCHAR(50) NOT NULL,
          emp_pass VARCHAR(50) NOT NULL,
          emp_reg_date DATE NULL
          );";

  if(mysqli_query($conn, $sql)) echo"Table created";
  else echo 'Error creating table '.mysqli_error($conn);
  $sql = "INSERT INTO employee (emp_fname,emp_mname,emp_lname,emp_gender,emp_dob,emp_tel1_type,emp_tel1_num,emp_tel2_type,emp_tel2_num,emp_marital,emp_spouse_fname,emp_spouse_lname,emp_spouse_tel_type,emp_spouse_tel_num,emp_num_ch,emp_init_position,emp_contract,emp_init_salary,emp_cur_position,emp_status,emp_cur_salary,emp_unemp_date,emp_unemp_reason,emp_user,emp_pass,emp_reg_date) VALUES 
  ('$emp_fname','$emp_mname','$emp_lname','$emp_gender','$emp_dob','$emp_tel1_type','$emp_tel1_num','$emp_tel2_type','$emp_tel2_num','$emp_marital','$emp_spouse_fname','$emp_spouse_lname','$emp_spouse_tel_type','$emp_spouse_tel_num','$emp_num_ch','$emp_init_position','$emp_contract','$emp_init_salary','$emp_cur_position','$emp_status','$emp_cur_salary','$emp_unemp_date','$emp_unemp_reason','$emp_user','$emp_pass',NOW());";

  if(mysqli_query($conn, $sql)) echo "Data entered";
  else echo 'Error: '.mysqli_error($conn);
  mysqli_close($conn);
}
?>