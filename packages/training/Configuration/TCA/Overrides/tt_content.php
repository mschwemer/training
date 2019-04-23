<?php

// Custom CE: Accordion
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'Akkordeon',
    'ce.accordion',
    'EXT:training/Resources/Public/Images/Backend/ce-accordion.svg'
];
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['ce.accordion'] = 'ce.accordion';

$GLOBALS['TCA']['tt_content']['types']['ce.accordion'] = [
    'showitem' => '--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.general;general,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.headers;headers,
    pi_flexform,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
    --palette--;section_frame;LLL:EXT:cms/locallang_ttc.xlf:section_frame_formlabel,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
    --palette--;;hidden,
    --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
    --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.extended'
];

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',ce.accordion'] =
    'FILE:EXT:training/Configuration/FlexForm/ce_accordion.xml';
