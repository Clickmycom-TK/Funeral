<?php
	class search_people extends CI_Controller {
		function __construct()
        {
                                parent::__construct();
        }


        public function index(){
                    



          $this->load->view("search_people");
                   
              

                
        }

         public function send(){
            if($this->input->post("btn_search")!=null){
                
                      $Frist_name_people = $this->input->post();
                      if($Frist_name_people){
                         $wat= $Frist_name_people['thisFname'];
                      }

                      $Fname_people=$this->input->post("Fname_people");
                      $Lname_people=$this->input->post("Lname_people");


                          $Search_dead="SELECT * FROM  dead_person ";
                          $query=$this->db->query($Search_dead);
                          $search_data_dead=$query->result();

                          $Search_dead_people=false;

                          foreach ($search_data_dead as $dead) {
                            $First=$dead->First;
                            $Fname=$dead->Fname;
                            $Lame=$dead->Lame;

                                if($wat==$First){
                                    
                                    if($Fname_people==$Fname){
                                      if($Lname_people==$Lame){
                               
                                        $Search_dead_people=true;
                                        $Vara=$dead->Vara;
                                        $id_dead=$dead->id_Dead_Person;
                                        $picture_dead=$dead->Pic_dead;
                                      
                                      }
                                    }
                                }
                          }



                      if($Search_dead_people==true){

                          $data_session=array(
                            'Session_id_Dead_Person'=>$id_dead,
                            'Session_First_Dead_Person'=>$First,
                            'Session_Fname_Dead_Person'=>$Fname,
                            'Session_Lame_Dead_Person'=>$Lame,
                            'session_Users_id_Users_My_Dead'=>$id_dead,
                            'session_First_name_Dead'=>$First,
                            'session_Fname_Dead'=>$Fname,
                            'session_Lname_Dead'=>$Lame

                          );
                          
                          $this->session->set_userdata($data_session);
                          redirect('main_con');

                          
                        }
                        
                        else{
                       
                            redirect('search_people');

                        }

                      
            }
            

        }

        // public function index1(){

        //       sleep(2.1);
        //         $Frist_name_people=$this->input->post('Frist_name_people');
        //         $Fname_people=$this->input->post('Fname_people');
        //         $Lname_people=$this->input->post('Lname_people');
                 

                  
        //                   $Search_dead="SELECT * FROM  dead_person ";
        //                   $query=$this->db->query($Search_dead);
        //                   $search_data_dead=$query->result();

        //                   $Search_dead_people=false;

        //                   foreach ($search_data_dead as $dead) {
        //                     $First=$dead->First;
        //                     $Fname=$dead->Fname;
        //                     $Lame=$dead->Lame;



                            

        //                     if($Frist_name_people==$First){
        //                         if($Fname_people==$Fname){
        //                           if($Lname_people==$Lame){
        //                             $Search_dead_people=true;
        //                             $Vara=$dead->Vara;
        //                             $id_dead=$dead->id_Dead_Person;
        //                             $picture_dead=$dead->Pic_dead;
                                  
        //                           }
        //                         }
        //                     }
        //                   }



        //               if($Search_dead_people==true){

        //                 $data_session=array(
        //                   'Session_id_Dead_Person'=>$id_dead,
        //                   'Session_First_Dead_Person'=>$First,
        //                   'Session_Fname_Dead_Person'=>$Fname,
        //                   'Session_Lame_Dead_Person'=>$Lame


        //                 );
                        
        //                 $this->session->set_userdata($data_session);



        //                         //echo $picture_dead;
        //                 echo "
        //                    <div class='content'>
        //                       <div class='container slider-wrapper'>
        //                          <div class='slider-container'>
        //                              <div id='slider' class='swipe'>
        //                                  <ul>
        //                                      <li style='display:block'>
        //                                          <div class='slider-image'>
        //                                              <div class='swipe-img'>";
                             
        //                                               if($picture_dead!='default'){
        //                                   echo " <img class='swipe-img' style=height: 128px;width:128px src=";echo base_url(); echo"/image/";echo $picture_dead;echo".jpg>";
        //                                  }
        //                                  else{
        //                                   echo " <img class='swipe-img' style=height: 128px;width:128px src=";echo base_url(); echo"/image/";echo "default";echo".jpg>";
        //                                  }




        //                                               echo "</div> 
        //                                              <p class='swipe-text'>"; echo $Frist_name_people.' '.$Fname_people.' '.$Lname_people; echo "</p>
        //                                          </div>
        //                                      </li>
                                             
        //                                  </ul>
        //                              </div>
                                                    
        //                          </div>
        //                      </div>
                        
        //                      <div class='container no-bottom'>
        //                       ";echo image_asset('misc/dok copy.png'); echo "
        //                          <div class='titlebody'>
        //                           <style>
        //                             .text_sp{
        //                               text-indent:15px;
        //                             }
        //                           </style>
        //                          <p class='text_sp'>";echo $Vara; echo "</p> 
        //                         </div>
        //                    </div>
        //                   </div>

        //                   ";

        //                 }
        //                 else{
                       
        //                     redirect('refresh');

        //                 }



           

            

        // }

}




?>