<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class register extends CI_Controller {
		function __construct()
                {
                                parent::__construct();
                             
                }
	
	public function index()
	{ 
		$pattern_name = '/^[a-zA-Zก-ฮ]*$/';
		$data['user']='';
		$data['pass']='';
		$data['cpass']='';
		$data['Fname']='';
		$data['Lname']=''; 
	
		$notnull=1;
		$get=false;
		$this->load->helper('url');
		if($this->input->post("btnsave")!=null){

			$user=$this->input->post("user");
			$data['user']=$user;
			$pass=$this->input->post("pass");
			$data['pass']=$pass;
			$cpass=$this->input->post("cpass");
			$data['cpass']=$cpass;
			$Fname=$this->input->post("Fname");
			$data['Fname']=$Fname;	
			$Lname=$this->input->post("Lname");
			$data['Lname']=$Lname;


			if($pass!=$cpass){
				$notnull=2;
				echo '<script type="text/javascript">';
		        	echo 'alert("รหัสผ่านไม่ตรงกัน");';
		        echo '</script>';
			}

			//ถ้าข้อมูลไม่ครบ
			if(($user&&$pass&&$Fname&&$Lname)==null){
				$notnull=2;
				echo '<script type="text/javascript">';
	        		echo 'alert("กรุณาระบุข้อมูลให้ครบถ้วน");';
	        	echo '</script>';
			}

			
			
			
			if(($notnull==1)&&($pass==$cpass)){
				if((preg_match($pattern_name, $Fname))&&(preg_match($pattern_name, $Lname))) {

						//ถ้ามี user อยู่แล้ว
						$check="SELECT * FROM  users ";
  		 				$query=$this->db->query($check);
  		 				$data2=$query->result();

  		 			
  		 				$user_double="";

  		 				foreach ($data2 as $dd) {
  		 					$check_user=$dd->User;
  		 					
  		 					if($check_user==$user){
  		 						$user_double=true;
					  		 		echo "USER DOUBLE";
  		 					}
				  		 	else{
				  		 		$user_double=false;
				  		 	}
  						 }

  						 if($user_double==false){
  						 	$get=true;
  						 	$new_id_user =mysql_result(mysql_query("Select Max(substr(id_Users,-4))+1 as MaxID from  users"),0,"MaxID");
  						 	$id_Users1="Us".sprintf("%04d",$new_id_user);
							
							$ar=array(
							"User"=> $this->input->post("user"),
							"Password" => $this->input->post("pass"),
							"Fname" => $this->input->post("Fname"),
							"Lname" => $this->input->post("Lname"),
							"id_Users" => $id_Users1
							);

							$this->db->insert("users",$ar);
							
			    			$data_sent['login']=true;
			    			$data_sent['img_profile']=image_asset('icon_shadow/member/user_un.png');
			    			$data_sent['link']="login_fb";
			    			$data_sent['id']=$user;
			    			$data_sent['first_name']=$Fname;	
			    			$data_sent['last_name']=$Lname;
			    			$data_sent['login_fb']=false;
			    			
			    			$data_sent['search_found']=false;
			    
			    			
			

			    			// $data_session=array(
			    			// 		'session_login'=>true,
			    			// 		'session_Fname'=>$Fname,
			    			// 		'session_Lname'=>$Lname,
			    			// 		'session_user'=>$user,
			    			// 		'session_login_width'=>$login_fb=false,
			    			// 		'session_id_Users'=>$id_Users1,
			    			// 		'session_img_profile'=>image_asset('icon_shadow/member/user_un.png')
			    			// );
			    			// $this->session->set_userdata($data_session);

			    			$data_session=array(
			    					'session_login'=>true,
			    					'session_Fname'=>$Fname,
			    					'session_Lname'=>$Lname,
			    					'session_login_width'=>$login_fb=false,
			    					'session_id_Users'=>$dd->id_Users,
			    					'session_iduser'=>$this->input->post("user"),
			    					'session_login_fb'=>false,
			    					
			    					'session_img_profile'=>image_asset('icon_shadow/member/user_un.png')
			    	);		
			     	$this->session->set_userdata($data_session);
			     	    			redirect("main_con");



  						 }
    			}
    			else{
    				$notnull=2;
    				echo '<script type="text/javascript">';
	        			echo 'alert("กรุณากรอกชื่อหรือนามสกุลของคุณอีกครั้ง");';
	        		echo '</script>';
    			}
		//	exit();
			}


			
		}
		
			if($get==false){
				$this->load->view("register",$data);
			}
			
		
		
	}

	


		
	
}
?>
