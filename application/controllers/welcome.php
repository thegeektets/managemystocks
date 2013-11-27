<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
error_reporting(0);

class Welcome extends CI_Controller {

	public function index()
	{
    $data['scrapped_data'] = $this -> stocks();
    $data['yesterday'] = $this -> yesterday();
    $data['today'] = $this -> today();
    $data['changes'] = $this -> change();
    $data['pchange'] = $this -> pchange();
    $data['high'] = $this -> high();
    $data['low'] = $this -> low();
		$this->load->view('home' ,$data);
	}


public function scrape() 
{
       $ch = curl_init();

        //get contents from the nelly data 
      $html = file_get_contents( "http://localhost/live");
        // $html = file_get_contents( "http://www.nellydata.com/CapitalFM/livedata.asp");  
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

