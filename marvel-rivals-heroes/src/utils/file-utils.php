<?php 

function checkFile(string $relativePath): string {
    $fullPath = __DIR__ . '/../../' . ltrim($relativePath, '/');

    if(!file_exists($fullPath)) die ("Error: file '$relativePath' is not found at location $fullPath");
    
    return $fullPath;
}

?>