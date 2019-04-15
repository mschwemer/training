<?php
$GLOBALS['TYPO3_CONF_VARS']['FE']['debug'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['FE']['noPHPscriptInclude'] = 1;
$GLOBALS['TYPO3_CONF_VARS']['FE']['lockIP'] = 2;

$GLOBALS['TYPO3_CONF_VARS']['BE']['warning_mode'] = 2;
$GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] = 'service@in2code.de';
$GLOBALS['TYPO3_CONF_VARS']['BE']['lockIP'] = 4;

$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['sqlDebug'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['syslogErrorReporting'] = 0;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = 4;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = 0;


foreach (glob(__DIR__ . '/AdditionalConfiguration/*Configuration.php') as $configFile) {
    include($configFile);
}
