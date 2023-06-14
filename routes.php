<?php

require_once __DIR__.'/router.php';

get('/admin', 'views/admin.php');
post('/admin', 'views/admin.php');

get('/admin/$page', 'views/admin.php');
post('/admin/$page', 'views/admin.php');

get('/admin/$page/$id', 'views/admin.php');
post('/admin/$page/$id', 'views/admin.php');

get('/', 'views/index.php');
get('/$id', 'views/index.php');

any('/404','views/404.php');
