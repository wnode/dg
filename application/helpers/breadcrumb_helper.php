<?php

if(!function_exists('create_breadcrumb')){
	function create_breadcrumb(){
	  $ci = &get_instance();
	  $i=1;
	  $uri = $ci->uri->segment($i);
	  $link = '<ol class="breadcrumb">';
	  $link .='<li><a href="'.base_url().'">Início</a></li>';
	 
	  $segs = count($ci->uri->segment_array());
	  
	  if($segs == 3){
		  $segs = 2;
	  }
	  
	  
	  $cont = 1;
	  while($cont <= $segs){
		$prep_link = '';
	  for($j=1; $j<=$i;$j++){
		$prep_link .= $ci->uri->segment($j).'/';
	  }
	 
	  if($ci->uri->segment($i) == 'editar' or $ci->uri->segment($i+1) == ''){
		$link.='<li>';
		$link.=$ci->uri->segment($i).'</li> ';
	  }
	  else{
		if($ci->uri->segment($i) == 'edit_group'){
			$link.='<li>';
			$link.='Editar Grupo</li> ';
		}
		else{
			if($ci->uri->segment($i) == 'deactivate'){
				$link.='<li>';
				$link.='Desativar Usuário</li> ';
			}
			else{
				if($ci->uri->segment($i) == 'edit_user'){
					$link.='<li>';
					$link.='Editar Usuário</li> ';
				}
				else{
					$link.='<li><a href="'.site_url($prep_link).'">';
					$link.=$ci->uri->segment($i).'</a></li> ';
				}
			}
			
		}
		
	  }
	  
	 
	  $i++;
	  $cont++;
	  }
		$link .= '</ol>';
		return $link;
	}
}