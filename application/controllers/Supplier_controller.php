
<?php

class Supplier_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Supplier Information';
        $data['main_content'] = $this->load->view('templates/supplier/Supplier', $data, true);
        $this->load->view('templates/master/master', $data);
    }
    public function add_supplier() {
//        $data['title'] = 'Supplier Information';
//        $data['main_content'] = $this->load->view('templates/supplier/Supplier', $data, true);
//        $this->load->view('templates/master/master', $data);
    }

}
