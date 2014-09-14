<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class comment extends CI_Controller {
	
		function __construct()
                {
                                parent::__construct();

                }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	 

   sleep(1.3);


   						  $_month_name3 = array("01"=>"มกราคม",  "02"=>"กุมภาพันธ์",  "03"=>"มีนาคม",    
			              "04"=>"เมษายน",  "05"=>"พฤษภาคม",  "06"=>"มิถุนายน",    
			              "07"=>"กรกฎาคม",  "08"=>"สิงหาคม",  "09"=>"กันยายน",    
			              "10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม"); 
           
				           $vardate3=date('Y-m-d');
				           $yy3=date('Y');
				           $mm3 =date('m');$dd=date('d'); 
				          if ($dd<10){
				              $dd=substr($dd,1,2);
				          }
				           $date3=$dd.$_month_name3[$mm3].$yy3+= 543;
				          
				           
	
?>

<script type="text/javascript">


$('#Fname_comment').click(function(){
		Fname_comment.value="";
});

$('#Lname_comment').click(function(){
	Lname_comment.value="";
});




	  $('#getcomment').click(function(){
	  			
            	 var url1=$('#url1').val()+'index.php/comment/view_comment';
                                $('#comments_dead').load(url1,{

                                     Fname_comment:Fname_comment.value,
                                     Lname_comment:Lname_comment.value,
                                     txt_comments:txt_comments.value,
                                     time_comments:time_comments.value,
                                     btn_getcomment_onclick:true
                                     

                                });


                 

      });



</script>




<?php
			
  	  // // session ของ ID ผู้ใช้
     //          echo $this->session->userdata("session_id_Users");
     //          echo "string";


		echo "
		
 	 <div class='content'>
        <div class='container '>
		    <div class='user-comments'>   
        <div class='decoration'></div>  
			
             <li class='list-pencil'><h4 class='heading'>&nbsp;&nbsp;&nbsp;ร่วมไว้อาลัยแด่&nbsp;
 

             ";
             echo $this->session->userdata('session_First_name_Dead').$this->session->userdata('session_Fname_Dead')."&nbsp;&nbsp;".$this->session->userdata('session_Lname_Dead'); echo"

             </h4></li>
            <p>ขอเรียนเชิญร่วมไว้อาลัยให้กับ&nbsp;";echo $this->session->userdata('session_First_name_Dead').$this->session->userdata('session_Fname_Dead')."&nbsp;&nbsp;".$this->session->userdata('session_Lname_Dead'); echo"
            เรียนเชิญ</p>
            <input  style='visibility: hidden;' type='text' id='time_comments' value='$date3&nbsp;เวลา:');
        </div>
            <div class='formFieldWrap'>
                <label class='contactNameField' >ชื่อ :</label>
                <input type='text'  id='Fname_comment' value='";


               	if($this->session->userdata('session_Fname')!=null){
               		echo $this->session->userdata('session_Fname'); 
               	}
                else{
                	echo ''; 
                }



                echo"' class='contactField' id=''/>
            </div>
            <div class='formFieldWrap'>
                <label class='contactEmailField'>นามสกุล :</label>
                <input type='text'  id='Lname_comment' value='";
                
                if($this->session->userdata('session_Lname')){
               		echo $this->session->userdata('session_Lname');  
               	}
                else{
                	echo ''; 
                }


                echo"' class='contactField' id=''/>
            </div>

            <div class='formTextareaWrap'>
                <label class='contactMessageTextarea'>ข้อความไว้อาลัย : </label>
                <textarea class='contactTextarea' id='txt_comments' ></textarea>
            </div>
           
            <div class='formSubmitButtonErrorsWrap'>
                   <a href='#'  class='buttonWrap grey pageload-link-main ' id='getcomment'>ลงชื่อ ร่วมไว้อาลัย</a>
                            
          


		";



		echo "<br>

		<div class='decoration'></div>  
			
             <li class='list-document'><h4 class='heading'>&nbsp;&nbsp;&nbsp;คำไว้อาลัยแด่";

             echo $this->session->userdata('session_First_name_Dead').$this->session->userdata('session_Fname_Dead')."&nbsp;&nbsp;".$this->session->userdata('session_Lname_Dead'); echo"
             </h4></li>
         
        </div>
        
       
    ";


           echo "<div id='txt_old_comment'>";              
    		
			$this->MO();
		  	
		  	$bo=0;
		   echo "</div>";

		    if($bo==0){
		    	$bo++;

		    }
		  
	?>


			    <!-- โหลดหน้า comment  -->
           

    <?php


