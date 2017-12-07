<?php


class Footer_model extends CI_Model {

    var $details;
    var $table = 'tb_footer';
    var $column_order = array('agentName','mobile','email', 'role',null); //set column field database for datatable orderable
    var $column_search = array('agentName','mobile','email', 'role'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order     

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function getAboutUs()
    {
        $this->db->from($this->table);
        $emp = $this->db->get()->result();

        if ( is_array($emp) && count($emp) == 1) {
            
            return $emp[0]->aboutus;
        }
        else
            return '';
    }

   
    function aboutus_update($data)
    {
        $this->db->update($this->table, $data, 'id=1');
        return $this->db->affected_rows();
    }

    function getprivacy_pol()
    {
        $this->db->from($this->table);
        $emp = $this->db->get()->result();

        if ( is_array($emp) && count($emp) == 1) {
            
            return $emp[0]->privacy_pol;
        }
        else
            return '';
    }
   
    function privacy_update($data)
    {
        $this->db->update($this->table, $data, 'id=1');
        return $this->db->affected_rows();
    }

    function getterms_condition()
    {
        $this->db->from($this->table);
        $emp = $this->db->get()->result();

        if ( is_array($emp) && count($emp) == 1) {
            
            return $emp[0]->terms_condition;
        }
        else
            return '';
    }
   
    function terms_update($data)
    {
        $this->db->update($this->table, $data, 'id=1');
        return $this->db->affected_rows();
    }

    function contactus_submit($data)
    {
        $this->db->insert('tb_contactus', $data);
        return $this->db->insert_id();
    }

    function get_contactus()
    {
        $this->db->from('tb_contactus');
        return $this->db->get()->result();
    }

    function count_all_msg()
    {
        $this->db->from('tb_contactus');
        $result = $this->db->get()->result();
        return count($result);
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
        $this->db->where('user_id', $id );
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
