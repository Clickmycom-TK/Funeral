
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="งานฌาปนกิจศพ <?php echo "ชื่อผู้เสียชีวิต"; ?>">

<!--Favicon shortcut link-->
<link type="image/x-icon"  rel="shortcut icon" href="images/splash/favicon.ico" />
<link type="image/x-icon"  rel="icon"      href="images/splash/favicon.ico" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>
<!-- iDevice WebApp Splash Screen, Regular Icon, iPhone, iPad, iPod Retina Icons -->
<link rel="apple-touch-icon" sizes="114x114" href="images/splash/splash-icon.png"> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen.png" media="screen and (max-device-width: 320px)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@2x.png" media="(max-device-width: 480px) and (-webkit-min-device-pixel-ratio: 2)" /> 
<link rel="apple-touch-startup-image" href="images/splash/splash-screen@3x.png" sizes="640x1096">

<!-- Page Title -->
<title>งานฌาปนกิจศพ <?php echo "ชื่อผู้เสียชีวิต";   ?></title>

<?php echo css_asset('retina.css'); ?>
<?php echo css_asset('style.css'); ?>
<?php echo css_asset('framework-style.css'); ?>
<?php echo css_asset('framework.css'); ?>
<?php echo css_asset('icons.css'); ?>




<!--Page Scripts Load -->
<?php echo js_asset('jquery.min.js'); ?>
<?php echo js_asset('jquery-ui-min.js'); ?>
<?php echo js_asset('contact.js'); ?>
<?php echo js_asset('swipe.js'); ?>
<?php echo js_asset('swipebox.js'); ?>
<?php echo js_asset('colorbox.js'); ?>

<?php echo js_asset('retina.js'); ?>
<?php echo js_asset('custom.js'); ?>





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


<div class="page-content">
    <div class="header">
    <a href="#" class="show-sidebar"></a>
      <a href="#" class="hide-sidebar"></a>   
        <p><font color="#DDDDDD">ยินดีต้อนรับเข้าสู่ ระบบงานศพออนไลน์</font></p>
       <a id="one" class="header-mail"></a>
         <a id="two" class="header-mail"></a>  
          
    </div>
    <div class="header-decoration"></div>
   

   <div class="container">
      <img class="logo " src="<?php echo base_url(); ?>assets/images/misc/logow.png" alt="logo">
      <center><?php echo "ชื่อผู้เสียชีวิต";?></center><br/>
  </div>   
    





        <div class='content'>
        <div class='container slider-wrapper'>
           <div class='slider-container'>
               <div id='slider' class='swipe'>
                   <ul>
                       <li style='display:block'>
                           <div class='slider-image'>
                               <img class='swipe-img' src='../assets/images/slider/2.jpg' alt='img'>
                               <p class='swipe-text'>";echo "ชื่อผู้เสียชีวิต"; echo "</p>
                           </div>
                       </li>
                       
                   </ul>
               </div>
                              
           </div>
       </div>
  
       <div class='container no-bottom'>
        <img src='../assets/images/misc/dok copy.png' alt='img'>
           <div class='titlebody'>
            <style>
              .text_sp{
                text-indent:15px;
              }
            </style>
           <p class='text_sp'>ข้อความวาระสุดท้ายก่อนเสียชีวิต  เช่น เมื่อเดือนประมาณต้นเดือนพฤศจิกายน พ.ศ. 2552 คุณพ่อคำบรรณ แสงเขียว มีอาการเป็นไข้ เจ็บในช่องท้องใต้ราวนมด้านขวา ลูก ๆ จึงพาไปรับการตรวจรักษาที่โรงพยาบาลหลายแห่ง และคลินิกหลายที่ แต่อาการไม่ดีขึ้น คุณหมอบอกว่าคุณพ่อป่วยเป็นโรคมะเร็งตับ คุณแม่และลูก ๆ จึงพาท่านกลับมารักษาที่บ้านตามคำแนะนำของคุณหมอ กินยาหม้อหมดไป 3 หม้อ อาการทรุดลงเป็นลำดับ และได้สิ้นใจอย่างสงบเมื่อวันศุกร์ที่ 20 เดือนพฤศจิกายน พ.ศ.2552 เวลา 20 นาฬิกา 10 นาที สิริอายุได้ 76 ปี ยังความเศร้าโศกเสียใจ ให้เกิดกับลูกหลานและญาติพี่น้องทุกคนเป็นอย่างมาก</p> 
            </div>
       </div>



</div>



































