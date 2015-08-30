<?php
$random = array_diff(scandir(PATH.theme_url('img/')), ['.', '..']);
echo 'img/'.$random[array_rand($random)];
?>
