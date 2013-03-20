<?php
return array(
    'router' => array(
        'routes' => array(
            'barcode' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/barcode[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Barcode\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),

    'controllers' => [
        'invokables' => [
            'Barcode\Controller\Index' => 'Barcode\Controller\IndexController'
        ]
    ],
    'view_manager' => [
        'template_path_stack' => array(
            'barcode' => __DIR__ . '/../view/',
        ),
    ]
);