<div class="page-sidebar">
  <div class="page-sidebar-scroll"> 
      
      <div class="menu-item">
              <strong class="user-icon"></strong>
              <a class="menu-enabled" >ข้อมูลผู้เสียชีวิต</a>
      </div> 



      <br/>
      <center><?php echo image_asset('misc/logow.png'); ?>
              <?php echo "ชื่อผู้เสียชีวิต"; ?>
      </center>
      <br/>

     
       <div class="menu-item">
              <strong class="home-icon"></strong>
              <a class="menu-enabled" >ติดต่อครอบครัวผู้เสียชีวิต</a>
          </div> 

      <a href="tel:0854067588" class='sidebar-button'><em class='sidebar-button-call'>โทรติดต่อ</em></a>
     
      <a href="sms:0854067588" class="sidebar-button"><em class="sidebar-button-text">ส่งข้อความ SMS</em></a>
      <a href="#" class="sidebar-button hide2-sidebar"><em class="sidebar-button-close">พับเก็บ</em></a>
      <div class="clear"></div>  

      
      <div class="menu">         
          <div class="menu-item">
              <strong class="home-icon"></strong>
              <a class="menu-disabled" href="index.php">ประวัติผู้เสียชีวิต</a>
          </div> 

           <div class="menu-item">
              <strong class="tot"></strong>
              <a class="menu-disabled" href="index.php">กำหนดการณ์</a>
          </div> 
          
         
          <div class="menu-item">
              <strong class="features-icon"></strong>
              <a class="menu-disabled deploy-submenu" href="#">ร่วมไว้อาลัยผู้เสียชีวิต</a>
          </div> 
          
          

      </div>
      
      <p class="sidebar-heading">เหตุการณ์ใหม่ล่าสุด</p>
      <div class="sidebar-decoration"></div>
      
      <div class="sidebar-updates">
          <a href="#" class="update-box update-news">String<br/>Time</a>               <div class="sidebar-decoration"></div>      
          <a href="#" class="update-box update-blog">String<br>Time</a>          <div class="sidebar-decoration"></div>
          <a href="#" class="update-box update-folio">String<br>Time</a>      <div class="sidebar-decoration"></div>
          
      </div>
      
      <p class="sidebar-copyright center-text">แชร์ข้อมูลเข้า โซเชียลเน็ตเวิร์ค </p>
      
      <a href="#" class="sidebar-button"><em class="sidebar-button-facebook">FACEBOOK</em></a>
      <a href="#" class="sidebar-button"><em class="sidebar-button-twitter">TWITTER</em></a>
      <a href="tel:0854067588" class="sidebar-button"><em class="sidebar-button-rss">ติดต่อผู้ดูแลระบบ</em></a>   
      <div class="clear"></div>
      
  </div>
</div>

































































<div class="page-sidebarR">
  <div class="page-sidebar-scrollR"> 
   
      <div class="menu-item">
              <strong class="user-icon"></strong>
              <a class="menu-enabled" >ข้อมูลส่วนตัว</a>
      </div> 
      <div class="page-wrap">

                        <div class="circle">
                          <?
                            if($login==true){
                              echo "$img_profile";  
                            }
                            else{

                              // redirect(base_url().'index.php/welcome');
                            
                            }
                          ?>
                        </div>
                      
       </div>  
       

      <a href="#" class="sidebar-button hide2-sidebar"><em class="sidebar-button-close">พับเก็บ</em></a>
      <a href="#" class='sidebar-button'><em class='home-icon'>กลับหน้าหลัก</em></a>
    
      <a href="<?php echo "$link";?>" class="sidebar-button"><em class="sidebar-button-facebook">Facebook</em></a>
      



      <div class="clear"></div>  


      
      
      <div class="menu-item">
              <strong class="home-icon"></strong>
              <a class="menu-enabled" >ข้อมูลส่วนตัว</a>
      </div> 

      <div class="sidebar-updates">
          <a href="#" class="update-box update-folio">บัญชีผู้ใช้   <br/><br/><?php echo "$id";?></a>               <div class="sidebar-decoration"></div>      
          <a href="#" class="update-box update-folio">ชื่อ<br><br>            <?php echo "$first_name";?></a>            <div class="sidebar-decoration"></div>
          <a href="#" class="update-box update-folio">สกุล<br><br>          <?php echo "$last_name";?></a>            <div class="sidebar-decoration"></div>                 
      </div>

      <div class="menu">         
          <div class="menu-item">
              <strong class="vdo_tum"></strong>
              <a class="menu-disabled deploy-submenu" href="#">รับฟังธรรมมะ</a>
              <div class="clear"></div>
             
          </div> 
          
        

          <?php

            if($login_fb==true){
              echo "
              <div class='menu-item'>
                <strong class='gallery-icon'></strong>
                    <a class='menu-disabled deploy-submenu' href='#'>แชร์ข้อมูลเข้า โซเชียลเน็ตเวิร์ค</a>
                    <div class='clear'>
                    </div> 
                    <div class='submenu'>
                      <a href='#'>Facebook</a>        <em class='submenu-decoration'></em>
                    </div>
              </div>
              "; 
            }
            else{
              echo "
               <div class='menu-item'>
              <strong class='gallery-icon'></strong>
              <a class='menu-disabled deploy-submenu' href='#'>แก้ไขข้อมูลส่วนตัว</a>
              <div class='clear'></div> 
              <div class='submenu'>
                  <a href='#'>แก้ไขข้อมูลส่วนตัว</a>        <em class='submenu-decoration'></em>
                   <a href='#'>เปลียนรูปประจำตัว</a>        <em class='submenu-decoration'></em>
              </div>
              </div> 
            ";
            }
          ?>

          <div class="menu-item">
              <strong class="features-icon"></strong>
              <a class="menu-disabled deploy-submenu" href="#">จัดการระบบ </a>
              <div class="clear"></div>
              <div class="submenu">
                  <a href="#">บันทึกข้อมูลผู้เสียชีวิต</a>    <em class="submenu-decoration"></em>
              </div>
          </div> 
          
         

       
