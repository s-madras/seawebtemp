<!DOCTYPE html>
<html len='Bangla'>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<title>This is Registation From</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">

</head>
<body>

	<div class="container">
		<form action="recive.php" method="POST">
			<div class="row">
				<div class="col" style="color: #5495BD;"><h2>স্টুডেন্ট রেজিস্ট্রেশন ফরম</h2></div></div>

				<div class="row">
					<div class="col col-sm-10"  style="padding-top: 20px;">
						<input class="form-control" type="text" name="admission_session" placeholder="ভর্তি সেশন">
				</div><br>

				<div class="row">
					<div class="col col-sm-10"  style="padding-top: 20px;">
						<input class="form-control" type="text" name="b_name" placeholder="নামঃ (বাংলায়)">
					</div>

				</div><br>

				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="text" name="e_name" placeholder="নামঃ(ইংরেজিতে)">
					</div>
				</div><br>


				 <div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="number/text" name="class" placeholder="শ্রেণীঃ">
					</div>
				</div><br>

				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="number/password" name="roll" placeholder="রোলঃ">
					</div>
				</div><br>

				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="number/password" name="roll" placeholder="শাখাঃ">
					</div>
				</div><br>

				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="number/password" name="roll" placeholder="পূর্বের শ্রেণী রোলঃ(যদি থাকে)"></div>
				</div><br>

				<div class="row">
						<div class="col col-sm-10">
						<input class="form-control" type="number/password" name="roll" placeholder="পূর্বের শ্রেণী রেজিস্ট্রেশন নং(যদি থাকে)">
					</div>
				</div><br>

				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="Email" name="email" placeholder="ইমেই">
					</div>
				</div><br>

				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="number/text" name="" placeholder="জন্ম সনদ নংঃ">
				    </div>
				</div><br>


				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="Date" name="date_of_birth" placeholder="জন্ম তারিখ">
				    </div>
				</div><br>

				 <div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="text" name="FN_bangla" placeholder="পিতার নামঃ(বাংলায়)">
					</div></div><br>

					 <div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="text" name="FN_english" placeholder="পিতার নামঃ(ইংরেজিতে)">
					</div></div><br>

					 <div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="text" name="MN_ bangla" placeholder="মাতার নামঃ(বাংলায়)">
					</div></div><br>
                    
                     <div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="text" name="MN_enghish" placeholder="মাতার নামঃ(ইংরেজিতে)">
					</div></div><br>

			    <div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="text" name="MN_ bangla" placeholder="জাতীয় পরিচয় পত্র নংঃ(মাতার)">
				    </div>
				</div><br>

				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="text" name="MN_ bangla" placeholder="জাতীয় পরিচয় পত্র নংঃ(পিতার)">
				    </div>
				</div><br>


				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="number/password" name="roll" placeholder="মাতার/পিতার মোবাইল নাম্বারঃ">
					</div>
				</div><br>
				<div class="row">
					<div class="col col-sm-10">
						<input class="form-control" type="number/password" name="roll" placeholder="জরুড়ি প্রয়োজনে পাওয়া যাবে এমন কোনো বযাক্তির নাম্বার">
					</div>
				</div><br>


				<div class="row">
					<div class="col col-sm-3">
						<input class="form-control" type="text" name="class" placeholder="স্থায়ী ঠিকানাঃগ্রাম">
					</div>
					<div class="col col-sm-2">
						<input class="form-control" type="text" name="class" placeholder="ডাক ঘর">
					</div>
					<div class="col col-sm-2">
						<input class="form-control" type="text" name="class" placeholder="থানা"></div>

					<div class="col col-sm-2">
						<input class="form-control" type="text" name="class" placeholder="জেলা">
					</div>
					</div>
				</div><br>
		       <div class="row">
					<div class="col col-sm-3">
						<input class="form-control" type="text" name="class" placeholder="বর্ত্মান ঠিকানাঃগ্রাম">
					</div>
					<div class="col col-sm-2">
						<input class="form-control" type="text" name="class" placeholder="ডাক ঘর">
					</div>
					<div class="col col-sm-2">
						<input class="form-control" type="text" name="class" placeholder="থানা"></div>

					<div class="col col-sm-2">
						<input class="form-control" type="text" name="class" placeholder="জেলা">
					</div>
				</div><br>


              
			

				<div class="row">
					<div class="col col-sm-1"><b>অবিভাবক</b></div>

				<div class="row">
					<div class="col col-sm-3">
						<span class="form-control" style="margin-left: 10px;">মাতা<input type="radio"  name="guardian_input " value="Male"></span>
					</div>

					<div class="col col-sm-3">
						<span class="form-control">পিতা<input type="radio" name="guardian_input" value="Female"></span>
					</div>

					<div class="col col-sm-3">
						<span class="form-control">অন্যান্য<input type="radio" name="guardian_input" value="custom"></span>
				 </div></div><br>

			     <div class="row">
					<div class="col col-sm-1"></b></div>

				<div class="row">
					<div class="col col-sm-3">
						<input type="text" class="form-control" name="" placeholder="পেশাঃ">
					</div>

					<div class="col col-sm-3">
						<input class="form-control" type="text" name="" placeholder="মাসিক আয়">
					</div>

					<div class="col col-sm-3">
						<input type="text" class="form-control" name="" placeholder="জমির পরিমান">
				    </div></div><br>

			
					

 
				     <div class="row">
				    	<div class="col col-sm-1"><b>লিঙ্গ</b></div>

				         <div class="row">
					        <div class="col col-sm-2">
						<span class="form-control" >Male<input type="radio"  name="gender_input " value="Male"></span>
					 </div>

					  <div class="col col-sm-2">
						<span class="form-control">Female<input type="radio" name="gender_input" value="Female"></span>
					  </div>

					  <div class="col col-sm-2">
						<span class="form-control">Custon<input type="radio" name="gender_input" value="custom"></span>
				      </div></div><br>


				
		
			          <div class="row">
                       <div class="col col-sm-2" style="text-align: center;"><b>Session/Group:</b></div>

				 	  <div class="col col-sm-2">
				 		 <select class="form-control" type="radio" name="session" style="">
                     	  <option value="1">Morning</option>	
                    	  <option value="2">Night</option>
                    	</select>


				     </div><div class="col col-sm-2">
				 		 <select class="form-control" type="radio" name="group" >
                           	<option value="1">Science</option>	
                        	<option value="2">Commerce</option>
                        	<option value="3">Arts</option>
                        </select>
				 	    </div>
				 </div><br><br>


                 <div class="row">
                 	<div class="col col-sm-10" >
                 		 <button name="button" type="submit"><b><h2>জমা</h2></b></button>

                 	</div>
                 </div>
		             
		<from/>
	</div>
					

</body>
</html>