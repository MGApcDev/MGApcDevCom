<?php
$scriptPath = '/home4/mgapcdev/public_html/themes/custom/mgapcdev/scripts/';

$scripts = array(
  'vendor/mustache.min.js',
  'vendor/github-activity-0.1.4.min.js',
  'script.js',
);

$file = fopen($scriptPath . 'build/main.js', 'w');
foreach ($scripts as $script) {
  $path = $scriptPath . $script;
  if (file_exists($path)) {
    fwrite($file, file_get_contents($path));
  } else {
    echo 'File not found --> ' . $path . PHP_EOL;
    fclose($file);
    die();
  }
}
fclose($file);
echo 'JS compiled --> success ' . PHP_EOL;
?>
