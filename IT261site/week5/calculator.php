<?php

?>


<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Our Calculator</title>
<style>
    h1{
        text-align: center;
    }
    h2{
        text-align: center;
    }
    form{
        width:350px;
        margin: 0 auto;
        background: beige;
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
        padding:20px;
        border:1px solid green;
    }
    
    select{
        margin-bottom: 10px;
    }
    
    span{
        display: block;
        color:red;
        font-style: italic;
    }
    
</style>
</head>
<body>
    <h1>Our calculator</h1>
<form action="" method="post">
<fieldset>
    <label>How many miles will you be driving</label>
    <input type="text" name="miles" value="<?php
  //if(isset($_POST['miles'])) echo $_POST['miles']; ?>">

    <label>Price per gallon</label>
    
        <!-- logic = we are still asking if post currency was set but now we are asking one more question --- is the post currency equal to the value-->
        <input type="radio" name="pricepergallon" value="3.00" <?php //if(isset($_POST['pricepergallon']) && $_POST['pricepergallon'] == '3.00') echo 'checked ="checked"'; ?> >$3.00<br>
        <input type="radio" name="pricepergallon" value="3.50" <?php //if(isset($_POST['pricepergallon']) && $_POST['pricepergallon'] == '3.50') echo 'checked ="checked"'; ?> >$3.50<br>
        <input type="radio" name="pricepergallon" value="4.00" <?php //if(isset($_POST['pricepergallon']) && $_POST['pricepergallon'] == '4.00') echo 'checked ="checked"'; ?> >$4.00<br>
    
        <label>Fuel Efficeiency</label>
        <select name="FuelEfficeiency">
            <option value="10"
<?php if(isset($_POST['FuelEfficeiency']) && $_POST['FuelEfficeiency'] == '10'){
    echo 'selected = "selected"';
}  ?>>Terrible at 10</option>
            <option value="20"
<?php if(isset($_POST['FuelEfficeiency']) && $_POST['FuelEfficeiency'] == '20'){
    echo 'selected = "selected"';
}  ?>>Better at 20</option>
            <option value="30"
<?php if(isset($_POST['FuelEfficeiency']) && $_POST['FuelEfficeiency'] == '30'){
    echo 'selected = "selected"';
}  ?>>Okay at 30</option>
            <option value="40"
<?php if(isset($_POST['FuelEfficeiency']) && $_POST['FuelEfficeiency'] == '40'){
    echo 'selected = "selected"';
}  ?>>Great at 40</option>
            </select><br>
    <input type="submit" value="Convert it!">
    <input type="reset" value="Reset">
    </fieldset>
    </form>
    
    
    <?php
        $miles = '';
        $pricepergallon = '';
        $FuelEfficeiency = '';
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['miles']) || empty($_POST['pricepergallon']) ||empty($_POST['FuelEfficeiency']))
            {
            echo '<h2>Error</h2>';
            echo 'Please enter a valid distance, price per gallon and fuel efficiency';
            }
        }

        
        if(isset($_POST['miles'],
                $_POST['pricepergallon']
                )&&
                is_numeric($_POST['miles']))
          {

            $milespergallon = $_POST['FuelEfficeiency'];
            $miles = $_POST['miles'];
            $pricepergallon = $_POST['pricepergallon'];
            // I am now doing the arithmetic
            $totalp = $miles / $milespergallon * $pricepergallon;
            $totalp_f = number_format($totalp,2);
            
            echo '<h2>Calculator Results</h2>';
            echo '<p>You have driven ' .$miles.' miles</p>';
            echo '<p>Your vehicle has an efficiency rating of '.$milespergallon.' miles per gallon</p>';
            echo '<p>Your total cost for gas will be $'.$totalp_f.' dollars</p>';
        } //if isset
        
        
        

    ?>
</body>
</html>