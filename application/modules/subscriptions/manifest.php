<?php

$routes[] = ['GET', '/admin/subscriptions', 'GoCart\Controller\AdminSubscriptions#index'];
$routes[] = ['GET|POST', '/admin/subscriptions/subscription_form/[i:id]?', 'GoCart\Controller\AdminSubscriptions#subscription_form'];
$routes[] = ['GET|POST', '/admin/subscriptions/delete_subscription/[i:id]', 'GoCart\Controller\AdminSubscriptions#delete_subscription'];
$routes[] = ['GET|POST', '/admin/subscriptions/organize', 'GoCart\Controller\AdminSubscriptions#organize'];

