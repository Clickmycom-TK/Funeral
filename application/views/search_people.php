
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="งานฌาปนกิจศพ">

<!--Favicon shortcut link-->

<link type="image/x-icon"  rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/splash/favicon.ico" />
<link type="image/x-icon"  rel="icon"      href="<?php echo base_url(); ?>assets/images/splash/favicon.ico" />
<!--Declare page as mobile friendly --> 
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0"/>
<!-- Declare page as iDevice WebApp friendly -->
<meta name="apple-mobile-web-app-capable" content="yes"/>

<!-- Page Title -->
<title>ระบบงานฌาปนกิจศพ</title>

<?php echo css_asset('retina.css'); ?>
<?php echo css_asset('style.css'); ?>
<?php echo css_asset('framework-style.css'); ?>
<?php echo css_asset('icons.css'); ?>
<?php echo css_asset('framework.css'); ?>

<?php echo css_asset('component.css'); ?>




<!--Page Scripts Load -->
<?php echo js_asset('jquery.min.js'); ?>

<?php echo js_asset('jquery-ui-min.js'); ?>
<?php echo js_asset('contact.js'); ?>
<?php echo js_asset('swipe.js'); ?>
<?php echo js_asset('swipebox.js'); ?>
<?php echo js_asset('colorbox.js'); ?>

<?php echo js_asset('retina.js'); ?>
<?php echo js_asset('custom.js'); ?>

<?php echo js_asset('snap.svg-min.js'); ?>
<?php echo js_asset('classie.js'); ?>
<?php echo js_asset('svgLoader.js'); ?>


<script type="text/javascript">

var op="เด็กชาย";
function getCombo1(sel) {
                        op = sel.options[sel.selectedIndex].value;  
                        
                      
 }

var op;
    $(document).ready(function(){



    $('#edit_user_profile').click(function(){
         var url1=$('#url1').val()+'index.php/main_con/chang';
          $('#page-1').load(url1,{});
    });


    


    
    $('#add_to_system').click(function(){
         var url1=$('#url1').val()+'index.php/main_con/add_to_system';
          $('#page-1').load(url1,{});

    });

    $('#add_to_system_event').click(function(){
         var url1=$('#url1').val()+'index.php/main_con/add_to_system_event';
          $('#page-1').load(url1,{});

    });

 

     $('#view_people').click(function(){
        
         var url1=$('#url1').val()+'index.php/view_profile';
          $('#page-1').load(url1,{});

       
    });

    $('#comments').click(function(){
        
         var url1=$('#url1').val()+'index.php/comment';
          $('#page-1').load(url1,{});

       
    });


     $('#schedule').click(function(){
        
         var url1=$('#url1').val()+'index.php/schedule';
          $('#page-1').load(url1,{});

       
    });




     $('#search_people').click(function(){
            
                    var url1=$('#url1').val()+'index.php/search_people/index1';
                      $('#page-1').load(url1,{
                        Frist_name_people:op,
                        Fname_people:Fname_people.value,
                        Lname_people:Lname_people.value

                      });



      });

         //   $('#submit_add_schedule').click(function(){
         //  var url1=$('#url1').val()+'index.php/main_con/view_table';
         //  $('#table_data').load(url1,{

         //      Num_date:date_num,
         //      date_num2:date_num2,
         //      num_years:num_years.value,
         //      Relate_name.value

         //  });



         
         // });



  });


        

</script>

</head>

<body >

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

    

        <p><font color="#DDDDDD">ยินดีต้อนรับเข้าสู่ ระบบงานศพออนไลน์</font></p>
<?php
      

         if($this->session->userdata('session_id_Users')!=null){
             echo" 
              <a id='one' class='header-mail'></a>
              <a id='two' class='header-mail'></a>
            "; 
         }

?>


    </div>
    <div class="header-decoration"></div>
   

   <div class="container">
      <img class="logo " src="<?php echo base_url(); ?>assets/images/misc/logow.png" alt="logo">
     
     <br/>
  </div>   
    

