<?php
class News extends CIF_Controller {

    public $layout = 'full';
    public $module = 'news';
    public $model = 'Blog_model';

   public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("Blog_model");
        $this->load->library("pagination");
    }
    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "news/index";
        $config["total_rows"] = $this->Blog_model->record_count();
        $config["per_page"] = 7;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["items"] = $this->Blog_model->
            fetch_blog($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("news", $data);
    }
    
}
