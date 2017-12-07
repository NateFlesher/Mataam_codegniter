<?php


class Transation_model extends CI_Model {

    var $details;
    var $table = 'tb_transation';
    var $column_order = array('agent','client','mobile', 'status',null); //set column field database for datatable orderable
    var $column_search = array('agent','client','mobile', 'status'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order     

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_transaction($user_id)
    {
        $this->db->from('tb_employee');
        $this->db->where('user_id', $user_id);
        $list = $this->db->get()->result();
        if(!is_array($list)) return;
        $com_id = $list[0]->com_id;

        $this->db->flush_cache();

        $this->db->select('tb_transation.id as tran_id, tb_employee.agentName, tb_client.name, tb_transation.mobile, tb_transation.amount, tb_transation.status, tb_transation.date_time');
        $this->db->from($this->table);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->join('tb_client', 'tb_client.id=tb_transation.client', 'left');
        $this->db->join('tb_employee', 'tb_employee.id=tb_transation.agent', 'left');
        $this->db->where('tb_employee.com_id', $com_id );
        $emp = $this->db->get()->result();

        if ( is_array($emp)) {
            
            return $emp;
        }
    }

    function get_transaction_client($user_id)
    {
        // $this->db->from('tb_client');
        // $this->db->where('user_id', $user_id);
        // $list = $this->db->get()->result();
        // if(!is_array($list)) return;
        // $client = $list[0]->id;

        // $this->db->flush_cache();

        $this->db->select('tb_transation.id as tran_id, tb_employee.agentName, tb_transation.amount, tb_transation.status, tb_transation.date_time');
        $this->db->from($this->table);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->join('tb_client', 'tb_client.id=tb_transation.client', 'left');
        $this->db->join('tb_employee', 'tb_employee.id=tb_transation.agent', 'left');
        $this->db->where('tb_client.user_id', $user_id );
        $emp = $this->db->get()->result();

        if ( is_array($emp)) {
            
            return $emp;
        }
    }

    public function count_all_client_id($user_id)
    {
        $this->db->from($this->table);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->join('tb_client', 'tb_client.id=tb_transation.client', 'left');
        $this->db->join('tb_employee', 'tb_employee.id=tb_transation.agent', 'left');
        $this->db->where('tb_client.user_id', $user_id );
        return $this->db->count_all_results();
    }

    function get_report($user_id)
    {
        $this->db->from('tb_employee');
        $this->db->where('user_id', $user_id);
        $list = $this->db->get()->result();
        if(!is_array($list)) return;
        $com_id = $list[0]->com_id;

        $this->db->flush_cache();

        $this->db->select('tb_transation.id as tran_id, tb_employee.agentName, tb_client.name, tb_transation.mobile, tb_transation.amount, tb_transation.methodPay, tb_transation.payType, tb_transation.status, tb_transation.date_time');
        $this->db->from($this->table);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->join('tb_client', 'tb_client.id=tb_transation.client', 'left');
        $this->db->join('tb_employee', 'tb_employee.id=tb_transation.agent', 'left');
        $this->db->where('tb_employee.com_id', $com_id );
        $emp = $this->db->get()->result();

        if ( is_array($emp)) {
            
            return $emp;
        }
    }

    function get_com_list()
    {
        $this->db->from('tb_company');
        return $this->db->get()->result();
    }

    function get_com_name()
    {
        $this->db->from('tb_company');
        $result = $this->db->get()->result();
        if(!is_array($result)) return -1;
        return $result[0]->com_Name;
    }

    public function count_all_tran($com_Name, $status)
    {
        $this->db->from($this->table);
        $this->db->join('tb_employee', 'tb_employee.id=tb_transation.agent', 'left');
        $this->db->join('tb_company', 'tb_company.id=tb_employee.com_id', 'left');
        if($com_Name != '-1')
            $this->db->where('tb_company.com_Name', $com_Name);
        if($status != '0')
            $this->db->where('tb_transation.status', $status);
        return $this->db->count_all_results();
    }

    function get_pending($com_Name, $status)
    {
        $this->db->select('tb_transation.*, tb_company.com_Name');
        $this->db->from($this->table);
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->join('tb_employee', 'tb_employee.id=tb_transation.agent', 'left');
        $this->db->join('tb_company', 'tb_company.id=tb_employee.com_id', 'left');
        if($com_Name != '-1')
            $this->db->where('tb_company.com_Name', $com_Name);
        $this->db->where('tb_transation.status', $status);
        $result = $this->db->get()->result();

        return $result;
    }

    function get_paid($com_Name, $status)
    {
        $this->db->select('tb_transation.*, tb_company.com_Name, tb_client.name, tb_client.mobile mobile_no');
        $this->db->from($this->table);
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->join('tb_employee', 'tb_employee.id=tb_transation.agent', 'left');
        $this->db->join('tb_company', 'tb_company.id=tb_employee.com_id', 'left');
        $this->db->join('tb_client', 'tb_client.id=tb_transation.client', 'left');
        if($com_Name != '-1')
            $this->db->where('tb_company.com_Name', $com_Name);
        $this->db->where('tb_transation.status', $status);
        $result = $this->db->get()->result();

        return $result;
    }

    function get_dir($date_from, $date_to)
    {
        $this->db->from($this->table);
        if($_POST['length'] != -1)
            $this->db->limit($_POST['length'], $_POST['start']);
        $this->db->where('date_time >=', $date_from);
        $this->db->where('date_time <=', $date_to);

        return $this->db->get()->result();
    }

// ******************************************************


    private function _get_datatables_query()
    {
        
        $this->db->from($this->table);

        $i = 0;
        
        // $this->db->where('user_id', 2);

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

    public function count_all_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('client', $id );
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
