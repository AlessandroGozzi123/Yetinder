<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'pridat' => [[], ['_controller' => 'App\\Controller\\AddController::index'], [], [['text', '/pridat']], [], [], []],
    'homepage' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'konecyetinder' => [[], ['_controller' => 'App\\Controller\\KonecController::index'], [], [['text', '/konecyetinder']], [], [], []],
    'statistika' => [[], ['_controller' => 'App\\Controller\\StatisticsController::index'], [], [['text', '/statistika']], [], [], []],
    'yetinder' => [[], ['_controller' => 'App\\Controller\\YetinderController::index'], [], [['text', '/yetinder']], [], [], []],
    'hodnoceni' => [[], ['_controller' => 'App\\Controller\\YetinderController::hodnoceni'], [], [['text', '/yetinder/hodnoceni']], [], [], []],
    'konec' => [[], ['_controller' => 'App\\Controller\\YetinderController::konec'], [], [['text', '/yetinder/konec']], [], [], []],
];
