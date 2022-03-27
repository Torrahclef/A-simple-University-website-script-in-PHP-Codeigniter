<?php

class Home extends CIF_Controller {

    public $layout = 'full';
    public $module = 'home';
    public $model = 'Blog_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
    }

    public function index() {
        $data['sliders'] = $this->db->get('sliders')->result();
         $this->{$this->model}->custom_select = 'blog.*, categories.title as category';
        $this->{$this->model}->joins = array(
            'categories' => array('categories.category_id = blog.category_id', 'inner')
        );
         $data['category_id'] = $this->db->get('categories')->num_rows();
        $data['items'] = $this->{$this->model}->get();
        $this->{$this->model}->order_by['blog_id'] = 'DESC';
        $this->{$this->model}->limit = 6;
        $this->load->view($this->module, $data);    
    }

   public function contactus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('phone', 'Phone', 'trim|required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');
        $data['success'] = false;

        if ($this->form_validation->run() == TRUE) {
            @mail(config('webmaster_email'), 'Message from eBlogy', ""
                            . "Full Name: $_POST[name]\n"
                            . "Email: $_POST[email]\n"
                            . "Phone: $_POST[phone]\n"
                            . "Message: $_POST[message]\n"
                            . "");
            $data['success'] = true;
        }
        $this->load->view(__FUNCTION__, $data);
    }
    
    
  
}
