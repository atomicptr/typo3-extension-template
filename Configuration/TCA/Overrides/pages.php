<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    "Atomicptr.Typo3ExtensionTemplate",
    "ExamplePlugin",
    "Example Plugin Name",
    "EXT:typo3_extension_template/ext_icon.png"
);

// @extensionScannerIgnoreLine
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    "typo3_extension_template",
    "Configuration/TypoScript",
    "TYPO3 Extension Template"
);
