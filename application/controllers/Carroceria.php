<?php
/* 
 * Generated by CRUDigniter v2.0 Beta 
 * www.crudigniter.com
 */
 
class Carroceria extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Carroceria_model');
    } 

    /*
     * Listing of carrocerias
     */
    function index()
    {
        $data['carrocerias'] = $this->Carroceria_model->get_all_carrocerias();
        $data['pagina'] = "Carrocerias";
        $data['sub_pagina'] = "Listar Carrocerias";


        if ($this->session->flashdata('msg')) {
            if ($this->session->flashdata('msg') == 'cadastrar') {
                $data['msg'] = '<div class="alert alert-success" role="alert"><b>'.$this->session->flashdata('nome').' </b>cadastrado com sucesso!</div>';
            }
            else{
                $data['msg'] = '<div class="alert alert-success" role="alert"><b>'.$this->session->flashdata('nome').' </b>atualizado com sucesso!</div>';   
            }
        }

        $this->load->view('header_view',$data);
        $this->load->view('carroceria/index',$data);
        $this->load->view('footer_view',$data);
    }

    /*
     * Adding a new carroceria
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('carrocerias_codigo','Código','required|max_length[20]');
		$this->form_validation->set_rules('carrocerias_nome','Carroceria','max_length[150]|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'carrocerias_codigo' => $this->input->post('carrocerias_codigo'),
				'carrocerias_nome' => $this->input->post('carrocerias_nome'),
            );

            $carroceria_id = $this->Carroceria_model->add_carroceria($params);
            
			$nome = $this->input->post('carrocerias_nome');
            $this->session->set_flashdata(array('msg' => 'cadastrar' , 'nome' => $nome));
            
            redirect('carroceria/index');
        }
        else
        {
            $data['carrocerias'] = $this->Carroceria_model->get_all_carrocerias();
            $data['pagina'] = "Carrocerias";
            $data['sub_pagina'] = "Cadastrar Carroceria";
            $this->load->view('header_view',$data);
            $this->load->view('carroceria/add');
            $this->load->view('footer_view',$data);
        }
    }  

    /*
     * editaring a carroceria
     */
    function editar($carrocerias_id)
    {   
        // check if the carroceria exists before trying to editar it
        $carroceria = $this->Carroceria_model->get_carroceria($carrocerias_id);
        
        if(isset($carroceria['carrocerias_id']))
        {
            $this->load->library('form_validation');

		$this->form_validation->set_rules('carrocerias_codigo','Código','required|max_length[20]');
		$this->form_validation->set_rules('carrocerias_nome','Carroceira','max_length[150]|required');
		
		if($this->form_validation->run())     
            {   
                $params = array(
					'carrocerias_codigo' => $this->input->post('carrocerias_codigo'),
					'carrocerias_nome' => $this->input->post('carrocerias_nome'),
                );

                $this->Carroceria_model->update_carroceria($carrocerias_id,$params);

            $nome = $this->input->post('carrocerias_nome');
                        
            $this->session->set_flashdata(array('msg' => 'atualizar' , 'nome' => $nome));

                redirect('carroceria/index');
            }
            else
            {   
                $data['carroceria'] = $this->Carroceria_model->get_carroceria($carrocerias_id);
    
                $data['carrocerias'] = $this->Carroceria_model->get_all_carrocerias();
                $data['pagina'] = "Carrocerias";
                $data['sub_pagina'] = "Editar Carroceria";
                $this->load->view('header_view',$data);
                $this->load->view('carroceria/editar',$data);
                $this->load->view('footer_view',$data);
            }
        }
        else
            show_error('The carroceria you are trying to editar does not exist.');
    }

    /*
     * Deleting carroceria
     */
    function remove($carrocerias_id)
    {
        $carroceria = $this->Carroceria_model->get_carroceria($carrocerias_id);

        // check if the carroceria exists before trying to delete it
        if(isset($carroceria['carrocerias_id']))
        {
            $this->Carroceria_model->delete_carroceria($carrocerias_id);
            redirect('carroceria/index');
        }
        else
            show_error('The carroceria you are trying to delete does not exist.');
    }
    
}