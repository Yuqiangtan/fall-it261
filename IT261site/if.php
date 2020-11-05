<?php
echo '<br>';

echo date('H:i a');
echo '<br>';
echo date('H:i:sa');
echo '<br>';
$correct_time =date ('H:i:sa');

if($correct_time <10){
    echo 'Good morning!';
}elseif ($correct_time <18){
    echo 'Good Afternoon';
}else{
    echo 'Good Evening';
}

?>