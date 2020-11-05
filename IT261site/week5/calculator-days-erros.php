<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Our calculator</title>
<style>
    h1{
        text-align: center;
    }
    h2{
        color: red;
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
    
</style>
</head>
<body>
    <h1>Our Trip Calculator</h1>
<form action="" method="post">
<fieldset>
    <label>Name</label>
    <input type="text" name="name" value="<?php
  //if(isset($_POST['name'])) echo $_POST['name']; ?>">
    <label>How many miles will you be driving</label>
    <input type="text" name="miles" value="<?php
  //if(isset($_POST['miles'])) echo $_POST['miles']; ?>">
    <label>How many hous per day would you like to be driving?</label>
    <input type="text" name="hours" value="<?php
 // if(isset($_POST['hours'])) echo $_POST['hours']; ?>">
    
        <label>Price per gallon</label>
    <ul>
        <!-- logic = we are still asking if post currency was set but now we are asking one more question --- is the post currency equal to the value-->
        <li><input type="radio" name="pricepergallon" value="3.00" <?php //if(isset($_POST['pricepergallon']) && $_POST['pricepergallon'] == '3.00') echo 'checked ="checked"'; ?> >$3.00 </li>
        <li><input type="radio" name="pricepergallon" value="3.50" <?php //if(isset($_POST['pricepergallon']) && $_POST['pricepergallon'] == '3.50') echo 'checked ="checked"'; ?> >$3.50 </li>
        <li><input type="radio" name="pricepergallon" value="4.00" <?php //if(isset($_POST['pricepergallon']) && $_POST['pricepergallon'] == '4.00') echo 'checked ="checked"'; ?> >$4.00 </li>
    </ul>
    
    <label>Fuel Efficeiency</label>
        <select name="fuel">
            <option value="NULL"
<?php if(isset($_POST['fuel']) && $_POST == 'NULL'){
    //echo 'selected = "unselected"';
}  ?>>Select one</option>
            
            <option value="10"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '10'){
    //echo 'selected = "selected"';
}  ?>>Terrible at 10</option>
            <option value="20"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '20'){
    //echo 'selected = "selected"';
}  ?>>Better at 20</option>
            <option value="30"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '30'){
    //echo 'selected = "selected"';
}  ?>>Okay at 30</option>
            <option value="40"
<?php if(isset($_POST['fuel']) && $_POST['fuel'] == '40'){
    //echo 'selected = "selected"';
}  ?>>Great at 40</option>
        
            </select><br>

    <input type="submit" value="Calculate">
    <input type="reset" value="Reset">
    </fieldset>
    </form>
    <?php
        
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //we need to delcare our errors, i.e. if a field is empty, do something - more or less, we are going to delcare a whole bunch of if statements and afterwards, if all the if statements are true, then yippy and skippy!
        
        if(empty($_POST['name'])){
            echo '
                <div class="box">
                <h2 style=text-align:center;>Please fill out the name</h2>
                </div>';
        }
        if(empty($_POST['miles'])){
           echo '
                <div class="box">
                <h2 style=text-align:center;>Please fill out the distance</h2>
                </div>';
        }
        if(empty($_POST['hours'])){
            echo '
                <div class="box">
                <h2 style=text-align:center;>Please fill out the hours</h2>
                </div>';
        }
        if(empty($_POST['pricepergallon']))
            {
                echo '
                <div class="box">
                <h2 style=text-align:center;>Please fill out the price</h2>
                </div>';
            }
        if($_POST['fuel'] == 'NULL'){
            echo '
                <div class="box">
                <h2 style=text-align:center;>Please fill out the Fuel Efficeiency</h2>
                </div>';
        }

        
        else if(isset($_POST['name'],
                $_POST['miles'],
                $_POST['hours'],
                $_POST['pricepergallon'],
                $_POST['fuel'])&&
                is_numeric($_POST['miles'])&&
                is_numeric($_POST['hours'])
          ){
            
            $name = $_POST['name'];
            $hours = $_POST['hours'];
            $milesperhour = 65;
            $milespergallon = $_POST['fuel'];
            $miles = $_POST['miles'];
            $pricepergallon = $_POST['pricepergallon'];
            // I am now doing the arithmetic
            $totalp = $miles / $milespergallon * $pricepergallon;
            $totalp_f = number_format($totalp,2);
            $totalh = ceil($miles / $milesperhour);
            $days = number_format($totalh / $hours,0);
            ?>
    <div class="box">
    <?php
             echo '
            <h2>Calculator</h2>
            <p>'.$name.',you will be driving '.$miles.' miles</p>
            <p>Your vehicle has an efficency rating of '.$milespergallon.' miles per gallon</p>
            <p>Your total cost for gas will be $'.$totalp_f.' dollars </p>
            <p>You will be driving a total of '.$totalh.' hours equating to '.$days.' days</p>';
            
        } //else if isset
        
        
    }// close server
    ?>
    </div> <!-- end box -->
</body>
</html>