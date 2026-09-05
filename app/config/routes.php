<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

$router->get('/git', 'StudentController::index');

$router->get('/student', 'StudentController::index');

$router->get('/student/profile', 'StudentController::profile')
       ->middleware('student');

$router->get('/users', 'UsersController::index');

$router->get('/', 'UsersController::index');