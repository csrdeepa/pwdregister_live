<?php
//https://www.tutsmake.com/select-query-in-codeigniter-with-multiple-clause/

defined('BASEPATH') OR exit('No direct script access allowed');

class Reportmodel extends CI_Model{
  
  
    // GET DATA
    function displayrecordsById($id, $table, $field){
        try {
        $query=$this->db->query("select * from $table where $field=$id");
        return  $query->result();           
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    function displayvalById($id, $table, $field, $select){
        try {
        $query=$this->db->query("select $select from $table where $field=$id");
        return  $query->result();           
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    } 
  
    //#Bind Dropdown
	function fetch_district_eng($id)
	{
        try {
            $this->db->where('stateid', $id);
            $this->db->order_by('edistrictname', 'ASC');
            $query = $this->db->get('tbl_mdistrict');
            $output = '<option value=""> ------- </option>';
            foreach($query->result() as $row)
            {
                $output .= '<option value="'.$row->districtid.'">'.$row->edistrictname.'</option>';
            }
            return $output;             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }
	function fetch_taluk_eng($id)
	{
        try {
            $this->db->where('districtid', $id);
            $this->db->order_by('etalukname', 'ASC');
            $query = $this->db->get('tbl_mtaluk');
            $output = '<option value=""> ------- </option>';
            foreach($query->result() as $row)
            {
                $output .= '<option value="'.$row->talukid.'">'.$row->etalukname.'</option>';
            }
            return $output;             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }    
    function fetch_district($id)
	{
        try {
            $this->db->where('stateid', $id);
            $this->db->order_by('districtname', 'ASC');
            $query = $this->db->get('tbl_mdistrict');
            $output = '<option value=""> ------- </option>';
            foreach($query->result() as $row)
            {
                $output .= '<option value="'.$row->districtid.'">'.$row->districtname.'</option>';
            }
            return $output;             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }
	function fetch_taluk($id)
	{
        try {
            $this->db->where('districtid', $id);
            $this->db->order_by('talukname', 'ASC');
            $query = $this->db->get('tbl_mtaluk');
            $output = '<option value=""> ------- </option>';
            foreach($query->result() as $row)
            {
                $output .= '<option value="'.$row->talukid.'">'.$row->talukname.'</option>';
            }
            return $output;             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }    
    //@Bind Dropdown

    // # # # # # # # # # # # # # # //
    // Custom Datatable
    // # # # # # # # # # # # # # # //
    private $_ID;
    private $_efirstName;
    private $_elastName;
    private $_email;
    private $_phone;
    private $_udidno;
    private $_aadhar;
    private $_profilePicpath;

    public function setID($ID) {
        $this->_ID = $ID;
    }
    public function setEFirstName($efirstName) {
        $this->_efirstName = $efirstName;
    }
    public function setELastName($elastName) {
        $this->_elastName = $elastName;
    }    
    public function setEmail($email) {
        $this->_email = $email;
    }
    public function setPhone($phone) {
        $this->_phone = $phone;
    }
    public function setUdidno($udidno) {
        $this->_udidno = $udidno;
    }
    public function setAadhar($aadhar) {
        $this->aadhar = $aadhar;
    }
    public function setprofilePicpath($profilePicpath) {
        $this->profilePicpath = $profilePicpath;
    }    

    // get User List
    var $table = 'register';
    var $column_order = array(null, 'concat_ws(" ", r.efirstname, r.elastname)','r.email','r.phone','r.udidno','r.aadhar','r.profilePicpath');
    var $column_search = array('concat_ws(" ", r.efirstname, r.elastname)','r.email','r.phone','r.udidno','r.aadhar','r.profilePicpath');
    var $order = array('id' => 'DESC');

    private function rpt_getQuery()
    {
        try {
            //add custom filter here
            if(!empty($this->input->post('fullname')))
            {
                $this->db->like('concat_ws(" ", r.efirstname, r.elastname)', $this->input->post('fullname'), 'both');
            }
            if(!empty($this->input->post('email')))
            {
                $this->db->like('r.email', $this->input->post('email'), 'both');
            }
            if(!empty($this->input->post('phone')))
            {
                $this->db->like('r.phone', $this->input->post('phone'), 'both');
            }
            if(!empty($this->input->post('aadhar')))
            {
                $this->db->like('aadhar', $this->input->post('aadhar'), 'both');
            }
            if(!empty($this->input->post('profilePicpath')))
            {
                $this->db->like('profilePicpath', $this->input->post('profilePicpath'), 'both');
            } 
            $this->db->select(array('r.id', 'concat_ws(" ", r.efirstname, r.elastname) as fullname','r.email','r.phone','r.aadhar','r.udidno','r.profilePicpath'));
            $this->db->from('register as r');

            $i = 0;
            foreach ($this->column_search as $item) // loop column 
            {
                if(!empty($_POST['search']['value'])) // if datatable send POST for search
                {
                    
                    if($i===0) // first loop
                    {
                        $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                        $this->db->like($item, $_POST['search']['value']);
                    }
                    else
                    {
                        $this->db->or_like($item, $_POST['search']['value']);
                    }
    
                    if(count($this->column_search) - 1 == $i) //last loop
                        $this->db->group_end(); //close bracket
                }
                $i++;
            }
            
            if(!empty($_POST['order'])) // here order processing
            {
                $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
            } 
            else if(!empty($this->order))
            {
                $order = $this->order;
                $this->db->order_by(key($order), $order[key($order)]);
            }             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    public function rpt_getUserData()
    {
        try {
            $this->rpt_getQuery();
            if(!empty($_POST['length']) && $_POST['length'] < 1) {
                $_POST['length']= '10';
            } else {
                $_POST['length']= $_POST['length'];
            }
            
            if(!empty($_POST['start']) && $_POST['start'] > 1) {
            $_POST['start']= $_POST['start'];
            }
            $this->db->limit($_POST['length'], $_POST['start']);
            //print_r($_POST);die;
            $query = $this->db->get();
            return $query->result_array();             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    public function rpt_countFiltered()
    {
        try {
            $this->rpt_getQuery();
            $query = $this->db->get();
            return $query->num_rows();             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }
 
    public function rpt_countAll()
    {
        try {
            $this->db->from($this->table);
            return $this->db->count_all_results();             
        } catch (Exception $e) {
            echo $e->getMessage();
          }
    }

    // for display Users
    public function rpt_getUser() {  
        try {
            $this->db->select(array('r.id', 'r.efirstname as first_name', 'r.elastname', 'r.email', 'r.aadhar', 'r.udidno', 'r.phone', 'r.profilePicpath'));
            $this->db->from('register r');  
            $this->db->where('r.id', $this->_ID);     
            $query = $this->db->get();
            return $query->row_array();             
        } catch (Exception $e) {
            echo $e->getMessage();
          }     
    }
 
}

 