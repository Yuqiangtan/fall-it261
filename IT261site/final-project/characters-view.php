<?php
//people view page
include('config.php');
//do you remember the isset $_GET['today']

if(isset($_GET['id'])){
    $id =(int)$_GET['id'];
    
} else{
    header('Location:characters.php');
}

$sql = 'SELECT * FROM Characters WHERE CharactersID= '.$id.'';

//connect to the database
$iConn = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
or die(myerror(__FILE__,__LINE__,mysqli_connect_error()));
//we extract the data here

$result = mysqli_query($iConn,$sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0 ) {//show the records
    
    while($row = mysqli_fetch_assoc($result)){
        $FirstName = stripslashes($row['FirstName']);
        $LastName = stripslashes($row['LastName']);
        $Birthday = stripslashes($row['Birthday']);
        $Description = stripslashes($row['Description']);
        $Feedback = '';
        
    }
} else{
    $Feedback = 'Sorry, no characters - they are parting';
}

include('includes/header.php'); ?>

<div id="wrapper">
    
    <main>
        <h2>Welcome to <?php echo $FirstName;?>'s Page</h2>
    <?php
    if($Feedback == ''){
        echo '<ul>';
        echo '<li><b>First Name:</b>'.$FirstName.'</li>';
        echo '<li><b>Last Name:</b>'.$LastName.'</li>';
        echo '<li><b>Birthday:</b>'.$Birthday.'</li>';
        echo '</ul>';
        echo '<p>'.$Description.'</p>';
        echo '<br>';
        echo '<p><a href="characters.php">Go back to the Characters page!</a></p>';
    }else{
        echo $Feedback;
    }//end else
    
    
    ?>
    </main>
    
    <aside>
    <?php
     if($Feedback == ''){
         echo '<img src="uploads/characters'.$id.'.jpg" alt="'.$FirstName.'">';
     }else{
         echo $Feedback;
     }
//release the web server
@mysqli_free_result($result);

//close the connection
@mysqli_close($iConn);
    
    
    
    ?>
    </aside>

    
    

    
<?php
include('includes/footer.php');
?>