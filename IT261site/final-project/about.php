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
        <a href="images/characterstable.png" >
        <img src="images/characterstable.png"/>
        </a>
        <br>
        <a href="images/usertable.png" >
        <img src="images/usertable.png"/>
        </a>
    </figure>
    </main>
    
    <aside>
    <h3>Welcome to the About Page!</h3>
        <p>This page displays MySQL tables of this website!

</p>

    </aside>

    
    

    
<?php
include('includes/footer.php');
?>