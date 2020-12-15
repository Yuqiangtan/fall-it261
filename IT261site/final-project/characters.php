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
         <?php
$sql = 'SELECT * FROM Characters';

$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

//do we have more that 0 rows//
if(mysqli_num_rows($result) > 0 ) {//show the records
    
    while($row = mysqli_fetch_assoc($result)){
        //this array will display the contents or your row
        echo '<ul>';// use a similar a href's value that we used for our switch assignment
        echo '<li class="bold">For more information about: <a href="characters-view.php?id= '.$row['CharactersID'].' ">'.$row['FirstName'].' '.$row['LastName'].' </a></li>';
        echo '<li> Birth Year:'.$row['Birthday'].'</li>';
        echo '<br>';
        echo '</ul>';
    }//closeing the while
    
    
}  else{// what if there are no peolple
    echo 'Nobody home!';
}//else

//release the web server
@mysqli_free_result($result);

//close the connection
@mysqli_close($iConn);
?>
    </main>
    
    <aside>
    <h3>Agents of S.H.I.E.L.D.</h3>
        <p>Marvel's Agents of S.H.I.E.L.D. is an American television series created for ABC by Joss Whedon, Jed Whedon, and Maurissa Tancharoen, based on the Marvel Comics organization S.H.I.E.L.D. (Strategic Homeland Intervention, Enforcement, and Logistics Division), a peacekeeping and spy agency in a world of superheroes. It is set in the Marvel Cinematic Universe (MCU) and acknowledges the continuity of the franchise's films and other television series. The series was produced by ABC Studios, Marvel Television, and Mutant Enemy Productions, with Jed Whedon, Tancharoen, and Jeffrey Bell serving as showrunners.</p>
    </aside>

    
    

    
<?php
include('includes/footer.php');
?>