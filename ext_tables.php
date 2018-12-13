<?php

defined("TYPO3_MODE") || die("Access denied.");

call_user_func(function ($extKey) {
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
}, $_EXTKEY);
