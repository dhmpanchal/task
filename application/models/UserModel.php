<?php
class UserModel extends CI_model
{
    function create_user($post_data)
    {
        return $this->db->insert('user',$post_data);
    }

    public function is_authenticate($email,$password)
    {
        $q = $this->db->where(['email'=>$email,'password'=>$password])
                    ->get('user');
        if ($q->num_rows()) {
            return $q->row()->id;
        }
        else {
            return False;
        }
    }

    public function getCountries()
    {
      $q = $this->db->select()
                    ->from('country_list')
                    ->get();
      return $q->result();
    }

    public function getUsers()
    {
      $q = $this->db->select()
                    ->from('user')
                    ->get();
      return $q->result();
    }
    public function getCountryName($id)
    {
        $q = $this->db->where(['id'=>$id])
                    ->get('country_list');
        if ($q->num_rows()) {
            return $q->row()->country_name;
        }
        else {
            return False;
        }
    }
}

?>
