<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Aboutus extends CIF_Controller {

    public $layout = 'full';
    public $module = 'aboutus';
    public $model = 'Aboutus_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
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
        }
        $this->load->library("form_validation");
        $this->form_validation->set_rules('name', 'Your name', 'trim|required');
        $this->form_validation->set_rules('short_about', 'Who we are', 'trim|required');
         $this->form_validation->set_rules('course', 'Who we are', 'trim|required');
          $this->form_validation->set_rules('gallery', 'Who we are', 'trim|required');
        $this->form_validation->set_rules('about', 'Who we are', 'trim|required');
       

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->name = $this->input->post('name');
            $this->{$this->model}->short_about = $this->input->post('short_about');
            $this->{$this->model}->course = $this->input->post('course');
            $this->{$this->model}->gallery = $this->input->post('gallery');
            $this->{$this->model}->about = $this->input->post('about');
            $this->{$this->model}->save();
            redirect('admin/aboutus/manage/1');
        }
    }

    public function file($var, $id) {
        $config['upload_path'] = './cdn/aboutus/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            if ($data['file_name'])
                $this->{$this->model}->image = base_url() . '/cdn/aboutus/' . $data['file_name'];
        }
        return true;
    }

}
