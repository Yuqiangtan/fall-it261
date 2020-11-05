<?php
include('config.php');
include('includes/header.php');
?>

<div id="wrapper">
    <h1 class="<?php echo $center; ?>"><?php echo $mainHeadline;?></h1>
    <?php 
    echo randImages($photos);
    ?>
    <blockquote>
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eleifend lacus nec consequat malesuada. Nunc vel ligula eget velit congue venenatis. Ut leo lectus, ornare vel est eu, ornare venenatis metus. Nunc vitae neque dictum dui porttitor blandit dignissim non lacus. Fusce sit amet hendrerit enim."
    
    </blockquote>
    
    <p style="text-align:center"><a href="">Here is my EXTRA CREDIT LINK link to my Github acount showing you my randImages function(index.php and config.php)</a></p>

    
<?php
include('includes/footer.php');
?>