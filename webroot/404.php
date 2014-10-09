<?php 
/**
 * This is a Deus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $deus variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Deus container.
$deus['title'] = "404";
$deus['header'] = "";
$deus['main'] = "This is a Anax 404. Document is not here.";
$deus['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Deus.
include(DEUS_THEME_PATH);