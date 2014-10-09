<?php 
/**
 * This is a Deus pagecontroller.
 *
 */
// Include the essential config-file which also creates the $deus variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Deus container.
$deus['title'] = "Mina redovisningar av kursmomenten";
 
$deus['header'] = <<<EOD
<img class='sitelogo' src='img/deus.png' alt='Deus Logo'/>
<span class='sitetitle'>Deus webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
<link rel='shortcut icon' href='favicon.ico'/>
EOD;
 
$deus['main'] = <<<EOD
<h1>Redovisningar</h1>
<p>Här kommer alla redovisningar att ligga.</p>
EOD;
 
$deus['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Christoffer Bäckström (christofferb.b@gmail.com) | <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> | <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Deus.
include(DEUS_THEME_PATH);