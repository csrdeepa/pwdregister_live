<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CO_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('reportmodel', 'um');
        $this->load->helper(array('layout_helper','form'));
        $this->load->library('form_validation');
        $this->load->library('upload');
    }

    //Report
	public function index(){
        try{
            if(isset($this->session->userdata['logged_in'])){
                $this->data['states'] = $this->db->get("tbl_mstate")->result();
                $this->data['nadalumandram'] = $this->db->get("tbl_mnadalumandram")->result();
                $this->data['sattamandram'] = $this->db->get("tbl_msattamandram")->result();
                $this->data['dftype'] = $this->db->get("tbl_mdftype")->result();   
        
                $this->data['title'] = "Report";
                $this->page = "user/reportview"; 
                $this->backend();
            }else{
                redirect('users');
            }
            }
            catch (Exception $e) {
                echo $e->getMessage();
            }
	}	
    
    // GET ALL USERS FOR TABLE
    public function rpt_getAllUsers(){
        try {
            $json = array();    
            $list = $this->um->rpt_getUserData();
            // echo "###############################################";
            // print_r($list);
            $data = array();
            $path=base_url('/uploads/photos/');
            foreach ($list as $element) {
                $imgpath="";
                if ($element['profilePicpath']){
                    $imgpath = $path.$element['profilePicpath'];
                }else {
                    $imgpath=base_url('/assets/images/placeholder-profile.png');
                }
                $row = array();
                $row[] = $element['id'];
                $row[] = $element['fullname'];
                $row[] = $element['email'];
                $row[] = $element['phone'];
                $row[] = $element['aadhar'];
                $row[] = $element['udidno'];
                $row[] = '<img src="'.$imgpath.'" width= "70px" height= "85px" />' ; 
 
                // $row[] =""; // Action Column
                $data[] = $row;
            }
            $json['data'] = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->um->rpt_countAll(),
                "recordsFiltered" => $this->um->rpt_countFiltered(),
                "data" => $data,
            );
            //output to json format
            $this->output->set_header('Content-Type: application/json');
            echo json_encode($json['data']);             
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
 
}

  