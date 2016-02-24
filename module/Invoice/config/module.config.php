<?php
return array(
        'controllers' => array(
                'invokables' => array(
                        'Invoice\Controller\Invoice' => 'Invoice\Controller\InvoiceController'
                ) ,
        ) ,
        'view_manager' => array(
                'template_path_stack' => array(
                        'blog' => __DIR__ . '/../view',
                ) ,
        ) ,

        // Routes

        'router' => array(
                'routes' => array(
                        'invoice' => array(
                                'type' => 'segment',
                                'options' => array(
                                        'route' => '/invoice[/:action][/:id]',
                                        'constraints' => array(
                                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                'id' => '[0-9]+',
                                        ) ,
                                        'defaults' => array(
                                                'controller' => 'Invoice\Controller\Invoice',
                                                'action' => 'index',
                                        ) ,
                                ) ,
                        ) ,
                ) ,
        ) ,
);