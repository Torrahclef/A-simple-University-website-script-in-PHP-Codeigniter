<?php
class Search Extends CIF_Controller
{
 
    public $layout = 'full';
    public $module = 'result_view';
    public $model = 'Search_model';
    
     public function __construct() {
        parent::__construct();
        $this->load->model($this->model);
    }
    
    function search_keyword()
    {
        $keyword    =   $this->input->post('keyword');
        $data['results']    =   $this->Search_model->search($keyword);
        $this->load->view('result_view',$data);
    }

}
?>