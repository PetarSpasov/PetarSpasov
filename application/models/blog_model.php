<?php

class blog_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function form_insert($postdata) {

        $this->db->insert('article', $postdata);
    }

    function views($id) {
        $result = $this->db->get_where('article', array('id' => $id))->row();
        $result->views++;
        $this->db->query("UPDATE `article` SET `views`= $result->views WHERE id = $id");
    }

    function delete($id) {
        $this->db->query("DELETE FROM `article` WHERE `id`= $id");
    }

    function show($id) {
        $this->views($id);
        $result = $this->db->get_where('article', array('id' => $id))->row();
        return $result;
    }

}

?>