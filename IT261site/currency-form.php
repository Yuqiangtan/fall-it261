<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Currency Form</title>
<style>
    form{
        width:350px;
        margin: 0 auto;
    }
    
    input{
        margin-bottom: 10px;
    }
    
    input[type=text]{
        width:100%;
    }
    
    fieldset{
        color:#666;
        padding: 10px 15px 10px 10px;
    }
    
    label{
        display: block;
        margin-bottom: 5px;
    }
    
</style>
</head>
<body>
<form action="" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name">
    <label>Email</label>
    <input type="email" name="email">
    <label>How Much Money do you have?</label>
    <input type="text" name="amount">
    <label>Choose your currency</label>
    <ul>
        <li><input type="radio" name="currency" value="0.013">Rubles </li>
        <li><input type="radio" name="currency" value="0.76">Canadian dollars </li>
        <li><input type="radio" name="currency" value="1.28">Pounds </li>
        <li><input type="radio" name="currency" value="1.18">Euros </li>
        <li><input type="radio" name="currency" value="0.0094">Yen </li>
    </ul>
    <input type="submit" value="Convert it!">
        <p><a href="">Reset me!</a></p>
    </fieldset>
    </form>
    <?php
        
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //we need to delcare our errors, i.e. if a field is empty, do something - more or less, we are going to delcare a whole bunch of if statements and afterwards, if all the if statements are true, then yippy and skippy!
        
        if(empty($_POST['name'])){
            echo '<p>Please fill out your name!</p>';
        }
        if(empty($_POST['email'])){
            echo '<p>Please fill out your email!</p>';
        }
        if(empty($_POST['amount'])){
            echo '<p>Please show me the money!!!</p>';
        }
        if(empty($_POST['currency'])){
            echo '<p>Please check one of the currencies!</p>';
        }
        
        else if(isset($_POST['name'],
                $_POST['email'],
                $_POST['amount'],
                $_POST['currency'])&&
                is_numeric($_POST['amount'])&&
                is_numeric($_POST['currency'])
          ){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = $_POST['amount'];
            $currency = $_POST['currency'];
            // I am now doing the arithmetic
            $total = $amount * $currency;
            $total_f = number_format($total,2);
            
            echo '<p>Thank you, '.$name.' for filling out our form</p>';
            echo '<p>'.$name.', you now have $ '.$total_f.' American Dollars!</p>';
            echo '<p>We will be getting back to you via your email: '.$email.'</p>';
        } //else if isset
        
        
        
        
        
    }// close server
        
    
    ?>
</body>
</html>