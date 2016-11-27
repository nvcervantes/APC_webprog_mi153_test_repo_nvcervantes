<?php 
   class User_controller extends CI_Controller {
	
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
			
         $this->load->helper('url'); 
         $this->load->view('user_view',$data); 
      } 
  
      public function add_user_view() { 
         $this->load->helper('form'); 
         $this->load->view('user_add'); 
      } 
  
      public function add_user() { 
         $this->load->model('user_model');
			
         $data = array( 
            'user_id' => $this->input->post('user_id'), 
            'name' => $this->input->post('name'), 
            'nickname' => $this->input->post('nickname'), 
            'email' => $this->input->post('email'), 
            'address' => $this->input->post('address'), 
            'gender' => $this->input->post('gender'), 
            'cpnum' => $this->input->post('cpnum'), 
            'comment' => $this->input->post('comment') 

         ); 
			
         $this->user_model->insert($data); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('user_view',$data); 
      } 
  
      public function update_user_view() { 
         $this->load->helper('form'); 
         $user_id = $this->uri->segment('3'); 
         $query = $this->db->get_where("users",array("user_id"=>$user_id));
         $data['records'] = $query->result(); 
         $data['old_user_id'] = $user_id; 
         $this->load->view('user_edit',$data); 
      } 
  
      public function update_user(){ 
         $this->load->model('user_model');
			
         $data = array(  
            'user_id' => $this->input->post('user_id'),
            'name' => $this->input->post('name'), 
            'nickname' => $this->input->post('nickname'), 
            'email' => $this->input->post('email'), 
            'address' => $this->input->post('address'), 
            'gender' => $this->input->post('gender'), 
            'cpnum' => $this->input->post('cpnum'), 
            'comment' => $this->input->post('comment') 



         ); 
			
         $old_user_id = $this->input->post('old_user_id'); 
         $this->user_model->update($data,$old_user_id); 
			
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('user_view',$data); 
      } 
  
      public function delete_user() { 
         $this->load->model('user_model'); 
         $user_id = $this->uri->segment('3'); 
         $this->user_model->delete($user_id); 
   
         $query = $this->db->get("users"); 
         $data['records'] = $query->result(); 
         $this->load->view('user_view',$data); 
      } 
   } 
?>