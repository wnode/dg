<?php
/* 
 * Generated by CRUDigniter v2.0 Beta 
 * www.crudigniter.com
 */
 
class Combustivel extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Combustivel_model');
    } 

    /*
     * Listing of combustiveis
     */
    function index()
    {
        $data['combustiveis'] = $this->Combustivel_model->get_all_combustiveis();
        $data['pagina'] = "Combustível";
        $data['sub_pagina'] = "Listar Combustível";
		
		if ($this->session->flashdata('msg')) {
            if ($this->session->flashdata('msg') == 'cadastrar') {
                $data['msg'] = '<div class="alert alert-success" role="alert"><b>'.$this->session->flashdata('nome').' </b>cadastrado com sucesso!</div>';
            }
            else{
                $data['msg'] = '<div class="alert alert-success" role="alert"><b>'.$this->session->flashdata('nome').' </b>atualizado com sucesso!</div>';   
            }
        }
		
        $this->load->view('header_view',$data);
        $this->load->view('combustivel/index',$data);
        $this->load->view('footer_view',$data);
    }

    /*
     * Adding a new combustivei
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('combustiveis_cod','Código','required|max_length[20]');
		$this->form_validation->set_rules('combustiveis_nome','Combustível','max_length[150]|required');
		$this->form_validation->set_rules('combustiveis_abre','Abreviatura','max_length[20]|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'combustiveis_cod' => $this->input->post('combustiveis_cod'),
				'combustiveis_nome' => $this->input->post('combustiveis_nome'),
				'combustiveis_abre' => $this->input->post('combustiveis_abre'),
            );
            
            $combustivel_id = $this->Combustivel_model->add_combustivel($params);
			
			$nome = $this->input->post('combustiveis_nome');
			$this->session->set_flashdata(array('msg' => 'cadastrar' , 'nome' => $nome));
			
            redirect('combustivel/index');
        }
        else
        {
            $data['pagina'] = "Combustível";
            $data['sub_pagina'] = "Cadastrar Combustível";
            $this->load->view('header_view',$data);
            $this->load->view('combustivel/add');
            $this->load->view('footer_view',$data);
        }
    }  

    /*
     * editaring a combustivei
     */
    function editar($combustiveis_id)
    {   
        // check if the combustivei exists before trying to editar it
        $combustivel = $this->Combustivel_model->get_combustivel($combustiveis_id);
        
        if(isset($combustivel['combustiveis_id']))
        {
            $this->load->library('form_validation');

		$this->form_validation->set_rules('combustiveis_cod','Código','required|max_length[20]');
		$this->form_validation->set_rules('combustiveis_nome','Combustível','max_length[150]|required');
		$this->form_validation->set_rules('combustiveis_abre','Abreveatura','max_length[20]|required');
		
		if($this->form_validation->run())     
            {   
                $params = array(
					'combustiveis_cod' => $this->input->post('combustiveis_cod'),
					'combustiveis_nome' => $this->input->post('combustiveis_nome'),
					'combustiveis_abre' => $this->input->post('combustiveis_abre'),
                );

                $this->Combustivel_model->update_combustivel($combustiveis_id,$params);

				$nome = $this->input->post('combustiveis_nome');
				$this->session->set_flashdata(array('msg' => 'atualizar' , 'nome' => $nome));
				
                redirect('combustivel/index');
            }
            else
            {   
                $data['combustivel'] = $this->Combustivel_model->get_combustivel($combustiveis_id);
    
                $data['pagina'] = "Combustível";
                $data['sub_pagina'] = "Editar Combustível";
                $this->load->view('header_view',$data);
                $this->load->view('combustivel/editar',$data);
                $this->load->view('footer_view',$data);
            }
        }
        else
            show_error('The combustivei you are trying to editar does not exist.');
    } 

    /*
     * Deleting combustivei
     */
    function remove($combustiveis_id)
    {
        $combustivel = $this->Combustivel_model->get_combustivel($combustiveis_id);

        // check if the combustivei exists before trying to delete it
        if(isset($combustivel['combustiveis_id']))
        {
            $this->Combustivel_model->delete_combustivel($combustiveis_id);
            redirect('combustivel/index');
        }
        else
            show_error('The combustivei you are trying to delete does not exist.');
    }
    
}
