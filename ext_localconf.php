<?php

defined("TYPO3_MODE") or die();

call_user_func(function($extKey) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        "Atomicptr.Typo3ExtensionTemplate",
        "ExamplePlugin",
        ["Example" => "list"],
        []
    );

    // Add pageTS
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        "<INCLUDE_TYPOSCRIPT: source=\"FILE:EXT:$extKey/Configuration/TSconfig/pagets.tsconfig\">"
    );

    /* realurl configuration
    if(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded("realurl")) {
        $GLOBALS["TYPO3_CONF_VARS"]["SC_OPTIONS"]["ext/realurl/class.tx_realurl_autoconfgen.php"]["extensionConfiguration"]
            ["$extKey"] =
                "Atomicptr\\Typo3ExtensionTemplate\\Hooks\\RealUrlAutoConfiguration->addAutoConf";
    }
    */
}, $_EXTKEY);