<?php
class login_fb extends CI_Controller{
		public $user = null;

	public function __construct(){
		
		parent::__construct();
		parse_str($_SERVER['QUERY_STRING'],$_REQUEST);
		$this->load->library('facebook',array("appId"=>'361675743907292',"secret"=>'65346749b5c11d2842b322bcc99f247e'));

		$this->user=$this->facebook->getUser();

	}
	
	public function index(){
		// echo $this->facebook->getLoginUrl();

		if($this->user){
			try{
				$user_profile=$this->facebook->api('/me');

				
		
				$image['img_profile']="<img src='https://graph.facebook.com/".$user_profile['id']."/picture?type=large '>";
				$image['id']=$user_profile['id'];
				$image['first_name']=$user_profile['first_name'];
				$image['last_name']=$user_profile['last_name'];
				$image['link']=$user_profile['link'];
				$image['login']=true;
				$image['login_fb']=true;
				$image['search']=false;
		

				$data_session=array(
							'session_login'=>true,
	    					'session_Fname'=>$image['first_name'],
	    					'session_id'=>$image['id'],
	    					'session_Lname'=>$image['last_name'],
	    					'session_link'=>$image['link'],
	    					'session_login_width'=>$login_fb=true,
	    					'session_img_profile'=>$image['img_profile']
	    			);
	    			$this->session->set_userdata($data_session);



				$this->load->view("main",$image);
				// echo $image;
				// echo "<br/>";

				// echo "<meta charset='UTF-8' />";
				// echo "User-ID: ";
				// echo $user_profile['id'];
				// echo "<br/>";

				// echo "User-Name: ";
				
				// echo "<br/>";


				// echo "User-First-Name: ";
				// echo $user_profile['first_name'];
				// echo "<br/>";



				// echo "User-Last-Name: ";
				// echo $user_profile['last_name'];
				// echo "<br/>";


				// echo "User-Last-Link: ";
				// echo $user_profile['link'];
				// echo "<br/>";


				// echo "User-Last-Gender: ";
				// echo $user_profile['gender'];
				// echo "<br/>";


				// echo "User-Last-Locale: ";
				// echo $user_profile['locale'];
				// echo "<br/>";


				// echo "User-Last-Mail: ";
				// echo $user_profile['email'];
				// echo "<br/>";
			}catch(FacebookApiException $e){

				print_r(e);
				$user = null;

			}
		} 

		if($this->user){

			$logout = $this->facebook->getLogoutUrl(array("next"=>base_url().'index.php/login/logout'));

			// echo "<a href='$logout'>Logout</a>";
			session_destroy();
			
		}else{
			$login = $this->facebook->getLoginUrl(array("basic_info"=>'id,first_name,last_name,link,'));
			
			// $login = $this->facebook->getLoginUrl(array("basic_info"=>'id,name,first_name,last_name,link,username,gender,locale'));

			$login = $this->facebook->getLoginUrl(array("scope"=>'email'));


			redirect($login);
		}

		


	}


	function logout(){
		session_destroy();
		redirect(base_url().'index.php/login');
	}

	


}



?>