echo"
			
			
 			<div id='comments_dead'>


 			";





echo "</div>";


echo "<div id='wat'>"; //ส่วนของการเรียกหน้า comment แสดงผล
		$this->view_a_comments();
echo "</div>";
echo"<div class='stat'>
                <p class='stat-left'></p>
                <p class='stat-right'>&nbsp;:<strong class='decrease'>";
               
		 		echo"</strong></p>
                <div class='clear'></div>
                <span class='stat-background'>
                    <span class='stat-cleaner'></span>
                    <span class='percent red'></span>
                </span>
        </div>";



echo"<div id='TTTT'/>";  //ใช้ส่งค่า ของ Javascript



	}

public function MO(){

           		$this->db->where('Dead_Person_id_Dead_Person',$this->session->userdata('Session_id_Dead_Person'));
				$this->db->from('mourn_over');
				$cntTTT = $this->db->count_all_results();
				echo "<input type='text'  style='visibility: hidden;' id='old_comment' value='$cntTTT' />";
		  	


				echo "
				<div class='stat'>
                <p class='stat-left'>ตารางแสดงข้อความไว้อาลัย</p>
                <p class='stat-right'>จำนวนข้อความทั้งหมด&nbsp;:<strong class='decrease'>";
                echo $cntTTT;
		 		echo"&nbsp;ข้อความ</strong></p>
                <div class='clear'></div>
                <span class='stat-background'>
                    <span class='stat-cleaner'></span>
                    <span class='percent red'></span>
                </span>
       			</div>
       			";











			 
       }
	

	

	public function view_comment(){
		$btn_getcomment_onclick=$this->input->post('btn_getcomment_onclick');
		$Fname_comment=$this->input->post('Fname_comment');
		$Lname_comment=$this->input->post('Lname_comment');
		$txt_comments=$this->input->post('txt_comments');
		$time_comments= $this->input->post('time_comments').date("H:i");

		

		function getClientIP() {

		    if (isset($_SERVER)) {

		        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
		            return $_SERVER["HTTP_X_FORWARDED_FOR"];

		        if (isset($_SERVER["HTTP_CLIENT_IP"]))
		            return $_SERVER["HTTP_CLIENT_IP"];

		        return $_SERVER["REMOTE_ADDR"];
		    }

		    if (getenv('HTTP_X_FORWARDED_FOR'))
		        return getenv('HTTP_X_FORWARDED_FOR');

		    if (getenv('HTTP_CLIENT_IP'))
		        return getenv('HTTP_CLIENT_IP');

    		return getenv('REMOTE_ADDR');
		}
		$ip_add=getClientIP();

		
	

		

		 	
		
if($txt_comments!=null){
		  
		  //ตรวจว่ามี User มีการ Login ในระบบ
		  if($this->session->userdata("session_id_Users")!=null){  	
		  		$insert_comments=array(
						"Comment"=>$txt_comments,
						"Time" => $time_comments,
						"Users_id_Users" => $this->session->userdata("session_id_Users"),
						"Dead_Person_id_Dead_Person"=>$this->session->userdata('Session_id_Dead_Person')


				);

				$this->db->insert("mourn_over",$insert_comments);
				?>
				<script type="text/javascript">
					txt_comments.value="";
				</script>

				<?php


		  }
		  //ถ้าไม่ได้ login ในระบบ
		  else{

		  	//ตรวจสอบความซ้ำของ Not_user ที่โพสซ้ำ

		  	  			$check_not_user_cc="SELECT * FROM  not_user";
                        $query_check_not_user_cc=$this->db->query($check_not_user_cc);
                        $data22_check_not_user_cc=$query_check_not_user_cc->result();

                     	$check_cc_not_user=false;
                        foreach($data22_check_not_user_cc as $otP){
                        	//เช็คความซ้ำซ้อนของ ชื่อ นามสกุล  กรณีที่เป็นคนใหม่เข้ามา comment
                        	
                        		if(trim($otP->Fname)==trim($Fname_comment)){          		
                        			if(trim($otP->Lname)==trim($Lname_comment)){
                        				$check_cc_not_user=true;

                        		
                        				$insert_comments=array(
											"Comment"=>$txt_comments,
											"Time" => $time_comments,
											"not_user_id_Not_User" =>$otP->id_Not_User,
											"Dead_Person_id_Dead_Person"=>$this->session->userdata('Session_id_Dead_Person')
										);
										$this->db->insert("mourn_over",$insert_comments);
                        			}
                        		}
                        	
  	
                    	}
                    //กรรณีที่ ไม่ซ้ำ
                        	if($check_cc_not_user==false){
                        		
                        		//สร้าง ID ให้กับ not user
								  	$new_id_user =mysql_result(mysql_query("Select Max(substr(id_Not_User,-4))+1 as MaxID from  not_user"),0,"MaxID");
						  			$id_Users1="NT".sprintf("%04d",$new_id_user);

								  	$insert_not_user=array(
								  									"id_Not_User" => $id_Users1,
																	"Fname" => $Fname_comment,
																	"Lname" => $Lname_comment,
																	"Ip_address" => $ip_add
															);
						 
									$this->db->insert("not_user",$insert_not_user);

									$insert_comments=array(
											"Comment"=>$txt_comments,
											"Time" => $time_comments,
											"not_user_id_Not_User" => $id_Users1,
											"Dead_Person_id_Dead_Person"=>$this->session->userdata('Session_id_Dead_Person')
										);
									$this->db->insert("mourn_over",$insert_comments);


                        	}

				?>
				<script type="text/javascript">
					txt_comments.value="";
				</script>

				<?php


		
		  }
		  

}

//จบของ $txt_comments!=null) ตรวจสอบว่ามีการส่งค่าของตัว comment

                     




}



