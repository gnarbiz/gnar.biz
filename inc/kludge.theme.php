<?php
$glob = glob('inc/ascii/*');
$path = $glob[array_rand($glob)];
$random_ascii = file_get_contents($path);
$theme = str_replace('.','',array_pop(explode('/',$path)));
?>