<?php
namespace Album;

use Zend\Router\Http\Segment;
use Zend\Router\Http\Literal;
//use Zend\ServiceManager\Factory\InvokableFactory;

return [
   /* 'controllers' => [
        'factories' => [
            Controller\AlbumController::class => InvokableFactory::class,
        ],
    ],*/

// The following section is new and should be added to your file:
'router' => [
    'routes' => [
        'album' => [
            'type'    => Segment::class,
            'options' => [
                'route' => '/album[/:action[/:id]]',
                'constraints' => [
                    'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    'id'     => '[0-9]+',
                ],
                'defaults' => [
                    'controller' => Controller\AlbumController::class,
                    'action'     => 'index',
                ],
            ],
        ],
            ],
],

    'view_manager' => [
        'template_path_stack' => [
            'album' => __DIR__ . '/../view',
        ],
    ],
];