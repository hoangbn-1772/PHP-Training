<?php
echo 'Xu ly File';
echo '<br/>';
$file_path = 'input.txt';
// $path_input = 'input.txt';

// Doc file
readCharInFile($file_path);
readLineInFile($file_path);
readAllFile($file_path);

// Ghi file
writeFile($path_input, $fp);

function openFile($path, $permission)
{
    return @fopen($path, $permission);
}

// Doc tung ky tu
function readCharInFile($file_path)
{
    $fp = openFile($file_path, "r");
    if ($fp) {
        while (!feof($fp)) {
            echo fgetc($fp);
        }
        fclose($fp);
    } else {
        echo 'Open file fail';
    }
}

// Doc tung dong
function readLineInFile($file_path)
{
    echo '<br/>';
    $fp = openFile($file_path, 'r');
    if ($fp) {
        while (!feof($fp)) {
            echo fgets($fp);
        }
        fclose($fp);
    } else {
        echo 'Open file fail';
    }
}

// Doc het file
function readAllFile($file_path)
{
    echo '<br/>';
    $fp = openFile($file_path, "r");
    if ($fp) {
        while (!feof($fp)) {
            echo fread($fp, filesize($file_path));
        }
        fclose($fp);
    } else {
        echo 'Open file fail';
    }
}

function writeFile()
{
    echo '<br/>';

    $fp = @fopen('output.txt', "a");
    if ($fp) {
        $data = '. Sun-asterisk Viet Nam';
        fwrite($fp, $data);

        fclose($fp);
    } else {
        echo 'Open file fail';
    }
}
