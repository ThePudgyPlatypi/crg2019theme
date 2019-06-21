<?php

/* 
	Template Name: Default Full Header
	Description: Home Page
*/

// Grabs full size header with proper navigation
get_header('full');

// changes the content depending on what page the person visits
if(is_page(36)) {
	get_template_part('template-parts/content', 'about');
} else if (is_page(56)) {
	get_template_part('template-parts/content', 'home');
};

get_footer('custom'); ?>