<script type="text/javascript">
$(function(){


  var nowDateTime=new Date("<?=date("m/d/Y H:i:s")?>");
  var d=nowDateTime.getTime();
  var mkHour,mkMinute,mkSecond;
   setInterval(function(){
    d=parseInt(d)+1000;
    var nowDateTime=new Date(d);
    mkHour=new String(nowDateTime.getHours());  
    if(mkHour.length==1){  
      mkHour="0"+mkHour;  
    }
    mkMinute=new String(nowDateTime.getMinutes());  
    if(mkMinute.length==1){  
      mkMinute="0"+mkMinute;  
    }      
    mkSecond=new String(nowDateTime.getSeconds());  
    if(mkSecond.length==1){  
      mkSecond="0"+mkSecond;  
    }   
    var runDateTime=mkHour+":"+mkMinute+":"+mkSecond;    
    $("#css_time_run").html(runDateTime);  
   },1000);


});
</script>    

      <div align="center">

      <?php 
           $check_hour=date("H");
           if($check_hour>=16&&$check_hour<18){
             $textdate_chang="สวัสดีตอนเย็นครับ";
             $img_chang=image_asset('icon_shadow/icon-day/yenyen.png');
           }

           if($check_hour>=18&&$check_hour<20){
            if($check_hour>=18&&$check_hour<19){
                $textdate_chang="สวัสดีตอนใกล้ค่ำครับ";
              }
              else{
                 $textdate_chang="สวัสดีตอนค่ำครับ";
              }

            
             $img_chang=image_asset('icon_shadow/icon-day/kum.png');
           }

           if($check_hour>=20&&$check_hour<=23){
             $textdate_chang="สวัสดีตอนค่ำครับ";
             $img_chang=image_asset('icon_shadow/icon-day/night.png');
           }

           if($check_hour>=00&&$check_hour<05){
             $textdate_chang="สวัสดีตอนค่ำครับ";
             $img_chang=image_asset('icon_shadow/icon-day/night.png');
           }


           if($check_hour>=05&&$check_hour<07){
               $textdate_chang="สวัสดีตอนเช้าครับ";
             $img_chang=image_asset('icon_shadow/icon-day/kum.png');
           }

           if($check_hour>=07&&$check_hour<11){
             $textdate_chang="สวัสดีตอนเช้าครับ";
             $img_chang=image_asset('icon_shadow/icon-day/morning.png');
           }

           if($check_hour>=11&&$check_hour<16){
              if($check_hour>=12&&$check_hour<13){
                $textdate_chang="สวัสดีตอนเที่ยงครับ";
              }
              else{
                 $textdate_chang="สวัสดีตอนบ่ายครับ";
              }
             
             $img_chang=image_asset('icon_shadow/icon-day/sun.png');
           }


            
          ?>

      <p class="textday"><?php echo "$textdate_chang";?> ขณะนี้เวลา </p>
      
        <div id="css_time_run"> </div>
        <?php echo "$img_chang";?>




      </div>



  
               
              <?
              echo form_open("main_con");
              echo "  
                <div class='menu-item'>
                <strong class='un_block'></strong>       
                <a class='menu-disabled' href='welcome/login'>ออกจากระบบ</a>
                </div>      
              ";
              echo form_close();
               
              ?>
     
              
  </div>
</div>























</body>
</html>



