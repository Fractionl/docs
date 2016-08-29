<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/docs/user/config/site.yaml',
    'modified' => 1472486943,
    'data' => [
        'title' => 'Fractionl Docs',
        'author' => [
            'name' => 'Marco DeLuca',
            'email' => 'marco@fractionl.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'RTFM Skeleton'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
