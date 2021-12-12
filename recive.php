<?php 


  //session_start();
  $con = mysqli_connect('localhost','root','');
  mysqli_select_db($con,'seawebschoolmanagement');
  

   $b_name = $_POST['b_name'];
   $e_name = $_POST['e_name'];

   $sql = "insert into st_registration values ('$b_name', '$e_name')";
   mysqli_query($con,$sql);

   /*
   
   This change is from Mrittunjoy.
   
   $email = $_POST['email'];
   $password = $_POST['password'];
   $c_password = $_POST['c_password'];
   $class = $_POST['class'];
   $id_no = $_POST['id_no'];
   $gender_input = $_POST['gender_input'];
   $session = $_POST['session'];
   $group = $_POST['group'];

   $s = "select * from usertable where name = '$_name'"; 
   $result = mysqli_query($con, $s);
   $num = mysqli_num_ rows($result);
   if($num == 1){
   	  echo "Username Already Taken";
   }
   else{
   	$reg =  "insert into usertable(f_name' ,l_name, email,password, c_password, class, id_no,gender_input, session, group)"
   }
  This Change is from Soumitra Saha

   */

 ?>


