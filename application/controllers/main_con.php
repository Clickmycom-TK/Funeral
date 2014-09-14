<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_con extends CI_Controller {
    function __construct()
                {
                                parent::__construct();
                             
                }
  
  public function index()
  { 


    
    //ธรรมดา
     if($this->session->userdata('session_login_width')==false){
            $data_sent['login']=true;
            $data_sent['img_profile']=$this->session->userdata('session_img_profile');
            $data_sent['link']="login_fb";
            $data_sent['id']=$this->session->userdata('session_account_Users');
            $data_sent['first_name']=$this->session->userdata('session_Fname'); 
            $data_sent['last_name']=$this->session->userdata('session_Lname');
            $data_sent['login_fb']=false;
            $data_sent['search']=true;
            
        }
      //ผ่าน FB
        if($this->session->userdata('session_login_width')==true){
            $data_sent['login']=true;
            $data_sent['img_profile']=$this->session->userdata('session_img_profile');
            $data_sent['link']=$this->session->userdata('session_link');
            $data_sent['id']=$this->session->userdata('session_id');
            $data_sent['first_name']=$this->session->userdata('session_Fname'); 
            $data_sent['last_name']=$this->session->userdata('session_Lname');
            $data_sent['login_fb']=true;
            $data_sent['search']=true;
        } 



        

       
        
    $this->load->view("main",$data_sent);

    
  }



  public function logout(){


    //session ของ register
    $data_session=array(
                    'session_login'=>false,
                    'session_Fname'=>null,
                    'session_Lname'=>null,
                    'session_user'=>null,
                    'session_login_width'=>null,
                    'session_id_Users'=>null,
                    'session_img_profile'=>null,
        //ส่วนค้นหาผู้ตาย
                    'Session_id_Dead_Person'=>null,
                    'Session_First_Dead_Person'=>null,
                    'Session_Fname_Dead_Person'=>null,
                    'Session_Lame_Dead_Person'=>null,
                    'session_First_name_Dead'=>null,
                    'session_Lname_Dead'=>null,
                    'session_Fname_Dead'=>null,
                    'session_Users_id_Users_My_Dead'=>null

                    


    );
    $this->session->set_userdata($data_session);

    redirect('welcome/login');


  }

  public function chang(){

    sleep(1.1); 
     echo "
     
     <div class='content'>
        <div class='container '>
          <h3><b>แก้ไขข้อมูลส่วนตัว</b></h3>
        </div>


        <div class='container slider-wrapper'>
           <div class='slider-container'>
               <div id='slider' class='swipe'>
                   <ul>
                       <li style='display:block'>
                           <div class='slider-image'>
                               <div class='swipe-img'>";
                                echo " <img class='swipe-img' src=";echo base_url(); echo"assets/images/slider/2.jpg>";
                                echo "</div> 

                               <p class='swipe-text'>คลิกเพื่อ: เปลี่ยนรูปโปรไฟล์ </p>
                           </div>
                       </li>
                   </ul>
               </div>
                              
           </div>
       </div>


        ";
                
              echo form_open("main_con");
              echo "  
               
                    <fieldset>
                        
                        <div class='formFieldWrap'>
                            <label class='field-title contactNameField' >ชื่อ:<span><font size='5' color='#B40404'><b><a href=''>(แก้ไข)</a></b></font></span></label>
                            <input type='text' disabled name='contactEmailField' value=''  class='contactField requiredField requiredEmailField' id='contactEmailField'/>
      
                        </div>
                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >นามสกุล: <span><font size='5' color='#B40404'><b><a href=''>(แก้ไข)</a></b></font></span></label>
                            <input type='text' disabled name='contactEmailField' value='ฟหกดฟหกด'  class='contactField requiredField requiredEmailField' id='contactEmailField'/>
                        </div>
                        <div class='formTextareaWrap'>
                            <label class='field-title contactMessageTextarea' >รหัสผ่าน: <span><font size='5' color='#B40404'><b><a href=''>(แก้ไข)</a></b></font></span></label>
                            <input type='text' disabled name='contactEmailField' value=''  class='contactField requiredField requiredEmailField'/>
                        </div>
                        <div class='formSubmitButtonErrorsWrap'>
                            <input type='submit' class='buttonWrap black pageload-link-main' name='btn_search'  value='บันทึกการแก้ไข'/>
                        </div>
                    </fieldset>";
                    echo form_close();
   echo "</div>";


  }



  public function count_click(){
    $data_user1=$this->input->post('send1');
    // $data_user2=$this->input->post('send2');
     $data_session_check_vii=array(
                    'session_check_vii'=>$data_user1
                    // 'session_check_education2'=>$data_user2
    );
    $this->session->set_userdata($data_session_check_vii);


  }


  public function count_click_2(){

    $data_user2=$this->input->post('send2');
     $data_session_check_vii2=array(
                    
                    'session_check_education2'=>$data_user2
    );
    $this->session->set_userdata($data_session_check_vii2);


  }



  
  public function add_to_system(){

    ?>

     


    <?php 


    


    sleep(1.1);
   
    echo "
      



     <div class='content'>



         <div class='column no-bottom'>
                    <h3>เพิ่มข้อมูลผู้เสียชีวิต ''ประวัติโดยสังเขป''</h3>
                    <p>
                        
                        <span class='icon '></span>
                        ทำการเพิ่มข้อมูลผู้เสียชีวิต โดยระบุข้อมูลให้ครบถ้วน ตามความเป็นจริง 
                    </p> <br/>
          </div>


   


        ";
                
              


    ?>

               <script>
                    var i=0;
                    var t=0;
                    var oot="เด็กชาย";
                    var n=0;
                    var m=0;

                    $('#addScnt111').click(function(){
                          

                          var url1=$('#check_click_add').val()+'index.php/main_con/count_click';
                            $('#page-2').load(url1,{send1:i});


                            $('#p_scents111').append('<input type="text" class="contactField requiredField requiredEmailField" value="" id="name_yii'+i+'" /> <br/>');      
                            i++;

                    });


                    $('#addScnt222').click(function(){
                        

                          var url3=$('#check_click_add2').val()+'index.php/main_con/count_click_2';
                            $('#page-3').load(url3,{send2:n});
                            $('#p_scents222').append('<input type="text" class="contactField requiredField requiredEmailField" value="" id="name_yii2'+n+'" /> <br/>');      
                            n++;

                    });


                    function getCombo2(sel) {
                              var First2 = sel.options[sel.selectedIndex].value;  
                              oot=First2;
                      }

                            $('#submit_dead').click(function(){

                              var T;
                              var cars2=new Array(n);

                                if(i>=1&&t==0){
                                  var cars=new Array(i);

                                  for(var j=0;j<=i;j++){
                                    cars[j]=(jQuery('#name_yii'+j).val()); 

                                    t++;

                                  }                                 

                                }


                                if(n>=1&&m==0){
                                 
                                  for(var j1=0;j1<n;j1++){
                                    cars2[j1]=(jQuery('#name_yii2'+j1).val()); 
                                   
                                    m++;
                                  }                                 

                                }
                           
                                // for(var k=0;k<i;k++){
                                //    alert(cars[k]); 
                                // }
                                var url1=$('#url1').val()+'index.php/main_con/dead_person';
                                $('#page-1').load(url1,{

                                    name_yii:cars,
                                    name_yii2:cars2,
                                    First:oot,
                                    Fname_dead_person:Fname_dead_person.value,
                                    Lname_dead_person:Lname_dead_person.value,
                                    bridday_person:bridday_person.value,
                                    father_name_person:father_name_person.value,
                                    mather_name_person:mather_name_person.value,
                                   
                                    deadday_person:deadday_person.value,
                                    old_person:old_person.value,
                                    tel_person:tel_person.value,
                                    vara_person:vara_person.value,
                                    address_bridday:address_bridday.value

                                });
                                


                            });



                    





                  </script>

      <?php
              echo "  
               
                    <fieldset>
                             

                         <div class='formFieldWrap'>
                            <label class='field-title contactNameField' >คำขึ้นต้น:<span>(required)</span></label>
                            <select class='contactField requiredField requiredEmailField' id='combo2' onchange='getCombo2(this)'>
                                  <option value='เด็กชาย'>เด็กชาย</option>
                                  <option value='เด็กหญิง'>เด็กหญิง</option>
                                  <option value='นาย'>นาย</option>
                                  <option value='นาง'>นาง</option>
                                  <option value='นางสาว'>นางสาว</option>
                            </select>
                        </div>

                        <div class='formFieldWrap'>
                            <label class='field-title contactNameField' >ชื่อ ผู้เสียชีวิต:
                            <input type='text'  name='Fname_dead_person' value=''  class='contactField requiredField requiredEmailField' id='Fname_dead_person'/>
      
                        </div>
                        


                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >นามสกุล ผู้เสียชีวิต: 
                            <input type='text'  name='Lname_dead_person' value=''  class='contactField requiredField requiredEmailField' id='Lname_dead_person'/>
                        </div>


                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >วันเกิด ผู้เสียชีวิต: 
                            <input type='text'  name='bridday_person' value=''  class='contactField requiredField requiredEmailField' id='bridday_person'/>
                        </div>

                         <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >สถานที่เกิด ผู้เสียชีวิต: 
                            <input type='text'  name='address_bridday' value=''  class='contactField requiredField requiredEmailField' id='address_bridday'/>
                        </div>







                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >บิดา ผู้เสียชีวิตชื่อ: 
                            <input type='text'  name='father_name_person' value=''  class='contactField requiredField requiredEmailField' id='father_name_person'/>
                        </div>

                         <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >มารดา ผู้เสียชีวิตชื่อ: 
                            <input type='text'  name='mather_name_person' value=''  class='contactField requiredField requiredEmailField' id='mather_name_person'/>
                        </div>



                         <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >ประวัติการศึกษา ผู้เสียชีวิต: 
                            
                               <a  id='addScnt222' class='buttonWrap black pageload-link-main '><center>คลิกเพื่อ เพิ่ม</center></a>
                            
                                  <div id='p_scents222'>
                                      <p>
                                         
                                      </p>
                                </div>


                        </div>



                         <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >วันที่เสียชีวิต : 
                            <input type='text'  name='deadday_person' value=''  class='contactField requiredField requiredEmailField' id='deadday_person'/>
                        </div>

                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >อายุ ผู้เสียชีวิต: 
                            <input type='text'  name='old_person' value=''  class='contactField requiredField requiredEmailField' id='old_person'/>
                        </div>

                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >มีพี่น้องร่วมบิดามารดาเดียวกัน ดังนี้: 
                            
                            <a  id='addScnt111' class='buttonWrap black pageload-link-main '><center>คลิกเพื่อ เพิ่ม</center></a>
                            
                                  <div id='p_scents111'>
                                      <p>
                                         
                                      </p>
                                  </div>
                        </div>

                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >เบอร์โทรศัพท์ สำหรับติดต่อญาติ: 
                            <input type='text'  name='tel_person' value=''  class='contactField requiredField requiredEmailField' id='tel_person'/>
                        </div>

                       

                        <div class='formTextareaWrap'>
                            <label class='field-title contactMessageTextarea' >วาระสุดท้ายก่อนเสียชีวิต: 

                            <textarea name='vara_person' class='contactTextarea' id='vara_person'></textarea>
                        </div>

                        <div class='formSubmitButtonErrorsWrap'>

                        <a  href='#'  id='submit_dead' class='buttonWrap black pageload-link-main '><center>บันทึกข้อมูลผู้เสียชีวิต</center></a>
                                
                        </div>
                          


                         
                    </fieldset>";
                    
      echo "</div>";




  }


  public function add_to_system_event(){

      sleep(1.1);
      ?>

      <script type="text/javascript">

         var o1="วันจันทร์";
         var date_num="1";
         var save_to_table=true;
         var date_mount="มกราคม";

        

        function getselect_date(date) {
            var First32 = date.options[date.selectedIndex].value;  
            o1=First32;
       
        }


         function getselect_numdate(date_num) {
            var date_num2 = date_num.options[date_num.selectedIndex].value;  
            date_num=date_num2;
          
        }

        function getselect_mound(mount) {
            var mount2 = mount.options[mount.selectedIndex].value;  
            date_mount=mount2;
            
        }


        function timedRefresh(timeoutPeriod) {
            setTimeout("location.reload(true);",timeoutPeriod);
        }



          $('#submit_add_schedule').click(function(){

              var url1=$('#url1').val()+'index.php/main_con/view_table';
              $('#table_data').load(url1,{

                  Num_date:o1,
                  date_num:date_num,
                  date_mount:date_mount,
                  num_years:num_years.value,
                  time:time.value,
                  save_to_table:save_to_table,
                  Relate_name:Relate_name.value

              });
         });


           




  








      </script>





      <?php


    echo "
    

     <div class='content'>
         <div class='column no-bottom'>
                    <h3>บันทึกกำหนดการณ์ในพิธี สวดพระอภิธรรมศพ</h3>
                    <p>
                        
                        <span class='icon '></span>
                        ทำการบันทึกกำหนดการในพิธีสวดพระอภิธรรมศพ โดยระบุข้อมูลให้ครบถ้วน ตามความเป็นจริง 
                    </p> <br/>
          </div>

         
      
        ";
                if($this->session->userdata('Session_id_Dead_Person')!=null){
           

                        $Search_dead="SELECT * FROM  dead_person ";
                            $query=$this->db->query($Search_dead);
                            $search_data_dead=$query->result();


                            foreach ($search_data_dead as $dead) {
                                $id_Dead_Person=$dead->id_Dead_Person;
                                
                                if($id_Dead_Person==$this->session->userdata('Session_id_Dead_Person')){
                                      $First=$dead->First;
                                      $Fname=$dead->Fname;
                                      $Lame=$dead->Lame;
                                      
                      
                              }
                            }
                  }


     
              echo " 




               
                    <fieldset>
                        
                        <div class='formFieldWrap'>
                            <label class='field-title contactNameField' >ชื่อ:
                            <input type='text' disabled name='contactEmailField' value=";echo $First.$Fname; echo"  class='contactField requiredField requiredEmailField' id='contactEmailField'/>
      
                        </div>
                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >นามสกุล: 
                            <input type='text' disabled name='contactEmailField' value=";echo $Lame; echo "   class='contactField requiredField requiredEmailField' id='contactEmailField'/>
                        </div>

                           <div class='container no-bottom'>
             <h4 class='icon-heading'>ตารางแสดงข้อมูลตัวอย่าง</h4>
             <p>ตารางแสดงข้อมูลตัวอย่างที่ใช้ในการแสดงผลจริง กรุณาระบุข้อมูลด่านล่าง</p>

             ";

             ?>

              <script type="text/javascript">
             

                

                  var url1=$('#url1').val()+'index.php/main_con/view_table';
                  $('#table_data').load(url1,{

                  });

            
               



              </script>



             <?php


             echo "
               <div id='table_data'>

               </div>



          </div> 
    

                        <div class='decoration'></div>

                      

                        <div class='formTextareaWrap'>
                            <label class='field-title contactMessageTextarea' >วัน: 

                            <select class='contactField requiredField requiredEmailField' id='select_date' onchange='getselect_date(this)'>
                                  <option value='วันจันทร์'>วันจันทร์</option>
                                  <option value='วันอังคาร'>วันอังคาร</option>
                                  <option value='วันพุธ'>วันพุธ</option>
                                  <option value='วันพฤหัสบดี'>วันพฤหัสบดี</option>
                                  <option value='วันศุกร์'>วันศุกร์</option>
                                  <option value='วันเสาร์'>วันเสาร์</option>
                                  <option value='วันอาทิตย์'>วันอาทิตย์</option>
                            </select>
                        </div>

                        <div class='formTextareaWrap'>
                            <label class='field-title contactMessageTextarea' >วันที่: 

                            <select class='contactField requiredField requiredEmailField' id='select_numdate' onchange='getselect_numdate(this)'>
                                  <option value='1'>1</option>
                                  <option value='2'>2</option>
                                  <option value='3'>3</option>
                                  <option value='4'>4</option>
                                  <option value='5'>5</option>
                                  <option value='6'>6</option>
                                  <option value='7'>7</option>
                                  <option value='8'>8</option>
                                  <option value='9'>9</option>
                                  <option value='10'>10</option>
                                  <option value='11'>11</option>
                                  <option value='12'>12</option>
                                  <option value='13'>13</option>
                                  <option value='14'>14</option>
                                  <option value='15'>15</option>
                                  <option value='16'>16</option>
                                  <option value='17'>17</option>
                                  <option value='18'>18</option>
                                  <option value='19'>19</option>
                                  <option value='20'>20</option>
                                  <option value='21'>21</option>
                                  <option value='22'>22</option>
                                  <option value='23'>23</option>
                                  <option value='24'>24</option>
                                  <option value='25'>25</option>
                                  <option value='26'>26</option>
                                  <option value='27'>27</option>
                                  <option value='28'>28</option>
                                  <option value='29'>29</option>
                                  <option value='30'>30</option>
                                  <option value='31'>31</option>


                            </select>
                        </div>


                        <div class='formTextareaWrap'>
                            <label class='field-title contactMessageTextarea' >เดือน: 

                            <select class='contactField requiredField requiredEmailField' id='select_mound' onchange='getselect_mound(this)'>
                                  <option value='มกราคม'>มกราคม</option>
                                  <option value='กุมภาพันธ์'>กุมภาพันธ์</option>
                                  <option value='มีนาคม'>มีนาคม</option>
                                  <option value='เมษายน'>เมษายน</option>
                                  <option value='พฤษภาคม'>พฤษภาคม</option>
                                  <option value='มิถุนายน'>มิถุนายน</option>
                                  <option value='กรกฎาคม'>กรกฎาคม</option>
                                  <option value='สิงหาคม'>สิงหาคม</option>
                                  <option value='กันยายน'>กันยายน</option>
                                  <option value='ตุลาคม'>ตุลาคม</option>
                                  <option value='พฤศจิกายน'>พฤศจิกายน</option>
                                  <option value='ธันวาคม'>ธันวาคม</option>
                            </select>
                        </div>


                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >พ.ศ.: 
                            <input type='text'  name='contactEmailField' value='";echo date("Y")+543; echo"'  class='contactField requiredField requiredEmailField' id='num_years'/>
                        </div>


                        <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >เวลา: 
                            <input type='text'  name='contactEmailField' value=''  class='contactField requiredField requiredEmailField' id='time'/>
                        </div>




                        <div class='formTextareaWrap'>
                            <label class='field-title contactMessageTextarea' >เจ้าภาพ: 

                            <textarea name='' class='contactTextarea' id='Relate_name'></textarea>
                        </div>


                        <div class='formSubmitButtonErrorsWrap'>
                            <a href='#' id='submit_add_schedule' class='buttonWrap black pageload-link-main '>บันทึกข้อมูล</a>
                            
                        </div>
                         <br/>
                          <div class='decoration'></div>
         
                       
                        <div class='formSubmitButtonErrorsWrap'>
                            <a href='#' onClick='document.location.reload(true)' id='out_add_schedule' class='buttonWrap black pageload-link-main '>ออกจากหน้านี้</a>
                            
                        </div>

                    </fieldset>";
                   
      echo "</div>";




  }

  public function view_table(){

              $save_to_table=false;
              
                $date_name=$this->input->post('Num_date');
                $date_mount=$this->input->post('date_mount');
                $time=$this->input->post('time');
                $save_to_table=$this->input->post('save_to_table');
                $date_num=$this->input->post('date_num');
                $num_years=$this->input->post('num_years');
                $Relate_name=$this->input->post('Relate_name');
               
          
               //ส่วนการบันทึกลง DB

               if($save_to_table==true){



                    $ar=array(
                    "Relate_name"=> $Relate_name,
                    "Num_date" => $date_num,
                    "Date" => $date_name,
                    "Mounth" => $date_mount,
                    "Time"=>$time,
                    "Year" => $num_years,
                    "Dead_Person_id_Dead_Person" => $this->session->userdata('Session_id_Dead_Person')
                    );

                    $this->db->insert("schedule",$ar);

               }



    echo "

           


                 <table cellspacing='0' class='table'>
                      <tr>
                          <th >วัน / เดือน / ปี</th>
                          <th class='table-title'>เจ้าภาพ</th>
                         
                      </tr>
                          



                      

                      ";

                if($this->session->userdata('Session_id_Dead_Person')!=null){



                      
                        $total_table=0;
                         $check="SELECT * FROM  schedule order by id_Schedule asc ";
                         $query=$this->db->query($check);
                         $data2=$query->result();

                          
                      foreach ($data2 as $dd) {

                              if($dd->Dead_Person_id_Dead_Person==$this->session->userdata('Session_id_Dead_Person')){
                                    $total_table++;
                                    $Relate_name=$dd->Relate_name;
                                    $Num_date=$dd->Num_date;
                                    $Date=$dd->Date;
                                    $Mounth=$dd->Mounth;
                                    $Year=$dd->Year;
                                    $Time=$dd->Time;
                                    echo "<tr>";
                                      echo "<td ><center>"."วัน".$Date."&nbsp;&nbsp;&nbsp;ที่&nbsp;&nbsp;&nbsp;".$Num_date."&nbsp;&nbsp;&nbsp;เดือน".$Mounth."&nbsp;&nbsp;&nbsp;พ.ศ.".$Year."&nbsp;&nbsp;&nbsp;เวลา&nbsp;".$Time."&nbsp;น."."</center></td>";
                                      echo "<td>".$Relate_name."</td>";
                                    echo "</tr>";


                              }

                              
                    }

                      if($total_table==0){
                          echo "
                            <tr >
                                <td colspan=3><center>----------ยังไม่มีข้อมูล-------------</center></td>
                              
                                
                            </tr>
                          ";  
                      }



                }

                      
                   
                    

                      

                      echo "
                      




                  </table>


          



    ";
  }



  // public function view_people(){

  //     echo "
  //    <div class='content'>
  //       <div class='container '>
  //          <div class='blog-post'>
  //               <h3>Blog post title</h3>
  //               <p>Blogs are important, that's why we made the most complete mobile blog possible!</p>
  //               <img class='blog-post-image' src='images/blog/001.jpg' alt='img'>       
  //               <div>
  //                   <p>
  //                       <strong class='dropcaps'>D</strong>ropcaps is amazing, especially when you love typopgraphy like I do! Typography is important, and needs to be clean and perfectly sized! </p>
  //                   <p>
  //                       <span class='highlight bg-highlight-gray'>Highlighted text</span>is simply awesome and <strong>very</strong> useful!
  //                   </p>     
  //                   <p>            
  //                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec dignissim scelerisque eleifend.
  //                       In vestibulum nisi eu elit faucibus accumsan. Suspendisse mollis felis in diam semper sodales.<br/> 
  //                       Proin neque sem, hendrerit <u>vel</u> <i>auctor</i> <strong>sollicitudin</strong>, <a href='#'>ullamcorper</a> et nibh. Aliquam erat volutpat. <br/><br/>
  //                       Morbi euismod justo vitae risus pharetra non iaculis enim dignissim. 
  //                       Morbi tincidunt, erat vitae auctor placerat, tortor purus molestie sapien, eget scelerisque sapien lorem et leo. 
  //                       Sed quis lectus nisi, sed imperdiet nunc.
  //                   </p>  
                    
  //                   <div class='column'>
  //                       <div class='one-third'>
  //                           <p class='center-text'>Lorem Ipsum is simply dummy text of the printing. </p> 
  //                       </div>
  //                       <div class='one-third'>
  //                           <p class='center-text'>Lorem Ipsum is simply dummy text of the printing. </p> 
  //                       </div>
  //                       <div class='one-third'>
  //                           <p class='center-text'>Lorem Ipsum is simply dummy text of the printing. </p> 
  //                       </div>
  //                   </div>
                   
  //               </div>
           
  //               <div class='decoration'></div>
           
  //               <div class='column no-bottom'>
  //                   <h3>About The Author</h3>
  //                   <p>
  //                       <span class='icon icon-user1'></span>
  //                       Lorem Ipsum is simply dummy text Lorem Ipsum is simply dummy text of ipsuming.  
  //                   </p> 
  //               </div>
  //           </div>
  //    </div>
  //   </div>

  //   ";

  // }
  
  public function out_add_schedule(){
           redirect('refresh');
  }

  public function dead_person(){


     


          
           $count_vii=$this->session->userdata('session_check_vii');
           $count_vii2=$this->session->userdata('session_check_education2');
         



//          $Lname_dead_person=$this->input->post("Lname_dead_person");
          $First=$this->input->post("First");
          $Fname_dead_person=$this->input->post("Fname_dead_person");
          $Lname_dead_person=$this->input->post("Lname_dead_person");
          $bridday_person=$this->input->post("bridday_person");
          $deadday_person=$this->input->post("deadday_person");
          $old_person=$this->input->post("old_person");
          $tel_person=$this->input->post("tel_person");
          $vara_person=$this->input->post("vara_person");

           $father_name_person=$this->input->post("father_name_person");
            $mather_name_person=$this->input->post("mather_name_person");
            
             $address_bridday=$this->input->post("address_bridday");
        

         
//           // // $name_yii1=$this->input->post("name_yii1");
          
          $check="SELECT * FROM  dead_person ";
          $query=$this->db->query($check);
          $data2=$query->result();

          $new_id_dead_person =mysql_result(mysql_query("Select Max(substr(id_Dead_Person,-4))+1 as MaxID from  dead_person"),0,"MaxID");
          $id_Users1="Dp".sprintf("%04d",$new_id_dead_person);
          

          $ar=array(
              "First"=> $First,
              "Fname"=> $Fname_dead_person,
              "Lame"=> $Lname_dead_person,
              "Old"=> $old_person,
              "Birthday"=> $bridday_person,
              "Deadday"=> $deadday_person,
              "Vara"=> $vara_person,
              "Tel"=> $tel_person,
              "Address_Bridday"=>$address_bridday,
               "Name_Father"=> $father_name_person,
                "Name_Mather"=> $mather_name_person,
                 

                 
              "Users_id_Users"=>$this->session->userdata('session_id_Users'),

              "id_Dead_Person" => $id_Users1

              );
              $this->db->insert("dead_person",$ar);



            $data_session=array(
                    'Session_id_Dead_Person'=>$id_Users1,
                    'Session_First_Dead_Person'=>$First,
                    'Session_Fname_Dead_Person'=>$Fname_dead_person,
                    'Session_Lame_Dead_Person'=>$Lname_dead_person,

                    
            );


            
            $this->session->set_userdata($data_session);



          //java scrip send ข้อมูลญาติ
        if($count_vii>=1){
            $check_vii="SELECT * FROM  relatives ";
            $query=$this->db->query($check_vii);
            $data3=$query->result();

             for($i=0;$i<=$count_vii;$i++){

                   $name_yii=$this->input->post('name_yii');
                 if($name_yii!=null){
                    $ar2=array(
                    "Name_relaives"=>$name_yii[$i],
                    "Dead_Person_id_Dead_Person"=>$this->session->userdata('Session_id_Dead_Person')
                    
                  );
                    $this->db->insert("relatives",$ar2);
                 }
                  
              }

          }



             if($count_vii2>=1){
            $check_vii2="SELECT * FROM  education ";
            $query=$this->db->query($check_vii2);
            $data4=$query->result();

             for($i=0;$i<=$count_vii2;$i++){

                   $name_yii2=$this->input->post('name_yii2');
                 if($name_yii2!=null){
                    $ar3=array(
                    "Education_name"=>$name_yii2[$i],
                    "dead_person_id_Dead_Person"=>$this->session->userdata('Session_id_Dead_Person')
                    
                  );
                    $this->db->insert("education",$ar3);
                 }
                  
              }

          }

          



        echo form_open_multipart ('upload/upload_file');
          echo "

            <div class='container slider-wrapper'>
           <div class='slider-container'>
           
               <div id='slider' class='swipe'>
                   <ul>
                       <li style='display:block'>
                           <div class='slider-image'>
                               <div class='swipe-img'>";
                                echo " <img class='swipe-img' src=";echo base_url(); echo"assets/images/slider/2.jpg>";
                                echo "</div> 

                                  
                           </div>
                       </li>
                   </ul>
                       
                </div> 
                             
           </div>
        </div>

                          <div class='formFieldWrap'>
                              <label class='field-title contactNameField' >อัพโหลดรูปภาพ:<span>(required)</span></label>
                              <input type='file' class='buttonWrap grey pageload-link-main ' name='picture' />
                              <input type='submit' class='buttonWrap grey pageload-link-main ' name='bt' value='ทำการอัพโหลด'/>
                          </div>

          ";             
           
         
        echo form_close();

         echo "
         <br>
               <div class='formSubmitButtonErrorsWrap'>
                            <a href='main_con'  class='buttonWrap black pageload-link-main '>ข้ามการอัพโหลดรูปภาพ</a>
                            
              </div> 
          
        ";

  }





  
}



?>
