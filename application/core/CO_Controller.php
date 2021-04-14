<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CO_Controller extends CI_Controller {

    protected $data = array();

	public function __construct()
    {
        parent::__construct();
        // $this->load->model(array("menumodel")); 
        
        // $this->data['mainmenu'] = $this->menumodel->select_menus(); 
        // $this->data['submenu'] = $this->menumodel->select_submenus();   
        // $this->data['uri'] =$this->uri;   
    }

    public function backend()
    {
        $this->layout['header'] = $this->load->view("backend/header", $this->data, TRUE);
        // $this->layout['menu'] = $this->load->view("backend/menu", $this->data, TRUE);
        $this->layout['sidenav'] = $this->load->view("backend/sidenav", $this->data, TRUE);
        $this->layout['footer'] = $this->load->view("backend/footer", $this->data, TRUE);
        $this->layout['page'] = $this->load->view($this->page, $this->data, TRUE);
        $this->layout['path'] =$this->page;
        // $this->layout['uri'] =$this->uri;
        $this->load->view("backend/master", $this->layout);
    }

    public function set_response($code, $header, $response = array()) {
        $this->output->set_status_header($code);
        echo json_encode($response);
    }

    
}
