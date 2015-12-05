<?php
return [
    'service_manager' => [
        'factories' => [
            'search.service.elasticsearch' => 'Search\Service\Factory\ElasticsearchClientFactory',
            'search.index.user'            => 'Search\Index\Service\Factory\UserIndexServiceFactory',
            'search.query.user'            => 'Search\Query\Service\Factory\UserQueryServiceFactory',
        ],
    ],
];
