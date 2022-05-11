<?php

$file = "phpfile.txt";

if ($handle = fopen($file, "r")) {

    // fwrite($handle, "Written");
    // fclose($handle);
    // echo "Written";

    //filesize($file) => read all the text in the $handle.
    echo $content = fread($handle, filesize($file));
} else {
    echo "Couldnt write to file";
};



?>