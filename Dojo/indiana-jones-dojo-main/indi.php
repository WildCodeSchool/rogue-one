<?php

function displayDirectoryContents($originPath)
{
    $findFiles = scandir($originPath);
    foreach ($findFiles as $findFile) {
        if ($findFile === 'crystal-skull.txt') {
            echo $originPath . '/' . $findFile.PHP_EOL;
            exit();
        }
        if ($findFile == '.' || $findFile == '..') {
            continue;
        }
        $findFilePath = $originPath . '/' . $findFile;
        //echo $findFilePath . PHP_EOL;
        if (is_dir($findFilePath)) {
            displayDirectoryContents($findFilePath);
        }
    }
}

$templePath = __DIR__ . '/temple';
displayDirectoryContents($templePath);