<div  class="pagewrap pagewrap1">
      <div class="container container1 show" id="page-1" >
          <div id="pagewrapmain" class="pagewrapmain"> 
             
              
 <!--  ช่วงการเปลี่ยน     -->     

  <div class='content'>
        <div class='container '>
          <h3><b>ค้นหา ผู้เสียชีวิต</b></h3>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรุณาทำการระบุข้อมูลให้ถูกต้อง</p>
        </div>

        
        <div class='container slider-wrapper'>
           <div class='slider-container'>
               <div id='slider' class='swipe'>
                   <ul>
                       <li style='display:block'>
                           <div class='slider-image'>
                            
                                <div class='swipe-img'>
                                  <img class="swipe-img " src="<?php echo base_url(); ?>assets/images/slider/watben.jpg" alt="logo">
                                    
                                </div> 
                               <p class='swipe-text'>วัดฟหกาสดห่กาด่หกสด</p>
                           </div>
                       </li>
                       
                   </ul>
               </div>                
           </div>
        </div>


  
            
            <?php
                 echo "


                   <table cellspacing='0' class='table' style='font-size: 14px'>
                                        <tr >
                                            <th >วัน/เดือน/ปี</th>
                                            <th >ผู้ขอเป็นเจ้าภาพงาน</th>
                                            <th width=20%>สถานะการอนุมัติ</th>
                                        </tr>

                                        <tr>
                                          <td>asdfsfaf</td>
                              <td>asdfsfaf</td>
                              <td><strong class='decrease'>";
                                          
                                  echo"<font color='#CD5C5C'>รออนุมัติ</font></strong>
                              </td>
                                        </tr> 

                                          <tr>
                                          <td>asdfsfaf</td>
                              <td>asdfsfaf</td>
                              <td><strong class='decrease'>";
                                          
                                  echo"<font color='#548B54'>อนุมัติ</font></strong>
                              </td>
                                        </tr>  




                   </table>

                ";
                ?>
                   
  </div>


 <!--  จบช่วงการเปลี่ยน -->

  
  

    </div> <!-- ส่วนของเปลี่ยนส่วนกลาง -->

 </div>
  <div class="decoration"></div>  <!-- ขีดเส้น -->
    <?php  
           $_month_name = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
              "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
              "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
              "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม"); 
           
           $vardate=date('Y-m-d');
           $yy=date('Y');
           $mm =date('m');$dd=date('d'); 
          if ($dd<10){
              $dd=substr($dd,1,2);
          }
           $date="วันที่ ".$dd ." เดือน ".$_month_name[$mm]." พ.ศ. ".$yy+= 543;
           echo "<center>$date</center>";
    ?>
    <br/>
</div> <!-- จบคลาสหลัก -->


      <div id="loader1" class="pageload-overlay" data-opening="M 0,0 c 0,0 63.5,-16.5 80,0 16.5,16.5 0,60 0,60 L 0,60 Z">
              <svg xmlns="" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none">
                <path d="M 0,0 c 0,0 -16.5,43.5 0,60 16.5,16.5 80,0 80,0 L 0,60 Z"/>
              </svg>
      </div><!-- /pageload-overlay -->

      <div id="loader" class="pageload-overlay" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z">
              <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="none" >
                <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"/>
              </svg>
      </div><!-- /pageload-overlay -->

      <div id="loadermain" class="pageload-overlay" data-opening="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 29.96875 C 40.01804 29.96875 40.03125 29.98196 40.03125 30 C 40.03125 30.01804 40.01804 30.03125 40 30.03125 C 39.98196 30.03125 39.96875 30.01804 39.96875 30 C 39.96875 29.98196 39.98196 29.96875 40 29.96875 Z">
        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 80 60" preserveAspectRatio="xMidYMid slice">
          <path d="M -18 -26.90625 L -18 86.90625 L 98 86.90625 L 98 -26.90625 L -18 -26.90625 Z M 40 -25.6875 C 70.750092 -25.6875 95.6875 -0.7500919 95.6875 30 C 95.6875 60.750092 70.750092 85.6875 40 85.6875 C 9.2499078 85.6875 -15.6875 60.750092 -15.6875 30 C -15.6875 -0.7500919 9.2499078 -25.6875 40 -25.6875 Z"/>
        </svg>
      </div><!-- /pageload-overlay -->

</div>








  <input style="visibility: hidden;" type="text" id="url1" value="<?php echo base_url(); ?>"/>
   <input style="visibility: hidden;" type="text" id="url5" value="<?php echo base_url(); ?>"/>
  <input style="visibility: hidden;" type="text" id="url3" value="<?php echo base_url(); ?>"/>
  <input style="visibility: hidden;" type="text" id="url6" value="<?php echo base_url(); ?>"/>

      


</p>

  </div>    





























