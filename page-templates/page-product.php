<?php

/* 
	Template Name: Product
	Description: Generic Product Page Template
*/

// Set up a conditional statement to replace the content with proper stuff when different products
// selected
get_header('product');

	get_template_part('template-parts/content', 'product');

get_footer('custom'); ?>
