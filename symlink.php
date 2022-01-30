<?php
    $targetFolder = $_SERVER['DOCUMENT_ROOT'].'/storage/app/public';
    $linkFolder = $_SERVER['DOCUMENT_ROOT'].'/storage';
    $file = $_SERVER['DOCUMENT_ROOT'].'/symlink.php';
    symlink($targetFolder,$linkFolder);
    unlink($file);
?>