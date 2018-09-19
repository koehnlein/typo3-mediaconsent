<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'ArbkomEKvW.Mediaconsent',
            'Pi1',
            [
                'Mediaconsent' => 'list',
            ],
            // non-cacheable actions
            [
                'Mediaconsent' => 'list',
            ]
        );
    }
);
