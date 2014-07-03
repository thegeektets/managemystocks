<?php
class users_model extends CI_Model {
    private $username;
    public function __construct(){
    $this->load->database();     }

	
        //this is a cron job function
	public function cron($data=array()){

	 $this->db->insert('stocks', $data);
   
	}
       //this function deletes records from the database table called 'mystocks'\
        public function deleteRecord($stock ,$date, $username) {
    	 $this->db->query("delete from mystocks where username = '".$username ."' and stock = '".$stock."' and date = '".$date."' ");
        }
      
       //this is a function checks if a stock is already registered\
        public function checkstock($stock ,$date,$username){
 
 	$query = $this->db->query("select * from mystocks where username = '".$username."' and stock = '".$stock."'and date = '".$date."'");
    	return $query->result_array();

        }
 	
        public function getmystock($username){
 	
 	$query = $this->db->query("select * from mystocks where username = '".$username."'");
    	return $query->result_array();
	}

   
   //this function gets all the emails for all users
        public function getemails(){
 	$query = $this->db->query("select email from user");
    	return $query->result_array();
	}
   
   
    public function get_user($username){
    $query = $this->db->query("select * from user where username = '".$username."'");
    return $query->result_array();}

    public function check_user($username){
       $query = $this->db->query("select username from user where username = '".$username ."'");
                foreach ($query->result() as $row)
            {
            return $row->username;
            }
     }

   
   public function registeruser() {
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
        $date =  $this->input->post("date");
                


        $this->load->library('session');
        $user =$this->session->userdata('username');
            
            $sql = "INSERT INTO mystocks (username,stock ,value ,shares,date) " .
            "VALUES (" . $this->db->escape($user) . ",".$this->db->escape($stock) . ",".$this->db->escape($value) . ",".$this->db->escape($shares) .",".$this->db->escape($date) .")";
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