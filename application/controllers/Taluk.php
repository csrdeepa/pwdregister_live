<?php
class Taluk extends CO_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('TalukModel');
        $this->load->helper(array('layout_helper','form'));
        $this->load->library(array('form_validation', 'upload', 'pdf'));
	}
	public function index(){
		// $this->load->view('masterview/listTaluk');
        try{
            if(isset($this->session->userdata['logged_in'])){
                
            	$this->$data["list"]=$this->TalukModel->talukList();
                $this->data['title'] = "Taluk Master";
                $this->page ="masterview/listTaluk";     
                $this->backend();
            }else{
                redirect('users');
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
	}

	public function list_view(){
		$data["list"]=$this->TalukModel->talukList();
		$this->load->view('masterview/list_data',$data);
	}
	
    public function list_save(){
		try{
			  if($this->input->is_ajax_request()){
				if($this->input->server('REQUEST_METHOD') == 'POST') {
					$this->form_validation->set_rules("talukname", 'talukname', 'trim');
					$this->form_validation->set_rules("etalukname", 'etalukname', 'trim|required');
  
					if($this->form_validation->run() != FALSE ) {  
				// 		$talukid = $this->input->post('talukid');
						$talukcode = $this->input->post('talukcode');
						$talukname = $this->input->post('talukname');
						$etalukname = $this->input->post('etalukname');
						$districtid=$this->input->post('district');
						$stateid=$this->input->post('state');
						$countryid=1;
						$active=$this->input->post('active');
						$e_id=$this->input->post('id');
  
						if($e_id){
						  $updatedata = array(
							"id"=> $e_id,
							"talukid" => $talukid,
							"talukcode"=> $talukcode,
							"talukname"=> $talukname,
							"etalukname"=> $etalukname,
							'districtid' => $districtid,
							"stateid"=> $stateid,
							"countryid"=> $countryid,
							"active"=> $active);
							$result = $this->TalukModel->updateTaluk($updatedata);
							// $this->data["userdata"] = $result['data'];
							if(isset($result) && !empty($result)){
							  echo json_encode(array(
								"message" => "Taluk updated Successfully",
								"status" => "success",
								"code"=> 200,
								"link"=> "",
								"data"=> $result
							));
						  }
						  else{
							echo json_encode(array(
								"message" => "Oops! something went wrong. System cannot insert user information.",
								"status" => "error",
								"code"=> 200,
								"link"=> "",
								"data"=> $result
							));
						  }
						}
						else{
						  $userdata = array(
							"talukid" => $talukid,
							"talukcode"=> $talukcode,
							"talukname"=> $talukname,
							"etalukname"=> $etalukname,
							'districtid' => $districtid,
							"stateid"=> $stateid,
							"countryid"=> $countryid,
							"active"=> $active);
						  $result = $this->TalukModel->saveTaluk($userdata);
						  if(isset($result) && !empty($result)){
							  echo json_encode(array(
								"message" => "User Saved Successfully",
								"status" => "success",
								"code"=> 200,
								"link"=> "",
								"data"=> $result
							));
						  }
						  else{
							echo json_encode(array(
								"message" => "Oops! something went wrong. System cannot insert user information.",
								"status" => "error",
								"code"=> 200,
								"link"=> "",
								"data"=> $result
							));
						  }
						}
				  }
				  else{
					$this->output->set_header('HTTP/1.1 405 Method Not Allowed');
					echo json_encode(array(
					  "message" => validation_errors(),
					  "status" => "error",
					  "code"=> 405,
					  "link"=> "",
					));
				  }
  
				}
			}
			else{
			  exit('No direct access allowed');
			}
	   }
			catch (Exception $e) {
			  echo $e->getMessage();
			}
	}


	public function list_delete() {
		$id = $this->input->post('id');
		$data= $this->TalukModel->deleteTaluk(array('id' => $id));
		echo json_encode($data);
    }

	public function get_modal(){
		$e_id=$this->input->post('id');
		$data["userdata"] = [];
        $data['states'] = $this->db->where('active', 1 )->get("tbl_mstate")->result(); 
		if($e_id != "add_btn"){
			$data['districts'] = $this->db->get("tbl_mdistrict")->result();			
			$data['userdata']=$this->TalukModel->get_taluk($e_id);
			// $data["userdata"] = $result['data'];
		}
		$this->load->view('masterview/addnew_modal',$data);
	}
}