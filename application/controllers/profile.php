<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {


	 function __construct() {
        parent::__construct();

        $this->load->model('user/usermodel');
        $this->load->model('user/userservices');

        $this->load->model('user_response/user_response_model');
        $this->load->model('user_response/user_response_service');

        $this->load->helper('url');
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
}
