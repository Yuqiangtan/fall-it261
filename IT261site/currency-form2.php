<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Currency Form2</title>
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
    
    .box{
        width:600px;
        margin:20px auto;
        background: beige;
        padding:20px;
        border:1px solid green;
    }
    
</style>
</head>
<body>
<form action="" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name" value="<?php
  if(isset($_POST['name'])) echo $_POST['name']; ?>">
    <label>Email</label>
    <input type="email" name="email" value="<?php
  if(isset($_POST['email'])) echo $_POST['email']; ?>">
    <label>How Much Money do you have?</label>
    <input type="text" name="amount" value="<?php
  if(isset($_POST['amount'])) echo $_POST['amount']; ?>">
    <label>Choose your currency</label>
    <ul>
        <li><input type="radio" name="currency" value="0.013" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.013') echo 'checked ="checked"'; ?> >Rubles </li>
        <li><input type="radio" name="currency" value="0.76" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.76') echo 'checked ="checked"'; ?> >Canadian dollars </li>
        <li><input type="radio" name="currency" value="1.28" <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.28') echo 'checked ="checked"'; ?> >Pounds </li>
        <li><input type="radio" name="currency" value="1.18" <?php if(isset($_POST['currency']) && $_POST['currency'] == '1.18') echo 'checked ="checked"'; ?> >Euros </li>
        <li><input type="radio" name="currency" value="0.0094" <?php if(isset($_POST['currency']) && $_POST['currency'] == '0.0094') echo 'checked ="checked"'; ?> >Yen </li>
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
            ?>
    <div class="box">
    <?php
            echo '<p>Thank you, '.$name.' for filling out our form</p>';
            echo '<p>'.$name.', you now have $ '.$total_f.' American Dollars!</p>';
            echo '<p>We will be getting back to you via your email: '.$email.'</p>';
        } //else if isset
        
        
    }// close server
    ?>
    </div> <!-- end box -->
</body>
</html>