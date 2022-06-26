<?php

/*================
Template Name: Home Page
================*/

get_header(); ?>

<ul class="breadcrumb">
    <?php coalition_breadcrumb(); ?>
</ul>

<?php get_template_part( 'template-parts/home', 'contact' ); ?>

<?php
get_footer(); ?>