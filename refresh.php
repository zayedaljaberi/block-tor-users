<?php
$torIPListURL = "https://www.dan.me.uk/torlist/";
$htaccessFilePath = ".htaccess";
$htaccessFileContent = "";
$lastUpdateTime = 0;
$ipListStartLine = "#--block tor users v2.0--#";
$loop = true;
if (!file_exists($htaccessFilePath)) {
    die(".htaccess file was not found, please create it!");
}
$file = fopen($htaccessFilePath, "r") or die("Unable to read file .htaccess !");
while(!feof($file) && $loop) {
    $line = fgets($file);
    $loop = trim($line) != $ipListStartLine;
    $htaccessFileContent .= $line;
}
if ($loop) {
    $htaccessFileContent .= "\n\n" . $ipListStartLine . "\n";
} else {
    $lastUpdateTime = intval(trim(fgets($file),"#")) or 0;
}
fclose($file);
if (time() - $lastUpdateTime > (30 * 60)) {
    $file = fopen($torIPListURL, "r") or resetTime($htaccessFilePath, $ipListStartLine);
    $htaccessFileContent .= "#" . time() . "\n\n";
    while(!feof($file)) {
        $htaccessFileContent .= "Deny from ".fgets($file);
    }
    fclose($file);
    fileWrite($htaccessFilePath, $htaccessFileContent);
    echo "The list was successfully updated";
} else {
    echo "The list was not updated, because the last refresh is less than 30 minutes";
}

function resetTime($filePath, $ipListStartLine) {
    $fileContent = "";
    $file = fopen($filePath, "r") or die("Unable to read file .htaccess !");
    while(!feof($file)) {
        $line = fgets($file);
        $fileContent .= $line;
        if (trim($line) == $ipListStartLine) {
            if (!feof($file)) {
                fgets($file);
            }
            $fileContent .= "#" . time();
        }
    }
    fclose($file);
    fileWrite($filePath, $fileContent);
    die("Unable to get the tor IP list!, Maybe you have accessed the list less than 30 minutes from the same IP Address. Please try again after 30 minutes to avoid being blocked");
}

function fileWrite($filePath, $fileContent) {
    $file = fopen($filePath, "w") or die("Unable to write to file .htaccess !");
    fwrite($file, $fileContent);
    fclose($file);
}
