<?php
// Log the IP address to a JSON file
$logFile = 'ip_log.json';

// Read existing data from the JSON file
$logData = json_decode(file_get_contents($logFile), true);

// Add a new entry
$logData[] = ['timestamp' => date('Y-m-d H:i:s'), 'ip_address' => $userIP];

// Write the updated data back to the JSON file
file_put_contents($logFile, json_encode($logData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
?>
<!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device"width, initial-scale=1.0>
      
    </head>
    <body>
      <meta http-equiv="Refresh" content="1; url='/step3323423.php'" />
      <h3>verifying...<h3>
    </body>