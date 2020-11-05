<html>
<head>
<title>My Adder Assignment</title>
<!--i add some css so it looks like the repaired version that Olga provide to us-->
<style>
    h1{
        color: green;
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
<h1>Adder.php</h1> 
<form action="" method="post"><!--It's not a closing form tag-->
    <label>Enter the first number:</label><!--Miss opening label tag-->
    <input type="text" name="num1"><br><!--Capital N “Num1” -> "num1" -->
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
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $myTotal = $num1 + $num2;

        echo '<h2 class="center">You added '.$num1.' and '.$num2.'</h2>';//i make it center so it looks like the repaired version that Olga provide to us
        echo '<p class="center" style="color:red;"> and the answer is <br>'.$myTotal.'!</p>'; //style tag should be inside of the p tag
        echo '<p class="center"><a href="">Reset page</a></p>';
    }
?>

