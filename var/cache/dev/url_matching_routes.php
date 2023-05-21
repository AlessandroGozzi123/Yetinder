<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/pridat' => [[['_route' => 'pridat', '_controller' => 'App\\Controller\\AddController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/konecyetinder' => [[['_route' => 'konecyetinder', '_controller' => 'App\\Controller\\KonecController::index'], null, null, null, false, false, null]],
        '/statistika' => [[['_route' => 'statistika', '_controller' => 'App\\Controller\\StatisticsController::index'], null, null, null, false, false, null]],
        '/yetinder' => [[['_route' => 'yetinder', '_controller' => 'App\\Controller\\YetinderController::index'], null, null, null, false, false, null]],
        '/yetinder/hodnoceni' => [[['_route' => 'hodnoceni', '_controller' => 'App\\Controller\\YetinderController::hodnoceni'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
