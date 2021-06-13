<?
include("functions.php");

Layout_block('head');
Layout_block('header');
Layout_block('sidebar');

$view = explode('/',$_SERVER["REQUEST_URI"])[1];
get_module($view);

Layout_block('footer');
Layout_block('modal');
Layout_block('foot');