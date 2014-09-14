<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
    	  
    	redirect('welcome/login');
    
	}
	 public function login()
  	{

  			$this->load->view('login');		
	}

	public function view_login(){
		$this->load->view('view_login');
	}

	public function check_login(){


		 $data_user=$this->input->post('username');
		 $data_pass=$this->input->post('password');		
  		 

  		 $check="SELECT * FROM  users ";
  		 $query=$this->db->query($check);
  		 $data2=$query->result();

  			$login_success=false;
  		 foreach ($data2 as $dd) {

  		 	if($dd->User==$data_user&&$dd->Password==$data_pass){
  		 		$login_success=true; 
  		 		$Fname=$dd->Fname;
  		 		$Lname=$dd->Lname;
  		 		
  		 			

	    			

			    	$data_session=array(
			    					'session_login'=>true,
			    					'session_Fname'=>$Fname,
			    					'session_Lname'=>$Lname,
			    					'session_account_Users'=>$data_user,
			    					'session_login_width'=>$login_fb=false,
			    					'session_id_Users'=>$dd->id_Users,
			    					'session_iduser'=>$dd->User,
			    					'session_login_fb'=>false,
			    					
			    					'session_img_profile'=>image_asset('icon_shadow/member/user_un.png')
			    	);		
			     	$this->session->set_userdata($data_session);
	    			 //$this->load->view("main",$data_sent);
	    			// redirect('main_con',$data_sent);
	    			redirect("main_con");

  		 	}
  		 	
  		 }


  		 if($login_success==false){
  		 			redirect('welcome/login');
  		 			
	    			
  		 }





	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */