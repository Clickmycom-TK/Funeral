<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class view_profile extends CI_Controller {
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

	
		 $this->load->helper('url');
    		 sleep(1.1);
			//ตรวจค่า session id ของผู้ตาย session นี้มาจาก userแบบสมัครสมาชิก เป็นผู้เพิ่มผู้ตาย
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
				                $Old=$dead->Old;
				                $Birthday=$dead->Birthday;
				                $Address_Bridday=$dead->Address_Bridday;
				                $Deadday=$dead->Deadday;
	                        	$Vara=$dead->Vara;
	                        	$Tel=$dead->Tel;
	                        	
	                        	$Name_Father=$dead->Name_Father;
	                        	$Name_Mather=$dead->Name_Mather;
	                        	$picture_dead=$dead->Pic_dead;
	                      		$Users_id_Users=$dead->Users_id_Users;
	                    
	                }
              }

              //เอาไปใช้ในการ comments
              $data_session_dead_to_comments=array(
			    					'session_Users_id_Users_My_Dead'=>$Users_id_Users,
			    					'session_Fname_Dead'=>$Fname,
			    					'session_First_name_Dead'=>$First,
			    					'session_Lname_Dead'=>$Lame
			    					
			    	);
              $this->session->set_userdata($data_session_dead_to_comments);




	   echo "
               <div class='content'>
                <div class='column no-bottom'>
                    <h3>ประวัติโดยสังเขป</h3>
            
          		</div>
                  <div class='container slider-wrapper'>
                     <div class='slider-container'>
                         <div id='slider' class='swipe'>
                             <ul>
                                 <li style='display:block'>
                                     <div class='slider-image'>
                                         <div class='swipe-img'>";
                                         if($picture_dead!='default'){
                                         	echo " <img class='swipe-img' style=height: 128px;width:128px src=";echo base_url(); echo"/image/";echo $picture_dead;echo".jpg>";
                                         }
                                         else{
                                         	echo " <img class='swipe-img' style=height: 128px;width:128px src=";echo base_url(); echo"/image/";echo "default";echo".jpg>";
                                         }
                                         

                                          echo "</div> 
                                         <p class='swipe-text'>"; echo $First.' '.$Fname.' '.$Lame; echo "</p>
                                     </div>
                                 </li>
                                 
                             </ul>
                         </div>
                                        
                     </div>
                 </div>
            
                 <div class='container no-bottom'>

                 <div class='column no-bottom'>
                    <h3>ประวัติ"; echo $First.' '.$Fname.' '.$Lame; echo "</h3>
                   
          		</div>
                  	<p>
                        &nbsp;&nbsp;&nbsp;&nbsp;<span class='icon '></span>
                        ";
                        echo "$First $Fname $Lame เกิดเมื่อ  $Birthday  ที่$Address_Bridday บิดาชื่อ  $Name_Father  มารดาชื่อ  $Name_Mather
                         มีพี่น้องร่วมสายเลือดเดียวกัน ดังนี้";


                     echo "
                    </p>

                     <div class='titlebody'>
                      <style>
                        .text_sp{
                          text-indent:15px;
                        }
                      </style>
                     ";

                      $relatives_dead="SELECT * FROM  relatives ";
		              $query=$this->db->query($relatives_dead);
		              $relatives_data_dead=$query->result();

		              $education_dead="SELECT * FROM  education ";
		              $query=$this->db->query($education_dead);
		              $education_data_dead=$query->result();



		              $total=0;
              		foreach ($relatives_data_dead as $relatives) {
              			$relatives_id=$relatives->Dead_Person_id_Dead_Person;
	                	
			                if($relatives_id==$this->session->userdata('Session_id_Dead_Person')){
			                  		    $total++;
			                  		    $Name_relaives=$relatives->Name_relaives;
			                  		   
						               echo "<p class='text_sp'><b>$total.</b>&nbsp;$Name_relaives</p>";
			                      			
			            				
			                }          
              		}

              		echo " 
              		<div class='column no-bottom'>
                    	<h3>ประวัติการศึกษา</h3>
          			</div>";
          			foreach ($education_data_dead as $education) {
              				$education_id=$education->dead_person_id_Dead_Person;
	                	
			                if($education_id==$this->session->userdata('Session_id_Dead_Person')){
			                  		   
			                  		    $Name_education=$education->Education_name;
			                  		   
						               echo "<p class='text_sp'><b></b>&nbsp;$Name_education</p>";
			                      			
			            				
			                }          
              		}

              		echo "
                     	<div class='column no-bottom'>
                    		<h3>วาระสุดท้าย</h3>
          				</div>
                     	";echo "<p class='text_sp'>$Vara</p>";
                     	echo "
                    </div>
               </div>
              </div>

            ";



	}
	else{
		
		redirect('refresh');



	}

     















	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */