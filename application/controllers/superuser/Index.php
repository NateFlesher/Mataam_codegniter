<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if(!$this->session->userdata('isLoggedIn') || $this->session->userdata('com_role') == -1)
        {
        	redirect('/login/show_login');
        }

        $this->load->model('Superuser_model');
        $this->load->model('Employee_model', 'employee');
        $this->load->model('Transation_model', 'transaction');
        $this->load->model('Client_model', 'client');
    }

    function index() {
        
        $this->load->view('superuser/index');
    }

    function get_transaction()
    {
        $list = $this->transaction->get_transaction($this->session->userdata('id'));
        $data = array();
        $no = $_POST['start'];

        foreach($list as $project)
        {
            $no++;

            $row = array();

            //$row[] = $no;
            $row[] = $project->agentName;
            $row[] = $project->name;
            $row[] = $project->mobile;
            $row[] = $project->amount;
            switch ($project->status) {
                case '0':
                    $row[] = '';
                    break;
                case '1':
                    $row[] = '<div class="paid">paid</div><div class="paid_num">1</div>';
                    break;
                case '2':
                    $row[] = '<div class="unpaid">unpaid</div><div class="unpaid_num">1</div>';
                    break;
                case '3':
                    $row[] = '<div class="pending">pending</div><div class="pending_num">1</div>';
                    break;
                case '4':
                    $row[] = '<div class="deleted">deleted</div><div class="deleted_num">1</div>';
                    break;
                case '5':
                    $row[] = '<div class="completed">completed</div>';
                    break;
                default :
                    $row[] = '';
                    break;
            };
            $row[] = $project->date_time;
            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="view" class="view_tran" onclick="view_tran('.$project->tran_id.')">
                            <img src="'.$base_url.'asset/images/view.png" class="tbl_btn tbl_view"/>
                        </a> 
                        <a href="javascript:void(0)" title="Download" class="download_tran" onclick="download_tran('.$project->tran_id.')">
                            <img src="'.$base_url.'asset/images/download.png" class="tbl_btn tbl_down"/>
                        </a> 
                        <a href="javascript:void(0)" title="Delete" class="delete" onclick="delete_tran('.$project->tran_id.')">
                            <img src="'.$base_url.'asset/images/delete.png" class="tbl_btn tbl_delete"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->transaction->count_all_id($this->session->userdata('id')),
            'recordsFiltered' => $this->transaction->count_filtered(),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function tran_delete($id)
    {
        $this->transaction->delete_by_id($id);
        echo json_encode(array("status" =>TRUE));
    }

    /////////////////express invoice--------------------------------------
    function express_invoice() 
    {
    	$this->load->view('superuser/express_invoice');
    }

    /////////////////client ----------------------------------------------
    function clients() 
    {
        $this->load->view('superuser/clients');
    }

    function get_client()
    {
        $list = $this->client->get_client($this->session->userdata('id'));
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
            $row[] = $project->address;
            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="Invoicelist" class="invoicelist" onclick="invoicelist('.$project->id.')">
                            <div class="invoice_list">Invoice List</div>
                        </a> 
                        <a href="javascript:void(0)" title="Edit" class="edit" onclick="edit_client('.$project->id.')">
                            <img src="'.$base_url.'asset/images/edit.png" class="tbl_btn tbl_edit"/>
                        </a> 
                        <a href="javascript:void(0)" title="Delete" class="delete" onclick="delete_client('.$project->id.')">
                            <img src="'.$base_url.'asset/images/delete.png" class="tbl_btn tbl_delete"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->client->count_all_id($this->session->userdata('id')),
            'recordsFiltered' => $this->client->count_filtered(),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function delete_client($id)
    {
        $this->client->delete_by_id($id);
        echo json_encode(array("status" =>TRUE));
    }

    ////////////////report --------------------------------------
    function reports() 
    {
        $this->load->view('superuser/reports');
    }

    function get_report()
    {
        $list = $this->transaction->get_report($this->session->userdata('id'));
        $data = array();
        $no = $_POST['start'];

        foreach($list as $project)
        {
            $no++;

            $row = array();

            //$row[] = $no;
            $row[] = $project->agentName;
            $row[] = $project->name;
            $row[] = $project->mobile;
            $row[] = $project->amount;
            if($project->methodPay == '0')
                $row[] = '<div class="debit">Debit</div>';
            else
                $row[] = '<div class="credit">Credit</div>';
            switch ($project->payType) {
                case '0':
                    $row[] = '<div class="invoice">Invoice</div>';
                    break;
                case '1':
                    $row[] = '<div class="directpay">DirectPay</div>';
                    break;
                default :
                    $row[] = '';
                    break;
            }
            switch ($project->status) {
                case '0':
                    $row[] = '';
                    break;
                case '1':
                    $row[] = '<div class="paid">paid</div><div class="paid_num">1</div>';
                    break;
                case '2':
                    $row[] = '<div class="unpaid">unpaid</div><div class="unpaid_num">1</div>';
                    break;
                case '3':
                    $row[] = '<div class="pending">pending</div><div class="pending_num">1</div>';
                    break;
                case '4':
                    $row[] = '<div class="deleted">deleted</div><div class="deleted_num">1</div>';
                    break;
                case '5':
                    $row[] = '<div class="completed">completed</div>';
                    break;
                default :
                    $row[] = '';
                    break;
            };
            $row[] = $project->date_time;
            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="view" class="view_tran" onclick="view_tran('.$project->tran_id.')">
                            <img src="'.$base_url.'asset/images/view.png" class="tbl_btn tbl_view"/>
                        </a> 
                        <a href="javascript:void(0)" title="Download" class="download_tran" onclick="download_tran('.$project->tran_id.')">
                            <img src="'.$base_url.'asset/images/download.png" class="tbl_btn tbl_down"/>
                        </a> 
                        <a href="javascript:void(0)" title="Delete" class="delete" onclick="delete_tran('.$project->tran_id.')">
                            <img src="'.$base_url.'asset/images/delete.png" class="tbl_btn tbl_delete"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->transaction->count_all_id($this->session->userdata('id')),
            'recordsFiltered' => $this->transaction->count_filtered(),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function report_delete($id)
    {
        $this->transaction->delete_by_id($id);
        echo json_encode(array("status" =>TRUE));
    }

    function report_filter()
    {
        // $status = $this->input->post('status');


    }

    function getAgentList()
    {
        $list = $this->employee->getAgentList();
        $data = array();
        $no = 0;
        
        foreach($list as $project)
        {
            $no++;

            $row = array();

            $row[] = $no;
            $row[] = $project->agentName;

            $data[] = $row;
        }
        echo json_encode($data);
    }

    ////////////////Manage employee------------------------------
    function setting() 
    {
       //echo $this->session->userdata('com_role');
        switch($this->session->userdata('com_role'))
        {
            case '0': 
                $this->load->view('superuser/setting');
                break;
            case '1':                   //superuser
                $this->load->view('superuser/index');
                break;
            case '2':                   //agent
                $this->load->view('superuser/index');
                break;
        } 
        
    }

    function get_emp()
    {
        $list = $this->employee->get_emp($this->session->userdata('id'));
        $data = array();
        $no = $_POST['start'];

        foreach($list as $project)
        {
            $no++;

            $row = array();

            //$row[] = $no;
            $row[] = $project->agentName;
            $row[] = $project->mobile;
            $row[] = $project->email;
            switch ($project->role) {
                case '0':
                    $row[] = 'owner';
                    break;
                case '1':
                    $row[] = 'manager';
                    break;
                case '2':
                    $row[] = 'agent';
                    break;
            };
            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="Reset Password" class="reset_psw" onclick="reset_emp('.$project->id.')">
                            <div class="reset_pwd">Reset Password</div>
                        </a> 
                        <a href="javascript:void(0)" title="Edit" class="editEmp" onclick="edit_emp('.$project->id.')">
                            <img src="'.$base_url.'asset/images/edit.png" class="tbl_btn tbl_edit"/>
                        </a> 
                        <a href="javascript:void(0)" title="Delete" class="delete" onclick="delete_emp('.$project->id.')">
                            <img src="'.$base_url.'asset/images/delete.png" class="tbl_btn tbl_delete"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->employee->count_all_id($this->session->userdata('id')),
            'recordsFiltered' => $this->employee->count_filtered(),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function emp_delete($id)
    {
        $this->employee->delete_by_id($id);
        echo json_encode(array("status" =>TRUE));
    }

    function emp_reset_psw()
    {
        $id = $this->input->post('id');
        $psw = $this->input->post('psw');
        $where = array('id'=>$id);
        $data = array('psw'=>$psw);
        $this->employee->update($where, $data);
        echo json_encode(array("status" =>TRUE));
    }

    function emp_show($id)
    {
        $data = $this->employee->get_by_id($id);
        echo json_encode($data);
    }

    function emp_edit()
    {
        $id = $this->input->post('id');
        $agentName = $this->input->post('agentName');
        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $role = $this->input->post('role');
        $where = array('id'=>$id);
        if($role == -1)
            $data = array(
                'agentName'=>$agentName,
                'mobile'=>$mobile,
                'email'=>$email
            );
        else
            $data = array(
                'agentName'=>$agentName,
                'mobile'=>$mobile,
                'email'=>$email,
                'role'=>$role
            );
        $this->employee->update($where, $data);
        echo json_encode(array("status" =>TRUE));
    }


    ///////////////company profile ------------------------------
    function company_profile() 
    {
        switch($this->session->userdata('com_role'))
        {
            case '0':                   //owner
                $data = $this->Superuser_model->get_company($this->session->userdata('id'));
                
                $this->load->view('superuser/company_profile', $data);
                break;
            case '1':                   //superuser
                $this->load->view('superuser/index');
                break;
            case '2':                   //agent
                $this->load->view('superuser/index');
                break;
        } 
    }

    //company profile update
    function com_update()
    {
        $data['com_Name'] = $this->input->post('com_Name');
        $data['com_Address'] = $this->input->post('com_Address');
        $data['contactNum'] = $this->input->post('contactNum');
        $data['email'] = $this->input->post('email');
        $data['changeLogo'] = $this->input->post('changeLogo');
        $data['category'] = $this->input->post('category');
        $data['service'] = $this->input->post('service');
        $data['facebook'] = $this->input->post('facebook');
        $data['twitter'] = $this->input->post('twitter');
        $data['linkedin'] = $this->input->post('linkedin');
        $data['instagram'] = $this->input->post('instagram');
        $data['youtube'] = $this->input->post('youtube');
        $data['googleplus'] = $this->input->post('googleplus');
        $data['countryNum'] = $this->input->post('countryNum');

        $this->Superuser_model->update('user_id='.$this->session->userdata('id'), $data);

        echo 1;
    }

    function getcountryNumList()
    {
        $list = $this->Superuser_model->getcountryNumList();
        $data = array();
        $no = 0;
        
        foreach($list as $project)
        {
            $no++;

            $row = array();

            $row[] = $no;
            $row[] = $project->countyNum;

            $data[] = $row;
        }
        echo json_encode($data);
    }

    ///////////////////bank details & charges-------------------

    function bank() 
    {
        switch($this->session->userdata('com_role'))
        {
            case '0':                   //owner
                $data = $this->Superuser_model->get_bank($this->session->userdata('id'));
                 //var_dump($data);
                $this->load->view('superuser/bank', $data);
                break;
            case '1':                   //superuser
                $this->load->view('superuser/index');
                break;
            case '2':                   //agent
                $this->load->view('superuser/index');
                break;
        } 
    }

    function getBankList()
    {
        $list = $this->Superuser_model->getBankList();
        $data = array();
        $no = 0;
        
        foreach($list as $project)
        {
            $no++;

            $row = array();

            $row[] = $no;
            $row[] = $project->bank;

            $data[] = $row;
        }
        echo json_encode($data);
    }

    function bank_update()
    {
        $data['accHolderName'] = $this->input->post('accHolderName');
        $data['bankName'] = $this->input->post('bankName');
        $data['branch'] = $this->input->post('branch');
        $data['accountNum'] = $this->input->post('accountNum');
        $data['IBAN'] = $this->input->post('IBAN');
        $data['swiftCode'] = $this->input->post('swiftCode');
        $data1['debt_PF'] = $this->input->post('debt_PF');
        $data1['debt_charge'] = $this->input->post('debt_charge');
        $data1['credit_PF'] = $this->input->post('credit_PF');
        $data1['credit_charge'] = $this->input->post('credit_charge');
        $data1['chargeAllocation'] = $this->input->post('chargeAllocation');
        $data1['company'] = $this->input->post('company');
        $data1['client'] = $this->input->post('client');

        $this->Superuser_model->update_bank('user_id='.$this->session->userdata('id'), $data);
        $this->Superuser_model->update_charge('user_id='.$this->session->userdata('id'), $data1);

        echo 1;
    }

    /////////////////other setting ---------------------------

    function other_setting() 
    {
        switch($this->session->userdata('com_role'))
        {
            case '0':                   //owner
                $data = $this->Superuser_model->get_sms($this->session->userdata('id'));
                 //var_dump($data);
                $this->load->view('superuser/other_setting', $data);
                break;
            case '1':                   //superuser
                $this->load->view('superuser/index');
                break;
            case '2':                   //agent
                $this->load->view('superuser/index');
                break;
        } 
    }

    function getLangList()
    {
        $list = $this->Superuser_model->getLangList();
        $data = array();
        $no = 0;
        
        foreach($list as $project)
        {
            $no++;

            $row = array();

            $row[] = $no;
            $row[] = $project->language;

            $data[] = $row;
        }
        echo json_encode($data);
    }

    function sms_update()
    {
        $data['sms_language'] = $this->input->post('sms_language');
        $data['sms_text'] = $this->input->post('sms_text');

        $this->Superuser_model->sms_update($this->session->userdata('id'), $data);
        
        echo 1;
    }
}