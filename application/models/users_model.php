<?php
class users_model extends CI_Model {
    private $username;
    public function __construct(){
    $this->load->database();     }

 
 
 
 	public function getmystock($username){
 	
 	$query = $this->db->query("select * from mystocks where username = '".$username."'");
    return $query->result_array();
}
	

 	

 
    public function get_user($username){
    $query = $this->db->query("select * from user where username = '".$username."'");
    return $query->result_array();}


   
    function registeruser() {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $password = md5($password);
        $fullname = $this->input->post("fullname");
        $email = $this->input->post("email");
    
            $sql = "INSERT INTO user (username,email,password,fullname) " .
            "VALUES (" . $this->db->escape($username) . ",".$this->db->escape($email) .",".$this->db->escape($password) .",".$this->db->escape($fullname) .")";
            $this->db->query($sql);

    }
    function addstock() {
        $stock = $this->input->post("stock");
        $value = $this->input->post("value");
        $shares = $this->input->post("shares");
                


        $this->load->library('session');
        $user =$this->session->userdata('username');
            
            $sql = "INSERT INTO mystocks (username,stock ,value ,shares) " .
            "VALUES (" . $this->db->escape($user) . ",".$this->db->escape($stock) . ",".$this->db->escape($value) . ",".$this->db->escape($shares) .")";
            $this->db->query($sql);
      }
    
    function logindetails() {
        $username = $this->input->post("user");
        $query = $this->db->query("select * from user where username = '".$username ."'");
                foreach ($query->result() as $row)
            {
            return $row->password;
            }
    }
    


}