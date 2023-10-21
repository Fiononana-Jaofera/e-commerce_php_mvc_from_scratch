<?php

namespace App\Http\Controllers\Statistics;

use Framework\Routing\Router;

class ShowStatisticsController
{
    protected Router $router;
    protected array $statistics, $categories;

    public function __construct( Router $router, array $statistics, array $categories )
    {
        $this->router = $router;
        $this->statistics = $statistics;
        $this->categories = $categories;
    }

    public function handle()
    {
        $parameters = $this->router->current()->parameters();
        if( $parameters[ 'category' ] == 'order-canceled' ) {
            $year = date('Y');
            return view(
                'statistics/stat-diagram',
                [
                    'admin'         => true,
                    'categories'    => $this->categories['statistic'],
                    'statistics'    => $this->statistics['order-canceled'],
                    'year'          => $year,
                ]
            );
        }
        else {
            return view( 
                'statistics/stat-table', 
                [
                    'admin'         => true,
                    'categories'    => $this->categories['statistic'],
                    'table'        => $this->statistics[ $parameters[ 'category' ] ],
                    ] 
                );
        }
    }
}