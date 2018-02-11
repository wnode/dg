<?php

Class Autentica{
    
    function permissao(){
      
      $ci =& get_instance();
      $ci->load->model("Ion_auth_model");
	  $ci->load->library('ion_auth');
      
      $groups = $ci->ion_auth_model->groups()->result_array();
	  
	  $url = $ci->uri->segment(1);
      if( $url !== "auth"){
          if (!$ci->ion_auth->logged_in())
		  {
			redirect('auth/login');
		  }
	      else{
			return true;
		  }
      }
	  else{
		  return true;
	  }
	  
      
      /*foreach ($groups as $group){
          
          if (!$ci->ion_auth->in_group($group['name']))
	  {
		$ci->session->set_flashdata('message', 'You must be a gangsta to view this page');
		//redirect('auth/login');
	  }
          else{
              echo $group['name'];
			  echo "<a href='logout'>Logout</a>";
          }
      }
	  */
	  function logout(){
		$ci->ion_auth->logout();
		redirect('auth/login');
	}
      
      
      //$url = $ci->uri->segment(1);
      //if( $url == "carroceria"){
        //  redirect('auth/login');
      //}
      //else{
        //  return TRUE;
      //}
    }
}