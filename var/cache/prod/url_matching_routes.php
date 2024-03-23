<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api(?'
                    .'|/\\.well\\-known/genid/([^/]++)(*:43)'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:78)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:108)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:147)'
                        .'|errors/([^/]++)(?'
                            .'|(*:173)'
                        .')'
                        .'|validation_errors/([^/]++)(?'
                            .'|(*:211)'
                        .')'
                        .'|available_spots(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:264)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:290)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:328)'
                            .')'
                        .')'
                        .'|pre_registrations(?'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:384)'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:410)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:448)'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        147 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        173 => [
            [['_route' => '_api_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_problem'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_hydra'], ['status'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors_jsonapi'], ['status'], ['GET' => 0], null, false, true, null],
        ],
        211 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'ApiPlatform\\Symfony\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi'], ['id'], ['GET' => 0], null, false, true, null],
        ],
        264 => [[['_route' => '_api_/available_spots/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AvailableSpots', '_api_operation_name' => '_api_/available_spots/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        290 => [
            [['_route' => '_api_/available_spots{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AvailableSpots', '_api_operation_name' => '_api_/available_spots{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/available_spots{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AvailableSpots', '_api_operation_name' => '_api_/available_spots{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        328 => [
            [['_route' => '_api_/available_spots/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AvailableSpots', '_api_operation_name' => '_api_/available_spots/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/available_spots/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AvailableSpots', '_api_operation_name' => '_api_/available_spots/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/available_spots/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AvailableSpots', '_api_operation_name' => '_api_/available_spots/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        384 => [[['_route' => '_api_/pre_registrations/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PreRegistration', '_api_operation_name' => '_api_/pre_registrations/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        410 => [
            [['_route' => '_api_/pre_registrations{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PreRegistration', '_api_operation_name' => '_api_/pre_registrations{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/pre_registrations{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PreRegistration', '_api_operation_name' => '_api_/pre_registrations{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        448 => [
            [['_route' => '_api_/pre_registrations/{id}{._format}_put', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PreRegistration', '_api_operation_name' => '_api_/pre_registrations/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => '_api_/pre_registrations/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PreRegistration', '_api_operation_name' => '_api_/pre_registrations/{id}{._format}_patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/pre_registrations/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_format' => null, '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PreRegistration', '_api_operation_name' => '_api_/pre_registrations/{id}{._format}_delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
