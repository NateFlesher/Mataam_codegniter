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

        $this->load->model('Superuser_model');
        $this->load->model('Employee_model', 'employee');
        $this->load->model('Footer_model', 'footer');
        $this->load->model('Transation_model', 'transation');
    }

    function index() {
        $data['aboutus'] = $this->footer->getAboutUs();
        $this->load->view('admin/index', $data);
    }

    function aboutus_update()
    {
        $data['aboutus'] = $_POST['aboutus'];

        $this->footer->aboutus_update($data);
        echo 1;
    }

    // manage company----------------------------------------
    function z4_1_mc_charge($com_Name) 
    {
        //$data = $this->Superuser_model->get_bank($this->session->userdata('id'));
        $com_id = $this->employee->get_com_id($com_Name);
        $data = $this->Superuser_model->get_bank_by_com($com_id, $com_Name);
        //$data = $this->Superuser_model->get_bank_by_com(1);
    	$this->load->view('admin/z4_1_mc_charge', $data);
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
        $com_Name = $this->input->post('com_Name');

        $user_id = $this->Superuser_model->getuserid($com_Name);

        $this->Superuser_model->update_bank('user_id='.$user_id, $data);
        $this->Superuser_model->update_charge('user_id='.$user_id, $data1);

        echo 1;
    }

    function z4_2_mc_manage($com_Name) 
    {
        //$com_Name = $this->input->post('com_Name');
        //$com_Name = 'company';
        $data = array(
            'com_Name'=>$com_Name
            );
    	$this->load->view('admin/z4_2_mc_manage', $data);
    }

    function get_emp()
    {
        //$user_id = $this->input->post('user_id');
        // if($this->input->post('user_id'))
        //     $user_id = $this->input->post('user_id');
        // else
            $user_id = $this->session->userdata('id');

        $list = $this->employee->get_emp($user_id);
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
                            <img src="'.$base_url.'asset/images/reset_psw.png" class="tbl_btn tbl_reset"/>
                        </a> 
                        <a href="javascript:void(0)" title="Edit" class="editEmp" onclick="edit_emp('.$project->id.')">
                            <img src="'.$base_url.'asset/images/edit.png"  class="tbl_btn tbl_edit"/>
                        </a> 
                        <a href="javascript:void(0)" title="Delete" class="delete" onclick="delete_emp('.$project->id.')">
                            <img src="'.$base_url.'asset/images/delete.png" class="tbl_btn tbl_delete" />
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->employee->count_all_id($user_id),
            'recordsFiltered' => $this->employee->count_filtered(),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function get_emp_by_com_id()
    {
        
        $com_Name = $this->input->post('com_Name');
        $com_id = $this->employee->get_com_id($com_Name);

        $list = $this->employee->get_emp_by_com_id($com_id);
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
                            <img src="'.$base_url.'asset/images/edit.png"  class="tbl_btn tbl_edit"/>
                        </a> 
                        <a href="javascript:void(0)" title="Delete" class="delete" onclick="delete_emp('.$project->id.')">
                            <img src="'.$base_url.'asset/images/delete.png" class="tbl_btn tbl_delete" />
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->employee->count_all_comid($com_id),
            'recordsFiltered' => $this->employee->count_all_comid($com_id),
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

    function add_employee()
    {
        $agentName = $this->input->post('agentName');
        $mobile = $this->input->post('mobile');
        $email = $this->input->post('email');
        $psw = $this->input->post('psw');
        $role = $this->input->post('role');
        $com_id = $this->employee->getCom_id($this->session->userdata('id'));
        
        if($role == -1)
            $data = array(
                'agentName'=>$agentName,
                'mobile'=>$mobile,
                'email'=>$email,
                'psw'=>$psw,
                'user_id'=>$this->session->userdata('id'),
                'com_id'=>$com_id
            );
        else
            $data = array(
                'agentName'=>$agentName,
                'mobile'=>$mobile,
                'email'=>$email,
                'psw'=>$psw,
                'role'=>$role,
                'user_id'=>$this->session->userdata('id'),
                'com_id'=>$com_id
            );
        $this->employee->save($data);
        echo json_encode(array("status" =>TRUE));
    }

	function z4_3_mc_profile($com_Name) 
    {
        //$com_Name = $this->input->post('com_Name');
        //$com_Name = 'company';
        // $data = array(
        //     'com_id'=>$this->employee->get_com_id($com_Name)
        //     );
        $data = $this->Superuser_model->get_company_by_comName($com_Name);

    	$this->load->view('admin/z4_3_mc_profile', $data);
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
        $data['status'] = $this->input->post('status');
        $data['countryNum'] = $this->input->post('countryNum');
        $user_id = $this->input->post('user_id');

        $this->Superuser_model->update('user_id='.$user_id, $data);

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

	function z4_4_mc_othersettings($com_Name) 
    {
        $com_id = $this->employee->get_com_id($com_Name);
        $data = $this->Superuser_model->getSetting($com_id, $com_Name);     //com_id

    	$this->load->view('admin/z4_4_mc_othersettings', $data);
    }

    function comsetting_update()
    {
        $data['payment'] = $this->input->post('payment');
        $data['credit_time'] = $this->input->post('credit_time');
        $data['credit_limit'] = $this->input->post('credit_limit');
        $data['currency'] = $this->input->post('currency');
        $data['sms_language'] = $this->input->post('sms_language');
        $data['sms_text'] = $this->input->post('sms_text');
        $data['owner'] = $this->input->post('owner');
        $data['superAgnet'] = $this->input->post('superAgent');
        $data['agent'] = $this->input->post('agent');
        $com_Name = $this->input->post('com_Name');

        $com_id = $this->employee->get_com_id($com_Name);
        $this->Superuser_model->comsetting_update($com_id, $data);
        
        echo 1;
    }

	function z4_5_mc_overview() 
    {
        $data['com_Name'] = $this->transation->get_com_name();
    	$this->load->view('admin/z4_5_mc_overview', $data);
    }

    function get_com_list()
    {
        $result = $this->transation->get_com_list();

        echo json_encode($result);
    }

    function get_pending()
    {
        $com_Name = $this->input->post('com_Name');
        
        $result = $this->transation->get_pending($com_Name, 3);

        $data = array();

        foreach($result as $project)
        {
            $row = array();

            //$row[] = $no;
            $row[] = $project->com_Name;
            $row[] = $project->amount;
            $row[] = "<div class='pending'>pending</div>";
            $row[] = $project->date_time;

            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="View" class="view_pending" onclick="view_pending('.$project->id.')">
                            <img src="'.$base_url.'asset/images/view.png" class="tbl_btn tbl_view"/>
                        </a> 
                        <a href="javascript:void(0)" title="Comp" class="comp_pending" onclick="comp_pending('.$project->id.')">
                            <img src="'.$base_url.'asset/images/comp.png" class="tbl_btn tbl_comp"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->transation->count_all_tran($com_Name, 3),  //3 is pending
            'recordsFiltered' => $this->transation->count_all_tran($com_Name, 3),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function get_paid()
    {
        $com_Name = $this->input->post('com_Name');
        
        $result = $this->transation->get_paid($com_Name, 1);

        $data = array();

        foreach($result as $project)
        {
            $row = array();

            //$row[] = $no;
            $row[] = '<input type="radio" />';
            $row[] = $project->com_Name;
            $row[] = $project->client;
            $row[] = $project->mobile_no;
            $row[] = $project->amount;
            $row[] = "<div class='paid'>paid</div>";
            $row[] = $project->date_time;

            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="View" class="view_pending" onclick="view_paid('.$project->id.')">
                            <img src="'.$base_url.'asset/images/view.png" class="tbl_btn tbl_view"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->transation->count_all_tran($com_Name, 1),  //3 is pending
            'recordsFiltered' => $this->transation->count_all_tran($com_Name, 1),
            'data' => $data,
        );

        echo json_encode($output);
    }

    function get_dir()
    {
        $date_from = $this->input->post('date_from');
        $date_to = $this->input->post('date_to');
        
        $result = $this->transation->get_dir($date_from, $date_to);

        $data = array();

        foreach($result as $project)
        {
            $row = array();

            //$row[] = $no;
            $row[] = '';
            $row[] = '';
            $row[] = $project->amount;
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
                    $row[] = '<div class="completed">completed</div>';
                    break;
                default :
                    $row[] = '';
                    break;
            };
            $row[] = $project->date_time;

            $base_url = base_url(); 

            $html_op = '<a href="javascript:void(0)" title="View" class="view_pending" onclick="view_paid('.$project->id.')">
                            <img src="'.$base_url.'asset/images/view.png" class="tbl_btn tbl_view"/>
                        </a> ';
            $row[] = $html_op;

            $data[] = $row;
        }

        $output = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $this->transation->count_all_tran(-1, 0),  
            'recordsFiltered' => $this->transation->count_all_tran(-1, 0),
            'data' => $data,
        );

        echo json_encode($output);
    }

    //master setup--------------------------------------------
    function z5_1_sms_setup() 
    {
    	$this->load->view('admin/z5_1_sms_setup');
    }

    function z5_2_email_setup() 
    {
    	$this->load->view('admin/z5_2_email_setup');
    }

    function z5_3_bank_setup() 
    {
    	$this->load->view('admin/z5_3_bank_setup');
    }

    function z5_4_business_cat() 
    {
    	$this->load->view('admin/z5_4_business_cat');
    }

    function z5_5_wallet_setup() 
    {
    	$this->load->view('admin/z5_5_wallet_setup');
    }

    //report-------------------------------------------------
    function z6_1_report() 
    {
    	$this->load->view('admin/z6_1_report');
    }

    //footer-------------------------------------------------
    function z7_2_privacy_pol() 
    {
        $data['privacy_pol'] = $this->footer->getprivacy_pol();
    	$this->load->view('admin/z7_2_privacy_pol', $data);
    }

    function privacy_update()
    {
        $data['privacy_pol'] = $_POST['privacy_pol'];

        $this->footer->privacy_update($data);
        echo 1;
    }

    function z7_3_terms_condition() 
    {
        $data['terms_condition'] = $this->footer->getterms_condition();
    	$this->load->view('admin/z7_3_terms_condition', $data);
    }

    function terms_update()
    {
        $data['terms_condition'] = $_POST['terms_condition'];

        $this->footer->terms_update($data);
        echo 1;
    }

    function z7_4_contactus() 
    {
    	$this->load->view('admin/z7_4_contactus');
    }

    function z7_5_career() 
    {
    	$this->load->view('admin/z7_5_career');
    }

    //homepage-------------------------------------------------
    function z8_1_home_main() 
    {
    	$this->load->view('admin/z8_1_home_main');
    }

    function z8_2_business_partners() 
    {
    	$this->load->view('admin/z8_2_business_partners');
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

    function getCurrencyList()
    {
        $list = $this->Superuser_model->getCurrencyList();
        $data = array();
        $no = 0;
        
        foreach($list as $project)
        {
            $no++;

            $row = array();

            $row[] = $no;
            $row[] = $project->currency;

            $data[] = $row;
        }
        echo json_encode($data);
    }
}