<div class="page-sidebarR">
  <div class="page-sidebar-scrollR"> 
   
      <div class="menu-item">
              <strong class="user-icon"></strong>
              <a class="menu-enabled" >ข้อมูลส่วนตัว</a>
      </div> 
      
                        <div class="circle">
                          <?php
                              echo image_asset('icon_shadow/member/user_un.png'); 
                          ?>
                        </div>
                      
      
       

      <a href="#" class="sidebar-button hide2-sidebar"><em class="sidebar-button-close">พับเก็บ</em></a>
      <a href="<?php echo base_url().'index.php/main_con' ?>" class='sidebar-button'><em class='home-icon'>กลับหน้าหลัก</em></a>
      
      <a href="login_fb" class="sidebar-button"><em class="sidebar-button-facebook">Facebook</em></a>
      



      <div class="clear"></div>  


      
      
      <div class="menu-item">
              <strong class="home-icon"></strong>
              <a class="menu-enabled" >ข้อมูลส่วนตัว</a>
      </div> 

      <div class="sidebar-updates">
          <a href="#" class="update-box update-folio">บัญชีผู้ใช้   <br/><br/><?php echo $this->session->userdata('session_iduser') ?></a>               <div class="sidebar-decoration"></div>      
          <a href="#" class="update-box update-folio">ชื่อ<br><br>            <?php echo $this->session->userdata('session_Fname') ?> </a>            <div class="sidebar-decoration"></div>
          <a href="#" class="update-box update-folio">สกุล<br><br>          <?php echo $this->session->userdata('session_Lname') ?></a>            <div class="sidebar-decoration"></div>                 
      </div>

      <div class="menu">         
        <div id="pagewrap1" class="pagewrap1">  
          <div class="menu-item">
              <strong class="vdo_tum"></strong>
              <a class="menu-disabled deploy-submenu pageload-link1"  id="wat" href="#">รับฟังธรรมมะ</a>
              <div class="clear"></div>
             
          </div> 
          
        

          <?php

            if($this->session->userdata('session_login_fb')==true){

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
            
          ?>

          <div class="menu-item">
              <strong class="features-icon"></strong>
              <a class="menu-disabled deploy-submenu "  href="#">จัดการระบบ </a>
              <div class="clear"></div>
              <div class="submenu">
                  <a href="#" class="pageload-link1" id="add_to_system">บันทึก: ข้อมูลผู้เสียชีวิต</a>    <em class="submenu-decoration"></em>
                  <a href="#" class="pageload-link1" id="add_to_system_event">บันทึก: สวดพระอภิธรรมศพ</a>    <em class="submenu-decoration"></em>
              </div>
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
      
        <div id="css_time_run"> </div><br/>
        <?php echo "$img_chang";?>




      </div>



  
              <input  type="text"  style="visibility: hidden;" id="check_click_add" value="<?php echo base_url(); ?>"/>
               <input  type="text"  style="visibility: hidden;" id="check_click_add2" value="<?php echo base_url(); ?>"/>
              <?php
              echo form_open("main_con");
              echo "  
                <div class='menu-item'>
                <strong class='un_block'></strong>       
                <a class='menu-disabled' href='";echo base_url()."index.php/main_con/logout"; echo"'>ออกจากระบบ</a>
                </div>      
              ";
              echo form_close();
               
              ?>
                <div id="page-2">

                </div>

                <div id="page-3">

                </div>
                 
                
  </div>
</div>







    <script>
      (function() {
        var pageWrap = document.getElementById( 'pagewrap' ),
          pages = [].slice.call( pageWrap.querySelectorAll( 'div.container' ) ),
          currentPage = 0,
          triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link' ) ),
          loader = new SVGLoader( document.getElementById( 'loader' ), { speedIn : 400, easingIn : mina.easeinout } );

        function init() {
          triggerLoading.forEach( function( trigger ) {
            trigger.addEventListener( 'click', function( ev ) {
              ev.preventDefault();
              loader.show();
              // after some time hide loader
              setTimeout( function() {
                loader.hide();

                
                // update..
                currentPage = currentPage ? 0 : 1;
                classie.addClass( pages[ currentPage ], 'show' );

              }, 1000 );
            } );
          } );  
        }

        init();
      })();
    </script>



    <script>
      (function() {
        var pageWrap = document.getElementById( 'pagewrap1' ),
          pages = [].slice.call( pageWrap.querySelectorAll( 'div.container1' ) ),
          currentPage = 0,
          triggerLoading = [].slice.call( pageWrap.querySelectorAll( 'a.pageload-link1' ) ),
          loader1 = new SVGLoader( document.getElementById( 'loader1' ), { speedIn : 400, easingIn : mina.easeinout } );

        function init() {
          triggerLoading.forEach( function( trigger ) {
            trigger.addEventListener( 'click', function( ev ) {
              ev.preventDefault();
              loader1.show();
              // after some time hide loader
              setTimeout( function() {
                loader1.hide();

                classie.removeClass( pages[ currentPage ], 'show' );
                // update..
                currentPage = currentPage ? 0 : 1;
                classie.addClass( pages[ currentPage ], 'show' );

              }, 1000 );
            } );
          } );  
        }

        init();
      })();
    </script>




    <script>
      (function() {
        var pageWrapmain = document.getElementById( 'pagewrapmain' ),
          pages = [].slice.call( pageWrapmain.querySelectorAll( 'div.containermain' ) ),
          currentPage = 0,
          triggerLoading = [].slice.call( pageWrapmain.querySelectorAll( 'a.pageload-link-main' ) ),
          loadermain = new SVGLoader( document.getElementById( 'loadermain' ), { speedIn : 2000, easingIn : mina.easeinout } );

        function init() {
          triggerLoading.forEach( function( trigger ) {
            trigger.addEventListener( 'click', function( ev ) {
              ev.preventDefault();
              loadermain.show();
              // after some time hide loader
              setTimeout( function() {
                loadermain.hide();

                classie.removeClass( pages[ currentPage ], 'show' );
                // update..
                currentPage = currentPage ? 0 : 1;
                classie.addClass( pages[ currentPage ], 'show' );

              }, 2200 );
            } );
          } );  
        }

        init();
      })();
    </script>









</body>
</html>



