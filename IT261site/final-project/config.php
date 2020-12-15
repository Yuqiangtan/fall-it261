<?php
ob_start(); //prevents header errors before reading the whole page!
define('DEBUG','TRUE'); // we want to see our errors

include('credentials.php');
define('THIS_PAGE', basename($_SERVER['PHP_SELF']));




// Our gallery php

//$people['Donald_Trump'] = 'trump President from NY.';
//$people['Joe_Biden'] = 'biden Vive President from PA.';
//$people['Hilary_Clinton'] = 'clint_Secretary from NY.';
//$people['Bernie_Sanders'] = 'sande_Senator from VT.';
//$people['Elizabeth_Warren'] = 'warre_Senator from MA.';
//$people['Kamala_Harris'] = 'harri_Senator from CA.';
//$people['Cory_Booker'] = 'booke_Senator from NJ.';
//$people['Andrew_Yang'] = 'ayang_Entrepreneur from NY.';
//$people['Pete_Buttigieg'] = 'butti_Mayor from IN.';
//$people['Amy_Klobuchar'] = 'klobu_Senator from MN.';
//$people['Julian_Castro'] = 'castr_Housing/Urban from TX.';
$people['Clark_Gregg'] = 'clark_Phil Coulson';
$people['Ming-Na_Wen'] = 'mingn_Melinda May';
$people['Brett_Dalton'] = 'brett_Grant Ward';
$people['Chloe_Bennet '] = 'chloe_Daisy Johnson';
$people['Henry_Simmons'] = 'henry_Alphonso "Mack" MacKenzie';


switch(THIS_PAGE){

    case 'index.php':
        $title = 'AGENTS OF S.H.I.E.L.D.';
        $mainHeadline = 'Welcome to our Home Page!';
        $center = 'center';
        $body = 'home';
    break;
    
    case 'about.php':
        $title = 'About AGENTS OF S.H.I.E.L.D.';
        $mainHeadline = 'Welcome to our Wonderful About Page!';
        $center = 'center';
        $body = 'about inner';
    break;
    
    case 'daily.php':
        $title = 'Daily Characters';
        $mainHeadline = 'Welcome to the Daily';
        $center = 'center';
        $body = 'daily inner';
    break;
    
    case 'characters.php':
        $title = 'Our characters';
        $mainHeadline = 'Characters - Information';
        $center = 'center';
        $body = 'customers inner';
    break;
    
    case 'contact.php':
        $title = 'Contact us today';
        $mainHeadline = 'Welcome to our Contact Page!';
   //     $center = 'center';
        $body = 'contact inner';
    break;
        
    case 'thx.php':
        $title = 'Thank you!';
        $mainHeadline = 'Thank you for filling out our form!';
   //     $center = 'center';
        $body = 'thx inner';
    break;
    
    case 'gallery.php':
        $title = 'Gallery of AGENTS OF S.H.I.E.L.D.';
        $mainHeadline = 'Cast and characters Gallery Page';
//        $center = 'center';
        $body = 'gallery inner';
    break;
        
    case 'characters-view.php':
        $title = 'Characters - Information';
        $mainHeadline = 'Characters - Information';
//        $center = 'center';
        $body = 'customers inner';
    break;
    
    case 'login.php':
        $title = 'Login - For more Information';
        $mainHeadline = 'Login - For more Information';
//        $center = 'center';
        $body = 'login inner';
    break;
    
    case 'register.php':
        $title = 'Register - For more Information';
        $mainHeadline = 'Register - For more Information';
//        $center = 'center';
        $body = 'register inner';
    break;
}//end switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['characters.php'] = 'Characters';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function makeLinks($nav){
    $myReturn = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            $myReturn .= '<li><a href=" '.$key.' " class = "active"> '.$value.' </a></li>';
        }else {
        $myReturn .= '<li><a href=" '.$key.' "> '.$value.' </a></li>';
        }//end else
        
    }//end foreach
    
    //always return to $myRerurn
    return $myReturn;
}// end function

//randImages
$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';
function randImages($photos){

$i = rand(0, count($photos)-1);
$selectedImages = 'images/'.$photos[$i].'.jpg';
    
    echo '<img src="'.$selectedImages.'">';
}//end function



