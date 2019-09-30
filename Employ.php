<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Employ extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Employee');
    }
    
    public function index(){
        $data = array();

        
        //get messages from the session
        if($this->session->userdata('success_msg')){
            $data['success_msg'] = $this->session->userdata('success_msg');
            $this->session->unset_userdata('success_msg');
        }
        if($this->session->userdata('error_msg')){
            $data['error_msg'] = $this->session->userdata('error_msg');
            $this->session->unset_userdata('error_msg');
        }
         $data['Employee'] = $this->Employee->getRows();
         $data['name'] = 'Post Archive';
       
        //load the list page view
        $this->load->view('employee/header', $data);
        $this->load->view('emps/index', $data);
        $this->load->view('employee/footer');
    }
    
    /*
     * Post details
     */
    public function view($id){
        $data = array();
        
        //check whether post id is not empty
        if(!empty($id)){
            $data['post'] = $this->post->getRows($id);
            $data['name'] = $data['post']['name'];
            
            //load the details page view
            $this->load->view('employee/header', $data);
            $this->load->view('emps/view', $data);
            $this->load->view('employee/footer');
        }else{
            redirect('/emps');
        }
    }
    
    /*
     * Add post content
     */
       public function add(){
        $data = array();
        $postData = array();
        
        //if add request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
          
            $this->form_validation->set_rules('name', 'post name', 'required');
            $this->form_validation->set_rules('last', 'post last', 'required');
            $this->form_validation->set_rules('email', 'post email', 'required');
            $this->form_validation->set_rules('dob', 'post dob', 'required');
            $this->form_validation->set_rules('department', 'post department', 'required');
            $this->form_validation->set_rules('contact', 'post contact', 'required');
              $this->form_validation->set_rules('image', 'post image', 'required');
            
            
            
            //prepare post data
            //prepare cms page data
            $postData = array(
                
                 'name' => $this->input->post('name'),
                 'last' => $this->input->post('last'),
                 'email' => $this->input->post('email'),
                 'dob' => $this->input->post('dob'),
                 'department' => $this->input->post('department'),
                 'contact' => $this->input->post('contact'),
                  'image' => $this->input->post('image'),
               
            );

            //validate submitted form data
            if($this->form_validation->run() == true){
                //insert post data
                $insert = $this->post->insert($postData);
                if($insert){
                    $this->session->set_userdata('success_msg', 'Post has been added successfully.');
                    redirect('/emps');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        
        $data['post'] = $postData;
        $data['name'] = 'Create Post';
        $data['action'] = 'Add';
        
        //load the add page view
        $this->load->view('employee/header', $data);
        $this->load->view('emps/add-edit');
        $this->load->view('employee/footer');
    }
    
    /*
     * Update post content
     */
    public function edit($id){
        $data = array();
        
        //get post data
        $postData = $this->post->getRows($id);
        
        //if update request is submitted
        if($this->input->post('postSubmit')){
            //form field validation rules
          
            $this->form_validation->set_rules('name', 'post name', 'required');
            $this->form_validation->set_rules('last', 'post last', 'required');
            $this->form_validation->set_rules('email', 'post email', 'required');
            $this->form_validation->set_rules('dob', 'post dob', 'required');
            $this->form_validation->set_rules('department', 'post department', 'required');
            $this->form_validation->set_rules('contact', 'post contact', 'required');
              $this->form_validation->set_rules('image', 'post image', 'required');
            
            
            //prepare cms page data
             $postData = array(
                
                 'name' => $this->input->post('name'),
                 'last' => $this->input->post('last'),
                 'email' => $this->input->post('email'),
                 'dob' => $this->input->post('dob'),
                 'department' => $this->input->post('department'),
                 'contact' => $this->input->post('contact'),
                  'image' => $this->input->post('image'),
               
            );
           
            
            //validate submitted form data
            if($this->form_validation->run() == true){
                //update post data
                $update = $this->post->update($postData, $id);
                if($update){
                    $this->session->set_userdata('success_msg', 'Post has been updated successfully.');
                    redirect('/emps');
                }else{
                    $data['error_msg'] = 'Some problems occurred, please try again.';
                }
            }
        }
        
        $data['post'] = $postData;
        $data['name'] = 'Update Post';
        $data['action'] = 'Edit';
        
        //load the edit page view
        $this->load->view('employee/header', $data);
        $this->load->view('emps/add-edit', $data);
        $this->load->view('employee/footer');
    }
    
    /*
     * Delete post data
     */
    public function delete($id){
        //check whether post id is not empty
        if($id){
            //delete post
            $delete = $this->post->delete($id);
            
            if($delete){
                $this->session->set_userdata('success_msg', 'Post has been removed successfully.');
            }else{
                $this->session->set_userdata('error_msg', 'Some problems occurred, please try again.');
            }
        }
        redirect('/emps');
    }
}