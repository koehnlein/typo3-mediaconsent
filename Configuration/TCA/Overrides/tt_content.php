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

// Configure the default backend fields for the content element
$GLOBALS['TCA']['tt_content']['types']['mediaconsent_cns'] = array(
   'showitem' => '
      --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
         --palette--;;general,
         --palette--;;headers,
         bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
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
            'richtextConfiguration' => 'default'
         ]
      ]
   ]
);