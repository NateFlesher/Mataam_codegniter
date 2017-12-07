<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    function index() {
        if( $this->session->userdata('isLoggedIn') == true) {
            switch($this->session->userdata('role'))
            {
                case '0':                   //admin
                    redirect('/admin/index');
                    break;
                case '1':                   //company
                    redirect('/superuser/index');
                    break;
                case '2':                   //customer
                    redirect('/customer/index');
                    break;
            } 
        } else {
            $this->show_login(false);
        }
    }

    function login_user() {
        // Create an instance of the user model
        $this->load->model('User_model');

        // Grab the email and password from the form POST
        $email = $this->input->post('email');
        $pass  = $this->input->post('pwd');

        //Ensure values exist for email and pass, and validate the user's credentials
        if( $email && $pass && $this->User_model->validate_user($email,$pass)) {
            // If the user is valid, redirect to the main view
            switch($this->session->userdata('role'))
            {
                case '0':                   //admin
                    redirect('/admin/index');
                    break;
                case '1':                   //company
                    redirect('/superuser/index');
                    break;
                case '2':                   //customer
                    redirect('/customer/index');
                    break;
            } 
        } else {
            // Otherwise show the login screen with an error message.
            $this->show_login(true);
        }
    }

    function show_login( $show_error = false ) {
        $data['error'] = $show_error;
        
        $this->load->view('login',$data);
    }

    function logout_user() {
      $this->session->sess_destroy();
      //$this->index();
      redirect('/home');
    }

    function new_user() {
        $this->load->view('customer/SignUp');
    }

    function signup_user() {
        // Create an instance of the user model
        $this->load->model('User_model');

        // Grab the email and password from the form POST
        $data['username'] = $this->input->post('username');
        $data['email'] = $this->input->post('email');
        $data['contactNum'] = $this->input->post('contactNum');
        $data['psw']  = $this->input->post('pwd');
        $data['photo1']  = $this->input->post('photo_input');
        $data['sex']  = $this->input->post('sex');
        $birth_day = $this->input->post('birth_day');
        $birth_month = $this->input->post('birth_month');
        $birth_year = $this->input->post('birth_year');
        if(($birth_year != 'Year') && ($birth_month != 'Month') && ($birth_day != 'Day'))
            $data['birthday'] = $birth_year.'-'.$birth_month.'-'.$birth_day;
        else
        {
            $data['birthday'] = '0000-00-00';
            //redirect('login/new_user');
        }
        $data['address']  = $this->input->post('address');
        $data['language']  = $this->input->post('lang');
        $data['nationality']  = $this->input->post('national');
        $data['user_id']  = $this->input->post('userid');
        $data['photo2']  = $this->input->post('photo_input2');
        $pp_term  = $this->input->post('pp_term');
        $robot_check  = $this->input->post('robot_check');
        
        echo 1;
        //echo json_encode($data);
        $this->User_model->save($data);
        //$this->show_login(true);
        //redirect('/customer/SignUp');
        
    }

    function showphpinfo() {
        echo phpinfo();
    }

}
