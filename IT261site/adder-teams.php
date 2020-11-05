<html>
<head>
<title>My Adder Assignment</title>
<!--i add some css so it looks like the repaired version that Olga provide to us-->
<style>
    h1{
        color: green;
        text-align: center;
    }
    h2{
        text-align: center;
    }
    h3{
        color: gray;
        text-align: center;
    }
    form{
        width:350px;
        border:1px solid red;
        margin:20px auto;
        padding: 10px;
    }
    .center{
        text-align: center;
    }
</style>
</head>
<body>
<h1>Adder TEAMS.php</h1>
<h2>The teams challenge will be the following:</h2>
<h3>If the end use clicks the button, you must return a message stating that some fields are "empty" and they must be filled!</h3>
<form action="" method="post"><!--It's not a closing form tag-->
    <label>Enter the first number:</label><!--Miss opening label tag-->
    <input type="text" name="num1"><br><!--Capital N-->
    <label>Enter the second number:</label><!--Wrong opening tag and missing closing tag-->
    <input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!">
</form>
</body>
</html><!--dont need ";{?>"-->
<?php

   if(isset($_POST['num1'],
         $_POST['num2'])
      )
    {
       $num1 = '';//define num1 is null
       $num2 = '';//define num2 is null
       $myTotal = '';//define myToal is null
       if(is_numeric($_POST['num1']) && is_numeric($_POST['num2']))//check if both are numeric(not null),define num1 and num2 again, and  calculate. Because i define num1 and num2 are null, so if any one of them is null, the if statement cannot be executed.
       {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $myTotal = $num1 + $num2;
       }
       if(empty($num1 && $num2)){//when it runs to this if statement. That means one of them is null or both of them are null. It has to show error!
           echo '<h2 style="color:red">Please fill out the form</h2>';
       }
       else{
        echo '<h2 class="center">You added '.$num1.' and '.$num2.'</h2>';//i make it center so it looks like the repaired version that Olga provide to us
        echo '<p class="center" style="color:gray;"> and the answer is <br>'.$myTotal.'!</p>'; //style tag should be inside of the p tag
        echo '<p class="center"><a href="">Reset page</a></p>';
       }
    }
?>

