<?php

defined("TYPO3_MODE") || die("Access denied.");

call_user_func(function($extKey) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        "Atomicptr.Typo3ExtensionTemplate",
        "ExamplePlugin",
        "Example Plugin Name",
        "EXT:$extKey/ext_icon.png"
    );

    // @extensionScannerIgnoreLine
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extKey, "Configuration/TypoScript", "TYPO3 Extension Template");

    // register module
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        "Atomicptr.Typo3ExtensionTemplate",
        "web",
        "ExampleModule",
        "",
        [
            "Example" => "list"
        ],
        [
            "access" => "user,group",
            "icon" => "EXT:$extKey/ext_icon.png",
            "labels" => "LLL:EXT:$extKey/Resources/Private/Language/locallang_backend_module.xlf"
        ]
    );

    /* sysfolder icon
    $GLOBALS["TCA"]["pages"]["ctrl"]["typeicon_classes"]["contains-$extKey"] = "tx_$extKey_icon";
    $GLOBALS["TCA"]["pages"]["columns"]["module"]["config"]["items"][] = ["$extKey", "$extKey", "tx_$extKey_icon"];
    */

    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance("TYPO3\CMS\Core\Imaging\IconRegistry");

    $iconRegistry->registerIcon(
        "tx_$extKey\_icon",
        "TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider",
        ["source" => "EXT:$extKey/ext_icon.png"]
    );

    /*
    $iconRegistry->registerIcon(
        "tx_$extKey_folder",
        "TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider",
        ["source" => "EXT:$extKey/Resources/Public/Icons/tx_$extKey_folder.svg"]
    );
    */
}, $_EXTKEY);