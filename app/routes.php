<?php

use Framework\Routing\Router;

use App\Http\Controllers\Products\OrderedProductsController;
use App\Http\Controllers\Products\ListProductsController;
use App\Http\Controllers\Products\ShowProductController;
use App\Http\Controllers\Products\RegisterProductController;
use App\Http\Controllers\Products\UpdateProductController;
use App\Http\Controllers\Products\DeleteProductsController;

use App\Http\Controllers\Notifications\ListNotificationsController;

use App\Http\Controllers\Statistics\ShowStatisticsController;

use App\Http\Controllers\Users\ListUsersController;
use App\Http\Controllers\Users\RegisterUserController;
use App\Http\Controllers\Users\ShowLoginUserController;
use App\Http\Controllers\Users\ShowRegisterUserController;

use App\Http\Controllers\Dashboard\ShowDashboardController;

use App\Http\Controllers\Orders\ListOrdersController;


return function(Router $router) {

    $products = [
        [
            'id' => 1,
            'name' => 'Ordinateur',
            'price' => 100,
            'image' => '../../../images/asus_1.jpg',
            'category' => 'technologies',
            'origin' => 'Paris',
            'quantity' => 13,
            'min_threshold' => 2,
            'ordered' => 2,
            'correlations' => [
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
            ],
        ],
        [
            'id' => 2,
            'name' => 'Coca-cola',
            'price' => 20,
            'image' => '../../../images/body.png',
            'category' => 'boissons',
            'origin' => 'China',
            'quantity' => 13,
            'min_threshold' => 50,
            'ordered' => 2,
            'correlations' => [
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
            ],
        ],
        [
            'id' => 3,
            'name' => 'Soupe',
            'price' => 20,
            'image' => '../../../images/soupe.jpg',
            'category' => 'nourritures',
            'origin' => 'Paris',
            'quantity' => 13,
            'min_threshold' => 50,
            'ordered' => 2,
            'correlations' => [
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
                [
                    'name' => 'Coca-cola',
                    'score' => 0.7,
                ],
            ],
        ],
    ];

    $orders = [
        [
            'date' => '31/11/2022',
            'time' => '15:20',
            'id' => 8172864,
            'totalPrice' => 500,
            'status' => 'livré',
            'client' => 129846,
        ],
        [
            'date' => '12/07/1900',
            'time' => '12:30',
            'id' => 6752361,
            'totalPrice' => 200,
            'status' => 'livré',
            'client' => 918273,
        ],
        [
            'date' => '31/01/2015',
            'time' => '12:30',
            'id' => 92374,
            'totalPrice' => 1000,
            'status' => 'en cours',
            'client' => 918273,
        ],
    ];

    $user = [
        'name' => 'koto',
        'id' => 91283361872,
        'consumption' => 1000,
        'averagetime' => '3 jours'
    ];

    $users = [
        [
            'name' => 'koto',
            'id' => 129846,
            'consumption' => 1000,
            'averagetime' => '3 jours'
        ],
        [
            'name' => 'Bema',
            'id' => 918273,
            'consumption' => 500,
            'averagetime' => '2 jours'
        ],
    ];

    $notifications = [
        [
            'type' => 'Alert',
            'message' => 'Quantité inférieur ou égale au seuil minimal',
            'product_id' => 918273,
            'date' => '12 juin 2023, 22:05',
        ],
        [
            'type' => 'Alert',
            'message' => 'Quantité inférieur ou égale au seuil minimal',
            'product_id' => 918273,
            'date' => '12 juin 2023, 22:05',
        ],
        [
            'type' => 'Alert',
            'message' => 'Quantité inférieur ou égale au seuil minimal',
            'product_id' => 918273,
            'date' => '12 juin 2023, 22:05',
        ],
    ];

    $categories = [
        'admin' => [
            [
                'url' => '/admin/products',
                'name' => 'Toutes'
            ],
            [
                'url' => '/admin/products/boissons',
                'name' => 'Boissons',
            ],
            [
                'url' => '/admin/products/nourritures',
                'name' => 'Nourritures',
            ],
            [
                'url' => '/admin/products/technologies',
                'name' => 'Technologies'
            ],
        ],
        'user-simple' => [
            [
                'url' => '/products',
                'name' => 'Toutes'
            ],
            [
                'url' => '/products/boissons',
                'name' => 'Boissons',
            ],
            [
                'url' => '/products/nourritures',
                'name' => 'Nourritures',
            ],
            [
                'url' => '/products/technologies',
                'name' => 'Technologies'
            ],
        ],
        'statistic' => [
            [
                'url' => '/admin/statistics/visits',
                'name' => 'Taux de visite'
            ],
            [
                'url' => '/admin/statistics/orders',
                'name' => 'Taux de commande',
            ],
            [
                'url' => '/admin/statistics/sales',
                'name' => 'Ventes',
            ],
            [
                'url' => '/admin/statistics/order-canceled',
                'name' => 'Commande annulées',
            ],
        ]
    ];

    $statistics = [
        'visits' => [
            'title'     => 'Taux de visite',
            'header'    => [ 'Date', 'Nombre de visites', 'Clients acheteurs', 'Taux de conversion' ],
            'body'      => [
                [
                    'date'              => '12 juin 2023',
                    'nb_visit'          => 1000,
                    'nb_buyers'         => 500,
                    'conversion_rate'   => 10,
                ],
                [
                    'date'              => '12 juin 2023',
                    'nb_visit'          => 1000,
                    'nb_buyers'         => 500,
                    'conversion_rate'   => 10,
                ],
                [
                    'date'              => '12 juin 2023',
                    'nb_visit'          => 1000,
                    'nb_buyers'         => 500,
                    'conversion_rate'   => 10,
                ],
            ],
        ],
        'orders' => [
            'title'     => 'Taux de commande',
            'header'    => [ 'ID Produit', 'Nombre de commandes', 'Nombre de retours', 'Taux de retour' ],
            'body'      => [
                [
                    'id_product'    => 1,
                    'nbr_orders'    => 1000,
                    'nb_returns'    => 500,
                    'return_rate'   => 10,
                ],
                [
                    'id_product'    => 1,
                    'nbr_orders'    => 1000,
                    'nb_returns'    => 500,
                    'return_rate'   => 10,
                ],
                [
                    'id_product'    => 1,
                    'nbr_orders'    => 1000,
                    'nb_returns'    => 500,
                    'return_rate'   => 10,
                ],
            ],
        ],
        'sales' => [
            'title'     => 'Ventes',
            'header'    => [ 'Date', 'Heure', 'ID Client', 'Montant total' ],
            'body'      => [
                [
                    'date'          => '12 juin 2023',
                    'time'          => '13:54',
                    'id_client'     => 129846,
                    'total_amount'  => 5000,
                ],
                [
                    'date'          => '12 juin 2023',
                    'time'          => '13:54',
                    'id_client'     => 129846,
                    'total_amount'  => 5000,
                ],
                [
                    'date'          => '12 juin 2023',
                    'time'          => '13:54',
                    'id_client'     => 129846,
                    'total_amount'  => 5000,
                ],
            ],
        ],
        'order-canceled' => [
            'keys' => ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jui', 'Juil', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            'value' => [
                '2023' => [ 100, 75, 30, 90, 100, 20, 50, 10, 2, 78, 20, 10],
                '2022' => [ 50, 10, 100, 76, 98, 54, 87, 87, 78, 90, 95, 23],
                '2021' => [ 82, 72, 23, 63, 63, 22, 77, 92, 100, 0, 12, 43],
            ]
        ]
    ];

    $router->add(
        'GET', '/',
        fn() => $router->redirect('/products'),
    );

    $router->add(
        'GET', '/products/ordered',
        [ new OrderedProductsController( $products ), 'handle' ]
    )->name('ordered-product');

    $router->add(
        'GET', '/admin/notifications',
        [ new ListNotificationsController( $notifications ), 'handle' ]
    )->name('list-notification');
    
    $router->add(
        'GET', '/admin/statistics/{category}',
        [ new ShowStatisticsController( $router, $statistics, $categories ), 'handle' ]
    )->name('view-statistics');

    $router->add(
        'GET', '/admin/clients',
        [ new ListUsersController( $users ), 'handle' ]
    )->name('list-client');

    $router->add(
        'GET', '/admin/clients/{id}/dashboard',
        [ new ShowDashboardController( $router, $orders, $users, true), 'handle' ]
    )->name('client-dashboard');

    $router->add(
        'GET', '/admin/orders',
        [ new ListOrdersController( $orders ), 'handle' ]
    )->name('list-order');

    $router->add(
        'GET', '/admin/products/view/{id}',
        [ new ShowProductController( $router, $products, true ), 'handle' ]
    )->name('view-product-admin');

    $router->add(
        'GET', '/products/view/{id}',
        [ new ShowProductController( $router, $products ), 'handle' ]
    )->name('view-product');

    $router->add(
        'GET', '/admin/products/new',
        [ RegisterProductController::class, 'handle' ]
    )->name('new-product');

    $router->add(
        'GET', '/admin/products/update/{id}',
        [ new UpdateProductController( $router, $products ), 'handle' ]
    )->name('update-product');

    $router->add(
        'GET', '/admin/products/delete/{category?}',
        [ new DeleteProductsController( $router, $products, $categories ), 'handle' ]
    )->name('delete-product');


    $router->add(
        'GET', '/admin/products/{category?}',
        [ new ListProductsController( $router, $products, $categories, true ), 'handle' ]
    )->name('list-product');

    $router->add(
        'GET', '/products/{category?}',
        [ new ListProductsController( $router, $products, $categories ), 'handle' ]
    )->name('show-home-page');

    $router->add(
        'GET', '/dashboard',
        [ new ShowDashboardController( $router, $orders, $users ), 'handle' ]
    )->name('dashboard');

    $router->add(
        'GET', '/log-out',
        [ ShowLoginUserController::class, 'handle' ]
    )->name('log-out-user');

    $router->add(
        'GET', '/register',
        [ ShowRegisterUserController::class, 'handle' ]
    )->name('show-register-user');

    $router->add(
        'POST', '/register',
        [ new RegisterUserController( $router ), 'handle' ]
    )->name('register-user');

};
