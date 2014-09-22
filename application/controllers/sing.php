<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sing extends CI_Controller {
	
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
			
             <li class='list-pencil'><h4 class='heading'>&nbsp;&nbsp;&nbsp;ลงชื่อขอเป็นเจ้าภาพงานให้&nbsp;
 

             ";
             echo $this->session->userdata('session_First_name_Dead').$this->session->userdata('session_Fname_Dead')."&nbsp;&nbsp;".$this->session->userdata('session_Lname_Dead'); echo"

             </h4></li>
            
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
                <label class='contactMessageTextarea'>หมายเหตุ : </label>
                <textarea class='contactTextarea' id='txt_comments' ></textarea>
            </div>
           
            <div class='formSubmitButtonErrorsWrap'>
                   <a href='#'  class='buttonWrap grey pageload-link-main ' id='getcomment'>ลงชื่อแสดงความประสงค์เป็นเจ้าภาพงาน</a>
                            
          


		";



		echo "<br>

		<div class='decoration'></div>  
			
             <li class='list-document'><h4 class='heading'>&nbsp;&nbsp;&nbsp;รายชื่อผู้ยื่นขอเป็นเจ้าภาพงาน";

            echo"
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
		$this->view_a_sing();
echo "</div>";
echo"<div class='stat'>
                <p class='stat-left'></p>
                <p class='stat-right'>&nbsp;:<strong class='decrease'>";
               
		 		echo"</strong></p>
                <div class='clear'></div>
                <span class='stat-background'>
                    <span class='stat-cleaner'></span>
                    <span class='percent blue'></span>
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
                <p class='stat-left'>ตารางแสดงผู้ยื่นขอเป็นเจ้าภาพงาน</p>
                <p class='stat-right'>จำนวนผู้ยื่นขอทั้งหมด&nbsp;:<strong class='decrease'>";
                echo $cntTTT;
		 		echo"&nbsp;รายชื่อ</strong></p>
                <div class='clear'></div>
                <span class='stat-background'>
                    <span class='stat-cleaner'></span>
                    <span class='percent blue'></span>
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


public 	function view_a_sing(){

	?>
	<style type="text/css">

		#circle { 
			width: 13px; /* ความกว้าง */
			height: 13px; /* ความสูง */
			background: red; /* สี */
			-moz-border-radius: 70px; 
			-webkit-border-radius: 70px; 
			border-radius: 70px;
			}
			#rectangle {
width: 140px; 
height: 80px;
background: green;
}

	</style>

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


}


	



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */