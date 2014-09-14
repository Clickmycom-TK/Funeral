<!DOCTYPE html>
<html>

<head>





<script src="<?php echo base_url(); ?>scripts/jquery.min.js"   type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/custom.js"     type="text/javascript"></script>
<link href="<?php echo base_url(); ?>styles/framework.css"       rel="stylesheet"  type="text/css">







<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=5, maximum-scale=1, user-scalable=no">
<META http-equiv="Page-Enter" content="RevealTrans (Duration=3, Transition=23)">
<META http-equiv="Page-Exit" content="RevealTrans (Duration=2, Transition=23)">
  <title>สมัครสมาชิก</title>

  
    <style>
/* BTW alt-shift will pop a color picker 
  example color: followed  by alt shift will pop it
*/
/*
Hide the label if placeholder is supported
*/

body{
  background:#b4b4b4;
}

div.iBannerFix{
	height:60px;
	position:fixed;
	left:0px;
	bottom:0px;
	background-color:#000000;
	width:100%;
	z-index: 99;
}

#registration-form {
  font-family:'Open Sans Condensed', sans-serif;
	width: 98%;
 
	margin: 5% auto;
	
}

#registration-form .fieldset {
	background-color:#d5d5d5;
	height: 100%;
	border-radius: 5px;

}

 #registration-form legend {
	text-align: center;
	background: #364351;
	width: 100%;
	height: 20px;
	padding: 30px 0;
	border-radius: 3px 3px 0 0;
	color: white;
font-size:2em;
}

.fieldset form{
  border:1px solid #2f2f2f;
  margin:0 auto;
  display:block;
  width:100%;

  padding:30px 20px;
  box-sizing:border-box;
  border-radius:0 0 3px 3px;
}
.placeholder #registration-form label {
	display: none;
}
 .no-placeholder #registration-form label{
margin-left:5px;
  position:relative;
  display:block;
  color:grey;
  text-shadow:0 1px white;
  font-weight:bold;
}


/* all */
::-webkit-input-placeholder { text-shadow:1px 1px 1px white; font-weight:bold; }
::-moz-placeholder { text-shadow:0 1px 1px white; font-weight:bold; } /* firefox 19+ */
:-ms-input-placeholder { text-shadow:0 1px 1px white; font-weight:bold; } /* ie */
#registration-form input[type=text]{
	padding: 15px 20px;
	border-radius: 1px;
  margin:5px auto;
  background-color:#f7f7f7;
	border: 1px solid silver;

	-webkit-box-shadow: inset 0 1px 5px rgba(0,0,0,0.2);
	box-shadow: inset 0 1px 5px rgba(0,0,0,0.2), 0 1px rgba(255,255,255,.8);
	width: 100%;

	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  -webkit-transition:background-color .5s ease;
-moz-transition:background-color .5s ease;
-o-transition:background-color .5s ease;
-ms-transition:background-color .5s ease;
transition:background-color .5s ease;
}
.no-placeholder #registration-form input[type=text] {
	padding: 10px 20px;
}

.textarea{
		padding: 15px 20px;
	border-radius: 1px;
  margin:5px auto;
  background-color:#f7f7f7;
	border: 1px solid silver;

	-webkit-box-shadow: inset 0 1px 5px rgba(0,0,0,0.2);
	box-shadow: inset 0 1px 5px rgba(0,0,0,0.2), 0 1px rgba(255,255,255,.8);
	width: 100%;
margin-left:5px;
  position:relative;
  display:block;
  color:grey;
  text-shadow:0 1px white;
  font-weight:bold;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
  -webkit-transition:background-color .5s ease;
-moz-transition:background-color .5s ease;
-o-transition:background-color .5s ease;
-ms-transition:background-color .5s ease;
transition:background-color .5s ease;
}

#registration-form input[type=text]:active, .placeholder #registration-form input[type=text]:focus {
	outline: none;
	border-color: silver;
  background-color:white;
}

#registration-form input[type=submit] {
  font-family:'Open Sans Condensed', sans-serif;
  text-transform:uppercase;
  outline:none;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
	width: 100%;
	background-color: #5C8CA7;
	padding: 10px;
	color: white;
	border: 1px solid #3498db;
	border-radius: 3px;
	font-size: 1.5em;
	font-weight: bold;
	margin-top: 5px;
	cursor: pointer;
  position:relative;
  top:0;
}

#registration-form input[type=submit]:hover {
	background-color: #2980b9;
}

#registration-form input[type=submit]:active {
background:#5C8CA7;
}

.parsley-error-list{
background-color:#C34343;
padding: 5px 11px;
margin: 0;
list-style: none;
border-radius: 0 0 3px 3px;
margin-top:-5px;
  margin-bottom:5px;
  color:white;
  border:1px solid #870d0d;
  border-top:none;
    -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  position:relative;
  top:-1px;
  text-shadow:0px 1px 1px #460909;
    font-weight:700;
  font-size:12px;
}
.parsley-error{
	border-color:#870d0d!important;
  border-bottom:none;
}
#registration-form select{
	width:100%;
	padding:5px;
}
::-moz-focus-inner {
  border: 0;
}



</style>



</head>

<body>

<div id="preloader">
    <div id="status">

      <p class="center-text">
      ดาวโหลดเนื้อหา...
            <em>ความเร็วในการดาวโหลดขึ้นอยู่กับความเร็วเน็ตของคุณ</em>
      </p>
    </div>
</div>


  <div id="registration-form">
	<div class='fieldset'>
    <legend >สมัครสมาชิก</legend>
		<?php
				
				echo form_open("register");
				
		?>
			<div class='row'>





				
			<input type="text" placeholder="ชื่อบัญชีผู้ใช้" name='user' id='firstname' data-required="true" data-error-message="Your First Name is required" value="<?php echo $user;?>">
			</div>
			<div class='row'>
				
				<input type="text" placeholder="รหัสผ่าน"  name='pass' data-required="true" data-type="email" data-error-message="Your E-mail is required" value="<?php echo $pass;?>">
			</div>
			<div class='row'>
				
				<input type="text" placeholder="ยืนยันรหัสผ่าน" name='cpass' data-required="true" data-error-message="Your E-mail must correspond" value="<?php echo $cpass;?>">
			</div>





			<div class='row'>
				
				<input type="text" placeholder="ชื่อ"  name='Fname' data-required="true" data-type="email" data-error-message="Your E-mail is required" value="<?php echo $Fname;?>">
			</div>

			<div class='row'>
				
				<input type="text" placeholder="นามสกุล"  name='Lname' data-required="true" data-type="email" data-error-message="Your E-mail is required" value="<?php echo $Lname;?>">
			</div>

			<div class='row'>
				
				
			</div>

			<div class="iBannerFix">
					<input  type="submit" name="btnsave" value="ลงทะเบียน">
			</div>
			
			<?php
				echo form_close();
			?>
	</div>


		


</div>



</body>

</html>
