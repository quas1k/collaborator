<?php

use yii\web\GroupUrlRule;

return [
    'api' => [
        'class' => GroupUrlRule::class,
        'prefix' => 'api',
        'routePrefix' => '',
        'rules' => [
            'POST sum-even' => 'calculator/calculate-sum-even',
        ],
    ],
];