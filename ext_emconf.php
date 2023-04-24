<?php

$EM_CONF['frontendrendering'] = [
    'title' => 'Frontendrendering',
    'description' => 'Provides basic typoscript configuration for templating',
    'category' => 'frontend',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'author' => 'Michael Semle, mikeproductions',
    'author_email' => 'entwicklung@mikeproduction.de',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-12.99.99',
        ],
    ],
];
