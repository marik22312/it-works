<?php
/**
 * Site URL
 */
// Current file path
$currentPath = dirname(__FILE__);
$currentPath = str_replace('\\', '/', $currentPath);

// Current self URL
$path = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$host = "http://" . $_SERVER['HTTP_HOST'];

// Calculate correct site url
require_once("{$currentPath}/helpers/get_longest_common_subsequence.php");
$commonPath = get_longest_common_subsequence($currentPath, $path);
$baseUrl = $host . $commonPath;

// Set for settings
define('WP_HOME', $baseUrl);
define('WP_SITEURL', $baseUrl);
