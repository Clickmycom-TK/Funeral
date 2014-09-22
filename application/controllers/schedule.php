<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class schedule extends CI_Controller {
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
    		 sleep(1.2);
		 if($this->session->userdata('Session_id_Dead_Person')!=null){
      
    		 echo " 

            


    <div class='content'>
    		  <div class='column no-bottom'>
                    <h3>กำหนดการณ์ในพิธี สวดพระอภิธรรมศพ</h3>
                    <p>

                    <div class='formFieldWrap'>
                            <label class='field-title contactNameField' >
                            <input type='text' style='text-align:center;background: #DDDDDD;font-size:20px;font-weight:bold;font-family:Arial' disabled name='contactEmailField' value=";echo $this->session->userdata('Session_First_Dead_Person').$this->session->userdata('Session_Fname_Dead_Person').'&nbsp;&nbsp;&nbsp;'.$this->session->userdata('Session_Lame_Dead_Person'); echo"  class='contactField requiredField requiredEmailField' id='contactEmailField'/>
      
                        </div>
                       





                        
                    </p> 
          </div>

            <br/>
          

                 <table cellspacing='0' class='table' style='font-size: 14px'>
                      <tr >
                          <th >วัน/เดือน/ปี</th>
              
                          <th >เวลา</th>
                          <th >เจ้าภาพ</th>
                         
                      </tr>
                          



                      

                      ";

               



                      
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
                                      echo "<td >
                                      
                                      <center>".$Date."&nbsp;&nbsp;&nbsp;ที่&nbsp;&nbsp;&nbsp;".$Num_date."&nbsp;&nbsp;&nbsp;เดือน".$Mounth."&nbsp;&nbsp;&nbsp;พ.ศ.".$Year."</center></td>";
                                   
                                      // echo "<td><center>"."ที่่&nbsp;&nbsp;".$Num_date."</center></td>";
                                      // echo "<td><center>"."เดือน่&nbsp;&nbsp;".$Mounth."</center></td>";
                                      // echo "<td><center>"."พ.ศ.&nbsp;&nbsp;".$Year."</center></td>";
                                      echo "<td><center>"."".$Time."</center></td>";
                                      
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

                else{
                	redirect('refresh');
                }

                      
                   
                    

                      

                      echo "
                      




                  </table>

			<div class='maps-container'>
        		<iframe class='responsive-image maps' src='view_login'></iframe>
            </div>
          	<br>
            </div>


    ";

	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */