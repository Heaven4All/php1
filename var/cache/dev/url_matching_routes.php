<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/courses' => [[['_route' => 'courses', 'tab' => 'courses', '_controller' => 'App\\Controller\\CoursesController'], null, null, null, false, false, null]],
        '/courses/categories' => [[['_route' => 'categories', 'permanent' => true, 'route' => 'courses', 'keepQueryParams' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], null, null, null, false, false, null]],
        '/settings/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\ResetController'], null, ['POST' => 0], null, false, false, null]],
        '/settings' => [[['_route' => 'settings', '_controller' => 'App\\Controller\\SettingsController'], null, null, null, false, false, null]],
        '/imprint' => [[['_route' => 'imprint', '_controller' => 'App\\Controller\\ImprintController'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'landing_page', 'tab' => 'home', '_controller' => 'App\\Controller\\LandingPageController'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/courses/(?'
                    .'|categories/([^/]++)(*:200)'
                    .'|([^/]++)(?'
                        .'|(*:219)'
                        .'|/lessons(?'
                            .'|(*:238)'
                            .'|/([^/]++)(*:255)'
                        .')'
                    .')'
                .')'
                .'|/(.+)(*:271)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        200 => [[['_route' => 'category', 'tab' => 'courses', '_controller' => 'App\\Controller\\CoursesController'], ['categorySlug'], null, null, false, true, null]],
        219 => [[['_route' => 'course', 'tab' => 'courses', '_controller' => 'App\\Controller\\CourseController'], ['courseSlug'], null, null, false, true, null]],
        238 => [[['_route' => 'lessons', 'permanent' => true, 'route' => 'course', 'keepQueryParams' => true, '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction'], ['courseSlug'], null, null, false, false, null]],
        255 => [[['_route' => 'lesson', 'tab' => 'courses', '_controller' => 'App\\Controller\\LessonController'], ['courseSlug', 'lessonSlug'], null, null, false, true, null]],
        271 => [
            [['_route' => 'not_found', '_controller' => 'App\\Controller\\NotFoundController'], ['anything'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
