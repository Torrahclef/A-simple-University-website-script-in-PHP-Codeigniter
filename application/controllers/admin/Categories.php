<?php

class Categories extends CIF_Controller {

    public $layout = 'full';
    public $module = 'categories';
    public $model = 'Categories_model';

    public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
        $this->_primary_key = $this->{$this->model}->_primary_keys[0];
        $this->permission();
    }

    public function index() {
        $data['items'] = $this->{$this->model}->get();
        $this->load->view($this->module . '/index', $data);
    }

    public function manage($id = null) {
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
        $this->form_validation->set_rules('title', 'العنوان', 'trim|required');
        $this->form_validation->set_rules('description', 'العنوان', 'trim|required');

        if ($this->form_validation->run() == FALSE)
            $this->load->view($this->module . '/manage', $data);

        else {
            $this->{$this->model}->title = $this->input->post('title');
            $this->{$this->model}->description = $this->input->post('description');
            $this->{$this->model}->save();
            redirect('admin/' . $this->module);
        }
    }

    public function delete($id = null) {
        if (!$id)
            show_404();
        $this->{$this->model}->{$this->_primary_key} = $id;
        $data['item'] = $this->{$this->model}->get();

        if (!$data['item'])
            show_404();
        $this->{$this->model}->delete();
        redirect('admin/' . $this->module);
    }


}
