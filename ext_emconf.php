<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'MPDF',
    'description' => 'mPDF is a PHP library which generates PDF files from UTF-8 encoded HTML. It is based on FPDF and HTML2FPDF with a number of enhancements. More: https://mpdf.github.io/',
    'category' => 'tools',
    'author' => 'Sascha Ende',
    'author_email' => 'sascha@sascha-ende.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '7.1.2',
    'constraints' => [
        'depends' => [
            'typo3' => '8.6.0-8.7.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
