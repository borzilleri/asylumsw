<?php defined('SYS_ROOT') OR die('Direct script access prohibited');

/**
 * Relative path to the directory where blog post files are located
 *
 * This should be a path relative to the APP_ROOT, and NOT end in a
 * trailing slash.
 *
 */
$config['posts_path'] = 'blog';

/**
 * Format string used for formatting blog post dates.
 *
 * This should be a string compatable with PHPs date() method.
 */
$config['date_format'] = 'Y-m-d H:j:s';
?>
