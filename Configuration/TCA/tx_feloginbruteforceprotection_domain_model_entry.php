<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return array(
    'ctrl' => array(
        'title' => 'LLL:EXT:felogin_bruteforce_protection/Resources/Private/Language/locallang_db.xml' .
            ':tx_feloginbruteforceprotection_domain_model_entry',
        'label' => 'human_readable_identifier',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'dividers2tabs' => true,
        'searchFields' => 'identifier,failures,',
        'iconfile' => ExtensionManagementUtility::extRelPath('felogin_bruteforce_protection') . 'Resources/Public/Icons/TCA/Entry.png'
    ),
    'interface' => array(
        'showRecordFieldList' => 'identifier,failures',
    ),
    'types' => array(
        '1' => array('showitem' => 'human_readable_identifier, identifier, failures'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'tstamp' => array(
            'exclude' => 1,
            'label' => 'Update date',
            'config' => array(
                'type' => 'none',
                'format' => 'date',
                'eval' => 'date',
            )
        ),
        'crdate' => array(
            'exclude' => 1,
            'label' => 'Creation date',
            'config' => array(
                'type' => 'none',
                'format' => 'date',
                'eval' => 'date',
            )
        ),
        'identifier' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:felogin_bruteforce_protection/Resources/Private/Language/locallang_db.xml' .
                ':tx_feloginbruteforceprotection_domain_model_entry.identifier',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'readOnly' => true
            ),
        ),
        'human_readable_identifier' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:felogin_bruteforce_protection/Resources/Private/Language/locallang_db.xml' .
                ':tx_feloginbruteforceprotection_domain_model_entry.human_readable_identifier',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required',
                'readOnly' => true
            ),
        ),
        'failures' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:felogin_bruteforce_protection/Resources/Private/Language/locallang_db.xml' .
                ':tx_feloginbruteforceprotection_domain_model_entry.failures',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required',
                'readOnly' => true
            ),
        ),
    ),
);
