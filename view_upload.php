<?php
/**
 * view_upload.php
 *
 * author:      Simone Westphal
 * copyright:   2020 thinkweb360 (https://thinkweb360.com)
 *
 * file:        view_upload.php
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload ansehen</title>
</head>
<body>
<?php
$folder = "uploads";

if(is_dir($folder)) {

    $handler = opendir($folder);
    $output = "";

    while($files = readdir($handler)) {

        // wenn kein directory
        if(!is_dir($files)) {
            $output.="<img src='uploads/{$files}' width='180' height='180'>";
        }
        
    }
}
echo $output;
?>
<p><a href="index.php">Zurück</a></p>
</body>
</html>
