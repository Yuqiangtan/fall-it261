<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE){

    case 'index.php':
        $title = 'Homepage for our new website';
        $mainHeadline = 'Welcome to our Home Page!';
        $center = 'center';
        $body = 'home';
    break;
    
    case 'about.php':
        $title = 'About page for our new website';
        $mainHeadline = 'Welcome to our Wonderful About Page!';
        $center = 'center';
        $body = 'about inner';
    break;
    
    case 'daily.php':
        $title = 'Daily Page';
        $mainHeadline = 'Welcome to the Daily';
        $center = 'center';
        $body = 'daily inner';
    break;
    
    case 'customers.php':
        $title = 'Our very important customers';
        $mainHeadline = 'Hello Customers - Good to See You!';
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
        $title = 'Our thank you page!';
        $mainHeadline = 'Thank you for filling out our form!';
   //     $center = 'center';
        $body = 'thx inner';
    break;
    
    case 'gallery.php':
        $title = 'Check out our Gallery';
        $mainHeadline = 'Welcome to our Gallery Page!';
        $center = 'center';
        $body = 'gallery inner';
    break;
}//end switch

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
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
$wines = '';
$privacy = '';
$comments = '';
$tel = '';

$firstNameErr ='';
$lastNameErr ='';
$emailErr = '';
//$phoneErr = '';
$genderErr = '';
$winesErr = '';
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
        if(empty($_POST['gender'])){
            $genderErr = 'Please check one!';
        }else{
            $gender = $_POST['gender'];
        }
            //logic if gender is equal to male, than male is checked
            if($gender == 'male'){
                $male = 'checked';
            }elseif($gender == 'female'){
                $female = 'checked';
            }
    
    
       if(empty($_POST['wines'])){
            $winesErr = 'What, no wines?';
        }else{
            $wines= $_POST['wines'];
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
    // implode the array of wines - create a function for that!
    function myWines(){
        $myReturn = '';
        if(!empty($_POST['wines'])){
            $myReturn = implode(',', $_POST['wines']);
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
             $_POST['wines'],
             $_POST['comments'],
             $_POST['tel'],
             $_POST['privacy'])){
        
        $to = 'yuqiangtan13@gmail.com';
        $subject = 'Test Email ' .date('m/d/y');
        $body = ''.$firstName.' has filled out your form  ' .PHP_EOL.'';
        $body .= 'Email: '.$email.' ' .PHP_EOL.'';
        $body .= 'Your phone number: '.$tel.' ' .PHP_EOL.'';
        $body .= 'Your Wines: '.myWines().' ' .PHP_EOL.'';
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
?>