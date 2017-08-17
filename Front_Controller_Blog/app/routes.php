<?php
/**
 * route_name => [path, file, function, methods]
 */

return [
    'main_page' => [
        'path' => '/',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\index',
        'methods' => ['GET']
    ],
    'posts' => [
        'path' => '/posts',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\index',
        'methods' => ['GET']
    ],
    'postById' => [
        'path' => '/post/{id}',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\postById',
        'methods' => ['GET']
    ],
    'loginPage' => [
        'path' => '/login',
        'file' => 'users.php',
        'function' => 'app\\src\\users\\loginPage',
        'methods' => ['GET']
    ],
    'registrationPage' => [
        'path' => '/registration',
        'file' => 'users.php',
        'function' => 'app\\src\\users\\registrationPage',
        'methods' => ['GET']
    ],
    'userCabinetPage' => [
        'path' => '/user/{cabinet}/',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\index',
        'methods' => ['GET']
    ],
    'login' => [
        'path' => '/login',
        'file' => 'users.php',
        'function' => 'app\\src\\users\\login',
        'methods' => ['POST']
    ],
    'logout' => [
        'path' => '/logout',
        'file' => 'users.php',
        'function' => 'app\\src\\users\\logout',
        'methods' => ['POST']
    ],
    'registration' => [
        'path' => '/registration',
        'file' => 'users.php',
        'function' => 'app\\src\\users\\registration',
        'methods' => ['POST']
    ],
    'add_post' => [
        'path' => '/add',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\addPost',
        'methods' => ['POST']
    ],
    'delete_post' => [
        'path' => '/delete',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\deletePost',
        'methods' => ['POST']
    ],
    'edit_post_page' => [
        'path' => '/edit/post/{num}',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\editPost',
        'methods' => ['GET']
    ],
    'save_edit' => [
        'path' => '/save_edit',
        'file' => 'posts.php',
        'function' => 'app\\src\\posts\\saveEdit',
        'methods' => ['POST']
    ],

];
