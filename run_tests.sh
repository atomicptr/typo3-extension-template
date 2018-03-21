#!/usr/bin/env bash
echo "### TYPO3 Extension Template Unit Tests:"
echo "### Check if composer dependencies are installed..."
echo ""

composer install

echo ""
echo "### Run PHPUnit"
echo ""

./vendor/bin/phpunit -c Build/UnitTests.xml --bootstrap vendor/typo3/testing-framework/Resources/Core/Build/UnitTestsBootstrap.php