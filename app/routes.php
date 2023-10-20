<?php

use Framework\Routing\Router;

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
            'name' => 'Pizza',
            'price' => 20,
            'image' => '../../../images/bulb.png',
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
        function() use ($products) {
            return view('products/product-ordered', [
                'products' => $products
            ]);
        } 
    )->name('ordered-product');

    $router->add(
        'GET', '/admin/notifications',
        function() use ($notifications)
        {
            return view( 
                'notifications/notification', 
                [
                    'admin' => true,
                    'notifications' => $notifications
                ] 
            );
        }
    )->name('list-notification');
    
    $router->add(
        'GET', '/admin/statistics/{category}',
        function() use ( $router, $categories, $statistics )
        {
            $parameters = $router->current()->parameters();
            if( $parameters[ 'category' ] == 'order-canceled' ) {
                $year = date('Y');
                return view(
                    'statistics/stat-diagram',
                    [
                        'admin'         => true,
                        'categories'    => $categories['statistic'],
                        'statistics'    => $statistics['order-canceled'],
                        'year'          => $year,
                    ]
                );
            }
            else {
                return view( 
                    'statistics/stat-table', 
                    [
                        'admin'         => true,
                        'categories'    => $categories['statistic'],
                        'table'        => $statistics[ $parameters[ 'category' ] ],
                        ] 
                    );
                }
            }
    )->name('view-statistics');

    $router->add(
        'GET', '/admin/clients',
        function() use ($users) 
        {
            return view( 
                'users/user-list', 
                [
                    'admin' => true,
                    'users' => $users,
                ] 
            );
        }
    )->name('list-client');

    $router->add(
        'GET', '/admin/clients/{id}/dashboard',
        function() use ($router, $users, $orders) 
        {
            $result = [];
            $parameters = $router->current()->parameters();
            foreach ( $orders as $key => $order ) {
                if ( $order['client'] == $parameters['id'] ) {
                    $result['orders'][] = $order;
                }
            }

            foreach ( $users as $key => $user ) {
                if ( $user['id'] == $parameters['id'] ) {
                    $result['user'] = $user;
                }
            }
            return view( 
                'dashboard/dashboard', 
                [
                    'admin' => true,
                    'user' => $result['user'],
                    'orders' => $result['orders'],
                ] 
            );
        }
    )->name('client-dashboard');

    $router->add(
        'GET', '/admin/orders',
        function () use ($router, $orders) {
            return view('orders/order-list', [
                'orders' => $orders,
            ] );
        },
    )->name('list-order');

    $router->add(
        'GET', '/admin/products/view/{id}',
        function() use ($router, $products) {
            $parameters = $router->current()->parameters();
            foreach( $products as $key => $product) {
                if( $product['id'] == $parameters['id'] ) {
                    return view('products/product-details', [
                        'admin' => true,
                        'product' => $product
                    ] );
                }
                else continue;
            }
        }
    )->name('view-product-admin');

    $router->add(
        'GET', '/products/view/{id}',
        function() use ($router, $products) {
            $parameters = $router->current()->parameters();
            foreach( $products as $key => $product) {
                if( $product['id'] == $parameters['id'] ) {
                    return view('products/product-details', [
                        'admin' => false,
                        'product' => $product
                    ] );
                }
                else continue;
            }
        }
    )->name('view-product');

    $router->add(
        'GET', '/admin/products/new',
        function () {
            return view('products/product-form');
        },
    )->name('new-product');

    $router->add(
        'GET', '/admin/products/update/{id}',
        function () use ($router, $products) {
            $parameters = $router->current()->parameters();
            foreach( $products as $key => $product ) {
                if( $product['id'] == $parameters['id'] ) {
                    return view('products/product-form', [
                        'update' => true,
                        'product' => $product,
                    ]);
                }
                else continue;
            }
        },
    )->name('update-product');

    $router->add(
        'GET', '/admin/products/delete/{category?}',
        function () use ($router, $products) {
            $parameters = $router->current()->parameters();
            $parameters['category'] ??= 'all';
            return view('products/product-list', [
                'category' => $parameters['category'],
                'products' => $products,
                'delete' => true,
            ] );
        },
    )->name('delete-product');


    $router->add(
        'GET', '/admin/products/{category?}',
        function () use ($router, $products, $categories) {
            $parameters = $router->current()->parameters();
            $parameters['category'] ??= 'all';
            return view('products/product-list', [
                'categories' => $categories['admin'],
                'category' => $parameters['category'],
                'products' => $products,
                'delete' => false,
            ] );
        },
    )->name('list-product');

    $router->add(
        'GET', '/products/{category?}',
        function () use ($router, $products, $categories) {
            $parameters = $router->current()->parameters();
            $parameters['category'] ??= 'all';
            return view('home', [
                'categories' => $categories['user-simple'],
                'category' => $parameters['category'],
                'products' => $products,
            ] );
        },
    )->name('home-page');


    $router->add(
        'GET', '/dashboard',
        function() use ($user, $orders) {
            $result = [];
            foreach($orders as $key => $order) {
                if($order['status'] == 'en cours'){
                    $result[] = $order; 
                }
            }
            return view('dashboard/dashboard', [
                'admin' => false,
                'user' => $user,
                'orders' => $result,
            ]);
        }
    )->name('dashboard');

    $router->add(
        'GET', '/log-out',
        fn() => view('users/signIn'),
    )->name('log-out-user');

    $router->add(
        'GET', '/register',
        fn() => view('users/signUp'),
    )->name('register-user');

};
