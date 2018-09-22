<?php
/*
Template Name: singleテンプレート
*/
if ( in_category('special') ) {
include(TEMPLATEPATH . '/single-special.php');
}else {
include(TEMPLATEPATH . '/single-theme.php');
}
?>
