<?php

namespace Atomicptr\Typo3ExtensionTemplate\Utility;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;

/**
 * Singleton base class
 */
abstract class Singleton implements SingletonInterface {

    /**
     * Returns instance of itself
     * @return self
     */
    public static function instance() {
        $objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        return $objectManager->get(static::class);
    }
}
