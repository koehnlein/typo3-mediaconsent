<?php
// Extension icon designed by dDara from Flaticon.com
$EM_CONF[$_EXTKEY] = [
    'title' => 'Media Consent',
    'description' => 'Extension loads content only if the user agrees.',
    'category' => 'plugin',
    'author' => 'Christoph Roth',
    'author_company' => 'Evangelische Kirche von Westfalen',
    'author_email' => 'christoph.roth@lka.ekvw.de',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '0.1.1',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
        ]
    ],
    'autoload' => [
        'psr-4' => [
            'ArbkomEKvW\\mediaconsent\\' => 'Classes'
        ]
    ],
];
