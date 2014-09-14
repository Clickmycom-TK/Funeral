<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>ล็อคอินเข้าสู่ระบบ งานศพออนไลน์</title>


<meta name="Keywords" content="ระบบงานศพออนไลน์">
<meta name="Description" content="งานฌาปนกิจศพ <?php echo "string"; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- meta tags end -->

<!-- favorite icon starts -->

<!-- favorite icon ends -->



<!--Page Scripts Load -->

<script src="<?php echo base_url(); ?>scripts/jquery.min.js"   type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/jquery-ui-min.js"  type="text/javascript"></script>
<script src="<?php echo base_url(); ?>scripts/custom.js"     type="text/javascript"></script>
<link href="<?php echo base_url(); ?>styles/framework.css"       rel="stylesheet"  type="text/css">
<!-- CSS files start -->


<link href="<?php echo base_url(); ?>css/framework.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>css/colorbox.css" rel="stylesheet" type="text/css" media="all">

<link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" media="all">


<!-- JavaScript files start -->
<script type="text/javascript" src="<?php echo base_url(); ?>javascript/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>javascript/effects.jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>javascript/custom.js"></script>
<!-- JavaScript files end -->
</head>
<body style="">

  <div id="preloader">
    <div id="status">

      <p class="center-text">
      ดาวโหลดเนื้อหา...
            <em>ความเร็วในการดาวโหลดขึ้นอยู่กับความเร็วเน็ตของคุณ</em>
      </p>
    </div>
</div>

<!-- website wrapper starts -->
<div class="websiteWrapper landingWrapper"> 
  
  <!-- main menu wrapper starts -->
  <ul class="mainMenuWrapper" style="margin-top: -336.3333332538605px;">
    <div id="container">
      <?php echo form_open("welcome/check_login"); ?>
          <div class="login">Log In </div>
          <div class="username-text">Username:</div>
         
          <div class="username-field" align="center">
            <input type="text" name="username" value="clickmycom" />
          </div>

           <div class="password-text">Password:</div>
          <div class="password-field" align="center">
            <input type="password" name="password" value="lovetanawa" />
          </div>
          <div align="center">
          <input type="checkbox" name="remember-me" id="remember-me" >Remember Me</input>
          
          <br/><br/>
          <input type="submit"  name="submit" value="เข้าสู่ระบบ" /><br/>
            <?php echo anchor("register","<input type='button' value='สมัครสมาชิก'/>"); ?> </br>
            <?php echo anchor("login_fb","<input type='button' value='เข้าสู่ระบบด้วย Facebook' />");?>

        </div>
      <?php echo form_close(); ?>
    </div>
  </ul>
  <!-- main menu wrapper ends --> 
  
  <!-- header wrapper starts -->

  <div class="headerOuterWrapper">
    <div class="pageContentWrapper">
      <center><h3 ><label class="text2">ยินดีต้อนรับเข้าสู่</label> <label class="text1">"&nbsp;ระบบงานศพออนไลน์&nbsp;"</label></h3></center><div class="mainMenuButton"></div>
    </div>
  </div>
  <!-- header wrapper ends --> 
  
  <!-- page wrapper starts -->
  <div class="pageWrapper landingPageWrapper" style="height: 714.6666667461395px;"> 
    <!-- landing page logo wrapper starts --> 
    <a href="" class="landingLogoWrapper"><a href="" class="mainMenuButton">
      <img  class="pulse" src="<?php echo base_url(); ?>image/Login/landingLogo.png"  alt=""></a> </a>
    <!-- landing page logo wrapper ends --> 
  </div>
  
  <!-- page wrapper ends --> 
  
  <!-- footer wrapper starts -->
  <div class="footerWrapper "> 
   <a  class="footerLogo"><img src="<?php echo base_url(); ?>image/Login/footerLogo.png" class="" alt=""></a> 
      <div class="footerSocialIconsWrapper"> 
        <a href="../login_fb" class="footerSocialIcon footerFacebookIcon"></a> 

  </div>
  <!-- footer wrapper ends --> 
  
</div>
<!-- website wrapper ends -->





<div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div></div>










</body></html>
