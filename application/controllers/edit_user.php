<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class edit_user extends CI_Controller {
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
    
		 $edit_user="


	<div class='content'>
        <div class='container '>
          	<h3><b>ค้นหา ผู้เสียชีวิต</b></h3>
           	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;กรุณาทำการระบุข้อมูลให้ถูกต้อง</p>
        </div>

        <div class='container slider-wrapper'>
           <div class='slider-container'>
               <div id='slider' class='swipe'>
                   <ul>
                       <li style='display:block'>
                           <div class='slider-image'>
                            <img class='swipe-img' src='../assets/images/slider/2.jpg' alt='img'>
                           </div>
                       </li>
                   </ul>
               </div>                            
           </div>
       </div>

        <fieldset>             
           	<div class='formFieldWrap'>
                <label class='field-title contactNameField' >คำขึ้นต้น:<span>(required)</span></label>
                            <select class='contactField requiredField requiredEmailField'>
                                  <option value='volvo'>เด็กชาย</option>
                                  <option value='volvo'>เด็กหญิง</option>
                                  <option value='volvo'>นาย</option>
                                  <option value='volvo'>นาง</option>
                                  <option value='volvo'>นางสาว</option>
                            </select>
            </div>
                        
            <div class='formFieldWrap'>
                            <label class='field-title contactEmailField' >ชื่อ: <span>(required)</span></label>
                            <input type='text' name='contactEmailField' value=''  class='contactField requiredField requiredEmailField' id='contactEmailField'/>
            </div>
                        
            <div class='formTextareaWrap'>
                            <label class='field-title contactMessageTextarea' >นามสกุล: <span>(required)</span></label>
                            <input type='text' name='contactEmailField' value=''  class='contactField requiredField requiredEmailField'/>
            </div>
                        
            <div class='formSubmitButtonErrorsWrap'>
                            <input type='submit' class='buttonWrap black ' name='btn_search'  value='ค้นหา'/>
            </div>
        </fieldset>       
   	</div>





		 ";

     echo $edit_user;
     echo "string";


	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */