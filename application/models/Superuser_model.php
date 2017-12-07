<?php


class Superuser_model extends CI_Model {

    var $details;
    var $table = 'tb_company';
    var $column_order = array('username','email','psw',null); //set column field database for datatable orderable
    var $column_search = array('username','email','psw',); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('id' => 'desc'); // default order     

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get_company($user_id)
    {
        $this->db->from($this->table);
        $this->db->where('user_id', $user_id );
        $company = $this->db->get()->result();

        if ( is_array($company) && count($company) == 1 ) {
            $data = array(
                'com_Name'=>$company[0]->com_Name,
                'com_Address'=>$company[0]->com_Address,
                'contactNum'=>$company[0]->contactNum,
                'email'=>$company[0]->email,
                'changeLogo'=>$company[0]->changeLogo,
                'category'=>$company[0]->category,
                'service'=>$company[0]->service,
                'facebook'=>$company[0]->facebook,
                'twitter'=>$company[0]->twitter,
                'linkedin'=>$company[0]->linkedin,
                'instagram'=>$company[0]->instagram,
                'youtube'=>$company[0]->youtube,
                'googleplus'=>$company[0]->googleplus,
                'stat_sel'=>$company[0]->status,
                'role'=>$company[0]->role,
                'user_id'=>$company[0]->user_id,
                'country_no'=>$company[0]->countryNum
                );

            //var_dump($data);
            return $data;
        }
    }

    function get_company_by_comName($com_Name)
    {
        $this->db->from($this->table);
        $this->db->where('com_Name', $com_Name );
        $company = $this->db->get()->result();

        if ( is_array($company) && count($company) == 1 ) {
            $data = array(
                'com_Name'=>$company[0]->com_Name,
                'com_Address'=>$company[0]->com_Address,
                'contactNum'=>$company[0]->contactNum,
                'email'=>$company[0]->email,
                'changeLogo'=>$company[0]->changeLogo,
                'category'=>$company[0]->category,
                'service'=>$company[0]->service,
                'facebook'=>$company[0]->facebook,
                'twitter'=>$company[0]->twitter,
                'linkedin'=>$company[0]->linkedin,
                'instagram'=>$company[0]->instagram,
                'youtube'=>$company[0]->youtube,
                'googleplus'=>$company[0]->googleplus,
                'stat_sel'=>$company[0]->status,
                'role'=>$company[0]->role,
                'user_id'=>$company[0]->user_id,
                'country_no'=>$company[0]->countryNum
                );

            //var_dump($data);
            return $data;
        }
    }

    function get_bank($user_id)
    {
        $this->db->from('tb_bank');
        $this->db->join('tb_charge', 'tb_bank.user_id = tb_charge.user_id', 'left');
        $this->db->where('tb_bank.user_id', $user_id );

        $bank = $this->db->get()->result();

        if ( is_array($bank)) {
            $data = array(
                'accHolderName'=>$bank[0]->accHolderName,
                'bankName'=>$bank[0]->bankName,
                'branch'=>$bank[0]->branch,
                'accountNum'=>$bank[0]->accountNum,
                'IBAN'=>$bank[0]->IBAN,
                'swiftCode'=>$bank[0]->swiftCode,
                'debt_PF'=>$bank[0]->debt_PF == 0 ? 'Percentage' : 'Fixed',
                'debt_charge'=>$bank[0]->debt_charge,
                'credit_PF'=>$bank[0]->credit_PF == 0 ? 'Percentage' : 'Fixed',
                'credit_charge'=>$bank[0]->credit_charge,
                'chargeAllocation'=>$bank[0]->chargeAllocation,
                'company'=>$bank[0]->company,
                'client'=>$bank[0]->client,
                'user_id'=>$bank[0]->user_id
                );

            //var_dump($data);
            return $data;
        }
    }

