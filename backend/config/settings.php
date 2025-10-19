<?php



define('BASE_URL', 'http://localhost/carbon-cms');

$current_page = basename($_SERVER['SCRIPT_NAME'], ".php");


$page_titles = [
    'home' => 'Home - Carbon International',
    'about' => 'About Us - Carbon International',
    'projects' => 'Our Projects - Carbon International'
];

$page_title = isset($page_titles[$current_page]) ? $page_titles[$current_page] : 'Carbon International';
