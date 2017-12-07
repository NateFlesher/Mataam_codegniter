<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        // if(!$this->session->userdata('isLoggedIn'))
        // {
        // 	redirect('/login/show_login');
        // }
        $this->load->model('Footer_model', 'footer');
    }
        
    function index() {
        $data['aboutus'] = $this->footer->getAboutUs();
        $this->load->view('footer/aboutus', $data);
    }

    function privacy_pol() 
    {
        $data['privacy_pol'] = $this->footer->getprivacy_pol();
    	$this->load->view('footer/privacy_pol', $data);
    }

    function terms_condition() 
    {
        $data['terms_condition'] = $this->footer->getterms_condition();
        $this->load->view('footer/terms_condition', $data);
    }

    function contactus_submit()
    {
        $data['name'] = $this->input->post('name');
        $data['mobile'] = $this->input->post('mobile');
        $data['email'] = $this->input->post('email');
        $data['message'] = $this->input->post('message');
        $data['date_time'] = date('Y-m-d H:i:s');

        echo $this->footer->contactus_submit($data);
    }

    function contactus() 
    {
        $this->load->view('footer/contactus');
    }

    function get_contactus()
    {
        $list = $this->footer->get_contactus();
        $data = array();
        $no = $_POST['start'];

        foreach($list as $project)
        {
            $no++;

            $row = array();

            //$row[] = $no;
            $row[] = $project->name;
            $row[] = $project->mobile;
            $row[] = $project->email;
            $row[] = $project->message;
            $row[] = $project->date_time;
            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="Edit" class="editEmp" onclick="view_msg('.$project->id.')">
                            <img src="'.$base_url.'asset/images/view.png" class="tbl_btn tbl_view"/>
                        </a> 
                        <a href="javascript:void(0)" title="Delete" class="delete" onclick="delete_msg('.$project->id.')">
                            <img src="'.$base_url.'asset/images/delete.png" class="tbl_btn tbl_delete"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->footer->count_all_msg(),
            'recordsFiltered' => $this->footer->count_all_msg(),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function career() 
    {
        $this->load->view('footer/career');
    }
}