//form
$firstName ='';
$lastName ='';
$email = '';
//$phone = '';
$gender = '';
$characters = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameErr ='';
$lastNameErr ='';
$emailErr = '';
//$phoneErr = '';
$genderErr = '';
$charactersErr = '';
$privacyErr = '';
$commentsErr = '';
$telErr = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //we need to delcare our errors, i.e. if a field is empty, do something - more or less, we are going to delcare a whole bunch of if statements and afterwards, if all the if statements are true, then yippy and skippy!
        //if my name is empty, we will have created a variable called $nameErr and we will say Please fill out your name and this is assigned to the $nameErr. Now, if it is Not empty, $name = $_POST['name']
    
        if(empty($_POST['firstName'])){
            $firstNameErr = 'Please fill out your first name';
        }else{
            $firstName = $_POST['firstName'];
        }
        if(empty($_POST['lastName'])){
            $lastNameErr = 'Please fill out your last name';
        }else{
            $lastName = $_POST['lastName'];
        }
        if(empty($_POST['email'])){
            $emailErr = 'Please fill out your email';
        }else{
            $email = $_POST['email'];
        }
        if($_POST['gender'] == 'NULL'){
            $genderErr = 'Please check one!';
        }else{
            $gender = $_POST['gender'];
        }
            //logic if gender is equal to male, than male is selected
            if($gender == 'male'){
                $male = 'selected';
            }elseif($gender == 'female'){
                $female = 'selected';
            }
    
    
       if(empty($_POST['characters'])){
            $charactersErr = 'What, no characters?';
        }else{
            $characters= $_POST['characters'];
        }
        if(empty($_POST['comments'])){
            $commentsErr = 'Please include your comments!';
        }else{
            $comments= $_POST['comments'];
        }
    
        if(empty($_POST['privacy'])){
            $privacyErr = 'Please agree to our Privacy Rules!';
        }else{
            $privacy = $_POST['privacy'];
        }
    
    //if end user checks the checkboxex, all of them, we want to know
    // implode the array of characters - create a function for that!
    function myCharacters(){
        $myReturn = '';
        if(!empty($_POST['characters'])){
            $myReturn = implode(',', $_POST['characters']);
            } return $myReturn; //end if
    }//end function
    
    if(empty($_POST['tel'])) {  // if empty, type in your number
$telErr = 'Your phone number please!';
} elseif(array_key_exists('tel', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['tel']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$telErr = 'Invalid format!';
} else{
$tel = $_POST['tel'];
}
}
    
    if(isset($_POST['firstName'],
             $_POST['lastName'],
             $_POST['gender'],
             $_POST['characters'],
             $_POST['comments'],
             $_POST['tel'],
             $_POST['privacy'])&& $_POST['gender'] != 'NULL'){
        
        $to = 'yuqiangtan13@gmail.com';
        $subject = 'Favorite Characters ' .date('m/d/y');
        $body = ''.$firstName.' has filled out your form  ' .PHP_EOL.'';
        $body .= 'Email: '.$email.' ' .PHP_EOL.'';
        $body .= 'Your phone number: '.$tel.' ' .PHP_EOL.'';
        $body .= 'Your characters: '.myCharacters().' ' .PHP_EOL.'';
        $body .= 'Gender: '.$gender.' ' .PHP_EOL.'';
        $body .= 'Comments: '.$comments.'';
        
        $headers = array(
        'From' => 'no-reply@liaou.club',
        'Reply-to' => ''.$email.'');
        mail($to, $subject, $body, $headers);
        header('Location: thx.php');
        
        
    }//end isset
    
    
}// close if $_SERVER request method

//form

//PLEASE REMEMBER - THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE
//function myerror($myFile,$myLine,$errorMsg){
//    
//    if(define('DEBUG') && DEBUG){
//        echo 'Error in file: <b>'.&myFile.'</b> on line: <b>'.&myLine.'</b>';
//        echo 'Error message: <b>'.&errorMsg.'</b>';
//        die();
//    } else{
//        echo ' Houston, we have a problem!';
//        die();
//    }
//}

//PLEASE REMEMBER - THIS IS PLACED AT THE VERY BOTTOM OF YOUR CONFIG FILE
function myerror($myFile,$myLine,$errorMsg){
    
    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b>'.$myFile.'</b> on line: <b>'.$myLine.'</b>';
        echo 'Error message: <b>'.$errorMsg.'</b>';
        die();
    } else{
        echo ' Houston, we have a problem!';
        die();
    }
}





?>