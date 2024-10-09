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
                        .'|c(?'
                            .'|ontexts/([^.]+)(?:\\.(jsonld))?(*:150)'
                            .'|ategories(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:188)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:226)'
                                .')'
                            .')'
                            .'|ustomers(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:265)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:303)'
                                .')'
                            .')'
                        .')'
                        .'|order(?'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:344)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:382)'
                                .')'
                            .')'
                            .'|_items(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:419)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:457)'
                                .')'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ayments(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:500)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:538)'
                                .')'
                            .')'
                            .'|roducts(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:576)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:614)'
                                .')'
                            .')'
                        .')'
                        .'|s(?'
                            .'|ellers(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:656)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:694)'
                                .')'
                            .')'
                            .'|hipping_infos(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:738)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:776)'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:817)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        78 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        108 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        150 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        188 => [
            [['_route' => 'api_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_categories_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_categories_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        226 => [
            [['_route' => 'api_categories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_categories_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_categories_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_categories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_categories_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_categories_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Category', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_categories_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        265 => [
            [['_route' => 'api_customers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        303 => [
            [['_route' => 'api_customers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_customers_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_customers_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_customers_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Customer', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_customers_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        344 => [
            [['_route' => 'api_orders_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_orders_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        382 => [
            [['_route' => 'api_orders_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_orders_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_orders_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_orders_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Order', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_orders_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        419 => [
            [['_route' => 'api_order_items_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\OrderItems', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_order_items_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\OrderItems', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        457 => [
            [['_route' => 'api_order_items_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\OrderItems', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_order_items_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\OrderItems', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_order_items_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\OrderItems', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_order_items_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\OrderItems', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_order_items_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        500 => [
            [['_route' => 'api_payments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_payments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        538 => [
            [['_route' => 'api_payments_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_payments_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_payments_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_payments_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_payments_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        576 => [
            [['_route' => 'api_products_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        614 => [
            [['_route' => 'api_products_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_products_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_products_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_products_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Product', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_products_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        656 => [
            [['_route' => 'api_sellers_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Seller', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_sellers_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_sellers_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Seller', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_sellers_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        694 => [
            [['_route' => 'api_sellers_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Seller', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_sellers_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_sellers_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Seller', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_sellers_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_sellers_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Seller', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_sellers_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_sellers_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Seller', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_sellers_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        738 => [
            [['_route' => 'api_shipping_infos_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ShippingInfo', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_infos_get_collection', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_infos_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ShippingInfo', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_infos_post_collection', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        776 => [
            [['_route' => 'api_shipping_infos_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ShippingInfo', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_infos_get_item', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_shipping_infos_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ShippingInfo', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_infos_delete_item', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_shipping_infos_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ShippingInfo', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_infos_put_item', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_shipping_infos_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ShippingInfo', '_api_identifiers' => ['id'], '_api_has_composite_identifier' => false, '_api_exception_to_status' => [], '_api_operation_name' => 'api_shipping_infos_patch_item', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        817 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
