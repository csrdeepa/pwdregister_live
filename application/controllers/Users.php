<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CO_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('usermodel', 'um');
        $this->load->helper(array('layout_helper','form'));
        $this->load->library(array('form_validation', 'upload', 'pdf'));
    }

    function index(){
        $this->load->view('user/login_form'); 
    }

    // Register View
    function register(){
        try{
            if(isset($this->session->userdata['logged_in'])){
                $this->data['states'] = $this->db->where('active', 1 )->get("tbl_mstate")->result();                // print_r($this->data['states']);
                $this->data['nadalumandram'] = $this->db->get("tbl_mnadalumandram")->result();
                $this->data['sattamandram'] = $this->db->get("tbl_msattamandram")->result();
                $this->data['dftype'] = $this->db->get("tbl_mdftype")->result();   
                $this->data['title'] = "User | Registeration";
                $this->page ="user/registeration";      // $this->load->view('user/registeration', $data); // array('states' => $states )
                $this->backend();
            }else{
                redirect('users');
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function delete() {
        try{ 
            if($this->input->is_ajax_request()){  
                $id = $this->input->post('id');
                $res =$this->um->displayrecordsById($id, 'register','id'); 
                if($res){
                    $res = reset($res);
                    $chkimg='uploads/photos/'.$res->profilePicpath;
                    if(file_exists($chkimg))
                    unlink($chkimg);
                    $result = $this->um->deleterec($id); 

                    if($result){
                    echo json_encode(array(
                        "message" => "User deleted Successfully",
                        "status" => "success",
                        "code"=> 200,
                        "data"=> $result
                    ));
                    }
                    else{
                    echo json_encode(array(
                        "message" => "Oops! something went wrong. System cannot delete user information.",
                        "status" => "error",
                        "code"=> 404,
                        "data"=> $result
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

    public function editdata(){
        try {
            if(isset($this->session->userdata['logged_in'])){
                $id=$this->input->get('id');
                $this->data["userdata"]=$this->um->displayrecordsById($id, 'register','id');                // $this->data["userdetdata"]=$this->um->displayrecordsById($id, 'register_det','parentid');
                $this->data['nadalumandram'] = $this->db->get("tbl_mnadalumandram")->result();
                $this->data['sattamandram'] = $this->db->get("tbl_msattamandram")->result();
                $this->data['dftype'] = $this->db->get("tbl_mdftype")->result();  
                $this->data['states'] = $this->db->where('active', 1 )->get("tbl_mstate")->result(); 

                $this->data['dtemptamiltaluk']=$this->db->select('*')
                ->where('districtid', $this->data["userdata"][0]->temptamildistrict )
                ->get('tbl_mtaluk')->result();

                $this->data['dtemptamildistrict']=$this->db->select('*')
                ->where('stateid', $this->data["userdata"][0]->temptamilstate )
                ->get('tbl_mdistrict')->result();

                $this->data['dtempengtaluk']=$this->db->select('*')
                ->where('districtid', $this->data["userdata"][0]->tempengdistrict )
                ->get('tbl_mtaluk')->result();

                $this->data['dtempengdistrict']=$this->db->select('*')
                ->where('stateid', $this->data["userdata"][0]->tempengstate )
                ->get('tbl_mdistrict')->result();

                $this->data['dpertamiltaluk']=$this->db->select('*')
                ->where('districtid', $this->data["userdata"][0]->pertamildistrict )
                ->get('tbl_mtaluk')->result();

                $this->data['dpertamildistrict']=$this->db->select('*')
                ->where('stateid', $this->data["userdata"][0]->pertamilstate )
                ->get('tbl_mdistrict')->result();

                $this->data['dperengtaluk']=$this->db->select('*')
                ->where('districtid', $this->data["userdata"][0]->perengdistrict )
                ->get('tbl_mtaluk')->result();

                $this->data['dperengdistrict']=$this->db->select('*')
                ->where('stateid', $this->data["userdata"][0]->perengstate )
                ->get('tbl_mdistrict')->result();
                            
                $this->data['title'] = "User | Update";
                $this->page ="user/registeration";
                $this->backend();  
            }else{
                redirect('users');
            }           
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    // Fetch another DROP DOWN on select based on country, state, city   
    function fetch_dropdown(){
        try {
            if($this->input->post('id'))
            {
                $model=$this->input->post('model');
                echo $this->um->$model( $id=$this->input->post('id'));               
            }             
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }   
   
    function getdftypestate(){
        try {
            if($this->input->post('id'))
            {
                $id=$this->input->post('id');
                $model=$this->input->post('model');
                $result= $this->um->$model($id, ' tbl_mdftype','id', 'subavailable');  
                // print_r($result[0]->subavailable);
                echo json_encode( $result[0]->subavailable);             
            }             
        } catch (Exception $e) {
            echo $e->getMessage();
        }        
    }
    // SAVE RECORD
    public function savedataajax(){
        try {
        // $postdata =$_POST; // $_POST["detdata"];     print_r($postdata);    
            if($_FILES['profilePicpath']['error'] > 0 ){
                $profilePicpath = ""; //$this->input->post('proimg');
            }
            else{  
                if(isset($_FILES["profilePicpath"]) && !empty($_FILES["profilePicpath"] > 0))
                {
                    $target_dir = "uploads/photos/";
                    $ext = pathinfo($_FILES['profilePicpath']['name'], PATHINFO_EXTENSION);
                    $profilePicpath = $this->input->post('aadhar').'.'.$ext;
                    
                    move_uploaded_file($_FILES["profilePicpath"]["tmp_name"], $target_dir.$profilePicpath);
                    $flagprofilePicpath = true; 
                }
            }
            // if($_FILES['profilePic']['error'] > 0){
            //     $profilePic = file_get_contents($this->input->post('profileimg'));
            // }
            // else{
            //     if(count($_FILES) > 0) {
            //         if(isset($_FILES["profilePic"]) && !empty($_FILES["profilePic"]) ){
            //             $profilePic = file_get_contents($_FILES["profilePic"]['tmp_name']);
            //         }
            //     }
            // }
            $profilePic="";
                // Temp Address
                $sameadd=$this->input->post('filladdress');
                if ($sameadd==true){
                    $ttstreet_addres=$this->input->post('tpstreet_addres');
                    $ttstreet_landmark=$this->input->post('tpstreet_landmark');
                    $ttvartno=$this->input->post('tpvartno');
                    $ttvillage=$this->input->post('tpvillage');
                    $ttpost=$this->input->post('tppost');

                    $temptamiltaluk=$this->input->post('pertamiltaluk');
                    $temptamildistrict=$this->input->post('pertamildistrict');
                    $temptamilstate=$this->input->post('pertamilstate');
                    $temptamilzip=$this->input->post('pertamilzip');           

                    $etstreet_addres=$this->input->post('epstreet_addres');
                    $etaddress_landmark=$this->input->post('epstreet_landmark');
                    $etvartno=$this->input->post('epvartno');
                    $etvillage=$this->input->post('epvillage');
                    $etpost=$this->input->post('eppost');

                    $tempengtaluk=$this->input->post('perengtaluk');
                    $tempengdistrict=$this->input->post('perengdistrict');
                    $tempengstate=$this->input->post('perengstate');
                    $tempengzip=$this->input->post('perengzip');   
                }
                else
                {
                    $ttstreet_addres=$this->input->post('ttstreet_addres');
                    $ttstreet_landmark=$this->input->post('ttstreet_landmark');
                    $ttvartno=$this->input->post('ttvartno');
                    $ttvillage=$this->input->post('ttvillage');
                    $ttpost=$this->input->post('ttpost');

                    $temptamiltaluk=$this->input->post('temptamiltaluk');
                    $temptamildistrict=$this->input->post('temptamildistrict');
                    $temptamilstate=$this->input->post('temptamilstate');
                    $temptamilzip=$this->input->post('temptamilzip'); 

                    $etstreet_addres=$this->input->post('etstreet_addres');
                    $etaddress_landmark=$this->input->post('etaddress_landmark');
                    $etvartno=$this->input->post('etvartno');
                    $etvillage=$this->input->post('etvillage');
                    $etpost=$this->input->post('etpost');

                    $tempengtaluk=$this->input->post('tempengtaluk');
                    $tempengdistrict=$this->input->post('tempengdistrict');
                    $tempengstate=$this->input->post('tempengstate');
                    $tempengzip=$this->input->post('tempengzip'); 
                }

            //  Set Array            
                $id=$this->input->post('id') ? $this->input->post('id') : ""; //$this->input->post('id');   // echo "$id",$id;

                if($this->input->is_ajax_request())
                {
                    if($this->input->server('REQUEST_METHOD') == 'POST') 
                    {
                        $this->form_validation->set_rules("efirstname", 'efirstname', 'trim|required|alpha_numeric_spaces');
                        $this->form_validation->set_rules("phone", 'phone', 'trim|required|regex_match[/^[0-9]{10}$/]');
                        // $this->form_validation->set_rules("aadhar", 'aadhar', 'trim|required|exact_length[12]|is_unique[register.aadhar]',array('is_unique' => 'This Aadhar number is already exists.'));
                        $this->form_validation->set_rules("aadhar", 'aadhar', 'trim|required|exact_length[12]');
                        $this->form_validation->set_rules("phone2", 'phone2', 'trim|regex_match[/^[0-9]{10}$/]');
                        $this->form_validation->set_rules("gardiancontact1", 'gardiancontact1', 'trim|exact_length[10]');
                        $this->form_validation->set_rules("gardiancontact2", 'gardiancontact2', 'trim|exact_length[10]');
                        $this->form_validation->set_rules("email", 'email', 'trim|valid_email');

                        if($this->form_validation->run() != FALSE ) {  
                            
                        $data = array(
                            "efirstname"=>$this->input->post('efirstname'),
                            "elastname"=>$this->input->post('elastname'),
                            // "tfirstname"=>htmlentities($this->input->post('tfirstname')),
                            // "tlastname"=>htmlentities($this->input->post('tlastname')),
                            "tfirstname"=> $this->input->post('tfirstname'),
                            "tlastname"=> $this->input->post('tlastname'),

                            "dob"=>$this->input->post('dob'),
                            "age"=>$this->input->post('age'),
                            "email"=>$this->input->post('email'),
                            "gender"=>$this->input->post('gender'),
                            "phone"=>$this->input->post('phone'),
                            "phone2"=>$this->input->post('phone2'),

                            "profilePic"=> $profilePic ,    //$this->input->post('profilePicpath'),
                            "profilePicpath"=> $profilePicpath,
                            "pdffile"=>$this->input->post('pdffile'),

                            "gardiantype"=>$this->input->post('gardiantype'),
                            "gardianname"=>htmlentities($this->input->post('gardianname')),
                            "egardianname"=>$this->input->post('egardianname'),
                            "gardiancontact1"=>$this->input->post('gardiancontact1'),
                            "gardiancontact2"=>$this->input->post('gardiancontact2'),

                            "maritalstatus"=>$this->input->post('maritalstatus'),

                            "religion"=>$this->input->post('religion'),
                            "caste"=>$this->input->post('caste'),
                            "edu"=>$this->input->post('edu'),
                            "business"=>$this->input->post('business'),

                            "tpstreet_addres"=>htmlentities($this->input->post('tpstreet_addres')),
                            "tpstreet_landmark"=>htmlentities($this->input->post('tpstreet_landmark')),
                            "tpvartno"=>htmlentities($this->input->post('tpvartno')),
                            "tpvillage"=>htmlentities($this->input->post('tpvillage')),
                            "tppost"=>htmlentities($this->input->post('tppost')),

                            "pertamiltaluk"=>$this->input->post('pertamiltaluk'),
                            "pertamildistrict"=>$this->input->post('pertamildistrict'),
                            "pertamilstate"=>$this->input->post('pertamilstate'),
                            "pertamilzip"=>$this->input->post('pertamilzip'),           

                            "epstreet_addres"=>$this->input->post('epstreet_addres'),
                            "epstreet_landmark"=>$this->input->post('epstreet_landmark'),
                            "epvartno"=>$this->input->post('epvartno'),
                            "epvillage"=>$this->input->post('epvillage'),
                            "eppost"=>$this->input->post('eppost'),

                            "perengtaluk"=>$this->input->post('perengtaluk'),
                            "perengdistrict"=>$this->input->post('perengdistrict'),
                            "perengstate"=>$this->input->post('perengstate'),
                            "perengzip"=>$this->input->post('perengzip'),   

                            "ttstreet_addres"=>htmlentities($ttstreet_addres),
                            "ttstreet_landmark"=>htmlentities($ttstreet_landmark),
                            "ttvartno"=>htmlentities($ttvartno),
                            "ttvillage"=>htmlentities($ttvillage),
                            "ttpost"=>htmlentities($ttpost),

                            "temptamiltaluk"=>$temptamiltaluk,
                            "temptamildistrict"=>$temptamildistrict,
                            "temptamilstate"=>$temptamilstate,
                            "temptamilzip"=>$temptamilzip, 

                            "etstreet_addres"=>$etstreet_addres,
                            "etaddress_landmark"=>$etaddress_landmark,
                            "etvartno"=>$etvartno,
                            "etvillage"=>$etvillage,
                            "etpost"=>$etpost,

                            "tempengtaluk"=>$tempengtaluk,
                            "tempengdistrict"=>$tempengdistrict,
                            "tempengstate"=>$tempengstate,
                            "tempengzip"=>$tempengzip, 
                
                            "udidno"=>$this->input->post('udidno'),
                            "nalavariyano"=>$this->input->post('nalavariyano'),
                            "familycard"=>$this->input->post('familycard'),
                            "aadhar"=>$this->input->post('aadhar'),
                            "voterid"=>$this->input->post('voterid'),
                            "empregno"=>$this->input->post('empregno'),
                            "empregdate"=>$this->input->post('empregdate'),

                            "sattamandram"=>$this->input->post('sattamandram'),
                            "nadalumandram"=>$this->input->post('nadalumandram'),
                            "dftype"=>$this->input->post('dftype'),
                            "dftype1"=>$this->input->post('dftype1'),
                            "dftype2"=>$this->input->post('dftype2'),

                            "dfvehicleusage"=>$this->input->post('dfvehicleusage'),
                            "dfvehicleusage1"=>$this->input->post('dfvehicleusage1'),
                            "dfsupportmatrialusing"=>$this->input->post('dfsupportmatrialusing'),
                            "dfsupportmatrialusing1"=>$this->input->post('dfsupportmatrialusing1'),
                            "dfhappendby"=>$this->input->post('dfhappendby'),
                            "dfpercentage"=>$this->input->post('dfpercentage'),
                            "walkingwithoutsupportmaterial"=>$this->input->post('walkingwithoutsupportmaterial'),
                            "havingmembership"=>$this->input->post('havingmembership'),

                            "membershipnumber"=>$this->input->post('membershipnumber'),
                            "membershipdate"=>$this->input->post('membershipdate'),
                            "membershipfeespaid"=>$this->input->post('membershipfeespaid'),
                            "membershipreceiptno"=>$this->input->post('membershipreceiptno'),
                            "membershipreceiptdate"=>$this->input->post('membershipreceiptdate'),
                            "helpfromtrust"=>$this->input->post('helpfromtrustdata'),
                            "otherhelpfromtrust"=>htmlentities($this->input->post('otherhelpfromtrust')),
                            "otherhelpfromtrusteng" =>$this->input->post('otherhelpfromtrusteng'),

                            "hobbies"=>$this->input->post('hobbiesdata'),
                            "ipaddress" => $this->input->ip_address(),    
                            'createddate'=>date('Y-m-d H:i:s'),
                            'active'=>1, 
                            'detdata'=>$this->input->post('detdata'),  
                        );

                    if($id && $this->input->post('type')==2)
                    {
                        $res = $this->um->displayrecordsById($id, 'register','id'); 
                            if($res){
                                $res = reset($res);
                                if(file_exists($res->profilePicpath) &&  $flagprofilePicpath)
                                {
                                    unlink($res->profilePicpath);
                                }
                                $result = $this->um->update_records($id,$data);
                            }
                            if($result){
                                echo json_encode(array(
                                "message" => "Data updated Successfully",
                                "status" => "success",
                                "code"=> 200,
                                // "link"=> "",
                                "data"=> $result
                            ));
                            $data['message'] = $this->session->flashdata('message');
                            }
                            else{
                            echo json_encode(array(
                                "message" => "Oops! something went wrong. System cannot update user information.",
                                "status" => "error",
                                "code"=> 404,
                                // "link"=> "",
                                "data"=> $result
                            ));
                        }
                    }
                    else
                    {
                        $result = $this->um->saverec($data); 
                        if(isset($result) && !empty($result)){
                            echo json_encode(array(
                            "message" => "Data Saved Successfully",
                            "status" => "success",
                            "code"=> 200,
                            "link"=> "",
                            "data"=> $result,
                            "regid"=> $result
                        ));
                        // $result['data'] = $this->um->saverec($data);    
                        // if(isset($result) && !empty($result)){
                        //     echo json_encode(array(
                        //     "message" => "Data Saved Successfully",
                        //     "status" => "success",
                        //     "code"=> 200,
                        //     "link"=> "",
                        //     "data"=> $result
                        // ));
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
        // redirect("users/dashboard");          
    }
 
    //DASHBOARD
	public function dashboard(){
        try{
            if(isset($this->session->userdata['logged_in'])){
                $this->data['states'] = $this->db->get("tbl_mstate")->result();
                $this->data['nadalumandram'] = $this->db->get("tbl_mnadalumandram")->result();
                $this->data['sattamandram'] = $this->db->get("tbl_msattamandram")->result();
                $this->data['dftype'] = $this->db->get("tbl_mdftype")->result();   
 
                $this->data['title'] = "User | Dashboard";
                $this->page ="user/dashboard"; 
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
    public function getAllUsers(){
        try {
            $json = array();        
            $list = $this->um->getUserData();
            $data = array();
            $path=base_url('/uploads/photos/');  //  if ($this->session->userdata['logged_in']['userrole_id'] == 1) {
                
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
                $bindhtml="";
                // $bindhtml.='<a href="#" title="View User" class="display-emp ml-1 btn-ext-small btn btn-sm btn-info"  data-geteid="' . $element['id'] . '"><i class="fas fa-eye"></i></a>';
                $bindhtml .= '<a href="editdata?id='. $element['id'] .'" title="Edit User" class="update-emp-details ml-1 btn-ext-small btn btn-sm btn-primary"  data-getueid="' . $element['id'] . '"><i class="fas fa-edit"></i></a>';
                if ($this->session->userdata['logged_in']['userrole_id'] == 2) {
                    $bindhtml .= '<a  href="#" title="Delete User" class="delete-em-details ml-1 btn-ext-small btn btn-sm btn-danger" data-getdeid="' . $element['id'] . '"><i class="fas fa-times"></i></a>';                
                }
                $bindhtml .= '<a href="viewpdf/'. $element['id'] .'" title="View" class=" viewpdf update-emp-details ml-1 btn-ext-small btn btn-sm btn-primary"  data-getueid="' . $element['id'] . '"><i class="fas fa-file"></i></a>';
                // $bindhtml .= '<a href="openpdf/'. $element['id'] .'" title="View in PDF" class=" openpdf update-emp-details ml-1 btn-ext-small btn btn-sm btn-primary"  data-getueid="' . $element['id'] . '"><i class="fas fa-download"></i></a>';

                $row[] =$bindhtml;
                $data[] = $row;
            }
            $json['data'] = array(
                "draw" => $_POST['draw'],
                "recordsTotal" => $this->um->countAll(),
                "recordsFiltered" => $this->um->countFiltered(),
                "data" => $data,
            );
            //output to json format
            $this->output->set_header('Content-Type: application/json');
            echo json_encode($json['data']);             
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    // Login
    public function signup() {
        try {
        // Check validation for user input in SignUp form
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email_value', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('userrole_id', 'User Role', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            $this->roledata['userrole'] = $this->db->where('active', 1)->get("tbl_userrole")->result();
            // print_r( $this->roledata['userrole']);
            $this->load->view('user/signup_form', array('userrole' => $this->roledata['userrole'] ));
        } else {
            $data = array(
                'user_name' => $this->input->post('username'),
                'user_email' => $this->input->post('email_value'),
                // 'user_password' => sha1($this->input->post('password')),
                'user_password' => password_hash($this->input->post('password'),PASSWORD_BCRYPT),
                'userrole_id' => $this->input->post('userrole_id'),
                'userrole' => $this->input->post('userrole_id')
            );
            $result = $this->um->registration_insert($data);
            if ($result == TRUE) {
                $data['message_display'] = 'Registration Successfully !';
                $this->load->view('user/login_form', $data);
            } else {
                $data['message_display'] = 'Username already exist!';
                $this->load->view('user/signup_form', $data);
            }
        }           
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
	
	// Check for user login process
	public function userlogin() {
        try {
            $this->form_validation->set_rules('username', 'Username', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            
            if ($this->form_validation->run() == FALSE) {
            if(isset($this->session->userdata['logged_in'])){
                redirect('users/dashboard');
            }
            else
            {
                redirect('users/dashboard');
            }
            } 
            else {
                $result = $this->um->read_user_information($this->input->post('username'));
                if (password_verify($this->input->post('password'),$result->user_password)) {
                     $username = $this->input->post('username');
                     $result = $this->um->read_user_information($username);
                    if ($result != false) {
                        $session_data = array(
                        'username' => $result->user_name,
                        'email' => $result->user_email,
                        'userid' => $result->id,
                        'userrole_id' => $result->userrole_id,
                        );

                        // Add user data in session
                        $this->session->set_userdata('logged_in', $session_data);
                        redirect('users/dashboard');
                    }
                } else {
                    $data = array(
                    'error_message' => 'Invalid Username or Password'
                    );
                    $this->load->view('/user/login_form', $data);
                }
            }         
        } catch (Exception $e) {
            echo $e->getMessage();
        }
	}
	
	// Logout from admin page
	public function logout() {
        try {
            $sess_array = array(
            'username' => ''
            );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout';
            $this->load->view('/user/login_form', $data);             
        } catch (Exception $e) {
            echo $e->getMessage();
        }
	}

    public function usertable(){
        try {
            if( $this->db->table_exists('user_login') == FALSE ){
                $query = "CREATE TABLE user_login(
                        id int AUTO_INCREMENT PRIMARY KEY,
                        user_name varchar(50) NOT NULL,
                        user_email varchar(100) NOT NULL,
                        user_password varchar(50) NOT NULL,
                        userrole_id int(11) NOT NULL
                )ENGINE = InnoDB;";      
                $this->db->query($query);
            }             
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }




// PDF
    public function pdf()	{
		$data['customer_data'] = $this->um->showRecord();
		$this->load->view('pdftemplate/htmltopdf', $data);
	}

	public function viewpdf(){
		// if($this->uri->segment(3)){
		// 	$customer_id = $this->uri->segment(3);
		// 	$data['customer_details'] = $this->um->show_single_details($customer_id);
		// 	$this->load->view('pdftemplate/htmltopdf', $data);
		// }
		if($this->uri->segment(3)){
			$id = $this->uri->segment(3);
            $data['taluklist'] =$this->um->displayrecordsByIdJoin($id, 'register','id'); 
			$this->load->view('pdftemplate/htmltopdf', $data);
		}
	}
public function openpdf(){
		if($this->uri->segment(3)){
			$id = $this->uri->segment(3);
            $data['taluklist'] =$this->um->displayrecordsByIdJoin($id, 'register','id');             
			$html_content = 'Registration Form';
            $this->pdf->loadHtml($this->load->view('pdftemplate/htmltopdf', $data, true));
            $this->pdf->setPaper('A4', 'portrait');
            $this->pdf->render();
            $this->pdf->stream("".$id.".pdf", array("Attachment"=>0));
		}
	}

    //PDF another format
    public function details(){
        if($this->uri->segment(3)){
            $customer_id = $this->uri->segment(3);
            $data['customer_details'] = $this->um->show_single_pdfdetails($customer_id);
            $this->load->view('pdftemplate/htmltopdf', $data);
        }
    }

    public function pdfdetails(){
        if($this->uri->segment(3)){
            $customer_id = $this->uri->segment(3);
            $html_content = '<h1 align="center">Registration Form</h1>';
            $data['customer_details'] = $this->um->show_single_pdfdetails($customer_id);
            $this->pdf->loadHtml($this->load->view('pdftemplate/htmltopdf1', $data, true));
            $this->pdf->render();
            $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
        }
    }
}

  


