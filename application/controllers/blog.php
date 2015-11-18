<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function index() {
        $this->posts();
    }

    public function posts() {
	        $data["message"] = "";
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_blog");
        $this->load->view("site_footer");
    }

    public function add_post() {
        $data["message"] = "";
        $this->load->library("form_validation");
        $this->load->library("session");
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_post",$data);
        $this->load->view("site_footer");
    }
public function send_post() {
        $this->load->library("form_validation");
        $this->load->library("session");
        $this->load->model("blog_model");
        $this->form_validation->set_rules("title", "Title", "required|alpha");
		$this->form_validation->set_rules("author", "Author", "required|alpha");
        $this->form_validation->set_rules("postMessage", "PostMessage", "required|alpha");
		$this->form_validation->set_rules("image", "Image", "required|callback__validate_image");
        
		if($this->form_validation->run()){
		$postdata = array(
                'title' => $this->input->post('title'),
                'author' => $this->input->post('author'),
                'postMessage' => $this->input->post('postMessage')
            );
			            $this->blog_model->form_insert($postdata);
            $data['message'] = 'Data Inserted Successfully<br/>';
}
else{
        $data["message"] = "";
        $this->load->view("site_header");
        $this->load->view("site_nav");
        $this->load->view("content_post",$data);
        $this->load->view("site_footer");
}
}
   function _validate_image(){
        $image_config = array(
            'allowed_types' => 'jpg|png|jpeg|bmp',
            'upload_path' => './images/'
        );
        
        $this->load->library('upload', $image_config);
        if ($this->upload->do_upload('image')) {
            $data = $this->upload->data();
            $this->load->library('image_lib');
            $resize = array (
                'image_library' => 'gd2',
                'source_image' => './images/'.$data['file_name'],
                'maintain_ratio' => true,
                'width' => 200,
                'height' => 200
            );
            $this->image_lib->initialize($resize);
            if ($this->image_lib->resize()){
                echo 'Upload is done.';
            } else {
                echo $this->image_lib->display_errors();
            }            
            return true;
        } else {
            $this->form_validation->set_message('_validate_image',$this->upload->display_errors());
            return false;
        }
    }
	}