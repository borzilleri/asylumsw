<?php defined('SYS_ROOT') OR die('Direct script access prohibited');
$header = new View('header');
$header->pageType = 'Home';

$footer = new VieW('footer');

$header->render(true);
?>

Lorem Ipsum Dolor Sit Amet 

<?=$footer->render();?>
