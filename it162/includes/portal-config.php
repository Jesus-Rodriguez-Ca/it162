<?php

$nav1['index.php'] ="Welcome";
$nav1['big/index.php'] ="Big";
$nav1['aia.php'] ="AIA";
$nav1['flowchart.php'] ="Flowchart";
$nav1['fp/index.php'] ="Final Project";
$nav1['contactme.php'] ="Contact Jesus";


/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//prevents data from being sent early
ob_start();

//this helps us avoid PHP date errors:
date_default_timezone_set('America/Los_Angeles');


//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;
$logo_color = ''; //make logo_color an empty string by default

switch(THIS_PAGE)
{
    case 'index.php':
    $title = "Jesus' IT162 Portal Website";
    $logo = "fa-home";
    break;

    case 'aia.php':
    $title = "Jesus' Final Project Audience, Issues and Approach Research";
    $logo = "fa-universal-access";
    $logo_color = ' style="color:#00f"';
    break;
        
    case 'contactme.php':
    $title = "Contact Jesus";
    $logo = "fa-paper-plane-o";
    $logo_color = ' style="color:#0f0"';
    break;
        
    default:    
    $title = THIS_PAGE;    
    $logo = '';  
}



function makeLinks($linkArray)
{
    $myReturn ='';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="'.$url.'">'.$text.'</a></li>'.PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="'.$url.'">'.$text.'</a></li>'.PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}





?>
