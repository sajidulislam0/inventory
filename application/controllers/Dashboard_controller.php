
<?php

class Dashboard_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['title'] = 'Add new Doctor';
        $data['main_content'] = $this->load->view('templates/dashboard', $data, true);

        $this->load->view('templates/master/master', $data);
    }

}
