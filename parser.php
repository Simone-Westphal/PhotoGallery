<?php
/**
 * parser.php
 *
 * author:      Simone Westphal
 * copyright:   2020 thinkweb360 (https://thinkweb360.com)
 *
 * file:        parser.php
 */

if(!empty($_FILES)) {
    $temp = $_FILES['file']['tmp_name'];
    $dir_seperator = DIRECTORY_SEPARATOR;
    $folder = "uploads";

    $destination_path = dirname(__FILE__).$dir_seperator.$folder.$dir_seperator;
    $target_path = $destination_path.$_FILES['file']['name'];
    move_uploaded_file($temp,$target_path);
}