public function view_a_comments(){

                        //ส่วนของการ Query  
	  				    $check2="SELECT * FROM  mourn_over order by id_Mourn_Over DESC ";
                        $query2=$this->db->query($check2);
                        $data22=$query2->result();

                        $b=$this->session->userdata('Session_id_Dead_Person');


                        $check_id_dead="SELECT * FROM  dead_person";
                        $query_check_id_dead=$this->db->query($check_id_dead);
                        $data22_id_user=$query_check_id_dead->result();

                        $joapaw="";
                        foreach($data22_id_user as $ot){
                        	if(trim($ot->id_Dead_Person)==$b){
                        		$joapaw=$ot->Users_id_Users;

                        	}
                        }


 //เริ่มแถบแสดงคอมเม้น
		 echo" 
		 <div style=' height:380px; overflow: auto;'>

   		 <table cellspacing='0' >
                       <th > ";
                        
            foreach ($data22 as $dd2) {
                   $a=$dd2->Dead_Person_id_Dead_Person;
                      			
                
                 //ตรวจสอบว่าตรงกับผู้ตายคนไหน
                if(trim($b)==trim($a)){
                              	
                              	
                              	//ตรวจสอบว่า เป็นเจ้าภาพ ?
          
                     if(trim($dd2->Users_id_Users)==$joapaw){
                              		
                             		
                          echo "

                            <blockquote class='quote-icon'>
				                <em>
				                   <div align=left> <em class='speach-left-title'>เจ้าภาพงาน พูดว่า:</em></div>
				                    <span class='icon icon-shadow-user1'></span>
				                    <p class='speach-left' >";echo $dd2->Comment;
				                        echo "<br>";
				                        echo "<em class='speach-time'>";echo $dd2->Time; echo" </em>
				                    </p>
				                </em>
				            </blockquote>


				            <div class='clear'></div> 
				            ";


                      }

                      //ตรวจสอบ ID อื่น ที่ไม่ใช่เจ้าภาพโพส
                      if($dd2->Users_id_Users!=$joapaw&&$dd2->Users_id_Users!=null){
                              		echo " 
                              		 <blockquote class='quote-icon-right' >
						                <em>
						                    <em class='speach-right-title'>";

						                     $check_id_users="SELECT * FROM  users";
                        					 $query_check_id_users=$this->db->query($check_id_users);
                        					 $data223_id_user=$query_check_id_users->result();


                        					foreach ($data223_id_user as $wz) {
                      								

                      								if($wz->id_Users==$dd2->Users_id_Users){
                      									echo  $wz->Fname;
                      									echo '&nbsp;'.$wz->Lname;
                      								}

                      						}

						                    echo" พูดว่า:</em>
						                    <span class='icon quote-icon-right icon-shadow-user2'></span>

						                    <p class='speach-right'>";echo $dd2->Comment;
						                echo "<br>";
				                        echo "<em class='speach-time'>";echo $dd2->Time; echo" </em>
						                    </p>
						                </em>
            						</blockquote>
                            		<div class='clear'></div> 

				            		";

                    }

                    //ตรวจสอบ คนนอกที่ไม่ใช่เจ้าภาพโพส
                    if($dd2->not_user_id_Not_User!=null&&$dd2->Users_id_Users==null){
                              		 echo " 
                              		 <blockquote class='quote-icon-right' >
						                <em>
						                    <em class='speach-right-title'>";


						                     $check_id_not_user="SELECT * FROM  not_user";
                        					 $query_check_id_not_user=$this->db->query($check_id_not_user);
                        					 $data223_not_user=$query_check_id_not_user->result();


                        					foreach ($data223_not_user as $wzS) {
                      								

                      								if($wzS->id_Not_User==$dd2->not_user_id_Not_User){
                      									echo  $wzS->Fname;
                      									echo '&nbsp;'.$wzS->Lname;
                      								}

                      						}



						                    echo" พูดว่า:</em>
						                    <span class='icon quote-icon-right icon-shadow-user3'></span>

						                    <p class='speach-right'>";echo $dd2->Comment;
						                echo "<br>";
				                        echo "<em class='speach-time'>";echo $dd2->Time; echo" </em>
						                    </p>
						                </em>
            						</blockquote>
                            		<div class='clear'></div> 

				            		";

                              	}

                }


                              
                    }
                   
                $this->db->where('Dead_Person_id_Dead_Person',$this->session->userdata('Session_id_Dead_Person'));
			 	$this->db->from('mourn_over');
			 	$abT = $this->db->count_all_results();

                      if($abT==0){
                      	
                          echo "
                           <font size='16' style='text-align:center;background: #DDDDDD;font-size:20px;font-weight:bold;font-family:Arial' >-ไม่มีข้อความไว้อาลัย- </font> 
                            	
                          ";  
                      }

                   //จบส่วนแสดงผลคอมเม้น


          echo "    </th>
            </table>
            </div>
        </div>
      </div>";
		


}



public function ab(){
				$this->db->where('Dead_Person_id_Dead_Person',$this->session->userdata('Session_id_Dead_Person'));
			 	$this->db->from('mourn_over');
			 	$ab = $this->db->count_all_results();

			 	echo "<div id='txt_ab'>"; 
			 	echo "
			 	 <input type='text' style='visibility: hidden;' name='contactEmailField' id='testx' value='$ab' />
			 	";
			 	echo "</div>";
			

				?>
					<script type="text/javascript">
		                  var url1=$('#url1').val()+'index.php/comment/mono';
		                  $('#TTTT').load(url1,{
		                  		old_comment2:old_comment.value,
		                  		test:testx.value
		                  });

              		</script>


				<?php

	}

	

	public function mono(){
		$a= $this->input->post('test');
		$b= $this->input->post('old_comment2');

		if($a!=$b){
			

			?>
				<script type="text/javascript">
						var url6=$('#url6').val()+'index.php/comment/MO';
          				$('#txt_old_comment').load(url6,{});

          					 
         
                  		var url1=$('#url1').val()+'index.php/comment/view_a_comments';
		                  $('#wat').load(url1,{

		                  });
		                 
				</script>


			<?php
			
		}
		if($a==$b){
				

		}

	}
	 
	



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */