<?php
// Adds the content element to the "Type" dropdown
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
   array(
      'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:mediaconsent_cns.wizard.title',
      'mediaconsent_cns',
      'EXT:mediaconsent/Resources/Public/Icons/Extension.svg'
   ),
   'CType',
   'mediaconsent'
);

// Configure additional field mediaconsent_smcprovider in tt_content
$tempColumns = array (
  'mediaconsent_smcprovider' => 
  array (
    'config' => 
    array (
      'type' => 'select',
      'renderType' => 'selectSingle',
      'items' => 
      array (
        0 => 
        array (
          0 => 'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider.I.0',
          1 => '1',
        ),
        1 => 
        array (
          0 => 'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider.I.1',
          1 => '2',
        ),
        2 => 
        array (
          0 => 'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider.I.2',
          1 => '3',
        ),
        3 => 
        array (
          0 => 'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider.I.3',
          1 => '4',
        ),
        4 => 
        array (
          0 => 'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider.I.4',
          1 => '5',
        ),
        5 => 
        array (
          0 => 'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider.I.5',
          1 => '6',
        ),
      ),
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);


// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['mediaconsent_cns'] = array(
   'showitem' => '
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
         --palette--;;general,
         --palette--;;headers,
         mediaconsent_smcprovider;LLL:EXT:mediaconsent/Resources/Private/Language/locallang.xlf:tt_content.mediaconsent_smcprovider,
         bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext.ALT.html_formlabel,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
         --palette--;;frames,
         --palette--;;appearanceLinks,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
         --palette--;;language,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
         --palette--;;hidden,
         --palette--;;access,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
         categories,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
         rowDescription,
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
   ',
   'columnsOverrides' => [
      'bodytext' => [
         'config' => [
            'enableRichtext' => false,
            'format' => 'html',
            'renderType' => 't3editor',
            'wrap' => 'off'
         ]
      ]
   ]
);