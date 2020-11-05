<?php
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['customers.php'] = 'Customers';
$nav['gallery.php'] = 'Gallery';
//        $key          $value

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'customers.php' => 'Customers',
    'gallery.php' => 'Gallery'
);
?>

<ul>
<?php
    foreach($nav as $key => $value){
        echo '<li><a href="'.$key.'">'.$value.'</a></li>';
        //echo 'This is my '.$value.' page and the name of the php page is '.$key.' <br>';
    }
    ?>
</ul>