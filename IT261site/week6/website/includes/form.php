<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <label>First Name</label>
    <input type="text" name="firstName" value="<?php
  if(isset($_POST['firstName'])) echo htmlspecialchars($_POST['firstName']); ?>">
    <span><?php echo $firstNameErr;  ?> </span>
    
    <label>Last Name</label>
    <input type="text" name="lastName" value="<?php
  if(isset($_POST['lastName'])) echo htmlspecialchars($_POST['lastName']); ?>">
    <span><?php echo $lastNameErr;  ?> </span>
    
    <label>Email</label>
    <input type="email" name="email" value="<?php
  if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    <span><?php echo $emailErr;  ?> </span>
    
    <label>Telephone</label>
    <input type="tel" name="tel" placeholder="xxx-xxx-xxxx" value="<?php
  if(isset($_POST['tel'])) echo htmlspecialchars($_POST['tel']); ?>">
    <span><?php echo $telErr;  ?> </span>
    
    
    <label>Gender</label>
    <ul>
        <!-- logic = we are still asking if post currency was set but now we are asking one more question --- is the post currency equal to the value-->
        <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked ="checked"'; ?> >Female </li>
        <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked ="checked"'; ?> >Male </li>
    </ul>
    <span><?php echo $genderErr;  ?> </span>
    
    <label>Favorite Wines</label>
    <ul>
        <!-- Radio buttons and checkboxes are very similar-->
        <li><input type="checkbox" name="wines[]" value="Cabernet" <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Cabernet') echo 'checked ="checked"'; ?> >Cabernet </li>
        
        <li><input type="checkbox" name="wines[]" value="Merlot" <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Merlot') echo 'checked ="checked"'; ?> >Merlot </li>
        
        <li><input type="checkbox" name="wines[]" value="Syrah" <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Syrah') echo 'checked ="checked"'; ?> >Syrah </li>
        
        <li><input type="checkbox" name="wines[]" value="Malbec" <?php if(isset($_POST['wines']) && $_POST['wines'] == 'Malbec') echo 'checked ="checked"'; ?> >Malbec </li>
        
        <li><input type="checkbox" name="wines[]" value="Malbec" <?php if(isset($_POST['Zinfandel']) && $_POST['wines'] == 'Zinfandel') echo 'checked ="checked"'; ?> >Zinfandel </li>
        </ul>
         <span><?php echo $winesErr;  ?> </span>
    
    <label>Comments</label>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
    <span><?php echo $commentsErr;  ?> </span>
    
        <input type="radio" name="privacy" value="<?php 
         if(isset($_POST['privacy'])) echo htmlspecialchars($_POST['privacy']); ?>">
    I agree to your Privacy Policy
    <span><?php echo $privacyErr;  ?> </span>
    
    <input type="submit" value="Send it!">
        <p><a href="">Reset me!</a></p>
    </fieldset>
    </form>