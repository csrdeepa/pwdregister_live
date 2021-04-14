<?php
class Sattamandram extends CO_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('SattamandramModel');
        $this->load->helper(array('layout_helper','form'));
        $this->load->library(array('form_validation', 'upload', 'pdf'));
	}
	public function index(){
		// $this->load->view('assemblyview/listSattamandram');
        try{
            if(isset($this->session->userdata['logged_in'])){
                
            	$this->$data["list"]=$this->SattamandramModel->sattamandramList();
                $this->data['title'] = "Sattamandram Master";
                $this->page ="assemblyview/listSattamandram";     
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
		$data["list"]=$this->SattamandramModel->sattamandramList();
		$this->load->view('assemblyview/list_sattamandramdata',$data);
	}
	
    public function list_save(){
		try{
			  if($this->input->is_ajax_request()){
				if($this->input->server('REQUEST_METHOD') == 'POST') {
					$this->form_validation->set_rules("sattamandramname", 'sattamandramname', 'trim');
					$this->form_validation->set_rules("esattamandramname", 'esattamandramname', 'trim|required');
  
					if($this->form_validation->run() != FALSE ) {  
				// 		$sattamandramid = $this->input->post('sattamandramid');
						$sattamandramcode = $this->input->post('sattamandramcode');
						$sattamandramname = $this->input->post('sattamandramname');
						$esattamandramname = $this->input->post('esattamandramname');
						$districtid=$this->input->post('district');
						$stateid=$this->input->post('state');
						$countryid=1;
						$active=$this->input->post('active');
						$e_id=$this->input->post('id');
  
						if($e_id){
						  $updatedata = array(
							"id"=> $e_id,
							"sattamandramid" => $sattamandramid,
							"sattamandramcode"=> $sattamandramcode,
							"sattamandramname"=> $sattamandramname,
							"esattamandramname"=> $esattamandramname,
							"active"=> $active);
							$result = $this->SattamandramModel->updateSattamandram($updatedata);
							// $this->data["userdata"] = $result['data'];
							if(isset($result) && !empty($result)){
							  echo json_encode(array(
								"message" => "Sattamandram updated Successfully",
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
							// "sattamandramid" => $sattamandramid,
							"sattamandramcode"=> $sattamandramcode,
							"sattamandramname"=> $sattamandramname,
							"esattamandramname"=> $esattamandramname,
							"active"=> $active);
						  $result = $this->SattamandramModel->saveSattamandram($userdata);
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
		$data= $this->SattamandramModel->deleteSattamandram(array('id' => $id));
		echo json_encode($data);
    }

	public function get_modal(){
		$e_id=$this->input->post('id');
		$data["userdata"] = [];
        $data['states'] = $this->db->where('active', 1 )->get("tbl_mstate")->result(); 
		if($e_id != "add_btn"){
			$data['districts'] = $this->db->get("tbl_mdistrict")->result();			
			$data['userdata']=$this->SattamandramModel->get_sattamandram($e_id);
			// $data["userdata"] = $result['data'];
		}
		$this->load->view('assemblyview/addsattamandram_modal',$data);
	}
}