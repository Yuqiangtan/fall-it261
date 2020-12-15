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
    <select name="gender">
        <option value="NULL"
<?php if(isset($_POST['gender']) && $_POST == 'NULL'){
    echo 'selected = "unselected"';
}  ?>>Select one</option>
            
            <option value="female"
<?php if(isset($_POST['gender']) && $_POST['gender'] == 'female'){
    echo 'selected = "selected"';
}  ?>>Female</option>
            <option value="male"
<?php if(isset($_POST['gender']) && $_POST['gender'] == 'male'){
    echo 'selected = "selected"';
}  ?>>Male</option>
        
    </select>
    <span><?php echo $genderErr;  ?> </span>
    
    <label>Favorite Characters</label>
    <ul>
        <!-- Radio buttons and checkboxes are very similar-->
        <li><input type="checkbox" name="characters[]" value="phil" <?php if(isset($_POST['characters']) && $_POST['characters'] == 'phil') echo 'checked ="checked"'; ?> >Phil Coulson</li>
        
        <li><input type="checkbox" name="characters[]" value="melinda" <?php if(isset($_POST['characters']) && $_POST['characters'] == 'melinda') echo 'checked ="checked"'; ?> >Melinda May</li>
        
        <li><input type="checkbox" name="characters[]" value="grant" <?php if(isset($_POST['characters']) && $_POST['characters'] == 'grant') echo 'checked ="checked"'; ?> >Grant Ward</li>
        
        <li><input type="checkbox" name="characters[]" value="daisy" <?php if(isset($_POST['characters']) && $_POST['characters'] == 'daisy') echo 'checked ="checked"'; ?> >Daisy Johnson </li>
        
        <li><input type="checkbox" name="characters[]" value="alphonso" <?php if(isset($_POST['characters']) && $_POST['characters'] == 'alphonso') echo 'checked ="checked"'; ?> >Alphonso "Mack" MacKenzie </li>
        </ul>
         <span><?php echo $charactersErr;  ?> </span>
    
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