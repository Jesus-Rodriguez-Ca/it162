<?php

$nav1['index.php'] ="Home";
$nav1['galleries.php'] ="Gallery";
$nav1['flexbox.php'] ="Flexbox";
$nav1['responsive.php'] ="Responsive";
$nav1['shopping.php'] ="Shopping";
$nav1['map.php'] ="Map";
$nav1['calendar.php'] ="Calendar";
$nav1['video.php'] ="Videos";
$nav1['contactme.php'] ="Contact";



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
    $title = "Big";
    $logo = "fa-home";
    break;

    case 'galleries.php':
    $title = "Gallery";
    $logo = "fa-book";
    $logo_color = ' style="color:##FFEBCD"';
    break;
    
    case 'flexbox.php':
    $title = "Flexbox";
    $logo = "fa-book";
    $logo_color = ' style="color:#6A5ACD"';
    break;
        
    case 'responsive.php':
    $title = "Responsive";
    $logo = "fa-book";
    $logo_color = ' style="color:#F5DEB3"';
    break;
    
    case 'shopping.php':
    $title = "Shopping";
    $logo = "fa-book";
    $logo_color = ' style="color:#DAA520"';
    break;
        
    case 'map.php':
    $title = "Map";
    $logo = "fa-map-marker-alt";
    $logo_color = ' style="color:#EE82EE"';
    break;
        
    case 'calendar.php':
    $title = "Calendar";
    $logo = "fa-calendar-alt";
    $logo_color = ' style="color:#556B2F"';
    break;
        
    case 'video.php':
    $title = "Videos";
    $logo = "fa-video";
    $logo_color = ' style="color:#FF8C00"';
    break;

    case 'contactme.php':
        $title = "Contact";
        $logo = "fa-clipboard-list";
        $logo_color = ' style="color:#DC143C"';
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
