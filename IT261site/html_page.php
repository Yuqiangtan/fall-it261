<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>My Navigation in php</title>
</head>

<body>
<nav>
<ul>
<?php
    $nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'customers.php' => 'Customers',
    'gallery.php' => 'Gallery'
    );
    foreach($nav as $key => $value){
    echo '<li><a href="'.$key.'">'.$value.'</a></li>';
    }
    ?>
</ul>
</nav>
</body>




</html>