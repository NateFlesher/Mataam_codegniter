<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isLoggedIn'))
        {
        	redirect('/login/show_login');
        }

        $this->load->model('Transation_model', 'transaction');

    }

    function index() {
        
        $this->load->view('customer/index');
    }

    function payment() 
    {
    	$this->load->view('customer/payment');
    }

    function request() 
    {
        $this->load->view('customer/request');
    }

    function TransactionReport() 
    {
        $this->load->view('customer/Transaction-Report');
    }

    function setting() 
    {
        $this->load->view('customer/setting');
    }

    function notiFication() 
    {
        $this->load->view('customer/notiFication');
    }

    function wallet() 
    {
        $this->load->view('customer/wallet');
    }

    function get_transaction()
    {
        $list = $this->transaction->get_transaction_client($this->session->userdata('id'));
        $data = array();
        $no = $_POST['start'];

        foreach($list as $project)
        {
            $no++;

            $row = array();

            //$row[] = $no;
            $row[] = $project->date_time;
            $row[] = $project->agentName;
            switch ($project->status) {
                case '0':
                    $row[] = '';
                    break;
                case '1':
                    $row[] = '<div class="paid">paid</div>';
                    break;
                case '2':
                    $row[] = '<div class="unpaid">unpaid</div>';
                    break;
                case '3':
                    $row[] = '<div class="pending">pending</div>';
                    break;
                case '4':
                    $row[] = '<div class="deleted">deleted</div>';
                    break;
                case '5':
                    $row[] = '<div class="receive">receive</div>';
                    break;
                default :
                    $row[] = '';
                    break;
            };
            $row[] = "";
            $row[] = $project->amount;
            $row[] = "";
            $row[] = "";
            $row[] = "";

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->transaction->count_all_client_id($this->session->userdata('id')),
            'recordsFiltered' => $this->transaction->count_filtered(),
            'data' => $data,
        );

        echo json_encode($output);
    }
}