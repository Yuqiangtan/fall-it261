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
include('includes/header.php');
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

<div id="wrapper">
    
    <main>
   
    <h1><?php echo $mainHeadline;?></h1>
    <figure>
        <a href="images/about.jpg" >
        <img src="images/about.jpg"/>
        </a>
    </figure>
    </main>
    
    <aside>
    <h3>About</h3>
        <p>Marvel's Agents of S.H.I.E.L.D. is an American television series created for ABC by Joss Whedon, Jed Whedon, and Maurissa Tancharoen, based on the Marvel Comics organization S.H.I.E.L.D. (Strategic Homeland Intervention, Enforcement, and Logistics Division), a peacekeeping and spy agency in a world of superheroes. It is set in the Marvel Cinematic Universe (MCU) and acknowledges the continuity of the franchise's films and other television series. The series was produced by ABC Studios, Marvel Television, and Mutant Enemy Productions, with Jed Whedon, Tancharoen, and Jeffrey Bell serving as showrunners.</p>

<p>The series stars Clark Gregg as Phil Coulson, reprising his role from the film series, alongside Ming-Na Wen, Brett Dalton, Chloe Bennet, Iain De Caestecker and Elizabeth Henstridge. Nick Blood, Adrianne Palicki, Henry Simmons, Luke Mitchell, John Hannah, Natalia Cordova-Buckley, and Jeff Ward joined in later seasons. The S.H.I.E.L.D. agents deal with various unusual cases and enemies, including Hydra, Inhumans, Life Model Decoys, alien species such as the Kree and Chronicoms, and time travel. Several episodes directly crossover with MCU films or other television series, notably Captain America: The Winter Soldier (2014) which significantly affected the series in its first season. In addition to Gregg, other actors from throughout the MCU also appear in guest roles.</p>

<p>The Avengers writer and director Joss Whedon began developing a S.H.I.E.L.D. pilot following the film's release in August 2012, and Gregg was confirmed to reprise his role that October. The series was officially picked up by ABC in May 2013. The series attempted to replicate the production value of the MCU films on a broadcast television budget, while also having to work within the constraints of the MCU which were dictated by Marvel Studios and the films. Prosthetic makeup was created by Glenn Hetrick's Optic Nerve Studios, while Legacy Effects contributed other practical effects. Composer Bear McCreary recorded each episode's score with a full orchestra, while the visual effects for the series were created by several different vendors and have been nominated for multiple awards.
    </aside>

    
    

    
<?php
include('includes/footer.php');
?>