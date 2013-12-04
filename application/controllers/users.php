<?php
    class users extends CI_Controller{
    private $username;

    public function __construct()
    {
    parent::__construct();
    $this->load->model('users_model');
    }


  function index(){
   $this->load->library('session');
    if($this->session->userdata('logged_in') == "TRUE") {
      $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
    //  $data['stocks'] = $this->users_model->get_stocks($this->session->userdata('username'));
      $this->load->view('dashboard/index' , $data);
 
    }
    else{
      $data['success']=("") ;
  	  $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user', 'Username ', 'required'); 
      $this->form_validation->set_rules('pass', 'Password  ', 'required|alpha_numeric'); 
                      

    if ($this->form_validation->run() == FALSE){
 
            $this->load->view('dashboard/login',$data);
    }
    else {
       $passw = $this->users_model->logindetails();
       if(md5($this->input->post("pass")) == $passw){
          $this->load->library('session');
          $newdata = array(
                'username'  => $this->input->post("user"),
                'logged_in' => TRUE
               );

        $this->session->set_userdata($newdata);
        $users = $this->session->all_userdata();
        $this->dashboard();
        }

    else{
       $data['success']= ("Login Failed !") ;
       $this->load->view('dashboard/login' ,$data);
   
      }
        
      }
    }		
  }

  function logout(){
        $this->load->library('session');
        $newdata = array(
        'logged_in' => FALSE);

        $this->session->set_userdata($newdata);
        $data['success']=("") ;
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user', 'Username ', 'required'); 
        $this->form_validation->set_rules('pass', 'Password  ', 'required|alpha_numeric'); 
    
    if ($this->form_validation->run() == FALSE){
      $this->load->view('dashboard/login',$data);
    }else {
      $passw = $this->users_model->logindetails();
      if($this->input->post("pass") == $passw){
        $this->load->library('session');
        $newdata = array(
                   'username'  => $this->input->post("user"),
                   'logged_in' => TRUE );

       $this->session->set_userdata($newdata);
       $users = $this->session->all_userdata();
       $this->dashboard();
      }

      else{
     $data['success']= ("Login Failed !") ;
     $this->load->view('dashboard/login' ,$data);
   
      }
        
    }
      
     
      }
        
    function register(){
     $this->load->helper(array('form', 'url'));

     $this->load->library('form_validation');

            $this->form_validation->set_rules('fullname', 'Fullname ', 'required'); 
            $this->form_validation->set_rules('username', 'Username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password  ', 'required|alpha_numeric'); 
           $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required');
       
            

    if ($this->form_validation->run() == FALSE){
 
    $this->load->view('register');
    }
    else {
     $data['success']= ("Registration success") ;
     $this->users_model->registeruser();
     $this->load->view('dashboard/login' ,$data);
      
    }
  }
  

  function dashboard(){
          $this->load->library('session');
    
      if($this->session->userdata('logged_in') == "TRUE") {
        $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
        $data['mystocks'] = $this->users_model->getmystock($this->session->userdata('username'));
        $data['stocks']= $this->stocks();
        $data['today'] = $this->today();
         $data['high']= $this->high();
        $data['low'] = $this->low();
        $data['yesterday'] = $this->yesterday();


        $this->load->view('dashboard/index' , $data);
        }
        else{
          $this->index();
        }
      }
 
function addstock(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('stock','stock', 'required'); 
      $this->form_validation->set_rules('shares','shares', 'required'); 
      $this->form_validation->set_rules('value','value', 'required'); 
      //$this->form_validation->set_rules('avatar','avatar', 'required'); 

   if ($this->form_validation->run() == FALSE){
     $this->load->library('session');
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['success'] =("Stock Update Failed"); 
      $this->load->view('dashboard/add' ,$data);
    }
    else {
     $this->load->library('session');
      $this->users_model->addstock();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['success'] =("Stock Update success"); 
     $this->load->view('dashboard/add' ,$data);
     
    }


    
    

  }


     

  public function value($string)
  {
       $chars = $this ->stringToArray($string);
       $n =  0;
          while (count($chars)>= $n)
           {
            $char = $chars[$n];
           
            if(Is_numeric($char)) 
            {
           
              return $n;
            }
            else
            {
              $n++;
            }
      }

    }


  public function dot($string)
  {
       $chars = $this ->stringToArray($string);
       $n =  0;
          while (count($chars)>= $n)
           {
            $char = $chars[$n];
           
             if($char==".")
              {
               return $n;
              }
            else
            {
              $n++;
            }
          }

    }
  public function psymbol($string)
  {
    $chars = $this ->stringToArray($string);
       $n =  0;
          while (count($chars)>= $n)
           {
            $char = $chars[$n];
           
            if($char=="%")
            {
           
              return $n;
            }
            else
            {
              $n++;
            }
          }

    }

    public function stocks()
    {
        $bdelimit= $this->scrape();
        $delimit = $bdelimit[0];
        $rows =$this->delimiter($delimit);
        $n =  1;
        while (count($rows) > $n) 
        {
          # code...
         $number  = $this ->value ($rows[$n]) ;
         $stck =  substr( $rows[$n],0,($number-1));
         $stocks [$n-1] = $stck ; 

          $n++;
        }

      return $stocks ;

    }
public function yesterday()
{
        $bdelimit= $this->scrape();
        $delimit = $bdelimit[0];
        $rows =$this->delimiter($delimit);
        $n =  1;
        while (count($rows) > $n) 
        {
         $number  = $this ->value ($rows[$n]) ;
         //a string that contaisn stock detail values
         $detail = substr( $rows[$n],($number));
         //index of space value
         //$spc  = $this->space($detail); 
         $details  = explode(" ",$detail);
         $string = $details[0];
         $dotp = $this->dot($string);
         
         $finerd =substr($details[0], 0, ($dotp + 3) ) ;
         $yesterday[$n-1] = $finerd;
   
          $n++;
        }


    return $yesterday ;

}
public function today()
{
        $bdelimit= $this->scrape();
        $delimit = $bdelimit[0];
        $rows =$this->delimiter($delimit);
        $n =  1;
        while (count($rows) > $n)
         {
          # code...
         $number  = $this ->value ($rows[$n]) ;
         //a string that contaisn stock detail values
         $detail = substr( $rows[$n],($number));
         //index of space value
         //$spc  = $this->space($detail); 
         $details  = explode(" ",$detail);
         $string = $details[0];
         $dotp = $this->dot($string);
         $string2 =substr($string, ($dotp + 3));
         $dott = $this->dot($string2);
         
         $finerd =substr($details[0], ($dotp + 3) , ($dott + 3) ) ;
         $today[$n-1] = $finerd;
   
          $n++;
        }
return $today ;

}

public function high()
{
        $bdelimit= $this->scrape();
        $delimit = $bdelimit[0];
        $rows =$this->delimiter($delimit);
        $n =  1;
    while (count($rows) > $n) 
    {
         $number  = $this ->psymbol ($rows[$n]) ;
         //a string after the % symbol
         $detail = substr( $rows[$n],($number +3));
         //position of a dot in the string
         $dotp = $this->dot($detail);
         
         //sub string of the detail string
         $string =substr($detail,0 ,($dotp + 3));
         
         $high[$n-1] = $string;
   
          $n++;
    }
    return $high ;
}


public function low()
{
        $bdelimit= $this->scrape();
        $delimit = $bdelimit[0];
        $rows =$this->delimiter($delimit);
        $n =  1;
        while (count($rows) > $n) 
        {
         $number  = $this ->psymbol ($rows[$n]) ;
         //a string after the % symbol
         $detail = substr( $rows[$n],($number +3));
         //position of the first dot in the string
         $dotp = $this->dot($detail);

         //sub string after the high value 

         $substring = substr($detail, ($dotp + 3)) ;

         $substring =trim($substring);
         //since sub string is the last in the main string pass it as it is
         $low[$n-1] = $substring;
   
          $n++;
        }


   return $low ;
}



public function change()
{
$today = $this -> today();
$yesterday = $this -> yesterday();

  for($n=0 ;$n<=count($today) ;$n++)
  {

  $changes[$n] = $today[$n] -$yesterday[$n] ;
  }

return $changes ;

}

public function pchange()
{
$changes = $this -> change();
$yesterday = $this -> yesterday();

  for($n=0 ;$n<=count($changes) ;$n++)
  {
    $pchange[$n] = (($changes[$n]/$yesterday[$n]) * 100) ;
  }
return $pchange ;

}
public function stringToArray($s)
{
    $r = array();
    for($i=0; $i<strlen($s); $i++) 
         $r[$i] = $s[$i];
    return $r;
}


}








