<?php

class Blog_model extends CIF_model
{
    function __construct() {
parent::__construct();
}
    
    public $_table = 'blog';
   public $_primary_keys = array('blog_id');
    
    public function record_count() {
        return $this->db->count_all("blog");
    }

    public function fetch_blog($limit, $start) {
        $this->db->limit($limit, $start);
        $query = $this->db->get("blog");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}
// Count all record of table "contact_info" in database.