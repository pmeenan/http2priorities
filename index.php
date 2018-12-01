<?php
// Stub for use as a wordpress theme (just pass through the html)
$themeDir = get_template_directory_uri();
$html = file_get_contents(__DIR__ . "/index.html");
echo str_replace('resources/', "$themeDir/resources/", $html);