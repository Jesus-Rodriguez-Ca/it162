<?php
$nav1['index.php'] ="Inicio";
$nav1['galeria.php'] ="Galleria";
$nav1['contactanos.php'] ="Contactanos";
$nav1['ubicacion.php'] ="Ubicacion";


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
    $title = "Inicio";
    $subtitle = '¡Bienvenido a nuestro inicio!';
    $logo = "fa-home";
    break;

    case 'gallery.php':
    $title = "Galeria";
    $subtitle = 'Galeria de imagenes';
    $logo = "fa-image";
    /* $logo_color = ' style="color:#00f"'; */
    break;
        
    case 'contactanos.php':
    $title = "Contactanos";
    $subtitle = '¡Contactanos!';
    $logo = "fa-calendar-alt";
    /* $logo_color = ' style="color:#0f0"'; */
    break;

    case 'ubicacion.php':
        $title = "Ubicacion";
        $subtitle = 'Ubicacion';
        $logo = "fa-map-marker-alt";
        /* $logo_color = ' style="color:#0f0"'; */
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
