<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo $title;?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body;?>">
<header>
    <div class="inner-header">
        <img id="logo" src="images/logo.png" alt="logo">
<nav>
<ul>
    <?php echo makeLinks($nav) ;?>
</ul>
</nav>
    </div><!--end inner header-->
</header> 