<?php 
session_start();

if(!isset($_SESSION['UserName'])){
    $_SESSION['msg'] = 'You must log in first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['UserName']);
    header('Location: login.php');
}
//
include('config.php');    
include "includes/header.php";
?>

<?php
//Notification message
if(isset($_SESSION['success'])) :?>
<div class="error success">
<h3>
    <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    ?> 
    </h3>

</div>
<?php endif ?>

<div class="error success">
<?php
    if(isset($_SESSION['UserName'])) : ?>
<h3 style="text-align:right"> Welcome,
<?php echo $_SESSION['UserName'];   ?>
</h3>
<br>
<p style="text-align:right"><a href="index.php?logout='1' ">Log out!</a></p>
</div>
<?php endif ?>

<!-- -->


<?php
//For this exercise, we will learn about isset, the $_Get global variable and the switch ---WHEW!

//data_defailt_timezone_set('America/Los_Angeles');
//$var100 = 'test';
//if(isset($var)){
//    print_r(isset($var1));
//}else{
//    echo 'It has not been set';
//}

// is today set, if today is set, yippy skippy
//else the data function for the day will be assigned to today
if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

switch($today){       
    case 'Sunday' :
    $title = 'Sunday Characters Introduction!';
    $pic = 'images/Phil.jpg';
    $alt = 'Phil';
    $content = 'Clark Gregg as Phil Coulson in Agents of S.H.I.E.L.D. Phillip J. Coulson is a fictional character portrayed by Clark Gregg in the Marvel Cinematic Universe.';
    $color = 'coral';
        break;
    
    case 'Monday' :
    $title = 'Monday Characters Introduction!';
    $pic = 'images/Meli.jpg';
    $alt = 'Melinda';
    $content = 'Ming-Na Wen as Melinda May in Agents of S.H.I.E.L.D. Melinda Qiaolian May is a fictional character that originated in the Marvel Cinematic Universe before appearing in Marvel Comics.';
    $color = '#FFFFCC';
        break;
        
    case 'Tuesday' :
    $title = 'Tuesday Characters Introduction!';
    $pic = 'images/Gran.jpg';
    $alt = 'Grant';
    $content = 'Brett Dalton as Grant Ward in Agents of S.H.I.E.L.D. Grant Douglas Ward is a fictional character that originated in the Marvel Cinematic Universe before appearing in Marvel Comics.';
    $color = '#99CC66';
        break;
        
        case 'Wednesday' :
    $title = 'Wednesday Characters Introduction!';
    $pic = 'images/Dais.jpg';
    $alt = 'Daisy';
    $content = 'Chloe Bennet as Daisy Johnson in Agents of S.H.I.E.L.D. Daisy Johnson (portrayed by Chloe Bennet) was born in China to Calvin Johnson and his Inhuman wife Jiaying, but was soon taken by S.H.I.E.L.D. agents and raised as an orphan by nuns.';
    $color = '#FF9900';
        break;
    
        case 'Thursday' :
    $food = 'Thursday Characters Introduction!';
    $pic = 'images/Alph.jpg';
    $alt = 'Alphonso';
    $content = 'Henry Simmons as Alphonso "Mack" MacKenzie in Agents of S.H.I.E.L.D. Alphonso "Mack" MacKenzie (portrayed by Henry Simmons), a S.H.I.E.L.D. mechanic under Robert Gonzales, is a founding member of the "real S.H.I.E.L.D.", and infiltrates Coulson\'s group with Morse.';
    $color = '#999933';
        break;
        
    case 'Friday' :
    $title = 'Friday Characters Introduction!';
    $pic = 'uploads/characters6.jpg';
    $alt = 'Jemma Simmons';
    $content = 'Elizabeth Henstridge as Jemma Simmons in Agents of S.H.I.E.L.D. Jemma Anne Simmons is a fictional character that originated in the Marvel Cinematic Universe before appearing in Marvel Comics.';
    $color = 'pink';
        break;
        
    case 'Saturday' :
    $title = 'Saturday Characters Introduction!';
    $pic = 'uploads/characters7.jpg';
    $alt = 'Lance Hunter';
    $content = 'Nick Blood as Lance Hunter in Agents of S.H.I.E.L.D. Lance Hunter (portrayed by Nick Blood), an SAS lieutenant turned mercenary, joins post-Hydra S.H.I.E.L.D. at the request of Coulson following a recommendation from his ex-wife Bobbi Morse.';
    $color = '#CCFF99';
        break;
}

?>

    <style>
        aside {
            background-color:<?php echo $color; ?>;
        }
    </style>
<div id="wrapper">
    <main>
    <section>
        <h2 class="center"><?php echo $title; ?></h2>
    
    <img src="<?php echo $pic; ?>" 	height="510" width="600" alt="<?php echo $alt; ?>">
    <p><?php echo $content; ?></p>
    </section>
    </main>
    <aside>
        <h3 class="center"><?php echo $title; ?></h3><br>
        <img src="images/logo.png" height="150" width="200" ><br>
    <h4 class="center">Click below to find out what characters we have for each day of the week!</h4><br>
    <ul class="center">
        <li><a href="daily.php?today=Sunday">Sunday</a></li>
        <li><a href="daily.php?today=Monday">Monday</a></li>
        <li><a href="daily.php?today=Tuesday">Tuesday</a></li>
        <li><a href="daily.php?today=Wednesday">Wednesday</a></li>
        <li><a href="daily.php?today=Thursday">Thursday</a></li>
        <li><a href="daily.php?today=Friday">Friday</a></li>
        <li><a href="daily.php?today=Saturday">Saturday</a></li>
    </ul>
    </aside>

<?php include "includes/footer.php";?>