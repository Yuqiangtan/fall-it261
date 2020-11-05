<?php

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

switch(THIS_PAGE){

    case 'index.php':
        $title = "Yuqiang's IT261 Portal Page";
        $logo = "fa-home";
        $PageID = 'Home';
    break;
    
    case 'switch.php':
        $title = "Yuqiang's Switch page";
        $logo = "fa-universal-access";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Switch';
    break;

    case 'screenshot.php':
        $title = "Yuqiang's Screenshot Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Screenshot';
    break;
        
    case 'homework5.php':
        $title = "Calculator";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Calculator';
    break;
    
    case 'contactme.php':
        $title = "Yuqiang's IT261 Contact Page";
        $logo = "fa-paper-plane-o";
        $logo_color = ' style="color:#0f0"';
        $PageID = 'Contact Yuqiang';
    break;


    default:
        $title = THIS_PAGE;
        $logo = '';//no icon by default
        $PageID = '';//no PageID by default
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Welcome";
$nav1['screenshot.php'] = "Screenshot";
$nav1['switch.php'] = "HW3 - Switch";
$nav1['adder.php'] = "HW4 - Troubleshooting";
$nav1['homework5.php'] = "Calculator";
$nav1['contactme.php'] = "Contact Yuqiang";

/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}

?>
