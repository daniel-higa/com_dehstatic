<?php

function getFolders($dir) {
    $path = 'static/' . $dir;
    $folders = array();
    if (!is_dir($path)) {
        return $folders;
    }

    $dir = opendir($path);
    while(false !== ($item = readdir($dir))) {
        if (is_dir($path . $f) and $item[0] != '.') {
            $folders[] = $item;
        }
    }
    return $folders;
}
