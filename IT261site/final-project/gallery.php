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
<?php foreach($people as $fullName => $image) : ?>
    <table class="candidates">
    <tr>
    <td><img src="images/<?php echo substr($image, 0,5);?>.jpg" alt="<?php echo $fullName; ?>"></td>
    
    <td><?php echo str_replace('_', ' ', $fullName); ?></td>
    
    <td><?php echo substr($image, 6);?></td>
        
    <td><img src="images/<?php echo substr($image, 6,4);?>.jpg" alt="<?php echo substr($image, 6); ?>"></td>
    </tr>    
     <?php endforeach ; ?>   
    </table>
        
    </main>
    
<?php
include('includes/footer.php');
?>