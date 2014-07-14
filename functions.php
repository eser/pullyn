<?php

$config = include "config.php";

$directoryIterator = new DirectoryIterator($config["directory"]);

$directories = array();
foreach ($directoryIterator as $file) {
    $filename = $file->getFilename();

    if ($filename[0] === ".") { // $tFile->isDot()
        continue;
    }

    if (!$file->isDir()) {
        continue;
    }

    if (!is_dir($file->getPathname() . "/.git")) {
        continue;
    }

    $directories[] = $filename;
}