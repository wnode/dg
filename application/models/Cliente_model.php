<?php
/* 
 * Generated by CRUDigniter v2.0 Beta 
 * www.crudigniter.com
 */
 
class Cliente_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * get a cliente by clientes_id
     */
    function get_cliente($clientes_id)
    {
        return $this->db->get_where('clientes',array('clientes_id'=>$clientes_id))->row_array();
    }
    
    /*
     * get all clientes
     */
    function get_all_clientes()
    {
        return $this->db->get('clientes')->result_array();
    }
    
    /*
     * function to add new cliente
     */
    function add_cliente($params)
    {
        $this->db->insert('clientes',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update cliente
     */
    function update_cliente($clientes_id,$params)
    {
        $this->db->where('clientes_id',$clientes_id);
        $this->db->update('clientes',$params);
    }
    
    /*
     * function to delete cliente
     */
    function delete_cliente($clientes_id)
    {
        $this->db->delete('clientes',array('clientes_id'=>$clientes_id));
    }
}