    function get_bank_by_com($com_id, $com_Name)
    {
        $this->db->from('tb_bank');
        $this->db->join('tb_charge', 'tb_bank.user_id = tb_charge.user_id', 'left');
        $this->db->join('tb_employee', 'tb_employee.user_id=tb_bank.user_id', 'left');
        $this->db->where('tb_employee.com_id', $com_id );

        $bank = $this->db->get()->result();

        if ( is_array($bank)) {
            $data = array(
                'accHolderName'=>$bank[0]->accHolderName,
                'bankName'=>$bank[0]->bankName,
                'branch'=>$bank[0]->branch,
                'accountNum'=>$bank[0]->accountNum,
                'IBAN'=>$bank[0]->IBAN,
                'swiftCode'=>$bank[0]->swiftCode,
                'debt_PF'=>$bank[0]->debt_PF == 0 ? 'Percentage' : 'Fixed',
                'debt_charge'=>$bank[0]->debt_charge,
                'credit_PF'=>$bank[0]->credit_PF == 0 ? 'Percentage' : 'Fixed',
                'credit_charge'=>$bank[0]->credit_charge,
                'chargeAllocation'=>$bank[0]->chargeAllocation,
                'company'=>$bank[0]->company,
                'client'=>$bank[0]->client,
                'user_id'=>$bank[0]->user_id,
                'com_Name'=>$com_Name
                );

            //var_dump($data);
            return $data;
        }
    }

    function getBankList()
    {
        $this->db->from('tb_bank_type');
        $this->db->select("*");
        return $this->db->get()->result();
    }

    function getuserid($com_Name)
    {
        $this->db->from($this->table);
        $this->db->where('com_Name', $com_Name);
        $result = $this->db->get()->result();

        if(!is_array($result)) return -1;
        return $result[0]->user_id;
    }

    public function update_bank($where, $data)
    {
        $this->db->update('tb_bank', $data, $where);
        return $this->db->affected_rows();
    }

    public function update_charge($where, $data)
    {
        $this->db->update('tb_charge', $data, $where);
        return $this->db->affected_rows();
    }

    function getSetting($com_id, $com_Name)
    {
        $this->db->from('tb_company_setting');
        $this->db->where('com_id', $com_id );

        $bank = $this->db->get()->result();

        if ( is_array($bank)) {
            $data = array(
                'payment'=>$bank[0]->payment,
                'credit_time'=>$bank[0]->credit_time,
                'credit_limit'=>$bank[0]->credit_limit,
                'sms_language'=>$bank[0]->sms_language,
                'sms_text'=>$bank[0]->sms_text,
                'currency'=>$bank[0]->currency,
                'owner'=>$bank[0]->owner,
                'superAgent'=>$bank[0]->superAgnet,
                'agent'=>$bank[0]->agent,
                'com_Name'=>$com_Name
                );

            //var_dump($data);
            return $data;
        }
    }

    function get_sms($user_id)
    {
        $this->db->from('tb_company_setting');
        $this->db->join('tb_company', 'tb_company.id=tb_company_setting.com_id', 'left');
        $this->db->where('tb_company.user_id', $user_id );

        $sms = $this->db->get()->result();

        if ( is_array($sms)) {
            $data = array(
                'sms_language'=>$sms[0]->sms_language,
                'sms_text'=>$sms[0]->sms_text
            );

            //var_dump($data);
            return $data;
        }
    }

    function getLangList()
    {
        $this->db->from('tb_language');
        $this->db->select("*");
        return $this->db->get()->result();
    }

    function getCurrencyList()
    {
        $this->db->from('tb_currency');
        $this->db->select("*");
        return $this->db->get()->result();
    }

    function getcountryNumList()
    {
        $this->db->from('tb_countrynum');
        $this->db->select("*");
        return $this->db->get()->result();
    }

    public function sms_update($user_id, $data)
    {
        $this->db->from('tb_company');
        $this->db->where('user_id', $user_id);
        $result = $this->db->get()->result();
        $com_id = $result[0]->id;

        $this->db->flush_cache();

        $where = 'com_id='.$com_id;
        $this->db->update('tb_company_setting', $data, $where);
        
        return $this->db->affected_rows();
    }

    public function comsetting_update($com_id, $data)
    {
        $where = 'com_id='.$com_id;
        $this->db->update('tb_company_setting', $data, $where);
        
        return $this->db->affected_rows();
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
