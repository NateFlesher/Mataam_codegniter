<?php


class User_model extends CI_Model {

    var $details;
    var $com_role = -1;
    var $table = 'tb_users';
    var $column_order = array('username','email','psw',null); //set column field database for datatable orderable
    var $column_search = array('username','email','psw',); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order     

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }


// ********************* Login ************************
    function validate_user( $email, $password ) {
        // Build a query to retrieve the user's details
        // based on the received username and password
        $this->db->from('tb_users');
        $this->db->where('email',$email );
        $this->db->where('psw', $password );
        $login = $this->db->get()->result();

        // The results of the query are stored in $login.
        // If a value exists, then the user account exists and is validated
        if ( is_array($login) && count($login) == 1 ) {
            // Set the users details into the $details property of this class
            $this->details = $login[0];
            // Call set_session to set the user's session vars via CodeIgniter
            $this->com_role = $this->getCom_role($email, $password);
            $this->set_session();
            return true;
        }

        return false;
    }

    function getCom_role($email, $password)
    {
        if($this->details->role == 1)
        {
            $this->db->from('tb_company');
            $this->db->where('user_id', $this->details->id );
            $company = $this->db->get()->result();

            if(is_array($company) && count($company) == 1)
            {
                return $company[0]->role;
            }

            return -1;
        }
        return -1;
    }

    function set_session() {
        // session->set_userdata is a CodeIgniter function that
        // stores data in CodeIgniter's session storage.  Some of the values are built in
        // to CodeIgniter, others are added.  See CodeIgniter's documentation for details.
        $this->session->set_userdata( array(
                'id'=>$this->details->id,
                'username'=> $this->details->username,
                'email'=> $this->details->email,
                'role'=>$this->details->role,
                'com_role'=>$this->com_role,
                'isLoggedIn'=>true
            )
        );
    }

// ******************************************************


    private function _get_datatables_query()
    {
        
        $this->db->from($this->table);

        $i = 0;
        
        foreach ($this->column_search as $item) // loop column 
        {
            if($_POST['search']['value']) // if datatable send POST for search
            {
                
                if($i===0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if(count($this->column_search) - 1 == $i) //last loop
                    $this->db->group_end(); //close bracket
            }
            $i++;
        }
        
        if(isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

    function count_filtered()
    {
        $this->_get_datatables_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

    public function count_all()
    {
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('id',$id);
        $query = $this->db->get();

        return $query->row();
    }

    public function save($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
    }


    public function get_all()
    {
        $this->db->from($this->table);
        $this->db->select("*");
        return $this->db->get()->result();
    }

    public function existsPass($pass)
    {
        $res = $this->get_by_id($this->session->userdata("id"));        
        return strcmp($pass, $res->password) == 0;
    }

}
