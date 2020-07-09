<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	 function __construct() {
        parent::__construct();

        $this->load->model('user/usermodel');
        $this->load->model('user/userservices');

        $this->load->model('user_response/user_response_model');
        $this->load->model('user_response/user_response_service');
        $this->load->model('question_invitation_services');

        $this->load->helper('url');
    }

public function load_replies(){ 

    $this->load->view('template/replies');    
    

}
public function load_mentions(){ 

    $this->load->view('template/mentions');    
    

}
public function load_notifications(){ 

    $this->load->view('template/notifications');    
    

}
public function load_status(){ 

    $this->load->view('template/status');    
    

}



public function get_waterpooler_replies(){ 
	$user_response_service = new user_response_service();
	$user_response_model = new user_response_model();

	$user_response_model->setQuestion_id($this->input->post('question'));

	$data['replies'] = $user_response_service->get_user_replies_by_userid($user_response_model);
    $data['watercoller_photo'] = $user_response_service->get_replies_photos_by_userid($user_response_model);

    if($this->input->post('question') == 1){
	$this->load->view('replies_watercooler',$data);
    }else if($this->input->post('question') == 2){
    $this->load->view('replies_check_in',$data);    
    }

}

public function get_watercooler_status_by_profile(){
    $question_invitation_services = new question_invitation_services();
    $user_response_model = new user_response_model();

    $data['watercoller_invitation_count'] = $question_invitation_services->get_all_question_invitations_count_for_user($this->input->post('question'));
    $data['watercoller_respose_count'] = $question_invitation_services->get_response_count_for_user($this->input->post('question'));
    $data['pending_watercooler_questions'] = $question_invitation_services->get_pending_questions($this->input->post('question'));

    if($this->input->post('question') == 1){
    $this->load->view('status_watercoller',$data);
    }else if($this->input->post('question') == 2){
    $this->load->view('status_checkin',$data);    
    }
}
}
