<?php
	class upload extends CI_Controller {
		function __construct()
        {
                                parent::__construct();
        }


        public function index(){



        	
        }

        public function upload_file(){
        	$config['upload_path']="image/";
        	$config['allowed_types']="jpg|gif|png";
        	// $config['max_size']="1024";
        	// $config['max_height']="1024";
        	// $config['max_width']="1024";
        	// $config['image_height']="200px";

        	$this->load->library("upload",$config);

        	if($this->upload->do_upload("picture")){  //ไม่มีปัญหา
        		$data=$this->upload->data();
        		rename($data['full_path'],$data['file_path'].$this->session->userdata('Session_id_Dead_Person').'.jpg');        		
        		//print_r($data);

                $ar=array(
                            "Pic_dead"=>$this->session->userdata('Session_id_Dead_Person')
                            
                );

                $this->db->where('id_Dead_Person', $this->session->userdata('Session_id_Dead_Person'));
                $this->db->update('dead_person', $ar); 

                
        	}
        	// else{
        	// 	echo $this->upload->display_errors();
        	// }



            $this->load->helper('url');
            redirect('main_con');

        }

        public function not_upload(){

        }

















    }

?>