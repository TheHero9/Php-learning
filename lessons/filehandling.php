<?php

    $file = '../extras/users.txt';

    if (file_exists($file)) {
        // fopen() gives you more control over the file.
        // Modes: r, w, a, x, r+, w+, a+, x+ See below for details
        $handle = fopen($file, 'r');
        // fread() reads the file and returns the content as a string on success, or FALSE on failure.
        $contents = fread($handle, filesize($file));
        // fclose() closes the file resource on success, or FALSE on failure.
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($file, 'w');
        $contents = "Hello";
        fwrite($handle, $contents);
        fclose($handle);

        
    }

    // echo readfile($file)
?>