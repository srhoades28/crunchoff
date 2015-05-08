<?php require('core/init.php'); ?>

<?php
//Create a new Song Object
$songs = new Song;



//Get Template & Assign Vars
$template = new Template('templates/frontpage.php');

//Get all Current songs
$template->current = $songs->getAllCurrent();

$template->currentRows = $songs->getCurrentRows();

//Display template
echo $template;