<?php

class Courses extends CIF_Controller {

    public $layout = 'full';
    public $module = 'courses';
    public $model = 'courses_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index() {
        
        $this->{$this->model}->custom_select = 'courses.*, categories.title as category';
        $this->{$this->model}->joins = array(
            'categories' => array('categories.category_id = courses.category_id', 'inner')
        );
        
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = FALSE) {
        $data = array();

        if ($id) {
            $this->{$this->model}->{$this->_primary_key} = $id;
            $data['item'] = $this->{$this->model}->get();
            if (!$data['item'])
                show_404();
        } else {
            $data['item'] = new Std();
            $this->{$this->model}->datetime = date('Y-m-d H:i:s');
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('title', 'Title', 'trim|required');
         $this->form_validation->set_rules('code', 'Code', 'trim|required');
        $this->form_validation->set_rules('category_id','category', 'trim|required');
        $this->form_validation->set_rules('description', 'description', 'trim|required');
        $this->form_validation->set_rules('duration', 'Duration', 'trim|required');
        $this->form_validation->set_rules('lecturar', 'lecturar', 'trim|required');


        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->title = $this->input->post('title');
            $this->{$this->model}->code = $this->input->post('code');
             $this->{$this->model}->category_id = $this->input->post('category_id');
            $this->{$this->model}->description = $this->input->post('description');
            $this->{$this->model}->duration = $this->input->post('duration');
            $this->{$this->model}->lecturar = $this->input->post('lecturar');
            $this->{$this->model}->save();
            redirect('admin/' . $this->module);
        }
    }

    public function delete($id = false) {
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        $data['item'] = $this->{$this->model}->get();
        if (!$data['item'])
            show_404();
        $this->{$this->model}->delete();
        redirect('admin/' . $this->module);
    }

    public function file($var, $id) {
        $config['upload_path'] = './cdn/blog/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->{$this->model}->image = base_url() . '/cdn/blog/' . $data['file_name'];
        }
        return true;
    }

}
