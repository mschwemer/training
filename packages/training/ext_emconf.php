<?php

/**
 * Extension Manager/Repository config file for ext "training".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Training',
    'description' => 'Traning package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'In2codeGmbh\\Training\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marcus Schwemer',
    'author_email' => 'marcus.schwemer@in2code.de',
    'author_company' => 'In2code GmbH',
    'version' => '1.0.0',
];
