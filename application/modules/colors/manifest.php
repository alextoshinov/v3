<?php

$routes[] = ['GET', '/admin/colors', 'GoCart\Controller\AdminColors#index'];
$routes[] = ['GET|POST', '/admin/colors/color_form/[i:id]?', 'GoCart\Controller\AdminColors#color_form'];
$routes[] = ['GET|POST', '/admin/colors/delete_color/[i:id]', 'GoCart\Controller\AdminColors#delete_color'];
$routes[] = ['GET|POST', '/admin/colors/organize', 'GoCart\Controller\AdminColors#organize'];

