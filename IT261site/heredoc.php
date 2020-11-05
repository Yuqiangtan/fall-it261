<?php
//this is my heredoc syntax

$book = 'Handmaid\'s Tale';
$author = 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$content = <<<EOT
<p>My favorite book is $book, written by $author, and is presently a miniseries on HULU.
Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award winning "Handmaid's Tale!"</p><p> The $actor's rendition is right on! Again the content will work, because all of my content is displayed in orangre, and my variables is display in black!!</p>
EOT;
//Please, do not forger the closing semi colon for the heredoc syntax!!!
    echo $content;
?>