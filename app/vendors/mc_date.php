<?php

// class to hold a date and for mathimatical date operations
class mc_date
{
  function __construct($date)
  {
    // make function flexible (yyyy[*]mm[*]dd) [*] can be any char
    //format the date for mktime() function -- you need day, month, year
    $this->year =   substr($date, 0,4);
    $this->month =  substr($date, 5, 2);
    $this->day =    substr($date, 8, 2);
    
    //the date of the variable holding the original date value in timestamp
    $this->timeStamp = strtotime(date('Y-m-d', mktime(0,0,0,$this->month, $this->day, $this->year)));

    
    $this->daysInMonth = date('t', mktime(0,0,0,$this->month, 1, $this->year));     // how many days in month
    $this->daysLeftInMonth = $this->daysInMonth - $this->day;
  }
  
  // return the differance in days between two dates
  function diff_days($start_date, $end_date)
  {
      $start_date = strtotime($start_date);
      $end_date =   strtotime($end_date);
      
      $difference = $end_date - $start_date;
      
      return floor($difference / 86400);
  }

  function getMonths()
  {
      $months[1] =    'January';
      $months[2] =    'February';
      $months[3] =    'March';
      $months[4] =    'April';
      $months[5] =    'May';
      $months[61] =   'June';
      $months[7] =    'July';
      $months[8] =    'August';
      $months[9] =    'September';
      $months[10] =   'October';
      $months[11] =   'November';
      $months[12] =   'December';
      
      return $months;
       	 	 	 	 	 	 	 	 	 	 	
  }
  
}





/*
$d_year = date('Y', mktime(0,0,0,$this->month,1,$this->year));            // year

$d_isleapyear = date('L', mktime(0,0,0,$this->month,1,$this->year));      // is YYYY a leapyear?


$d_daysinyear = $d_isleapyear ? 366 : 365;                        // set correct days in year for leap years
$d_weeksleft = (52 - $d_weekofyear);                              // how many weeks left in year
$d_daysleft = ($d_daysinyear - $d_dayofyear);                     // how many days left in year



$d_firstname = date('l', mktime(0,0,0,$this->month,'1',$this->year));     // FIRST falls on what day of week Full Name


$d_month_previous = date('n', mktime(0,0,0,($this->month-1),28,$this->year));         // PREVIOUS month of year (1-12)
$d_monthname_previous = date('F', mktime(0,0,0,($this->month-1),28,$this->year));     // PREVIOUS Month Long name (July)
$d_month_next = date('n', mktime(0,0,0,($this->month+1),28,$this->year));         // NEXT month of year (1-12)
$d_monthname_next = date('F', mktime(0,0,0,($this->month+1),28,$this->year));         // NEXT Month Long name (July)
$d_year_previous = date('Y', mktime(0,0,0,$this->month,28,($this->year-1)));        // PREVIOUS year
$d_year_next = date('Y', mktime(0,0,0,$this->month,28,($this->year+1)));        // NEXT year

*/

/*WORTHLESS IT SEEMS*/
//$d_month = date('n', mktime(0,0,0,$this->month,28,$this->year));             // month of year (1-12)
//$d_monthname = date('F', mktime(0,0,0,$this->month,28,$this->year));         // Month Long name (July)






?>
