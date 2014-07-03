<<<<<<< HEAD
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
      $this->dashboard();
    }
    else{
      $data['success']=("") ;
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user', 'Username ', 'required'); 
      $this->form_validation->set_rules('pass', 'Password  ', 'required|alpha_numeric'); 
                      

    if($this->form_validation->run() == FALSE){
 
     $this->load->view('index',$data);
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
       $this->load->view('index' ,$data);
   
      }
        
      }
    }		
  }
  function initializemail(){
    $this->load->library('email');
    $config['protocol'] = "smtp"; 
    $config['smtp_host'] = "mail.trackyourshares.com";
    $config['smtp_port'] = "25";
    $config['smtp_user'] = "trackyou"; 
    $config['smtp_pass'] = "Xct108X6lc";
    $config['charset'] = "utf-8";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";

    $this->email->initialize($config);
  } 
  
 
   function welcomemail($email){
     $this->initializemail();
     $this->load->library('email');
     
     $this->email->from('support@trackyourshares.com', 'Track Your Shares Team');
     $this->email->to($email); 
     $this->email->subject('Track Your Shares');
     $this->email->message('Welcome and thank you for registering with track your shares .Here at Track Your Shares we are committed to ensuring that 
     you get real time information on your shares at any given time ,We are undergoing an incremental process to ensure that we deliver the application
     that you need.Therefore if you have any suggestions or complains feel free to get to us via this mail .Track Your Shares Team');	
     $this->email->send();
    
     
     }
       
 

        //this function copies data to database 

	function cron(){
	
	$dat['stocks']= $this->stocks();
        $dat['today'] = $this->today();
        $dat['high']= $this->high();
        $dat['low'] = $this->low();
        
        $stocks = $dat['stocks'];
        $today = $dat['today'];
        $high = $dat['high'];
        $low = $dat['low'];
        $date = date("Y-m-d");
       
        
        
        for ($i = 0 ;$i <  count($stocks) ;$i++){

        $data=array('stock'=>$stocks[$i], 'today'=> $today[$i] ,'high'=> $high[$i] ,'low'=> $low[$i] ,'date'=>$date);
        $this->users_model->cron($data);

           
        } 
        
        
	
	}



  function logout(){
        $this->load->library('session');
        $newdata = array(
        'logged_in' => FALSE);

     $this->session->set_userdata($newdata);
     $this->index();
   
      }
        
    function register(){
     $this->load->helper(array('form', 'url'));
     $this->load->library('form_validation');

            $this->form_validation->set_rules('fullname', 'Fullname ', 'required'); 
            $this->form_validation->set_rules('username', 'Username ', 'required'); 
            $this->form_validation->set_rules('email', 'Email ', 'required|valid_email'); 
            $this->form_validation->set_rules('password', 'Password  ', 'required|alpha_numeric'); 
            $this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required');
    
    $user = $this->users_model->check_user($this->input->post("username"));
    if( $user != null ){
         echo "3" ;
     }
    else{ 
              
   
    if ($this->form_validation->run() == FALSE){
     echo "0";
     
     }
    else {
     $this->users_model->registeruser();
     echo "1";     
          
     $this->welcomemail($this->input->post("email"));

     
    }
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
        
        $mystocks = $data['mystocks'] ;
        if(count($mystocks) > 0 ){

        $this->load->view('dashboard/index' , $data);
         }
        else{
         $this->addstock();
             
             }
        }
        else{
          $this->index();
        }
      }
function allstocks(){
        $this->load->library('session');
    
     if($this->session->userdata('logged_in') == "TRUE") {
        $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
        $data['stocks']= $this->stocks();
        $data['today'] = $this->today();
        $data['high']= $this->high();
        $data['low'] = $this->low();
        $data['yesterday'] = $this->yesterday();
        
        $this->load->view('dashboard/all' , $data);
        }
        else{
          $this->index();
        }
      }

 
function addstock(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('date','date', 'required'); 
      $this->form_validation->set_rules('stock','stock', 'required'); 
      $this->form_validation->set_rules('shares','shares', 'required'); 
      $this->form_validation->set_rules('value','value', 'required'); 
      //$this->form_validation->set_rules('avatar','avatar', 'required'); 

   if ($this->form_validation->run() == FALSE){
     $this->load->library('session');
     $data['stocks']= $this->stocks();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['mystocks'] = $this->users_model->getmystock($this->session->userdata('username'));
     $this->load->view('dashboard/add' ,$data);
    }
    else {
    
    
     $this->load->library('session');
     
     $check = $this->users_model->checkstock($this->input->post("stock"),$this->session->userdata('username')) ;
     
     if (count($check) > 0 ){
     $data['stocks']= $this->stocks();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['mystocks'] = $this->users_model->getmystock($this->session->userdata('username'));
     $data['success'] =("This stock already exists in your records "); 
     $this->load->view('dashboard/add' ,$data);
     
     
     }
     else{ 
     $this->users_model->addstock();
     $data['stocks']= $this->stocks();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['success'] =("Stock Update success"); 
     $data['mystocks'] = $this->users_model->getmystock($this->session->userdata('username'));
     $this->load->view('dashboard/add' ,$data);
     }
    }


    
    

  }
function savestock(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('date','date', 'required'); 
      $this->form_validation->set_rules('stock','stock', 'required'); 
      $this->form_validation->set_rules('shares','shares', 'required'); 
      $this->form_validation->set_rules('value','value', 'required'); 
    
   if ($this->form_validation->run() == FALSE){
        echo '0' ;    
     }
    else {
    
    
     $this->load->library('session');
     
     $check = $this->users_model->checkstock($this->input->post("stock"), $this->input->post("date") ,$this->session->userdata('username')) ;
     
     if (count($check) > 0 ){
        echo '2' ;
     
     }
     else{ 
     $this->users_model->addstock();
       echo '1';
     }
    }


    
    

  }
function editstock(){
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      //$this->form_validation->set_rules('date','date', 'required'); 
      $this->form_validation->set_rules('stock','stock', 'required'); 
      $this->form_validation->set_rules('shares','shares', 'required'); 
      $this->form_validation->set_rules('value','value', 'required'); 
    
   if ($this->form_validation->run() == FALSE){
        echo '0' ;    
     }
    else {
    
    
     $this->load->library('session');
     
     $this->users_model->deleteRecord($this->input->post("stock"),$this->input->post("date"),$this->session->userdata('username'));
   
     $this->users_model->addstock();
       echo '1';
     }
    


    
    

  }


function deletestock(){
    
      $this->load->helper(array('form', 'url'));
      $this->load->library('form_validation');
      $this->form_validation->set_rules('date','date', 'required'); 
      $this->form_validation->set_rules('stock','stock', 'required'); 
      if ($this->form_validation->run() == FALSE){
        echo '0' ;    
     }
    else {
     $this->load->library('session');
     
     $this->users_model->deleteRecord($this->input->post("stock"),$this->input->post("date"),$this->session->userdata('username'));
     echo '1';
      }
  }

  public function scrape() 
{
       $ch = curl_init();

        //get contents from the nelly data 
        //file get contents is disbled by hosting
        //  $html = file_get_contents( "http://www.nellydata.com/CapitalFM/livedata.asp");
	
	//try this
	 
	$url = "localhost/live";
	$ch = curl_init();
	curl_setopt ($ch, CURLOPT_URL, $url);
	curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
	$html = curl_exec($ch);
	if (curl_errno($ch)) {
  	echo curl_error($ch);
  	echo "\n<br />";
	  $html = '';
	} else {
 	 curl_close($ch);
	}

	if (!is_string($html) || !strlen($html)) {
	echo "Failed to get contents.";
	$html = '';
	}


  
        //declare new dom document
      $dom = new DOMDocument();

      libxml_use_internal_errors(TRUE); //disable libxml errors
             //if any html is actually returned
      if(!empty($html))
      {   
             //load html to dom
            $dom->loadHTML($html);
             //remove errors for yucky html
            libxml_clear_errors(); 
            $dom_xpath = new DOMXPath($dom);
             //get the whole table
            $dom_table = $dom_xpath->query('//table');
             //$dom_rows = $dom->find("table#data tr");
        

       if($dom_table->length > 0)
       {
         $n = 0 ;
         foreach($dom_table as $dom_row)
         {
           $table[$n] =  $dom_row->nodeValue;
          }
        }

      }
        return $table ;
      }

  public function delimiter($string)
  {
      $delimited = preg_split("/[\s\n\t\r][0-9]{1,2}[\s\n\t\r]/", $string);
      $n= 0;
      return $delimited;

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
=======
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
 
    $this->load->view('dashboard/register');
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
     $data['stocks']= $this->stocks();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['success'] =(""); 
      $this->load->view('dashboard/add' ,$data);
    }
    else {
     $this->load->library('session');
     $this->users_model->addstock();
     $data['stocks']= $this->stocks();
     $data['profile'] = $this->users_model->get_user($this->session->userdata('username'));
     $data['success'] =("Stock Update success"); 
     $this->load->view('dashboard/add' ,$data);
     
    }


    
    

  }

<<<<<<< HEAD:application/controllers/users.php~
  public function scrape() 
{
     //a lot happens here
      }

  public function delimiter($string)
  {
      $delimited = preg_split("/[\s\n\t\r][0-9]{1,2}[\s\n\t\r]/", $string);
      $n= 0;
      return $delimited;

  }
  
=======

>>>>>>> fb4e9442fc9cd36b7e4a6f24fb1219cfe294d74e:application/controllers/users.php
     

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








>>>>>>> 003851d247588c98d492e0028ced1373cb9d95da
