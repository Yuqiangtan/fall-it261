<?php
if(isset($_POST['name'],
         $_POST['email'])
  ){
    $name = $_POST['name'];
    $email = $_POST['email'];
    echo ''.$name.' has filled out the form';
    echo '<br>';
    echo 'Their email is '.$email.'';
}else {
    echo'
    <form action="" method="post" >
    <label>Name</label>
    <input type="text" name="name"><br>
    <label>Email</label>
    <input type="email" name="email"><br>
    <input type="submit" value="Send it!"><br>
    </form>
    ';
}
?>